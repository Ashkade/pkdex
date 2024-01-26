<?php

    class Pokemon
    {
        
        public $pkmnName;

        public $pkmnNbr;

        public $pkmnType;
        
        public function __construct($pkmnName,$pkmnNbr,$pkmnType)
        {
            $this -> pkmnName = $pkmnName;
            $this -> pkmnNbr = $pkmnNbr;
            $this -> pkmnType = $pkmnType;
            echo "New Pokemon " . $this->pkmnName . " added.";
        }
		
		public function get_Name(){
			$name = $this -> pkmnName;
			return $name;
			}

    }

	$pika = new Pokemon('pikachu',25,'elek');
	
	var_dump($pika);
	
	$typePika = $pika -> pkmnName;
	
	echo $typePika;
	
	$pokename = $pika -> get_Name();
	
	echo $pokename;
	
?>