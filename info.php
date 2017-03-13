<?php
class Triangle
{
    public $side1;
    public $side2;
    public $side3;

    function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
}
$side1 = $_GET["sideA"];
$side2 = $_GET["sideB"];
$side3 = $_GET["sideC"];


$test = new Triangle = array($side1, $side2, $side3);



function isTriangle() {

    if (($this->side1 == $this->side2) && ($this->side2 == $this->side3)) {
      echo "<p>Congrats you have an equilateral triangle</p>";
    }
    elseif (($this->side1 == $this->side2) || ($this->side3 !== $this->side1)) {
      echo "<p>congrats you have an isosceles triangle</p>";
    } elseif (($this->side2 == $this->side3) || ($this->side1 !== $this->side2)){
      echo "<p>congrats you have an isosceles triangle</p>";
    } elseif (($this->side3 == $side1) || ($this->side2 !== $this->side3)) {
      echo "<p>congrats you have an isosceles triangle</p>";

    }
    elseif (($this->side1 !== $this->side2) || ($this->side2 !== $this->side3) || ($this->side1 !== $this->side3))  { echo "<p>How dare you create a scalene triangle we have laws about that</p>";
    }
    else { echo "<p>That's not a triangle and you should be ashamed of yourself</p>";}

  }


?>

<!DOCTYPE html>
<html>
<head>
    <title>Triangle!</title>
</head>
<body>
    <h1>Triangle classifier</h1>
<?php


?>

</body>
</html>
