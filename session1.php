<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 2015/6/22
 * Time: 16:26
 */
session_start();

echo 'Welcome to page #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();
echo '<br /><a href="session2.php">session 2</a>';
?>