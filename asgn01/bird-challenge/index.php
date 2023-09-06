<?php
  class Bird {

    var $commonName;
    var $food;
    var $nestPlacement;
    var $conservationLevel;

    function song() {
      
    }

    function canFly() {
      
    }

  }

  $bird1 = new Bird;
  $bird1->commonName = "Eastern Towhee";
  $bird1->food = "seeds, fruits, insects, spiders";
  $bird1->nestPlacement = "Ground";
  $bird1->conservationLevel = "Low";
  
  $bird2 = new Bird;
  $bird2->commonName = "Indigo Bunting";
  $bird2->food = "small seeds, berries, buds and insects";
  $bird2->nestPlacement = "roadsides, and railroad right-of-wafields";
  $bird2->conservationLevel = "Low";

  echo "The " . $bird1->commonName . " eats " . $bird1->food . ".</ br> It Nests on " . $bird1->nestPlacement . " and its conservation level is " . $bird1->conservationLevel .".</br>";
  echo "The " . $bird2->commonName . " eats " . $bird2->food . ".</ br> It Nests on " . $bird2->nestPlacement . " and its conservation level is " . $bird2->conservationLevel .".</br>";
?>