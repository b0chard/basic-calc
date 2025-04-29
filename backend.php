<?php
  if(isset($_GET["calculate"])){
    $input1 = (float) $_GET["num1"];
    $input2 = (float) $_GET["num2"];
    $operator = $_GET["operation"];
    $result = null;

    if(empty($input1) || empty($input2)){
      echo "specify a number into the first and second input.";
      return;
    }
    elseif($operator == "select"){
      echo "select an operation.";
      return;
    }

    switch($operator){
      case "add":
        $result = $input1 + $input2;
        echo "The sum is {$result}";
        break;
      case "subtract":
        $result = $input1 - $input2;
        echo "The difference is {$result}";
        break;
      case "multiply":
        $result = $input1 * $input2;
        echo "The product is {$result}";
        break;
      case "division":
        $result = $input1 / $input2;
        echo "The quotient is {$result}";
        break;
    }
  }
?>