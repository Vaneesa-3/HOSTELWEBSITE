<html>
<?php 
if(isset($_POST["op"]))
 {
  $num1=$_POST["num1"];
  $num2=$_POST["num2"];
  $op=$_POST["op"];
  switch($op)
    {
      case "+" : $result= $num1 + $num2;
                 break;
      case "-" : $result= $num1 - $num2;
                 break;
      case "x" : $result= $num1 * $num2;
                 break;
      case "÷" : $result= $num1 / $num2;
                 break;
    }             
 }
else 

    $result="";
    ?>
<form action="calc.php" method="post">
<p>
<b>First number</b><input name="num1" type = "number" value="<?php echo $num1;?>" required/>
&nbsp&nbsp
<b>Second number</b><input name="num2" type = "number" value="<?php echo $num2;?>" required/>
</p>
<p>
<input name="op" type = "submit" value="+"/>
<input name="op" type = "submit" value="-"/>
<input name="op" type = "submit" value="x"/>
<input name="op" type = "submit" value="÷"/>
</p>
<b>Result</b><input name="result" type = "number" value="<?php echo $result;?>"/>

</form>
</html>

