<?php
$heading='Home';

function dd($value)
{

      echo "<pre>";

      var_dump($value);
      
      echo "</pre>";
      die();
}

dd($heading);
      require "views/index.view.php";
       ?>
