<?php
    // class Car{
    //     function drive(){
    //         echo "car is driving";
    //     }
    // }
    // $carObj=new Car();
    // $carObj->drive();
    class Cat{
        private $name;
        function __construct($catname){
             $this->name = $catname;       
         }
        function leg(){
            echo $this->name ." has 4 legs";
        }
    }
    $animal=new Cat("kefkoe");
    $animal->leg();?>
    <hr>
    <?php
    class Car{
        protected $name;//properties
        function __construct($carname){
            $this-> name= $carname;
        }
        function drive(){

            echo $this->name." is driving <br>";
        }
        function stop(){
            echo $this->name." is stopping";
        }

    }
    $carObj=new Car("BMW");
    $carObj->drive();
    $carObj->stop();
    class Truck extends Car{
        private $wheels;
        function __construct($carname ,$carwheels){
            $this->name= $carname;
            $this->wheels = $carwheels;
        }
        function wheel(){
            echo $this->name." has ".$this->wheels."wheels";
        }

    }
    $truckobj=new Truck("Big Truck",12);
    $truckobj->drive();
    $truckobj->wheel();

?>