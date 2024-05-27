<?php 

function combine(string ... $name): string
{
  $combinedName = "";
  for($i = 0; $i < COUNT($name); $i++){
    $combinedName .= $name[$i];
    if($i != count($name) - 1){
      $combinedName .= "・";
    }
  }
  return $combinedName;
}

$lName = "lastname";
$fName = "familyname";
$name1 = combine($fName, $lName);

echo "result: ". $name1 ;
echo "<br>";

$variableLength = combine("test1","test2","test3");
echo $variableLength;

?>