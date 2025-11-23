<!-- Learning variables and data types in PHP --> 
<!DOCTYPE html>
<html>
<body>

<h1>Learning variables and data types page</h1>

<?php
// Declaring variables
$x = 10; // integer
$y = 20.5; // float
$name = "John Doe"; // string
$is_student = true; // boolean 
$fruits = array("Apple", "Banana", "Cherry"); // array

// Displaying variable values
echo "Integer: " . $x . "<br>";
echo "Float: " . $y . "<br>";
echo "String: " . $name . "<br>";
echo "Boolean: " . ($is_student ? 'true' : 'false') . "<br>";
echo "Array: " . implode(", ", $fruits) . "<br>";

// Displaying variable types
echo "Type of x: " . gettype($x) . "<br>";
echo "Type of y: " . gettype($y) . "<br>";
echo "Type of name: " . gettype($name) . "<br>";
echo "Type of is_student: " . gettype($is_student) . "<br>";
echo "Type of fruits: " . gettype($fruits) . "<br>";

// Variable scope example
$z = 5; // global scope

function testGlobalScope() {
  // using z inside this function will generate an error
  echo "<p>Variable z inside function is not accessible</p>";
} 

testGlobalScope();
echo "<p>Variable z outside function is: $z</p>";

// Local variable example
function testLocalScope() {
  $t = 5; // local scope
  echo "<p>Variable t inside function is: $t</p>";
} 

testLocalScope();
// using t outside the function will generate an error
echo "<p>Variable t outside function is not accessible</p>";

// Static variable example
function testStaticVariable() {
  static $y = 0;
  echo "Static variable value: $y";
  $y++;
  echo "<br>";
}

testStaticVariable();
testStaticVariable();
testStaticVariable();
?>

</body>
</html>