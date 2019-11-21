<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $num=0;
        $num2=1;
        $x=0;
        echo ("<table>");
        for($i=0;$i<=10;$i++){
            
            echo ("<td> $x </td>");  
            $x = $num + $num2;
            $num = $num2;
            $num2 = $x;
        }
        echo ("</table>");
    ?>
</body>
</html>