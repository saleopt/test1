<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 2015/6/9
 * Time: 7:56
 */
include("classa.inc");

$a = new A;
$s = serialize($a);
// 把变量$s保存起来以便文件page2.php能够读到
file_put_contents('store', $s);
?>