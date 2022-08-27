<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fav Color</title>
    <style>
        .abc{
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; color:red; text-decoration:underline">Color Game</h1>



  <form method="POST"  class="abc">
    Enter your Fav. Color:<input type="text" name="favcolor">
    <input type="submit" name="submit" value="Check Now">
  </form>  
  <p style="text-align:center">
    <?php
    if(isset($_POST['submit'])){
    $favColor= $_POST['favcolor'];

        switch ($favColor) {
            case 'red':
                echo "your favourite color is red";
                break;
                case 'blue':
                    echo "your favourite color is blue";
                    break;
                    case 'green':
                        echo "your favourite color is green";
                        break;
                        case 'yellow':
                            echo "your favourite color is yellow";
                            break;
                            case 'pink':
                                echo "your favourite color is pink";
                                break;
            
            default:
                echo "Does not exit your color";
                break;
        }
    }

    


    ?>
  </p>
</body>
</html>