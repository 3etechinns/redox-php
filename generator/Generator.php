<?php

namespace RoundingWell\Redox\Generator;

use Krlove\CodeGenerator\Model\ArgumentModel;
use Krlove\CodeGenerator\Model\ClassModel;
use Krlove\CodeGenerator\Model\ClassNameModel;
use Krlove\CodeGenerator\Model\DocBlockModel;
use Krlove\CodeGenerator\Model\MethodModel;
use Krlove\CodeGenerator\Model\NamespaceModel;
use Krlove\CodeGenerator\Model\PropertyModel;
use Krlove\CodeGenerator\Model\UseTraitModel;
use Krlove\CodeGenerator\Model\UseClassModel;

class Generator
{
    /**
     * @var string
     */
    private $modelName;

    /**
     * @var object
     */
    private $tree;

    /**
     * @var MessageGenerator
     */
    private $message;

    /**
     * @var Generator[]
     */
    private $generators = [];

    /**
     * @param string $model
     * @param object $tree
     */
    public function __construct($model, $tree, MessageGenerator $message)
    {
        $this->modelName = $model;
        $this->tree = $tree;
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        return [
            'modelName' => $this->modelName,
            'messageName' => $this->message->modelName,
        ];
    }

    /**
     * @return SourceFile[]
     */
    public function getFiles()
    {
        $file = SourceFile::make($this->getTargetPath(), $this->getDefinition());

        $dependencies = array_map(
            static function (Generator $generator) {
                return $generator->getFiles();
            },
            $this->generators
        );

        return array_merge([$file], ...$dependencies);
    }

    /**
     * @return ClassModel
     */
    public function getDefinition()
    {
        $class = new ClassModel();

        // namespace RoundingWell\Redox\Fields\Meta
        $class->setNamespace(
            new NamespaceModel($this->getQualifiedNamespace($this->getTargetClass()))
        );

        // uses RoundingWell\Redox\Fields\AbstractField
        $class->addUses(
            new UseClassModel($this->getTargetExtends())
        );

        // class Source extends AbstractField
        $class->setName(
            new ClassNameModel(
                $this->getQualifiedClass($this->getTargetClass()),
                $this->getQualifiedClass($this->getTargetExtends())
            )
        );

        foreach ($this->tree as $key => $value) {
            $property = new PropertyModel($key);

            $property->setDocblock(
                new DocBlockModel('@var ' . $this->getPropertyDoc($key, $value))
            );

            $class->addProperty($property);
        }

        return $class;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @param bool $maybeNull
     * @return string
     */
    private function getPropertyDoc($key, $value, $maybeNull = true)
    {
        if (is_object($value)) {
            $this->generators[] = $generator = $this->getFieldGenerator($this->singular($key), $value);

            return '\\' . $generator->getTargetClass();
        }

        if (is_array($value) && isset($value[0])) {
            return $this->getPropertyDoc($key, $value[0], false) . '[]';
        }

        $path = $this->getPropertyPath($key);

        if ($this->message->hasHookFor($path)) {
            return $this->message->getHookValue($path);
        }

        $type = strtolower(gettype($value));

        if ($type === 'null') {
            $type = 'string';
        }

        return $maybeNull ? "$type|null" : $type;
    }

    /**
     * @return string
     */
    protected function getPropertyPath($key)
    {
        // Example: RoundingWell\Redox\Messages\PatientAdmin\Arrival\Meta\Source
        $path = $this->getTargetClass();
        // ... -> Meta\Source
        $path = str_replace($this->message->getFieldNamespace(), '', $path);
        // ... -> Meta.Source.ID
        return str_replace('\\', '', $path) . '.' . $key;
    }

    /**
     * @param string $key
     * @return string
     */
    private function singular($key)
    {
        if (substr($key, -1) !== 's') {
            return $key;
        }

        if (in_array(substr($key, -2), ['us', 'ss'])) {
            // Not a pluralized word
            return $key;
        }

        if (preg_match('/[ssz]es$/', $key) || preg_match('/[^aeioudgkprt]hes$/', $key)) {
            // Remove "es"
            return substr($key, 0, -2);
        }

        if (preg_match('/[^aeiou]ies$/', $key)) {
            // Replace "ies" with "y"
            return substr($key, 0, -3) . 'y';
        }

        // Remove "s"
        return substr($key, 0, -1);
    }

    /**
     * @return string
     */
    private function getSourcePath()
    {
        return realpath(__DIR__ . '/../src');
    }

    /**
     * @param string $fqcn fully qualified class name
     * @return string
     */
    protected function getQualifiedNamespace($fqcn)
    {
        // RoundingWell\Redox\Fields\Meta\Source -> RoundingWell\Redox\Fields\Meta
        return preg_replace('~^(.+)\\\\.+?$~', '\1', $fqcn);
    }

    /**
     * @param string $fqcn fully qualified class name
     * @return string
     */
    protected function getQualifiedClass($fqcn)
    {
        // RoundingWell\Redox\Fields\Meta\Source -> Source
        return preg_replace('~^.+\\\\(.+?)$~', '\1', $fqcn);
    }

    /**
     * @return string
     */
    protected function getTargetPath()
    {
        return sprintf(
            $this->getSourcePath() . '/%s.php',
            str_replace('\\', '/', $this->getModelClass())
        );
    }

    /**
     * @return string
     */
    protected function getTargetClass()
    {
        return $this->getNamespace() . '\\' . $this->getModelClass();
    }

    /**
     * @return string
     */
    protected function getTargetExtends()
    {
        return $this->getNamespace() . '\\AbstractField';
    }

    /**
     * @var string
     */
    protected function getNamespace()
    {
        // RoundingWell\Redox\Generator\Generator -> RoundingWell\Redox
        return str_replace('\\Generator', '', self::class);
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        // RoundingWell\Reodx\Generator\Fields\Meta\Source -> Meta\Source
        return $this->modelName;
    }

    /**
     * @return string
     */
    protected function getFieldClass($key)
    {
        // Fields\Meta -> Fields\Meta\Source
        return $this->getModelClass() . '\\' . $key;
    }

    /**
     * @param string $key
     * @param object $tree
     * @return Generator
     */
    private function getFieldGenerator($key, $tree)
    {
        return new self($this->getFieldClass($key), $tree, $this->message);
    }
}
