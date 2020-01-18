<?php
require 'vendor/autoload.php';

$app = new \atk4\ui\App('Swelix');
$app->initLayout('Centered');

//$image = $app->add(["Image","https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fa/fa6594f0589633499206ec533a32d0573c4e4d80_full.jpg","centered"]);

$columns = $app->add('Columns');
$col_1 = $columns->addColumn(3);
$col_2 = $columns->addColumn(10);
$col_3 = $columns->addColumn(3);

 $clicker = $col_2->add(["Button","25","green fluid big"]);
 $clicker->on('click', function($clicker) {
   $clicker->set("Test");
   $clicker->js()->reload();
});
