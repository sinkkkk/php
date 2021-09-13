<?php

/* $a=1;
$a++;
$a--;
$a+=2;
$a-=1;
$a*=2;
$a/=2;
$a%=2;
$a=1;
$a = $a<<10;

$b = 10;
if($b < 10){
    echo "smaller";
} elseif($b === 10){
    echo "equal";
} else {
    echo "bigger";
} */

/* $a = 10;
switch($a) {
    case 1:
    case 2:
        echo "yks";
        break;
    case 10:
        echo "kymme";
        break;
    default:
        echo "matten mäerand";
        break;
} */
 
/* for($i=0;$i<100;$i++){
    echo $i. "\n" ;
}
$i = 0
while($i<10) {
    echo $i . "\n";
    $i++;
}
do {
    echo $i . "\n";
    $i++; 
}  while ($i<10);
 */
/* 
 $kaka = [1,2,3,4,5];

 foreach($kaka as $key => $value){
     echo $value . "\n";
 } */

/*  function add($a, $b): int 
 */
/* 
class Animal {
    private $isMale;
    public $name;
    protected $color;

    public function __construct($name, $color, $isMale){
        $this->name = $name;
        $this->isMale = $isMale;
        $this->color = $color;

    }
}

class Cat extends Animal {
    use HasLegs;
    public function getColor(){
        return $this->color;
    }
    public function getIsMale(){
        return $this->isMale;
    }
}

trait  HasLegs {
    public $nlegs;
    public function walk(){
        if($this->nLegs <=0) {
            echo "WHERE ARE MY LEGSS BOII";
        } elseif ($this->nLegs === 1 ) {
            echo "*jumping sound effect*";  
        } else {
            echo "*müta müta müta*";
        }
    }
}

$animal1 = new Cat("nuustiuk", false, "black/white");


$animal1->nLegs = 4;
var_dump($animal1->getColor());
$animal1->walk();
var_dump($animal1->getIsMale()); */

/* class TextLogger implements Logger{
    public function log($message) {
        echo "$message\n";
    }
}

interface Logger {
    public function log($message);
}

class CoolJob {
    private $logger;
    public function __construct(Logger $logger){
        $this->logger = $logger;
    }
    public function task(){
        
        for($i=0;$i<10000;$i++){
            $this->logger->log($i);
        }
    }
}

class FileLogger implements Logger {
    public function log($message) {
        file_put_contents('log.txt', $message, FILE_APPEND);
    }
}

$logger = new FileLogger();

$job = new CoolJob($logger);
$job->task(); */

spl_autoload_register(function($class){
    $parts = explode('\\', $class);
    unset($parts[0]);
    $path = __DIR__."\\..\\src\\" . implode('\\', $parts) . ".php";
    require_once ($path);
});


switch($_SERVER['REQUEST_URI']){
    case '/':
        echo "home page";
        break;
    case '/posts':
        echo "some posts";
        break;
    default:
        echo "error 404";
        break;
}