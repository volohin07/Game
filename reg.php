<?php

session_start();
$_SESSION["test"] = "Hello!";

require 'vendor/autoload.php';
require 'conection.php';
$app = new \atk4\ui\App('Swelix');
$app->initLayout('Centered');

$form = $app->layout->add('Form');
$form->setModel(new User($db));
$form->buttonSave->set("Create account");
$model = new User($db);

$form->onSubmit(function($form) use($model) {
  $nickname = $form->model['nickname'];
  $model->tryLoadBy('nickname',$nickname);
  if (isset($model->id)) {
    return new \atk4\ui\jsNotify(['content'=>'Nickname already in use.','color'=>'red']);
  } else {
    $form->model->save();
    $model->tryLoadBy('nickname',$nickname);
    $_SESSION["user_id"] = $model->id;
    return new \atk4\ui\jsExpression('document.location = "main.php" ');
  }

});
