<?php 

class Role extends Utils
{

    public static $table='role';

    private $nomRole; 
  
//constructor 
function __construct(string $nomRole=null){
$this->nomRole=$nomRole;


}

//methodes  magics 

public function __get($attribut){
return $this->attribut;
}
public function __set($nomRole_attribut,$value){
 $this->nomRole_attribut=$value;
}

//methodes
public function ajouter(){
    

}

}



?>