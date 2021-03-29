<?php
    class Car {
        // private
        private $model = "Mercedes Benz";

        public function getModel(){
            return "The car model is ". $this->model;
        }
    }

    $mercedes = new Car();

    // akses properti dari luar class
    echo $mercedes->getModel();
?>