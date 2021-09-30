<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

require_once('conn.php');
$query = 'SELECT * FROM users WHERE user = :user';
$statement = $conn->prepare($query);
$statement->execute([
    ':user' => $username
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
if($statement->rowCount() < 1){
    header('Location: ../login.php?msg=Account bestaat niet');
    exit;
}
if(!password_verify($password, $user['password'])){
    header('Location: ../login.php?msg=Wachtwoord is onjuist');
    exit;
}else{
    $_SESSION['user_id'] = $user['id'];
   
    header('Location: ../index.php');
}
