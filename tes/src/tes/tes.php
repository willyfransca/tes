<html>
<?php
session_start();
$_SESSION['temp'] = "";
$_SESSION['temp1'] = "";
?>

<head></head>

<body>
    <center>
        <form action="" name="frmpost" method="POST">
            <input type="text" id="info" name="info"><br>

            <?php
            if (isset($_POST['submit'])) {
                $_SESSION['temp1'] = $_POST['info'];
                echo 'output:' . strrev($_POST['info']);
            } else {
                $_SESSION['temp'] = $_SESSION['temp1'];
            }
            ?>
            <br>
            <input type="submit" name="submit" id="submit" value="reverse">
            <input type="submit" name="undo" value="undo/redo">
        </form>
    </center>


</body>


</html>