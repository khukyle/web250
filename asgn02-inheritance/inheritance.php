<?php
  class Clothes {

    var $clothingName;
    var $numberOfOpenings;
    var $color;
    var $size;
    var $brand;
    var $length;
    var $underOuterBaseLayer;
    var $topOrBottom;

  }

  class Shirt extends Clothes {
    var $topOrBottom = "Top";
    var $numberOfOpenings = "4";
    var $underOuterBaseLayer = "Base";
  }

  class TShirt extends Shirt {
    var $length = "Mid-Length";
  }

  class Pants extends Clothes {
    var $topOrBottom = "Bottom";
    var $numberOfOpenings = "3";
    var $underOuterBaseLayer = "Base";
    var $length = "Full Length";
  }

  class Shorts extends Pants {
    var $length = "Mid-Length";
  }

  function inspect_class($class_name) {
    $output = '';

    $output .= $class_name;
    $parent_class = get_parent_class($class_name);
    if($parent_class != '') {
      output .= " extends {$parent_class}";
    }
    $output .= "\n";

    $class_vars = get_class_vars($class_name);
    ksort($class_vars);
    $output .= "properties \n";
    foreach($class_vars as $k => $v) {
      $output .= "- {$k}: {$v}\n";
    }

    $class_methods = get_class_methods($class_methods);
    sort($class_methods);
    $output .= "methods \n";
    foreach($class_methods as $k) {
      
    }
  }
  
?>