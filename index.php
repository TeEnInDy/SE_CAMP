<html>

<body>
    <link rel="stylesheet" href="class.css">
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="stylesheet" href="sticky.css">
    <?php include ('cal.php');?>

    <div class="container3">
            <img src="https://media.giphy.com/media/duXouwPAEINMmFS6Xn/giphy.gif">
        </div>
        <div class="container4">
            <img src="https://media.giphy.com/media/sCYjsNKCpiNlZ9jiuR/giphy.gif">
        </div>
        <div class="container1">
            <img src="https://media.giphy.com/media/tJqyalvo9ahykfykAj/giphy.gif">
        </div>
<center>
        <?php 
        for ($i = 1; $i <= 24; $i++) {
            echo '<div class="message-container">';
            myMessage($i);
            echo '</div>';
        }
        ?>

        </div>
    
    </div>
</center>
<div class="container5">
            <img src="https://media.giphy.com/media/Q22kcRdASuBvW/giphy.gif">
        </div>
        

</body>

</html>