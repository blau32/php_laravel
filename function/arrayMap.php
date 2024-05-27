<?php 
$parameters = [" space ", " array "," space "];

echo "<pre>";
var_dump($parameters);
echo "spaces are counted";
echo "</pre>";

$trimedParameters = array_map("trim", $parameters);

echo "<pre>";
var_dump($trimedParameters);
echo "spaces are removed";
echo "</pre>";

?>