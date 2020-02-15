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

 $val = $col_2->add(['FormField/line', '1']);

 $clicker = $col_2->add(["Button","Click!","green fluid big"]);
 $clicker->js('click',new \atk4\ui\jsReload($val,['val' => $val->jsInput()->val(new \atk4\ui\jsExpression('parseInt([])+1', [$val->jsInput()->val()]), $val->jsInput()->focus())]));

$save = $col_2->add(["Button","Save","blue big"]);
$exit = $app->add(['Button',"Exit","red"]);
$exit->link(["exit"]);
$x2 = $col_3->add(["Button","click x3","inverted orange button","medium ui button","icon"=>"power off"]);
$pus = $col_3->add(["Button","click x5","inverted primary button","medium ui button","icon"=>"power off"]);
$x10 = $col_3->add(["Button","+10000 points","inverted yellow button","medium ui button","icon"=>"power off"]);
