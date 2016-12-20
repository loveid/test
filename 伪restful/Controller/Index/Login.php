<?php
namespace Controller\Index;
 
use Service\LoginService;
class Login{
  public function __construct(){
    echo 'm:'.$_GET['m'].'<br/>';
    echo 'c:'.$_GET['c'].'<br/>';
    echo 'a:'.$_GET['a'].'<br/>';
    echo "构造方法<br/>";
  }
  public function test(){
   echo '123123';
   echo $_GET['id'];
   echo $_GET['name'];
  }

}