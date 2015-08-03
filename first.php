<?php
/**
 * Created by PhpStorm.
 * User: tc
 * Date: 2015/6/1
 * Time: 16:13
 */
echo '<pre>';
//Class SimpleClass{
//    public $var = 'a default value';
//    public function displayVar(){
//        echo $this->var;
//    }
//}
//Class A{
//    function foo(){
//        if (isset($this)) {
//            echo '$this is defined ';
//            echo get_class($this);
//        }else{
//            echo '$this is undefined ';
//        }
//    }
//}
//Class B{
//    function bar(){
//        A::foo();
//    }
//}
//$a = new A();
//$a->foo();
//$b = new B();
//$b->bar();
//A::foo();
//B::bar();
//
//$className = 'A';
//$instance = new $className();
//$instance->foo();
//
//$instance = new SimpleClass();
//$assiant = $instance;
//$reference = &$instance;
//$instance->var = 'hello world';
//$instance = null;
//var_dump($instance);
//var_dump($assiant);
//var_dump($reference);

//namespace NS {
//    class ClassName{
//
//    }
//    echo ClassName::class;
//}
//class SimpleClass{
//    public $var0=23;
//    public $var1 = <<<EOD
//hello world <br>
//<b>this is tom</b>
//EOD;
//}
//$sc = new SimpleClass();
//echo $sc->var1;
//$active = 'basketball';
//echo "i like {$active}s";  //字符串中可以有变量，如果与其他字符连在一起，最好用{}分割
// heredoc 结构类似于双引号字符串，Nowdoc 结构是类似于单引号字符串的
//heredoc语法 <<<EOD , Nowdoc语法 <<<'EOT'，注意Nowdoc有单引号
//echo <<<'EOT'
//i like $active too
//and you?
//EOT;

//$var = 4;
//echo "Result: " . $var + 5 ;    //结果为5，因为php中 + 没有字符串连接用途，只计算，non-numeric类型字符串会被转化成0
//echo "Result: " .( $var + 5);   //结果为Result:9

////接口用implements实现，用extends继承，接口允许多继承
//interface iA{
//    const engeer = 'www.baidu.com'; // 常量不需要$
//    public function getHtml($url);
//}
//interface iB extends iA{
//    public function getHeader($url);
//}
//class HtmlSplit implements  iB{
//    public function getHtml($url){
//    }
//    public function getHeader($url){
//    }
//}
//
//$number = 1234.56;
//echo number_format($number,2);

////使用变量来调用类
//class MyClass{
//    const constant = 'this is constant';
//    function showConstant(){
//        echo self::constant . "\n";
//    }
//}
//$classname = "MyClass";
//echo $classname::constant;  //使用变量调用类，自PHP 5.3起，也可以使用类对象来调用静态属性

////自动加载类 __autoload()
//function __autoload($classname){    //如果没有这段代码，$c1=new Myclass1()就会出错，因为这个类不在同一个文件中
//    require_once $classname . '.php';
//}
//$c1 = new Myclass1();
//$c1->show1();

////构造函数和析构函数
//class Bar{
//    function __construct(){
//        echo 'this is Bar construct';
//    }
//    function __destruct(){
//        echo 'this is Bar destruct';
//    }
//}
//$bar =new Bar();

////抽象类
//abstract class AbstractClass{
//    abstract function absFun1();    //php中定义抽象方法，方法需要增加abstract关键字
//    abstract function absFun2();
//}
//class MyClass1 extends AbstractClass{
//    function absFun1(){
//        echo 'absFun1';
//    }
//    function absFun2(){
//        echo 'absFun2';
//    }
//}

////trait
//class Base {
//    public function sayHello() {
//        echo 'Hello ';
//    }
//    public function noOver(){
//        echo 'Base noOver';
//    }
//}
//trait sayWorld{
//    public function sayHello() {
//        parent::sayHello();
//        echo 'world!';
//    }
//    public function noOver(){
//        parent::noOver();
//        echo 'say World noOver';
//    }
//}
//class MyHelloWorld extends Base{
//    use sayWorld;
//    public function noOver(){
//        echo 'MyHelloWorld noOver';
//    }
//}
//$o = new MyHelloWorld();
//$o->sayHello(); //这种trait后的函数优先级由高到低为：当前类->trait->父类
//$o->noOver();

////trait 2
//trait HelloWorld{
//    public function sayHello(){
//        echo 'Hello World!';
//    }
//}
//class Universe{
//    use HelloWorld;
//    public function sayHello(){
//        echo 'Hello Universe!';
//    }
//}
//$o = new Universe();
//$o->sayHello();

////多个trait
//trait Hello{
//    public function hello(){
//        echo 'hello ';
//    }
//}
//trait World{
//    public function world(){
//        echo 'world ';
//    }
//}
//class MyHelloWorld{
//    use Hello;
//    use World;
//    public function sayEnd(){
//        echo '!';
//    }
//}
//$o = new MyHelloWorld();
//$o->hello();
//$o->world();
//$o->sayEnd();

////trait冲突解决
//trait A{
//    public function smallTalk(){
//        echo 'a';
//    }
//    public function bigTalk(){
//        echo 'A';
//    }
//}
//trait B{
//    public function smallTalk(){
//        echo 'b';
//    }
//    public function bigTalk(){
//        echo 'B';
//    }
//}
//class Talker{
//    use A,B{
//        B::smallTalk insteadof A;
//        A::bigTalk insteadof B;
//        B::bigTalk as BbigTalk;
//    }
//}
//$t = new Talker();
//$t->smallTalk();
//$t->bigTalk();
//$t->BbigTalk();

////trait组成trait
//trait Hello{
//    public function hello(){
//        echo 'hello ';
//    }
//}
//trait World{
//    public function World(){
//        echo 'world ';
//    }
//}
//trait HelloWorld{
//    use Hello,World;
//    public function sayEnd(){
//        echo '!';
//    }
//}
//class Test{
//    use HelloWorld;
//}
//$t = new Test();
//$t->hello() . $t->World() . $t->sayEnd();

////trait静态变量及属性
//trait Counter{
//    public  $x = 0; //通过实践看，trait中属性不能参与trait中方法
//    public function inc(){
//        static $c=0;
//        $c =$c + 1;
//        echo "$c \n";
//    }
//}
//class A{
//    use Counter;
//}
//class B{
//    use Counter;
//}
//$a=new A();
//$b=new B();
//$a->inc();
//$b->inc();
//echo $a->x;

////使用 __get()，__set()，__isset() 和 __unset() 进行属性重载
//class PropertyTest{
//    /**  被重载的数据保存在此  */
//    private $data = array();
//    /**  重载不能被用在已经定义的属性  */
//    public $declared = 1;
//    /**  只有从类外部访问这个属性时，重载才会发生 */
//    private $hidden = 2;
//    public function __set($name,$value){
//        echo "setting '$name' to  '$value'\n";
//        $this->data[$name] = $value;
//    }
//    public function __get($name){
//        echo "getting '$name'\n";
//        if (array_key_exists($name,$this->data)){
//            return $this->data[$name];
//        }
//        $trace = debug_backtrace();
//        trigger_error(
//            'Undefined property via __get():' . $name .
//            ' in ' . $trace[0]['file'] .
//            ' on line ' . $trace[0]['line'] . "\n",
//            E_USER_NOTICE
//        );
//        return null;
//    }
//    public function __isset($name){
//        echo "is '$name' set?\n";
//        return isset($this->data[$name]);
//    }
//    public function __unset($name){
//        echo "unset '$name'\n";
//        unset($this->data[$name]);
//    }
//    public function getHidden(){
//        return $this->hidden;
//    }
//}
//echo "<pre>\n";
//$obj = new PropertyTest();
//$obj->a = 1;    //此处会调用__set
//echo $obj->a . "\n\n";  // 会调用__get
//var_dump(isset($obj->a));
//unset($obj->a);
//var_dump(isset($obj->a));
//echo "\n";
//echo $obj->declared . "\n\n";   //此处不会调用__set
//var_dump(isset($obj->declared));
//echo $obj->getHidden() . "\n";
//echo $obj->hidden . "\n";   //此处会报错

////对象遍历
//class MyClass{
//    public $var1 = "a";
//    public $var2 = "b";
//    public $var3 = "c";
//    protected $pro = "protected value";
//    private $pri = "private value";
//    function iteratorVisible(){
//        echo "<pre>\n";
//        echo "MyClass::iteratorVisible: \n";
//        foreach($this as $key=>$value){
//            echo "$key => $value " . "\n";
//        }
//    }
//}
//$mc = new MyClass();
//$mc->iteratorVisible();

////类型约束
//class OtherClass{
//    public $var = "in otherclass var";
//}
//class MyClass{
//    public function test(OtherClass $otherclass){
//        echo $otherclass->var;
//    }
//    public function testArray(array $inputArray){
//        print_r($inputArray);
//    }
//    public function testCallable(callable $callback,$data){
//        call_user_func($callback,$data);
//    }
//}

////后期静态绑定
///** 使用 self:: 或者 __CLASS__ 对当前类的静态引用，取决于定义当前方法所在的类：
// * 同时需要注意，与Java不同 子类创建时 父类不会同时创建对象*/
//class A {
//    function __construct(){
//        echo 'A create';
//    }
//    public static function who() {
//        echo __CLASS__;
//    }
//    public static function test() {
//        self::who();        //self的限制，只能得到当前方法所在类
//    }
//}
//class B extends A {
//    public static function who() {
//        echo __CLASS__;
//    }
//}
//B::test();

////后期静态绑定的用法
///**后期静态绑定本想通过引入一个新的关键字表示运行时最初调用的类来绕过限制。
// * 简单地说，这个关键字能够让你在上述例子中调用 test() 时引用的类是 B 而不是 A。
// * 最终决定不引入新的关键字，而是使用已经预留的 static 关键字。*/
//class A {
//    public static function who() {
//        echo __CLASS__;
//    }
//    public static function test() {
//        static::who(); // 后期静态绑定从这里开始
//    }
//}
//class B extends A {
//    public static function who() {
//        echo __CLASS__;
//    }
//}
//B::test();

////转发和非转发调用
////后期静态绑定的解析会一直到取得一个完全解析了的静态调用为止。另一方面，如果静态调用使用 parent:: 或者 self:: 将转发调用信息。
//class A {
//    public static function foo() {
//        static::who();
//    }
//
//    public static function who() {
//        echo __CLASS__."\n";
//    }
//}
//
//class B extends A {
//    public static function test() {
//        A::foo();
//        parent::foo();  //这块没太明白为什么运行中会是c
//        self::foo();
//    }
//
//    public static function who() {
//        echo __CLASS__."\n";
//    }
//}
//class C extends B {
//    public static function who() {
//        echo __CLASS__."\n";
//    }
//}
//
//C::test();

////常量__NAMESPACE__的值是包含当前命名空间名称的字符串
//namespace MyProject;
//echo '"', __NAMESPACE__, '"'; // 输出 "MyProject"

////yield做的迭代器，相比较定义类实现 Iterator 接口的方式，性能开销和复杂性大大降低。--1
//$input = <<<'EOF'
//1;PHP;Likes dollar signs
//2;Python;Likes whitespace
//3;Ruby;Likes blocks
//EOF;
//function input_parse($input){
//    foreach(explode("\n",$input) as $line){
//        $fields = explode(";",$line);
//        $id = array_shift($fields);
//        yield $id => $fields;
//    }
//}
//echo "<pre>";
//foreach(input_parse($input) as $id => $fields){
//    echo "$id:\n";
//    echo "  $fields[0]\n";
//    echo "  $fields[1]\n";
//}

////yield做的迭代器，斐波拉契亚数列 --2 *******高效********
//function getFibonacci(){
//    $i=0;
//    $k=1;
//    $tmp =0;
//    yield $k;
//    while(true){
//        $tmp = $k;
//        $k = $i + $k;
//        $i = $tmp ;
//        yield $k;
//    }
//}
//function getFibonacciOld($n){   //效率低下
//    if ($n <= 0) {
//        return 0;
//    } elseif ($n == 1) {
//        return 1;
//    } else {
//        return getFibonacciOld($n - 1) + getFibonacciOld($n - 2);
//    }
//}
//$count = 0;
//foreach(getFibonacci() as $fibonacci){
//    echo $fibonacci . "\n";
//    $count++;
//    if ($count>100){
//        break;
//    }
//}
//for($i=1;$i<=100;$i++){ //服务器会超时
//    echo  getFibonacciOld($i);
//    echo "&nbsp;&nbsp;";
//}

////yield，将range实现成生成器 --3
//function xRange($start,$limit,$step){
//    for($i = $start;$i <= $limit; $i += $step){
//        yield $i;
//    }
//}
//echo 'Single digit odd numbers from range():  ';
//foreach (range(1, 10000, 2) as $number) {
//    echo "$number ";
//}
//foreach(xRange(1,10000,2) as $number){
//    echo "$number ";
//}
//echo "\n";

////受限资源使用yield --4
//function getLines($file) {
//    $f = fopen($file, 'r');
//    try {
//        while ($line = fgets($f)) {
//            yield $line;
//        }
//    } finally {
//        fclose($f);
//    }
//}
//foreach (getLines("file.txt") as $n => $line) {
//    if ($n > 5) break;
//    echo $line;
//}

////测试=赋值对象是拷贝还是引用,通过例子看 对象正常赋值已经是引用了，应该是对普通变量或函数参数变量用
//class Test{
//    public $name;
//}
//$a = new Test();
//$a->name = "tom";
//$b = $a;
//$b->name = "mike";
//echo "a.name is $a->name .\n";
//echo "b.name is $b->name .\n";

//超全局变量
//function test() {
//    $foo = "local variable";
//
//    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
//    echo '$foo in current scope: ' . $foo . "\n";
//}
//
//$foo = "Example content";
//test();
////_SERVER
//$indicesServer = array('PHP_SELF',
//    'argv',
//    'argc',
//    'GATEWAY_INTERFACE',
//    'SERVER_ADDR',
//    'SERVER_NAME',
//    'SERVER_SOFTWARE',
//    'SERVER_PROTOCOL',
//    'REQUEST_METHOD',
//    'REQUEST_TIME',
//    'REQUEST_TIME_FLOAT',
//    'QUERY_STRING',
//    'DOCUMENT_ROOT',
//    'HTTP_ACCEPT',
//    'HTTP_ACCEPT_CHARSET',
//    'HTTP_ACCEPT_ENCODING',
//    'HTTP_ACCEPT_LANGUAGE',
//    'HTTP_CONNECTION',
//    'HTTP_HOST',
//    'HTTP_REFERER',
//    'HTTP_USER_AGENT',
//    'HTTPS',
//    'REMOTE_ADDR',
//    'REMOTE_HOST',
//    'REMOTE_PORT',
//    'REMOTE_USER',
//    'REDIRECT_REMOTE_USER',
//    'SCRIPT_FILENAME',
//    'SERVER_ADMIN',
//    'SERVER_PORT',
//    'SERVER_SIGNATURE',
//    'PATH_TRANSLATED',
//    'SCRIPT_NAME',
//    'REQUEST_URI',
//    'PHP_AUTH_DIGEST',
//    'PHP_AUTH_USER',
//    'PHP_AUTH_PW',
//    'AUTH_TYPE',
//    'PATH_INFO',
//    'ORIG_PATH_INFO') ;
//echo '<table cellpadding="10">' ;
//foreach ($indicesServer as $arg) {
//    if (isset($_SERVER[$arg])) {
//        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
//    }
//    else {
//        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
//    }
//}
//echo '</table>' ;
////$_GET $_POST
//echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!'; //注意若没有变量，则退出
//echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';

////bool转换，非空字符串都是true，只有0特殊 是false
//$test_bool = "0";
//var_dump((bool)$test_bool);

////or在使用时，一定要有括号
//$x = TRUE;
//$y = FALSE;
//$z = $y OR $x;  //$z为false，因为or优先级低，该语句等于 ($z=$y) OR $x
//var_dump( $z);

////integer下没有整除运算符，1/2为float 0.5，可使用int舍弃小数，或使用round四舍五入
//var_dump(25/7);
//var_dump((int)(25/7));
//var_dump(round(25/7))

////决不要将未知的分数强制转换为 integer
//echo (int) ( (0.1+0.7) * 10 ); // 显示 7!
//echo 1+ ((0.1+0.7) * 10 ) ; // 显示 9!

////This happens probably because $x is not really 1.6, but 1.599999.
//$x = 8 - 6.4;  // which is equal to 1.6
//$y = 1.6;
//var_dump($x == $y); // is not true
//var_dump(round($x, 2) == round($y, 2)); // this is true

////大括号与$
//$great = 'fantastic';
//echo "This is { $great}"; //no
//echo "This is {$great}";  //ok
//echo "This is ${great}";  //ok

////==================数组=============================================
//$array = array("foo" => "bar","basket" => "ball");
//$array = ["foo"=>"bar","basket"=>"ball"];
//$testarr = [8.3=>"tom",8.4=>"mike"];    //注意，key若是浮点型会被转换为整形，若相同则会被后面的覆盖
//foreach ($testarr as $key=>$value){
//    echo "$key" . ":" . $value;
//}
//echo "\n";
//$array = array(
//    1    => "a",
//    "1"  => "b",
//    1.5  => "c",
//    true => "d",
//);      //该数组只剩一个元素d，1.5会转换为1，true会转换为1
//foreach ($array as $key=>$value){
//    echo "$key" . ":" . $value;
//}
//echo "\n";echo "\n";echo "\n";
//$array = array("foo", "bar", "hallo", "world"); //会自动产生key
//foreach ($array as $key=>$value){
//    echo "$key" . ":" . $value . "\n";
//}
//
//echo "\n";echo "\n";echo "\n";
//$array = array("foo", "bar", 6=>"hallo", "world"); //会自动产生key 0 1 6 7
//foreach ($array as $key=>$value){
//    echo "$key" . ":" . $value . "\n";
//}
//
//echo "\n";echo "\n";echo "\n";
//$array = array("foo" => "bar",
//    24 => 42,
//    "multi" => array("zhang"=>"san",
//        "li"=>"si",
//        "addr"=>array("024"=>"shenyang",
//            "021"=>"shanghai")));
//echo $array["multi"]["addr"]["024"];
//
//echo "\n";echo "\n";echo "\n";
//$arr = array(5 => 1, 12 => 2);
//$arr[] = 56;    //产生一个新元素，key为13
//$arr["x"] = 42;     //添加一个新元素42，key为x
//unset($arr[5]);       //删除key为5的元素
//var_dump($arr);
//unset($arr);    //清空数组
//$arr=array(3=>"a",9=>"c",4=>"b");
//echo "\n";
//var_dump($arr);
//$arr = array_values($arr);  //重新索引数组
//var_dump($arr);
//
//echo "\n";echo "\n";echo "\n";
//$arr = [4,6,2,9,1];
//sort($arr); //对数组重新排序
//var_dump($arr);
//
//echo "\n";echo "\n";echo "\n";
////取出数组中的某一列，挺有用
//$arr = array(
//    array("id"=>1,"name"=>"tom","addr"=>"shenyang"),
//    array("id"=>2,"name"=>"mike","addr"=>"dalian"),
//    array("id"=>3,"name"=>"jack","addr"=>"changchun")
//);
//$addr = array_column($arr,"addr");
//var_dump($addr);    //取出一列作为数组输出
//$addr = array_column($arr,"addr","id");
//var_dump($addr);    //取出两列，最后一个参数为key 作为数组输出
//
//$a = array('green', 'red', 'yellow');
//$b = array('avocado', 'apple', 'banana');
//$c = array_combine($a, $b); //array_combine使用两个数组组合成一个
//
//$array = array(1, "hello", 1, "world", "hello");
//print_r(array_count_values($array));    //array_count_values获得数组中各个值出现的次数，[1] => 2 [hello] => 2    [world] => 1
//
//$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
//$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
//var_dump(array_diff_key($array1, $array2)); //array_diff_key比较两个数组key的差集，["red"]=>int(2) ["purple"]=>  int(4)
//
//$array1 = array("a" => "green", "red", "blue", "red");
//$array2 = array("b" => "green", "yellow", "red");
//$result = array_diff($array1, $array2); //array_diff比较两个数组值的差集，[1] => blue
//
//$keys = array('foo', 5, 10, 'bar');
//$a = array_fill_keys($keys, 'banana');  //array_fill_keys使用数组作为key填充值banana
//
//function odd($var)
//{
//    // returns whether the input integer is odd
//    return($var & 1);
//}
//$array1 = array(6, 7, 8, 9, 10, 11, 12);
//print_r(array_filter($array1, "odd"));  //array_filter调用过滤器函数对数组值进行循环判断，若是true该数组值被返回
//
//$trans = array("a" => 1, "b" => 1, "c" => 2);
//$trans = array_flip($trans);    //array_flip交换数组的key和value，如果同一个值出现了多次，则最后一个键名将作为它的值，所有其它的都丢失了
//print_r($trans);
//
//$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
//$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
//var_dump(array_intersect_key($array1, $array2));    //array_intersect_key取两个数组key的交集，得到blue green
//
//$array1 = array("a" => "green", "red", "blue");
//$array2 = array("b" => "green", "yellow", "red");
//$result = array_intersect($array1, $array2);    //array_intersect比较两个数组值的交集
//
//$search_array = array('first' => 1, 'second' => 4);
//if (array_key_exists('first', $search_array)) { //array_key_exists得到数组中是否存在指定key值
//    echo "The 'first' element is in the array";
//}
//
//$array = array(0 => 100, "color" => "red");
//print_r(array_keys($array));    //array_keys获得数组中key部分

function cube($n)
{
    return($n * $n * $n);
}
$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a); //array_map是将数组元素的值带入函数中运算，并返回运算后结果，注意与array_filter区别
print_r($b);

$func = function($value) {
    return $value * 2;
};
print_r(array_map($func, range(1, 5))); //使用lambda表达式的array_map

$a = array(1, 2, 3, 4, 5);
$b = array("one", "two", "three", "four", "five");
$c = array("uno", "dos", "tres", "cuatro", "cinco");
$d = array_map(null, $a, $b, $c);   //使用null函数的array_map，将会创建一个新的二维数组，第一个元素为  [0] => Array([0] => 1 [1] => one  [2] => uno )
print_r($d);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);//array_merge合并数组，若key重复，则后面的覆盖前面的，且key被重新编号
print_r($result);

$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;//+也是合并数组，但若key重复，则后面的会被忽略，且key不重新编号
var_dump($result);
?>