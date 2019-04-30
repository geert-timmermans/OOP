<?php
// $this->surround = $surround
// $this->surround() = function surround()

// create a class in php
class Form{
    private $data;
    public $surround = 'p';
// __construct = special function that is executed automatically when the class is initiated
    public function __construct($data){
        $this->data = $data;
    }
// function with variable $html. The function is called inside other functions with $this->surround()
    private function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }
// function with if else statement
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
// function to create an input field
// the getValue function fills in the fields
    public function input($name){
        return $this->surround(
                '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }
// function to create a button
    public function submit(){
        return $this->surround('<button type="submit">Send</button>');
    }

}

?>

