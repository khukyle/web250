<?php
  class RoundCookie {


    var $weight;
    var $color;
    var $icing;

    function decorate() {

    }

    function consume() {

    }


  }


  $cookie1 = new RoundCookie;
  $cookie1->weight = "2 oz.";
  $cookie1->color = "green";
  $cookie1->icing = "cream cheese icing";

  $cookie2 = new RoundCookie;
  $cookie2->weight = "24 oz.";
  $cookie2->color = "red";
  $cookie2->icing = "no icing";
  
  echo "My first cookie weighs " . $cookie1->weight . " It is " . $cookie1->color . " and is covered with " . $cookie1->icing . ".</br>";
  
  echo "My second cookie weighs " . $cookie2->weight . " It is " . $cookie2->color . " and is covered with " . $cookie2->icing . ".";


?>