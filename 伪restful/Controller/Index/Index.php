<?php
namespace Controller\Index;
 
use Service\IndexService;
class Index{
  public function __construct(){
    echo 'm:'.$_GET['m'].'<br/>';
    echo 'c:'.$_GET['c'].'<br/>';
    echo 'a:'.$_GET['a'].'<br/>';
    echo "构造方法<br/>";
  }
  public function index(){
    new IndexService();
    print_r($_GET);
  }
  public function login(){
    echo "login()";
  }
}