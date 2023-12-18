<html>
    <body>
        <?php
            $var_multiplier = 12;
            $var_numberOfMultiples = 12;
            echo "สูตรคูณแม่ $var_multiplier <br>";
            for ($i = 1; $i <= $var_numberOfMultiples; $i++) { 
                $var_result = $var_multiplier * $i;
                echo "$var_multiplier x $i = $var_result<br>";
        }
        ?>
       
        </div>
    </body>
</html>
