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
		$this->RegisterPropertyInteger("DurationTime", 1);
		$this->RegisterPropertyInteger("BreakTime", 1);
		$this->RegisterPropertyString("FromTime", "06:00");
		$this->RegisterPropertyString("ToTime", "21:00");
		$this->RegisterPropertyInteger("WebfrontID", 0);


		//Timer
		//$this->RegisterTimer("CheckIfDoneTimer", 0, 'FM_CheckEvent($_IPS[\'TARGET\'], "Done");');

	    }

    // Ãœberschreibt die intere IPS_ApplyChanges($id) Funktion
    public function ApplyChanges() 
		{
        // Diese Zeile nicht löschen
        parent::ApplyChanges();

		$pumpID 		= $this->ReadPropertyInteger("PumpID");
		$DurationTime 	= $this->ReadPropertyInteger("DurationTime");
		$BreakTime 	= $this->ReadPropertyInteger("BreakTime");
		$FromTime 		= $this->ReadPropertyInteger("FromTime");
		$ToTime 		= $this->ReadPropertyInteger("ToTime");
		$WebfrontID 	= $this->ReadPropertyInteger("WebfrontID");

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