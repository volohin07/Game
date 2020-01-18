<?php

require 'vendor/autoload.php';
require 'conection.php';
$app = new \atk4\ui\App('Swelix');
$app->initLayout('Centered');

$form = $app->layout->add('Form');
$form->setModel(new User($db));
$form->buttonSave->set("Create account");

$form->onSubmit(function($form) {
  return new \atk4\ui\jsExpression('document.location = "main.php" ');
});
