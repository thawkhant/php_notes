<?php 

  class Car
  {
  	// properties
      // public $name = "BMW";
      // public $price = "12000$";

  	public $name;
    public $price;


  	// method
     public function getcarName($userName = "default"){  // void function // return ma pyan k
       $this->name = $userName;
       return $this->name;  // type function
      // echo $this->name;
      }

      public function getCarPrice($userPrice = "default"){
      	$this->price = $userPrice;
      	return $this->price;  // type funtion
      	// echo $this->price;
      }

    
      
  }

  $result = new Car(); // object create

  
  // $result->getcarName("Something");
   // $result->getcarName();  // defalut lot win dal 
   // $result->getCarPrice("Something");
   // $result->getCarPrice(1000);
  // $result->getCarPrice();

   $name = $result->getcarName("AAA");
   echo $name;
   $price = $result->getCarPrice("10000");
   echo $price;
  


   // echo $result->name;
   // echo "<br/>";
   // echo $result->price;

