<?php 

class HomeController 
{
    public $home;

    public function __construct() {

    }

    public function views_home() {
        include './views/trangchu.php';
    }
    

    public function thongke(){
        include './views/thongke.php';
    }

} 
