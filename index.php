<?php

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Swelix');
$app->initLayout('Centered');

$clicker_name = $app->add(["Header","Colibri Clicker","centered"]);

$button_new = $app->add(["Button","Start","circular icon blue","icon"=>"power off"]);

$button_new->on('click',  function() {
      return new \atk4\ui\jsExpression("document.location = 'main.php' ");
  });

$button_reg = $app->add(["Button","Registration","green","iconRight"=>"arrow circle right"]);
$button_reg->link('reg.php');
