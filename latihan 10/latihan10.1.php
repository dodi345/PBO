<?php
/**singleton Class */

final class Product{
    /**@var self */

    private static $instance;
    /**@var mixed */

    public $mix;

    public static function getInstance(){
        if (!(self::$instance instanceof self)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __construct(){

     }
     private function __clone()
     {
        
     }
}
$firstProduct = Product::getInstance();
$secondProduct = Product::getInstance();
$firstProduct->mix = 'test';
$secondProduct->mix = 'example';

print_r($firstProduct->mix);
echo "<br>";
//example
print_r($secondProduct->mix);