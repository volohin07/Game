<?php
session_start();
require 'vendor/autoload.php';
$n = 9090;
$app = new \atk4\ui\App('Swelix');
$app->initLayout('Centered');

//$image = $app->add(["Image","https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fa/fa6594f0589633499206ec533a32d0573c4e4d80_full.jpg","centered"]);

$columns = $app->add('Columns');
$col_1 = $columns->addColumn(3);
$col_2 = $columns->addColumn(10);
$col_3 = $columns->addColumn(3);

 $clicker = $col_2->add(["Button",$_SESSION["i"],"green fluid big"]);
 $clicker->on('click',function ($m) {
   $_SESSION["i"] = $_SESSION["i"] + 1;
   return $m;
 });

$save = $col_2->add(["Button","Save","blue big"]);
$exit = $app->add(['Button',"Exit","red"]);
$exit->link(["exit"]);
