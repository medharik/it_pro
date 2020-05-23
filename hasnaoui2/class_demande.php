<?php 

class Demande extends Utils
{

    public static $table='demande';

private $typeDocument;
private $libelle;
private $creeLe;
private $modifieLe;
private $supprimeLe;
private $etatDemande;
private $dateDemande;


//constructor 
function __construct(string $typeDocument,string $libelle,string $creeLe,string $modifieLe
,string $supprimeLe,string $etatDemande,string $dateDemande){

$this->typeDocument=$typeDocument;
$this->libelle=$libelle;
$this->creeLe=$creeLe;
$this->modifieLe=$modifieLe;
$this->supprimeLe=$supprimeLe;
$this->etatDemande=$etatDemande;

if(empty($creeLe)){
    $this->creeLe=date('d-m-y');
}else{
    
    $this->creeLe=$creeLe;
}
$this->creeLe=$creeLe;
$this->typeDocument=$typeDocument;
$this->libelle=$libelle;
}
// getters  
public function libelle(){
return '$libelle';
}
//setters 

public function setlibelle(string $libelle){
$this->libelle=$libelle;
}
//Methodes  magics :
public function  __get($libelle_attribut){
return $this->libelle_attribut;
}
public function  __set($libelle_attribut,$value){
 $this->libelle_attribut=$value;
}

//methodes
public function ajouter(){

}


}



?>