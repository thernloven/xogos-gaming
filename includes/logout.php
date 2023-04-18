<?php
session_start();
$user_id = session_id();
$delete_sessions_query = ("DELETE FROM users_online WHERE session = $user_id ");
sleep(1);
unset($_SESSION['username']);
unset($_SESSION['user_id']);
session_destroy();
header('location: login.php');
?>

