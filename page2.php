<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 2015/6/9
 * Time: 7:57
 */
include("classa.inc");

$s = file_get_contents('store');
$a = unserialize($s);

// 现在可以使用对象$a里面的函数 show_one()
$a->show_one();
?>