<?php

use Bird as GlobalBird;

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
$flycatcher = new Bird(["commonName"=>"Acadian Flycatcher", "latinName"=>"Turdus migratorius"]);
$wren = new Bird(["commonName"=>"Carolina Wren", "latinName"=>"Thryothorus ludovicianus"]);

echo "Common name: " . $robin->commonName . "<br>";
echo "Common name: " . $robin->latinName . "<br>";
echo "<hr>";
echo "Common name: " . $towhee->commonName . "<br>";
echo "Common name: " . $towhee->latinName . "<br>";
echo "<hr>";
echo "Common name: " . $flycatcher->commonName . "<br>";
echo "Common name: " . $flycatcher->latinName . "<br>";
echo "<hr>";
echo "Common name: " . $wren->commonName . "<br>";
echo "Common name: " . $wren->latinName . "<br>";
echo "<hr>";
?>