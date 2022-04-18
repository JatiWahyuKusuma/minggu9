<?php
    session_start();
?>
<html>
    <body>
        <?php
            $_SESSION["makananfav"] = "rujak";
            $_SESSION["minumanfav"] = "Es teller";
            echo "session telah diset";
        ?>
    </body>
</html>