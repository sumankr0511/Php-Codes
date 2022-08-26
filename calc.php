<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: white;
            transition: -5s;
        }
        .abc{
            text-align: center;
           
        }
        p{
          
            font-size: 25px;
            margin-top: 15px;
        }
        h1{
            color:red;
            font-size: 50px;
            margin-top: 20px;
            padding-bottom: 30px;
        }
        .btn{
            font-size: 20px;
            padding: 8px;
            background-color: blue;
            color: white;
        }
       
    </style>
</head>
<body>
    <div class="abc">
    <h1> Simple Calculator</h1>
    <form action="" method="POST">
     <input type="text" name="num1" placeholder="Enter the no."></br></br>
     <input type="text" name="num2" placeholder="Enter the no."></br></br>
     Select Operation: <select name="operation">
        <option value="add">Add</option>
        <option value="sub">Sub</option>
        <option value="mul">Mul</option>
        <option value="div">Div</option>
        <option value="mod">Mod</option>
     </select></br></br>
     <button type="submit" name="submit" class="btn">Submit</button>
     </form>
     <p>
        <?php
    if(isset($_POST['submit'])){
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
    $operation=$_POST['operation'];
    switch ($operation) {
        case 'add': $sum=$num1+$num2;
            echo "Result : add is two no. is :$sum";
            break;
            case 'sub': $sub=$num1-$num2;
            echo "subtraction is two no. is :$sub";
            break;
            case 'mul': $mul=$num1*$num2;
            echo "multiply is two no. is :$mul";
            break;
            case 'div': $div=$num1/$num2;
            echo "division is two no. is :$div";
            break;
            case 'mod': $mod=$num1%$num2;
            echo "module is two no. is :$mod";
            break;
        
        default:
            echo "Sorry its not exits.";
            break;
    }

    }


?>
     </p>



     </div>
   
</body>
</html>