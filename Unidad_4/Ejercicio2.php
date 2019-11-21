<html>
    <body>
       
        <h1>
            <?php

            /******************************************************************
             *
             * (expresion 1) ? expresion2 : expresion3;
             *
             * El operador ternario puede verse como una versión compacta de if...else
             * Si expresion1 es cierta, la expcresión global vale expresion2. En caso contrario, vale expresion3
             *
             * ***************************************************************/
            
           
           $x = 1;
           $y = 1;
          
           echo ($x++==++$y) ? "tenemos muchos productos" : "hay que pensar en reponer";
           
            ?>   
           
        </h1>
       
    </body>
</html> 