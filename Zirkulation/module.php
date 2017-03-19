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


		$this->RegisterPropertyInteger("sourceid", 0);
		$this->RegisterPropertyInteger("webfrontid", 0);


		$this->RegisterVariableInteger("Timestamp", "letzte Änderung", "~UnixTimestamp");
		$this->RegisterVariableBoolean("Push", "Meldung versendet", "");

		//Timer
		$this->RegisterTimer("CheckIfDoneTimer", 0, 'FM_CheckEvent($_IPS[\'TARGET\'], "Done");');

	    }

    // Ãœberschreibt die intere IPS_ApplyChanges($id) Funktion
    public function ApplyChanges() 
		{
        // Diese Zeile nicht löschen
        parent::ApplyChanges();

		$source_variable 	= $this->ReadPropertyInteger("sourceid");
		$webfront 			= $this->ReadPropertyInteger("webfrontid");

	    }

	/**
    * Die folgenden Funktionen stehen automatisch zur VerfÃ¼gung, wenn das Modul Ã¼ber die "Module Control" eingefÃ¼gt wurden.
    * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur VerfÃ¼gung gestellt:
    *
    * ABC_MeineErsteEigeneFunktion($id);
    *
    */
    public function MeineErsteEigeneFunktion() {
        // Selbsterstellter Code

		echo "TOll gemacht!";
    }
}

?>