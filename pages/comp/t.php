<?php
//testing component

class theyFindUs{
  public $faa = "they find us... we need to acess the <a href='/..'>secret local</a>";
  public function foo(){
    echo $this->faa;
  }
}

$instance = new theyFindUs;
$instance -> foo();

?>

