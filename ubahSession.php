<?php
    session_start();
?>
<html>
    <body>
        <?php
            $_SESSION["makananfav"] = "Ayam Geprek";

            echo "Session makanan telah diubah";
        ?>
    </body>
</html>