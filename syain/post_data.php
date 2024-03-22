<?php
require_once('common.php');

if (isset($_POST["status"])) {
  if (isset($_POST["old_id"])) {
    $id = $_POST["id"];
  }
  if (isset($_POST["name"])) {
    $name = $_POST["name"];
  }
  if (isset($_POST["age"])) {
    $age = $_POST["age"];
  }
  if (isset($_POST["work"])) {
    $work = $_POST["work"];
  }
  if (isset($_POST["old_id"])) {
    $old_id = $_POST["old_id"];
  }
  if ($_POST["status"] == "create") {
    if (check_input($id, $name, $age, $work, $error) == false) {
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if ($db -> idexist($id) == true) {
      $error = "既に使用されているIDです。";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if ($db -> createsyain($id, $name ,$age, $work) == false) {
      $error = "DBエラー";
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    header("Location: index.php");
    exit();
  }
}