<html>
    <body>
    <link rel="stylesheet" href="class.css">
    <center> 
        <div class="box">
            <div class="fontchange">
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
        </div>
        </center>
        <div class="container1" > 
        <img src="https://media.giphy.com/media/tJqyalvo9ahykfykAj/giphy.gif" alt="">
        </div>
        <div class="container2" >
            <img src="https://media.giphy.com/media/Q22kcRdASuBvW/giphy.gif" alt="">
        </div>

        
    </body>
</html>
