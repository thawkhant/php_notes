<?php 

 class Animals
 {
   public $name;
   public $color;

  // public function __construct()
   public function __construct($animalName = 'default',$animalColor = 'default')
   // public function setName() // normal funciton
   {
    // $this->name = "Aung Net";
    // $this->color = "Black";

     $this->name = $animalName;
    $this->color = $animalColor;
   }

   public function sleep(){
   	echo "Good Night...";
   }
 }
 // $dog = new Animals();
 $animal = new Animals("Show War","Yellow");
 echo $animal->name; 
//  $dog->setName();
// echo $dog->name;

// --------------------------------
class Dog extends Animals{            // a pow ka har ko pyan htoke chin lot extends ko use twar dar pr sir...
	public function greeting(){
       echo "Hello Dog";
	}
}

$dog = new Dog();
$dog->greeting();
$animal->sleep();  //simple dal

$dog->sleep();

echo $dog->name;
