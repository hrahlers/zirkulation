<?

// Klassendefinition
class Zirkulation extends IPSModule 
	{


    // Der Konstruktor des Moduls
    // Überschreibt den Standard Kontruktor von IPS
    public function __construct($InstanceID) 
		{
        // Diese Zeile nicht löschen
        parent::__construct($InstanceID);
       

	    }

    // Überschreibt die interne IPS_Create($id) Funktion
    public function Create() 
		{
        // Diese Zeile nicht löschen.
        parent::Create();

		$this->RegisterPropertyInteger("PumpID", 0);
		$this->RegisterPropertyInteger("DurationTime", 0);
		$this->RegisterPropertyInteger("BreakTime", 0);
		$this->RegisterPropertyInteger("FromTime", 0);
		$this->RegisterPropertyInteger("ToTime", 0);
		$this->RegisterPropertyInteger("WebfrontID", 0);


		//Timer
		//$this->RegisterTimer("CheckIfDoneTimer", 0, 'FM_CheckEvent($_IPS[\'TARGET\'], "Done");');

	    }

    // Ãœberschreibt die intere IPS_ApplyChanges($id) Funktion
    public function ApplyChanges() 
		{
        // Diese Zeile nicht löschen
        parent::ApplyChanges();

		$pumpID 		= $this->ReadPropertyInteger("PumpID", 0);
		$DurationTime 	= $this->ReadPropertyInteger("DurationTime", 0);
		$BreakTime 	= $this->ReadPropertyInteger("BreakTime", 0);
		$FromTime 		= $this->ReadPropertyInteger("FromTime", 0);
		$ToTime 		= $this->ReadPropertyInteger("ToTime", 0);
		$WebfrontID 	= $this->ReadPropertyInteger("WebfrontID", 0);

	    }

	/**
    * Die folgenden Funktionen stehen automatisch zur VerfÃ¼gung, wenn das Modul Ã¼ber die "Module Control" eingefÃ¼gt wurden.
    * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur VerfÃ¼gung gestellt:
    *
    * _MeineErsteEigeneFunktion($id);
    *
    */
   
	public function Check_Time() 
		{
        	// Selbsterstellter Code

		echo "Toll gemacht!\n";
		echo "Hier die Werte aus dem Moduleigenschaften:\n";
		}

}

?>