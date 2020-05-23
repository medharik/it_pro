<?php 

class Bulletin extends Utils
{

    public static $table='bulletin';

//POJO : plain old java object
//datas
private $ajouteLe; 
private $chemin; 
private $employee;

//constructor 
function __construct(string $employee=null,string $chemin=null,string $ajouteLe=null){
$this->employee=$employee;
$this->chemin=$chemin;
$this->ajouteLe=$ajouteLe;

}

//methodes  magics 

public function __get($attribut){
return $this->attribut;
}
public function __set($employee_attribut,$value){
 $this->employee_attribut=$value;
}

//methodes
public function ajouter(){
    

}
}

?>
