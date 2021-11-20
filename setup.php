<?php
echo "working well ok";
class start{
  private $version;
  public function __construct(){
    $this->version = "1.1";
  }

  public function getVersion(){
    return $this->version;
  }
}



?>
