
<form action="index.php" method="POST">
<div style="width:500px;height:70px;border-color:gray;border-style:solid;background-color:gray;">
      <h1 style="color:red;">Simple Calculator </h1></div>
      
           <br>
            <table>
         <tr>
         <td><b>First Number</b></td>
            <td> <input type="number" name="first_num" id="first_num" required="required" /></td>
         </tr>
         <tr>
         <td><b>Second Number</b></td>
            <td><input type="number" name="second_num" id="second_num" required="required" /></td>
         </tr>
         
      </table>
            
            <br>
           
           <br>
            
            <div style="width:500px;height:70px;border-color:gray;border-style:solid;background-color:gray";>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
            <button style=" border: none;color:black;padding: 10px 28px;text-align: center;background-color:#bebbbd;display: inline-block;" type="reset" value="Reset" >Reset</button>
          </div>
          
      </form>
	 </div>

     <?php

if(isset($_POST['operator']))
{
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];


    switch ($operator) 
    {
        
        case "Add":
            echo"<b><big>Result</b><big>=".$result = $first_num + $second_num;
            break;
        case "Subtract":
            echo"<b><big>Result</b><big>=".$result = $first_num - $second_num;
            break;
        case "Multiply":
            echo"<b><big>Result</b><big>=".$result = $first_num * $second_num;
            break;
        case "Divide":
            echo"<b><big>Result</b><big>=".$result = $first_num / $second_num;     
        }      
}

?>