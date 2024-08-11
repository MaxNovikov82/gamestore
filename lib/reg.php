<?php 
  $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
  $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
  $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
  $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
  
  if(strlen($login)<2){
    echo "Login error";
    exit;
  }

  if(strlen($username)<2){
    echo "Name error";
    exit;
  }

  if(strlen($email)<4 && str_contains($email, '@') ){
    echo "email error";
    exit;
  }
  
  if(strlen($password)<4){
    echo "password error";
    exit;
  }



  //password

  $salt = 'sdf23fsd';
  $password = md5($salt.$password);

  //DB

  require "db.php";
//insert
$sql = 'INSERT INTO users(login, username, email, password) VALUES(?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$login,$username,$email,$password]);

header('Location: ../');