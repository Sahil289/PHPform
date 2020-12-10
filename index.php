<!DOCTYPE html>
<html>
<head>
    <title>HTML Page</title>
</head>
<body>
    <form action="process.php" method="POST">
        <b>Enter your name:</b><input name="n1" type="text">
        <input type="submit">
    </form>
    <?php
        $people = array("Sahil", "Sunil","Dalvi");
        foreach($people as $person){
            echo $person. "<br>";
        }
    ?>
</body>
</html>