<?php
Class Bird {

  public $commonName;
  public $latinName;
  public function __construct($args=[]) {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }
}

$robin = new Bird(["commonName"=>"American Robin", "latinName"=>"Turdus migratorius"]);
$towhee = new Bird(["commonName"=>"Eastern Towhee", "latinName"=>"Pupilo erythrophthalmus"]);


echo "Common name: " . $robin->commonName . "<br>";
echo "Common name: " . $robin->latinName . "<br>";
echo "<hr>";
echo "Common name: " . $towhee->commonName . "<br>";
echo "Common name: " . $towhee->latinName . "<br>";
?>