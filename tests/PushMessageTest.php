<?php

namespace RoundingWell\Redox;

use PHPUnit\Framework\TestCase;

use function JmesPath\search;

class PushMessageTest extends TestCase
{
    /**
     * @var Push
     */
    private $push;

    /**
     * @var object
     */
    private $json;

    public function setUp()
    {
        $file = realpath(__DIR__ . '/redox_sample.json');
        $string = file_get_contents($file);

        $this->json = json_decode($string);
        $this->push = PushMessage::fromObject($this->json);

        // Convert the push message back to a plain object
        $this->push = json_decode(json_encode($this->push));
    }

    public function testMeta()
    {
        $this->assertSamePath('Meta.DataModel');
        $this->assertSamePath('Meta.EventType');
        $this->assertSamePath('Meta.EventDateTime');
        $this->assertSamePath('Meta.Test');
        $this->assertSamePath('Meta.Source.ID');
        $this->assertSamePath('Meta.Source.Name');
        $this->assertSamePath('Meta.Message.ID');
        $this->assertSamePath('Meta.Transmission.ID');
    }

    public function testHeaderDocument()
    {
        $this->assertSamePath('Header.Document.ID');

        $this->assertSamePath('Header.Document.Author.ID');
        $this->assertSamePath('Header.Document.Author.IDType');
        $this->assertSamePath('Header.Document.Author.Type');
        $this->assertSamePath('Header.Document.Author.FirstName');
        $this->assertSamePath('Header.Document.Author.LastName');
        $this->assertSamePath('Header.Document.Author.Credentials');
        $this->assertSamePath('Header.Document.Author.Address.StreetAddress');
        $this->assertSamePath('Header.Document.Author.Address.City');
        $this->assertSamePath('Header.Document.Author.Address.State');
        $this->assertSamePath('Header.Document.Author.Address.County');
        $this->assertSamePath('Header.Document.Author.Address.Country');
        $this->assertSamePath('Header.Document.Author.Location.Type');
        $this->assertSamePath('Header.Document.Author.Location.Facility');
        $this->assertSamePath('Header.Document.Author.Location.Department');
        $this->assertSamePath('Header.Document.Author.PhoneNumber.Office');

        $this->assertSamePath('Header.Document.Visit.Location.Type');
        $this->assertSamePath('Header.Document.Visit.Location.Facility');
        $this->assertSamePath('Header.Document.Visit.Location.Department');
        $this->assertSamePath('Header.Document.Visit.StartDateTime');
        $this->assertSamePath('Header.Document.Visit.Reason');
        $this->assertSamePath('Header.Document.Visit.EndDateTime');

        $this->assertSamePath('Header.Document.Locale');
        $this->assertSamePath('Header.Document.Title');
        $this->assertSamePath('Header.Document.DateTime');
        $this->assertSamePath('Header.Document.Type');
    }

    public function testHeaderPatient()
    {
        $this->assertSamePath('Header.Patient.Identifiers[*].ID');
        $this->assertSamePath('Header.Patient.Identifiers[*].IDType');
        $this->assertSamePath('Header.Patient.Identifiers[*].Type');

        $this->assertSamePath('Header.Patient.Demographics.FirstName');
        $this->assertSamePath('Header.Patient.Demographics.LastName');
        $this->assertSamePath('Header.Patient.Demographics.DOB');
        $this->assertSamePath('Header.Patient.Demographics.SSN');
        $this->assertSamePath('Header.Patient.Demographics.Sex');
        $this->assertSamePath('Header.Patient.Demographics.Address.StreetAddress');
        $this->assertSamePath('Header.Patient.Demographics.Address.City');
        $this->assertSamePath('Header.Patient.Demographics.Address.State');
        $this->assertSamePath('Header.Patient.Demographics.Address.County');
        $this->assertSamePath('Header.Patient.Demographics.Address.Country');
        $this->assertSamePath('Header.Patient.Demographics.PhoneNumber.Home');
        $this->assertSamePath('Header.Patient.Demographics.PhoneNumber.Mobile');
        $this->assertSamePath('Header.Patient.Demographics.EmailAddresses[*].Address');
        $this->assertSamePath('Header.Patient.Demographics.Race');
        $this->assertSamePath('Header.Patient.Demographics.Ethnicity');
        $this->assertSamePath('Header.Patient.Demographics.Religion');
        $this->assertSamePath('Header.Patient.Demographics.MaritalStatus');
    }

    public function testAdvanceDirectives()
    {
        $this->assertSamePath('AdvanceDirectives[*].Type.Code');
        $this->assertSamePath('AdvanceDirectives[*].Type.CodeSystem');
        $this->assertSamePath('AdvanceDirectives[*].Type.CodeSystemName');
        $this->assertSamePath('AdvanceDirectives[*].Type.Name');

        $this->assertSamePath('AdvanceDirectives[*].Code');
        $this->assertSamePath('AdvanceDirectives[*].CodeSystem');
        $this->assertSamePath('AdvanceDirectives[*].CodeSystemName');
        $this->assertSamePath('AdvanceDirectives[*].Name');
        $this->assertSamePath('AdvanceDirectives[*].StartDate');
        $this->assertSamePath('AdvanceDirectives[*].EndDate');
        $this->assertSamePath('AdvanceDirectives[*].ExternalReference');

        $this->assertSamePath('AdvanceDirectives[*].VerifiedBy.FirstName');
        $this->assertSamePath('AdvanceDirectives[*].VerifiedBy.LastName');
        $this->assertSamePath('AdvanceDirectives[*].VerifiedBy.Credentials');
        $this->assertSamePath('AdvanceDirectives[*].VerifiedBy.DateTime');

        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].FirstName');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].LastName');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].Credentials');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].Address.StreetAddress');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].Address.StreetAddress');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].Address.City');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].Address.State');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].Address.County');
        $this->assertSamePath('AdvanceDirectives[*].Custodians[*].Address.Country');
    }

    public function testAllergies()
    {
        $this->assertSamePath('Allergies[*].Type.Code');
        $this->assertSamePath('Allergies[*].Type.CodeSystem');
        $this->assertSamePath('Allergies[*].Type.CodeSystemName');
        $this->assertSamePath('Allergies[*].Type.Name');

        $this->assertSamePath('Allergies[*].Substance.Code');
        $this->assertSamePath('Allergies[*].Substance.CodeSystem');
        $this->assertSamePath('Allergies[*].Substance.CodeSystemName');
        $this->assertSamePath('Allergies[*].Substance.Name');

        $this->assertSamePath('Allergies[*].Reaction[*].Code');
        $this->assertSamePath('Allergies[*].Reaction[*].CodeSystem');
        $this->assertSamePath('Allergies[*].Reaction[*].CodeSystemName');
        $this->assertSamePath('Allergies[*].Reaction[*].Name');
        $this->assertSamePath('Allergies[*].Reaction[*].Text');

        $this->assertSamePath('Allergies[*].Severity.Code');
        $this->assertSamePath('Allergies[*].Severity.CodeSystem');
        $this->assertSamePath('Allergies[*].Severity.CodeSystemName');
        $this->assertSamePath('Allergies[*].Severity.Name');

        $this->assertSamePath('Allergies[*].Status.Code');
        $this->assertSamePath('Allergies[*].Status.CodeSystem');
        $this->assertSamePath('Allergies[*].Status.CodeSystemName');
        $this->assertSamePath('Allergies[*].Status.Name');

        $this->assertSamePath('Allergies[*].StartDate');
        $this->assertSamePath('Allergies[*].EndDate');
    }

    public function testEncounters()
    {
        $this->assertSamePath('Encounters[*].Type.Code');
        $this->assertSamePath('Encounters[*].Type.CodeSystem');
        $this->assertSamePath('Encounters[*].Type.CodeSystemName');
        $this->assertSamePath('Encounters[*].Type.Name');

        $this->assertSamePath('Encounters[*].DateTime');
        $this->assertSamePath('Encounters[*].EndDateTime');

        $this->assertSamePath('Encounters[*].Providers[*].ID');
        $this->assertSamePath('Encounters[*].Providers[*].IDType');
        $this->assertSamePath('Encounters[*].Providers[*].FirstName');
        $this->assertSamePath('Encounters[*].Providers[*].FirstName');
        $this->assertSamePath('Encounters[*].Providers[*].Credentials');
        $this->assertSamePath('Encounters[*].Providers[*].Address.StreetAddress');
        $this->assertSamePath('Encounters[*].Providers[*].Address.City');
        $this->assertSamePath('Encounters[*].Providers[*].Address.State');
        $this->assertSamePath('Encounters[*].Providers[*].Address.ZIP');
        $this->assertSamePath('Encounters[*].Providers[*].Address.County');
        $this->assertSamePath('Encounters[*].Providers[*].Address.Country');
        $this->assertSamePath('Encounters[*].Providers[*].Location.Type');
        $this->assertSamePath('Encounters[*].Providers[*].Location.Facility');
        $this->assertSamePath('Encounters[*].Providers[*].Location.Department');
        $this->assertSamePath('Encounters[*].Providers[*].PhoneNumber.Office');
        $this->assertSamePath('Encounters[*].Providers[*].Role.Code');
        $this->assertSamePath('Encounters[*].Providers[*].Role.CodeSystem');
        $this->assertSamePath('Encounters[*].Providers[*].Role.CodeSystemName');
        $this->assertSamePath('Encounters[*].Providers[*].Role.Name');

        $this->assertSamePath('Encounters[*].Locations[*].Address.StreetAddress');
        $this->assertSamePath('Encounters[*].Locations[*].Address.City');
        $this->assertSamePath('Encounters[*].Locations[*].Address.State');
        $this->assertSamePath('Encounters[*].Locations[*].Address.ZIP');
        $this->assertSamePath('Encounters[*].Locations[*].Address.Country');
        $this->assertSamePath('Encounters[*].Locations[*].Type.Code');
        $this->assertSamePath('Encounters[*].Locations[*].Type.CodeSystem');
        $this->assertSamePath('Encounters[*].Locations[*].Type.CodeSystemName');
        $this->assertSamePath('Encounters[*].Locations[*].Type.Name');
        $this->assertSamePath('Encounters[*].Locations[*].Name');

        $this->assertSamePath('Encounters[*].Diagnosis[*].Code');
        $this->assertSamePath('Encounters[*].Diagnosis[*].CodeSystem');
        $this->assertSamePath('Encounters[*].Diagnosis[*].CodeSystemName');
        $this->assertSamePath('Encounters[*].Diagnosis[*].Name');

        $this->assertSamePath('Encounters[*].ReasonForVisit[*].Code');
        $this->assertSamePath('Encounters[*].ReasonForVisit[*].CodeSystem');
        $this->assertSamePath('Encounters[*].ReasonForVisit[*].CodeSystemName');
        $this->assertSamePath('Encounters[*].ReasonForVisit[*].Name');
    }

    public function testFamilyHistory()
    {
        $this->assertSamePath('FamilyHistory[*].Relation[*].Code');
        $this->assertSamePath('FamilyHistory[*].Relation[*].CodeSystem');
        $this->assertSamePath('FamilyHistory[*].Relation[*].CodeSystemName');
        $this->assertSamePath('FamilyHistory[*].Relation[*].Name');
        $this->assertSamePath('FamilyHistory[*].Relation[*].Demographics.Sex');
        $this->assertSamePath('FamilyHistory[*].Relation[*].Demographics.DOB');
        $this->assertSamePath('FamilyHistory[*].Relation[*].IsDeceased');

        $this->assertSamePath('FamilyHistory[*].Problems[*].Code');
        $this->assertSamePath('FamilyHistory[*].Problems[*].CodeSystem');
        $this->assertSamePath('FamilyHistory[*].Problems[*].CodeSystemName');
        $this->assertSamePath('FamilyHistory[*].Problems[*].Name');
        $this->assertSamePath('FamilyHistory[*].Problems[*].Type.Code');
        $this->assertSamePath('FamilyHistory[*].Problems[*].Type.CodeSystem');
        $this->assertSamePath('FamilyHistory[*].Problems[*].Type.CodeSystemName');
        $this->assertSamePath('FamilyHistory[*].Problems[*].Type.Name');
        $this->assertSamePath('FamilyHistory[*].Problems[*].DateTime');
        $this->assertSamePath('FamilyHistory[*].Problems[*].AgeAtOnset');
        $this->assertSamePath('FamilyHistory[*].Problems[*].IsCauseOfDeath');
    }

    public function testImmunizations()
    {
        $this->assertSamePath('Immunizations[*].DateTime');

        $this->assertSamePath('Immunizations[*].Route.Code');
        $this->assertSamePath('Immunizations[*].Route.CodeSystem');
        $this->assertSamePath('Immunizations[*].Route.CodeSystemName');
        $this->assertSamePath('Immunizations[*].Route.Name');

        $this->assertSamePath('Immunizations[*].Product.Manufacturer');
        $this->assertSamePath('Immunizations[*].Product.Code');
        $this->assertSamePath('Immunizations[*].Product.CodeSystem');
        $this->assertSamePath('Immunizations[*].Product.CodeSystemName');
        $this->assertSamePath('Immunizations[*].Product.Name');
        $this->assertSamePath('Immunizations[*].Product.LotNumber');

        $this->assertSamePath('Immunizations[*].Dose.Quantity');
        $this->assertSamePath('Immunizations[*].Dose.Units');
    }

    public function testMedicalEquipment()
    {
        $this->assertSamePath('MedicalEquipment[*].Status');
        $this->assertSamePath('MedicalEquipment[*].StartDate');
        $this->assertSamePath('MedicalEquipment[*].Quantity');
        $this->assertSamePath('MedicalEquipment[*].Product.Code');
        $this->assertSamePath('MedicalEquipment[*].Product.CodeSystem');
        $this->assertSamePath('MedicalEquipment[*].Product.CodeSystemName');
        $this->assertSamePath('MedicalEquipment[*].Product.Name');
    }

    public function testMedications()
    {
        $this->assertSamePath('Medications[*].Prescription');
        $this->assertSamePath('Medications[*].FreeTextSig');

        $this->assertSamePath('Medications[*].Dose.Quantity');
        $this->assertSamePath('Medications[*].Dose.Units');

        $this->assertSamePath('Medications[*].Rate.Quantity');
        $this->assertSamePath('Medications[*].Rate.Units');

        $this->assertSamePath('Medications[*].Route.Code');
        $this->assertSamePath('Medications[*].Route.CodeSystem');
        $this->assertSamePath('Medications[*].Route.CodeSystemName');
        $this->assertSamePath('Medications[*].Route.Name');

        $this->assertSamePath('Medications[*].StartDate');
        $this->assertSamePath('Medications[*].EndDate');

        $this->assertSamePath('Medications[*].Frequency.Period');
        $this->assertSamePath('Medications[*].Frequency.Unit');

        $this->assertSamePath('Medications[*].Product.Code');
        $this->assertSamePath('Medications[*].Product.CodeSystem');
        $this->assertSamePath('Medications[*].Product.CodeSystemName');
        $this->assertSamePath('Medications[*].Product.Name');
    }

    public function testPlanOfCare()
    {
        $this->assertSamePath('PlanOfCare.Orders[*].Code');
        $this->assertSamePath('PlanOfCare.Orders[*].CodeSystem');
        $this->assertSamePath('PlanOfCare.Orders[*].CodeSystemName');
        $this->assertSamePath('PlanOfCare.Orders[*].Name');
        $this->assertSamePath('PlanOfCare.Orders[*].Status');
        $this->assertSamePath('PlanOfCare.Orders[*].DateTime');

        $this->assertSamePath('PlanOfCare.Procedures[*].Code');
        $this->assertSamePath('PlanOfCare.Procedures[*].CodeSystem');
        $this->assertSamePath('PlanOfCare.Procedures[*].CodeSystemName');
        $this->assertSamePath('PlanOfCare.Procedures[*].Name');
        $this->assertSamePath('PlanOfCare.Procedures[*].Status');
        $this->assertSamePath('PlanOfCare.Procedures[*].DateTime');

        $this->assertSamePath('PlanOfCare.Encounters[*].Code');
        $this->assertSamePath('PlanOfCare.Encounters[*].CodeSystem');
        $this->assertSamePath('PlanOfCare.Encounters[*].CodeSystemName');
        $this->assertSamePath('PlanOfCare.Encounters[*].Name');
        $this->assertSamePath('PlanOfCare.Encounters[*].Status');
        $this->assertSamePath('PlanOfCare.Encounters[*].DateTime');

        $this->assertSamePath('PlanOfCare.Encounters[*].Code');
        $this->assertSamePath('PlanOfCare.Encounters[*].CodeSystem');
        $this->assertSamePath('PlanOfCare.Encounters[*].CodeSystemName');
        $this->assertSamePath('PlanOfCare.Encounters[*].Name');
        $this->assertSamePath('PlanOfCare.Encounters[*].Status');
        $this->assertSamePath('PlanOfCare.Encounters[*].DateTime');

        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Status');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Dose.Quantity');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Dose.Units');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Rate.Quantity');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Rate.Units');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Route.Code');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Route.CodeSystem');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Route.CodeSystemName');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Route.Name');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].StartDate');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].EndDate');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Frequency.Period');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Frequency.Unit');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Product.Code');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Product.CodeSystem');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Product.CodeSystemName');
        $this->assertSamePath('PlanOfCare.MedicationAdministration[*].Product.Name');

        $this->assertSamePath('PlanOfCare.Supplies[*].Code');
        $this->assertSamePath('PlanOfCare.Supplies[*].CodeSystem');
        $this->assertSamePath('PlanOfCare.Supplies[*].CodeSystemName');
        $this->assertSamePath('PlanOfCare.Supplies[*].Name');
        $this->assertSamePath('PlanOfCare.Supplies[*].Status');
        $this->assertSamePath('PlanOfCare.Supplies[*].DateTime');

        $this->assertSamePath('PlanOfCare.Services[*].Code');
        $this->assertSamePath('PlanOfCare.Services[*].CodeSystem');
        $this->assertSamePath('PlanOfCare.Services[*].CodeSystemName');
        $this->assertSamePath('PlanOfCare.Services[*].Name');
        $this->assertSamePath('PlanOfCare.Services[*].Status');
        $this->assertSamePath('PlanOfCare.Services[*].DateTime');
    }

    public function testProblems()
    {
        $this->assertSamePath('Problems[*].StartDate');
        $this->assertSamePath('Problems[*].EndDate');
        $this->assertSamePath('Problems[*].Code');
        $this->assertSamePath('Problems[*].CodeSystem');
        $this->assertSamePath('Problems[*].CodeSystemName');
        $this->assertSamePath('Problems[*].Name');

        $this->assertSamePath('Problems[*].Category.Code');
        $this->assertSamePath('Problems[*].Category.CodeSystem');
        $this->assertSamePath('Problems[*].Category.CodeSystemName');
        $this->assertSamePath('Problems[*].Category.Name');

        $this->assertSamePath('Problems[*].HealthStatus.Code');
        $this->assertSamePath('Problems[*].HealthStatus.CodeSystem');
        $this->assertSamePath('Problems[*].HealthStatus.CodeSystemName');
        $this->assertSamePath('Problems[*].HealthStatus.Name');

        $this->assertSamePath('Problems[*].Status.Code');
        $this->assertSamePath('Problems[*].Status.CodeSystem');
        $this->assertSamePath('Problems[*].Status.CodeSystemName');
        $this->assertSamePath('Problems[*].Status.Name');
    }

    public function testProcedures()
    {
        $this->assertSamePath('Procedures.Observations[*].Status.Code');
        $this->assertSamePath('Procedures.Observations[*].Status.CodeSystem');
        $this->assertSamePath('Procedures.Observations[*].Status.CodeSystemName');
        $this->assertSamePath('Procedures.Observations[*].Status.Name');
        $this->assertSamePath('Procedures.Observations[*].TargetSite.Code');
        $this->assertSamePath('Procedures.Observations[*].TargetSite.CodeSystem');
        $this->assertSamePath('Procedures.Observations[*].TargetSite.CodeSystemName');
        $this->assertSamePath('Procedures.Observations[*].TargetSite.Name');

        $this->assertSamePath('Procedures.Procedures[*].Code');
        $this->assertSamePath('Procedures.Procedures[*].CodeSystem');
        $this->assertSamePath('Procedures.Procedures[*].CodeSystemName');
        $this->assertSamePath('Procedures.Procedures[*].Name');
        $this->assertSamePath('Procedures.Procedures[*].DateTime');
        $this->assertSamePath('Procedures.Procedures[*].Status');

        $this->assertSamePath('Procedures.Services[*].Code');
        $this->assertSamePath('Procedures.Services[*].CodeSystem');
        $this->assertSamePath('Procedures.Services[*].CodeSystemName');
        $this->assertSamePath('Procedures.Services[*].Name');
        $this->assertSamePath('Procedures.Services[*].DateTime');
        $this->assertSamePath('Procedures.Services[*].Status');
    }

    public function testResults()
    {
        $this->assertSamePath('Results[*].Code');
        $this->assertSamePath('Results[*].CodeSystem');
        $this->assertSamePath('Results[*].CodeSystemName');
        $this->assertSamePath('Results[*].Name');
        $this->assertSamePath('Results[*].Status');

        $this->assertSamePath('Results[*].Observations[*].Code');
        $this->assertSamePath('Results[*].Observations[*].CodeSystem');
        $this->assertSamePath('Results[*].Observations[*].CodeSystemName');
        $this->assertSamePath('Results[*].Observations[*].Name');
        $this->assertSamePath('Results[*].Observations[*].Status');
        $this->assertSamePath('Results[*].Observations[*].Interpretation');
        $this->assertSamePath('Results[*].Observations[*].DateTime');
        $this->assertSamePath('Results[*].Observations[*].Value');
        $this->assertSamePath('Results[*].Observations[*].Units');
        $this->assertSamePath('Results[*].Observations[*].ReferenceRange.Low');
        $this->assertSamePath('Results[*].Observations[*].ReferenceRange.High');
        $this->assertSamePath('Results[*].Observations[*].ReferenceRange.Text');
    }

    public function testSocialHistory()
    {
        $this->assertSamePath('SocialHistory.Observations[*].Code');
        $this->assertSamePath('SocialHistory.Observations[*].CodeSystem');
        $this->assertSamePath('SocialHistory.Observations[*].CodeSystemName');
        $this->assertSamePath('SocialHistory.Observations[*].Name');
        $this->assertSamePath('SocialHistory.Observations[*].Value.Code');
        $this->assertSamePath('SocialHistory.Observations[*].Value.CodeSystem');
        $this->assertSamePath('SocialHistory.Observations[*].Value.CodeSystemName');
        $this->assertSamePath('SocialHistory.Observations[*].Value.Name');
        $this->assertSamePath('SocialHistory.Observations[*].ValueText');
        $this->assertSamePath('SocialHistory.Observations[*].StartDate');
        $this->assertSamePath('SocialHistory.Observations[*].EndDate');

        $this->assertSamePath('SocialHistory.Pregnancy[*].StartDate');
        $this->assertSamePath('SocialHistory.Pregnancy[*].EndDate');
        $this->assertSamePath('SocialHistory.Pregnancy[*].EstimatedDelivery');

        $this->assertSamePath('SocialHistory.TobaccoUse[*].Code');
        $this->assertSamePath('SocialHistory.TobaccoUse[*].CodeSystem');
        $this->assertSamePath('SocialHistory.TobaccoUse[*].CodeSystemName');
        $this->assertSamePath('SocialHistory.TobaccoUse[*].Name');
        $this->assertSamePath('SocialHistory.TobaccoUse[*].StartDate');
        $this->assertSamePath('SocialHistory.TobaccoUse[*].EndDate');
    }

    public function testVitalSigns()
    {
        $this->assertSamePath('VitalSigns[*].DateTime');

        $this->assertSamePath('VitalSigns[*].Observations[*].Code');
        $this->assertSamePath('VitalSigns[*].Observations[*].CodeSystem');
        $this->assertSamePath('VitalSigns[*].Observations[*].CodeSystemName');
        $this->assertSamePath('VitalSigns[*].Observations[*].Name');
        $this->assertSamePath('VitalSigns[*].Observations[*].Status');
        $this->assertSamePath('VitalSigns[*].Observations[*].Interpretation');
        $this->assertSamePath('VitalSigns[*].Observations[*].DateTime');
        $this->assertSamePath('VitalSigns[*].Observations[*].Value');
        $this->assertSamePath('VitalSigns[*].Observations[*].Units');
    }

    /**
     * @param string $path
     * @return void
     */
    private function assertSamePath($path)
    {
        $a = search($path, $this->json);
        $b = search($path, $this->push);

        $this->assertSame($a, $b, $path);
    }
}
