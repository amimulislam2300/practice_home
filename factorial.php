<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter the number:
        <input type="number" name="number">
    </form>
    <?php
    if($_POST){
        $number =$_POST['number'];
        $fact = 1;
        for($i=1;$i<=$number;$i++){
            $fact = $fact*$i;
        }
        echo "<br>$number factorial is $fact";
    }
    ?>
</body>
</html>