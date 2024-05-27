<?php 
class Bag {
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function describe() {
        return "このbagの色は" . $this->color . "です。";
    }
}

$myCar = new Bag("赤");
echo $myCar->describe()."<br>"; // この車の色は赤です。


// public $color;を消すとreturn "このbagの色は" . $this->color . "です。";のcolorが参照できなくなる

// public function __construct($color) {
  // $this->color = $color;
// }の $this->color = $color;部分を消すとインスタンスの赤が反映されなくなる
// ------------------------------------

// クラス　段階別


// class
class Student1 {
  function avg(){
    echo ((80 + 70)/ 2)."\n";
  }
}

$result = new Student1();
echo $result->avg();

// class 引数　変数
class Student2 {
  function avg($math, $english){
    echo (($math + $english)/ 2)."\n";
  }
}

$result = new Student2();
echo $result->avg(100,99)."\n";


// property

class Student3 {
  public $name;
  function avg($math, $english){
    echo (($math + $english)/ 2)."\n";
  }
}

$result = new Student3();
$result->name = "Bob3";
echo $result->name."\n";

// constructor
class Student4 {
  public $name;
  
  public function __construct() {
    $this->name = "john4";
    // this にインスタンスが代入される
  }

    function avg($math, $english){
    echo (($math + $english)/ 2)."\n";
  }
}

$result = new Student4();
echo $result->name= "Tom4"."\n";

$result2 = new Student4();
echo $result2->name."\n";

// constructor+variable
class Student5 {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
    // this にインスタンスが代入される
  }

    function avg($math, $english){
    echo (($math + $english)/ 2)."\n";
  }
}

$result = new Student5("Bob5");
echo $result2->name."\n";

$result2 = new Student5("Tom5");
echo $result2->name."\n";
// ------------------------


class Eldenring {
  public $job; 
  public $skill; 

  public function __construct($job, $skill){
    $this->job = $job;
    $this->skill = $skill;
  }

  public function introduce(){
    echo "my first character is ".$this->job." and his/her skill is ".$this->skill.".";
  }
}

$character = new Eldenring("wizard","glint stone");

echo $character->introduce();


?>