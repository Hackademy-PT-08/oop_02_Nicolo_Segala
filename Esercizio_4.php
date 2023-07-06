<?php
// traccia 1:
// - Utilizza i principi di OOP ed Ereditarietà per creare una struttura a classi come la seguente:
//     +-|Continent
//     +-----------|Country
//     +--------------------|Region
//     +---------------------------|Province
//     +------------------------------------|City
//     +------------------------------------------|Street
// - Ogni classe avrà un attributo public del tipo:
//     $nameContinent: 
//     $nameCountry;
//     $nameRegion;
//     $nameProvince; 
//     $nameCity;
//     $nameStreet;


// - La prima classe genitore avrà la seguente struttura:
//     class Continent
//     {
//       public $nameContinent;
    
//       public function __construct($continent){
//         $this->nameContinent = $continent; 
//       }
//     }
// - Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo che stampi a schermo la seguente frase: Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D
 class Continent{
    public $continent ;
    public function __construct($__continent){

        $this -> continent = $__continent;

    } 
    public function print(){

        echo"+-$this->continent \n";

    }    
 }
 class Country extends Continent{
    public $country ;
    public function __construct($__continent , $__country){
        parent::__construct($__continent);
        $this -> country = $__country;
    }
    public function print(){

        echo"+-$this->continent $this->country \n";

    }
 }
 class Region extends Country{
    public $region ;
    public function __construct($__continent , $__country , $__region){
        parent::__construct($__continent,$__country);
        $this -> region = $__region;
    }
    public function print(){

        echo"+-$this->continent $this->country $this->region \n";

    }
 }
 class Province extends Region{
    public $province ;
    public function __construct($__continent , $__country , $__region , $__province){
        parent::__construct($__continent , $__country ,$__region);
        $this -> province = $__province;
    }
    public function print(){

        echo"+-$this->continent $this->country $this->region $this->province \n";

    }
 }
 class City extends Province{
    public $city ;
    public function __construct($__continent , $__country , $__region , $__province , $__city){
        parent::__construct($__continent , $__country , $__region , $__province);
        $this -> province = $__city;
    }
    public function print(){

        echo"+-$this->continent $this->country $this->region $this->province $this->city\n";

    }
 }
 class Street extends City{
    public $street ;
    public function __construct($__continent , $__country , $__region , $__province , $__city , $__street){
        parent::__construct($__continent , $__country , $__region , $__province ,$__city);
        $this -> street = $__street;
    }
    public function print(){

        echo"+-$this->continent $this->country $this->region $this->province $this->city $this->street\n";

    }
 }
 class myLocation extends Street{
    public $mylocation ;
    public function __construct($__continent , $__country , $__region , $__province , $__city , $__street , $__mylocation){
        parent::__construct($__continent,$__country , $__region , $__province , $__city , $__street);
        $this -> mylocation = $__mylocation;

    }
    public function print(){

        echo"Mi trovo in$this->continent, $this->country, $this->region, $this->province,$this->city, $this->street";

    }
}

// $continent = new Continent("Europa");

// $country = new Country("Italia");

// $region = new Region("Veneto");

// $province = new Province("VR , Verona");

// $city = new City("Legnago");

// $street = new Street("Via Marsala 26");

// $mylocation = new myLocation();

// $continent -> print();

// $country -> print();

// $region -> print();

// $province -> print();

// $city -> print();

// $street -> print();

// $mylocation();


// traccia 2:
// - Data questo semplice schema di classificazione animale:
// 

// - crea una struttura a classi sfruttando l’ereditarietà e seguendo queste semplici regole:
//     - le classi non devono avere attributi;
//     - ogni classe avrà un metodo specifico protected per stampare la sua specializzazione; 
//     - non puoi realizzare metodi definiti public per stampare il risultato;
//     - l’unico metodo public ammesso è il costruttore.
    

// ATTENZIONE: utilizzate bene il costruttore per invocare i metodi.


// - Il risultato atteso sarà:
//     $magikarp = new Fish();
//     //Nel terminale visualizzerete:
//     Sono un animale Vertebrato
//     Sono un animale a Sangue Freddo
//     Sono un pesce

class Vertebrates{
    public function __construct(){

        echo $this->vertebrates();

    } 
    protected function vertebrates(){

            echo "sono un vertebrato";
    }    
 }
 class WarmBlood extends Vertebrates{
    public function __construct(){
        echo $this->warmblood();

    } 
    protected function warmblood(){
        
            echo "sono un' animale vertebrato a sangue caldo \n";
    }    
 }
 class Mammals extends WarmBlood{
    public function __construct(){
        echo $this->mammals();

    } 
    protected function mammals(){
        
            echo "sono un' animale vertebrato a sangue caldo e sono un mammimfero\n";
    }    
 }
 class Birds extends WarmBlood{
    public function __construct(){
        echo $this->birds();

    } 
    protected function birds(){
        
            echo "sono un' animale vertebrato a sangue caldo e sono un uccello\n";
    }    
 }

 class ColdBlood extends Vertebrates{
    public function __construct(){

        echo $this->warmblood();

    } 
    protected function warmblood(){
        
            echo "sono un' animale vertebrato a sangue freddo \n";
    }    
 }
 class Fish extends ColdBlood{
    public function __construct(){
        echo $this->fish();

    } 
    protected function fish(){
        
            echo "sono un' animale vertebrato a sangue freddo e sono un pesce\n";
    }    
 }
 class Reptiles extends ColdBlood{
    public function __construct(){
        echo $this->reptiles();

    } 
    protected function reptiles(){
        
            echo "sono un' animale vertebrato a sangue freddo e sono un rettile\n";
    }    
 }
 class Amphibians extends ColdBlood{
    public function __construct(){
        echo $this->amphibians();

    } 
    protected function amphibians(){
        
            echo "sono un' animale vertebrato a sangue freddo e sono un anfibio\n";
    }    
 }

$amphibians = new Amphibians();


//  Traccia 3:
//  - Dato il seguente codice di partenza:
//      class Car {
//        private $num_telaio; 
//      }
     
//      class Fiat extends Car {
//        protected $license;
//        protected $color;
//      }
 
 
//  - Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severità che ritieni più opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina è Opel, con targa ND 123 OJ e numero di Telaio 1234“.
 
//  Tips and Tricks
//  Per sapere se l’esercizio e' corretto, stampa in console il var_dump dell’oggetto:
 
//      var_damp($car);
 
//  L’output dovrà avere solamente 3 attributi:
 
//      object(MyCar)#1 (3) {
//        ["num_telaio":"Car":private]=>
//        string(6) "183784"
//      ["nome":protected]=>
//        string(4) "Opel"
//      ["targa":protected]=>
//        string(8) "19384785"
//      }
class Car {
    private $num_telaio; 
    public function __construct($__num_telaio){
        $this -> num_telaio =$__num_telaio;
        
    }
  }
  class Model extends Car{
    protected $model;
    protected $license;
    protected $color;
    public function __construct($__model , $__license , $__color){
        $this -> model = $__model;
        $this -> license = $__license;
        $this -> color = $__color;
    }
  }


