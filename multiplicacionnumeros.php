<!DOCTYPE html>
<html>
<head>
    <title>UPJR</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.2/dist/css/bootstrap.css">	
</head>
<body>

    <?php 

        $num1=$_REQUEST["num1"];   
        $num2=$_REQUEST["num2"];
        $num3=$_REQUEST["num3"];
        $multiplicacion=$num1*$num2*$num3;

        echo($multiplicacion);  

    ?> 

<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script> 
<script type="text/javascript" src="js/conecta.js"></script> <!--Vincular a archivo script!-->
</body>
</html>