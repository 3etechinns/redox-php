<?php

namespace RoundingWell\Redox\Generator;

use Krlove\CodeGenerator\Model\ClassModel;
use Krlove\CodeGenerator\Model\ClassNameModel;
use Krlove\CodeGenerator\Model\DocBlockModel;
use Krlove\CodeGenerator\Model\MethodModel;
use Krlove\CodeGenerator\Model\NamespaceModel;
use Krlove\CodeGenerator\Model\PropertyModel;
use Krlove\CodeGenerator\Model\UseClassModel;
use RoundingWell\Redox\Generator\Hooks;

class MessageGenerator extends Generator
{
    /**
     * @var Hooks\Hook[]
     */
    private $hooks = [];

    /**
     * @param string $model
     * @param object $tree
     * @param array $hooks
     */
    public function __construct($model, $tree, array $hooks = [])
    {
        $this->hooks = $hooks;

        parent::__construct(
            $model,
            $tree,
            $this
        );
    }

    public function getFiles()
    {
        $files = parent::getFiles();
        $files[] = $this->getTestFile();

        return $files;
    }

    /**
     * @return bool
     */
    protected function hasHookFor($key)
    {
        foreach ($this->hooks as $hook) {
            if ($hook->accepts($key)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return string
     */
    protected function getHookValue($key)
    {
        foreach ($this->hooks as $hook) {
            if ($hook->accepts($key)) {
                return $hook->type();
            }
        }
    }

    /**
     * @return SourceFile
     */
    private function getTestFile()
    {
        // Example: src/Messages/PatientAdmin/PatientAdmin/Arrival.php
        $targetPath = $this->getTargetPath();
        // ... -> tests/Messages/PatientAdmin/PatientAdmin/Arrival.php
        $targetPath = preg_replace('~src/~', 'tests/', $targetPath, 1);
        // ... -> tests/Messages/PatientAdmin/PatientAdmin/ArrivalTest.php
        $targetPath = preg_replace('~/(.+?).php$~', '/\1Test.php', $targetPath, 1);

        return SourceFile::make($targetPath, $this->getTestDefinition());
    }

    /**
     * @return ClassModel
     */
    private function getTestDefinition()
    {
        $testBaseClass = $this->getNamespace() . '\\MessageTestCase';
        $testTargetClass = $this->getTargetClass() . 'Test';

        $class = new ClassModel();

        // namespace RoundingWell\Redox\Messages\PatientAdmin
        $class->setNamespace(
            new NamespaceModel($this->getQualifiedNamespace($testTargetClass))
        );

        // uses RoundingWell\Redox\MessageTestCase
        $class->addUses(
            new UseClassModel($testBaseClass)
        );

        // class ArrivalTest extends MessageTestCase
        $class->setName(
            new ClassNameModel(
                $this->getQualifiedClass($testTargetClass),
                $this->getQualifiedClass($testBaseClass)
            )
        );

        // protected function sampleFile
        $method = new MethodModel('sampleFile', 'protected');
        $method->setBody(sprintf(
            "return __DIR__ . '/../../../%s';",
            $this->getSamplePath()
        ));
        $class->addMethod($method);

        // protected function messageClass
        $method = new MethodModel('messageClass', 'protected');
        $method->setBody(sprintf(
            'return %s::class;',
            $this->getQualifiedClass($this->getTargetClass())
        ));
        $class->addMethod($method);

        return $class;
    }

    protected function getTargetExtends()
    {
        return $this->getNamespace() . '\\AbstractMessage';
    }

    protected function getFieldNamespace()
    {
        return $this->getTargetClass();
    }

    protected function getFieldClass($key)
    {
        // Messages\PatientAdmin\NewPatient -> Messages\\PatientAdmin\NewPatient\Fields\Demographics
        return $this->getModelClass() . '\\' . $key;
    }

    /**
     * @return string
     */
    private function getSamplePath()
    {
        // Example: RoundingWell\Redox\Messages\PatientAdmin\NewPatient
        $samplePath = $this->getTargetClass();
        // ...  -> PatientAdmin\NewPatient
        $samplePath = str_replace('RoundingWell\\Redox\\Messages\\', '', $samplePath);
        // ... -> patientadmin/newpatient
        $samplePath = str_replace('\\', '/', strtolower($samplePath));

        return "samples/$samplePath.json";
    }
}
