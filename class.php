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
            //echo "New Pokemon " . $this->pkmnName . " added.<br>";
        }
		
		public function get_Name(){
			$name = $this -> pkmnName;
			return $name;
			}
		
		public function get_Nbr(){
			$nbr = $this -> pkmnNbr;
			return $nbr;
			}
		
		public function get_Type(){
			$type = $this -> pkmnType;
			return $type;
			}

    }

	//$pika = new Pokemon('pikachu',25,'elek');


    
	
	// var_dump($pika);
	
	// $typePika = $pika -> pkmnName;
	
	// echo $typePika;
	
	// $pokename = $pika -> get_Name();
	
	// echo $pokename;
	
?>