<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
        $libro1=array(
            "Título"=>"Don Quijote",
            "Autor"=>"Cervantes",
            "Fecha"=>1615);
        $libro2=array(
            "Título"=>"El hobbit",
            "autor"=>"Tolkien",
            "fecha"=>1937);
     
        $biblioteca=array("lib1"=>$libro1,"lib2"=>$libro2);

        foreach($biblioteca as $biblio => $b){
            foreach($b as $lib => $l){
                echo $lib." ";
                echo $l."<br>";
            }
        }
    ?>  
</body>
</html>