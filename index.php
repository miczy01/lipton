<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $x = 5;
    // echo $x; 

//     // $GLOBALS is an associactive array that stores all variable created  except the  one inside function 
// $john = 5;
// function alex(){
//     echo $GLOBALS['john'];
// }

// alex();

// // the global keyword works with the echo key word
// $john = 5;
// function alex(){
//     global $john;
//     echo $john;
// }
// alex();

// // $server Methods
// echo $_SERVER['PHP_SELF'] 
// echo $_SERVER['SERVER_NAME'] 
// echo $_SERVER['HTTP_HOST']  
// echo $_SERVER['HTTP_REFERER']  
// echo $_SERVER['HTTP_USER_AGENT']   
// echo $_SERVER['SCRIPT_NAME']    
echo $_SERVER['REQUEST_METHOD']   

// PHP$_POST
?>
<h1> <?php echo "Alex is here" ?> </h1>
<h1> <?= "Alex is here"?> </h1> 
<form action="handle.php"method="post">
    <input type="text" name="num1"/>
    <input type="text" name="num2"/>
    <button type="submit"> Submit</button>
</form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo $num1 + $num2;
    }
    ?>

    </body>
</html>