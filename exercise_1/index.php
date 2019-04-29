<?php
require 'classes/Form.php';

$dropDownSelect = [
    ['value'=> '1', 'text'=> 'PHP'],
    ['value'=> '2', 'text'=> 'JS'],
    ['value'=> '3', 'text'=> 'Html'],
    ['value'=> '4', 'text'=> 'CSS']
];

$form = new Form();

echo $form->formStart();

echo $form->openDiv('input');
echo $form->label('test', 'test');
echo $form->formInput('text');
echo $form->closeDiv();

echo $form->openDiv('textArea');
echo $form->label('test2','test2');
echo $form->textArea();
echo $form->closeDiv();

echo $form->openDiv('select');
echo $form->label('test3','test3');
echo $form->select('','',$dropDownSelect);
echo $form->closeDiv();

echo $form->openDiv('radio');
echo $form->label('test4', 'test4');
echo $form->radio('test4', 'test4');
echo $form->closeDiv();
echo $form->openDiv('radio');
echo $form->label('test5', 'test5');
echo $form->radio('test4', 'test5');
echo $form->closeDiv();

echo $form->submitBtn();

echo $form->formEnd();