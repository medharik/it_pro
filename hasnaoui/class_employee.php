<?php 

class Employee extends Utils
{

    public static $table='employee';


    private $nom;
    private $prenom;
    private $dateNaissance;
    private $cin;
    private $adresse;
    private $codeCnss;
    private $matricule;
    private $fonction;
    private $service;
    private $dateEmbauche;
    private $contrat;
    private $tel;
    private $photo;
    private $email;
    private $password;
    private $activkey;
    private $firstime;
    private $pseudo;

//constructor 
function __construct(string $nom,string $prenom,string $dateNaissance,string $cin
,string $adresse,string $codeCnss,string $matricule,string $fonction,string $service,string $dateEmbauche,
string $contrat,string $tel,string $photo,string $email,string $password,string $activkey,string $firstime,string $pseudo){

    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->dateNaissance=$dateNaissance;
    $this->cin=$cin;
    $this->adresse=$adresse;
    $this->codeCnss=$codeCnss;
    $this->matricule=$matricule;
    $this->fonction=$fonction;
    $this->service=$service;
    $this->dateEmbauche=$dateEmbauche;
    $this->contrat=$contrat;
    $this->tel=$tel;
    $this->photo=$photo;
    $this->email=$email;
    $this->password=$password;
    $this->activkey=$activkey;
    $this->firstime=$firstime;
    $this->pseudo=$pseudo;

    if(empty($dateEmbauche)){
        $this->dateEmbauche=date('Y-m-d');
    }else{
        
        $this->dateEmbauche=$dateEmbauche;
    }
    $this->dateEmbauche=$dateEmbauche;
    $this->photo=$photo;
    $this->cin=$cin;
    }
    // getters  
    public function nom(){
    return '$nom';
    }
    //setters 
    
    public function setNom(string $nom){
    $this->nom=$nom;
    }
    //Methodes  magics :
    public function  __get($nom_attribut){
    return $this->nom_attribut;
    }
    public function  __set($nom_attribut,$value){
     $this->nom_attribut=$value;
    }
    
    //methodes
    public function ajouter(){
    
    }
    
    
    }
    
    

?>
 