<?php

class Html{
// link for adding css file
    public function linkCss($href){
//        return '<link rel="stylesheet" type="text/css" href="' . $href . '">';
        return "<link rel='stylesheet' type='text/css' href=$href>";
    }
// creating meta tags
    public function meta($name, $content, $http){
        /*return '<meta name="' . $name . '" content="' . $content . '" http-equiv="' . $http . '">';*/
        return "<meta name=$name content=$content http-equiv=$http>";
    }
// linking images
    public function images($src, $alt, $class='', $id=''){
        /*return '<img src="' . $src . '" alt="' . $alt . '" class="' . $class . '" id="' . $id . '">';*/
        return "<img src=$src alt=$alt class=$class id=$id>";
    }
//create links
    public function link($href, $text, $class=''){
        /*return '<a href="' . $href . '" class="' . $class . '">{$text}</a>';*/
        /*return "<a href='{$href}' class='{$class}'>$text</a>";*/
        return "<a href=$href class=$class>$text</a>";

    }
//Javascript links
    public function javascript($src){
        return "<script src=$src></script>";
    }
}