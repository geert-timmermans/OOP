<?php
// commented lines are a different method to write the variables in the code

class Form{
    public $div = 'div';
// create label, starts with opening a div
    public function label($for, $text, $class=""){
        /*return '<label for="' . $for . '" class="' . $class . '">' . $text . '</label>';*/
        return "<label for=$for class=$class>$text</label>";
    }
//start of the form
    public function formStart($action = "#", $method = "post", $class="", $id=""){
        /*return '<form action="' . $action . '" method="' . $method . '" class="' . $class . '" id="' . $id . '">';*/
        return "<form action=$action method=$method class=$class id=$id>";
    }
//input field for text, numbers, ...
    public function formInput($type, $class="", $id="", $placeholder=""){
        /*return '<input type="' . $type . '" class="' . $class . '" id="' . $id . '" placeholder="' . $placeholder . '">';*/
        return "<input type=$type class=$class id=$id placeholder=$placeholder>";
    }
// text area
    public function textArea($class='', $id='', $rows='3'){
        /*return '<textarea class="' . $class . '" id="' . $id . '" rows="' . $rows . '"></textarea>';*/
        return "<textarea class=$class id=$id rows=$rows></textarea>";
    }
// dropdown select field
    public function select($class='', $id='', $dropDown=[]){
        /*$test = '<select class="' . $class . '" id="' . $id . '">';*/
        $test = "<select class=$class id=$id>";
        foreach($dropDown as $item){
            /*$test .= '<option value="'.$item['value'].'">' . $item['text'] . '</option>';*/
            $test .= "<option value={$item['value']}>{$item['text']}</option>";
        }
        $test .= "</select>";
        return $test;
    }
// radios
    public function radio($name, $value, $class='', $id=''){
        /*return '<input type = "radio" name="' . $name . '" value="' . $value . '" class="' . $class . '" id = "' . $id . '">';*/
        return "<input type='radio' name=$name value=$value class=$class id=$id>";
    }
//submit button
    public function submitBtn($name='', $class='', $id='', $value=''){
        /*return '<input type="submit" name="' . $name . '" class="' . $class . '" $id="' . $id . '" value="' . $value . '">';*/
        return "<input type='submit' name=$name class=$class id=$id value=$value>";
    }
//end of the form
    public function formEnd(){
        return '</form>';
    }
//open a div
    public function openDiv($class=''){
        /*return '<' . $this->div . ' class="' . $class . '">';*/
        return "<$this->div class=$class>";
    }
//close a div
    public function closeDiv(){
        /*return '</' . $this->div . '>';*/
        return "</$this->div>";
    }

}

?>