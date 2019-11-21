<html>
    <body>
       
        <h1>
            <?php

            $i = 0;
            echo ("<table><tr><th>Par</th><th>Impar</th></tr>");
            while ($i <= 1000)
            {
                ;
                if($i%2==0){
                    echo("<tr><td>$i</td><td></td></tr>");
                }else{
                    echo("<tr><td></td><td>$i</td></tr>");                    
                }
            
                $i++;
            }
            echo("</table>");
          
            ?>   
           
        </h1>
       
    </body>

</html>