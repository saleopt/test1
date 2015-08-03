<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 2015/6/22
 * Time: 16:29
 */
session_start();

echo 'Welcome to page #2<br />';

echo $_SESSION['favcolor']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);

// 类似 page1.php 中的代码，你可能需要在这里处理使用 SID 的场景
echo '<br /><a href="session1.php">session 1</a>';
?>