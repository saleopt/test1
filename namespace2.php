<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 2015/6/9
 * Time: 8:33
 */
namespace Foo\Bar;
include 'namespace1.php';
const Foo =2;
class Foo{
    public function showFoo(){
        echo 'Foo is ' . Foo;
    }
}

$foo = new Foo();
$foo->showFoo();
$foo = new namespace1\Foo();
$foo->showFoo();
?>