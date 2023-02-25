<?php
	class circuit{
		
		public $lieu;
		public $lieu_d;
		public $lieu_a;
		public $date;
		public $nom_circuit;
		public $prix;
		public $description;
		public $nb_place;
		public $photo;


	function __construct($lieu,$lieu_d,$lieu_a,$date,$nom_circuit,$prix,$description,$nb_place,$photo){
		
		$this->lieu=$lieu;
		$this->lieu_d=$lieu_d;
		$this->lieu_a=$lieu_a;
		$this->date=$date;
		$this->nom_circuit=$nom_circuit;
		$this->prix=$prix;
        $this->description=$description;
		$this->nb_place=$nb_place;
		$this->photo=$photo;

	}
	
	function setlieu($lieu){
		$this->lieu=$lieu;
	}
	function getlieu(){
		return $this->lieu;
	}
	function setlieu_d($lieu_d){
		$this->lieu_d=$lieu_d;
	}
	function getlieu_d(){
		return $this->lieu_d;
	}
	function setlieu_a($lieu_a){
		$this->lieu_a=$lieu_a;
	}
	function getlieu_a(){
		return $this->lieu_a;
	}
	function setdate($date){
		 $this->date=$date;
	}
	function getdate(){
		return $this->date;}

		function setnom_circuit($nom_circuit){
		 $this->date=$date;
	}
	function getnom_circuit(){
		return $this->nom_circuit;
	}
	function setprix($prix){
		 $this->prix=$prix;
	}
	function getprix(){
		return $this->prix;
	}
	function setdescription($description){
		 $this->description=$description;
	}
	function getdescription(){
		return $this->description;
    }
    function setnb_place($nb_place){
        $this->nb_place=$nb_place;
   }
   function getnb_place(){
       return $this->nb_place;
   }
   function setphoto($photo){
	$this->photo=$photo;
}
function getphoto(){
	return $this->photo;
}
	}
	?>