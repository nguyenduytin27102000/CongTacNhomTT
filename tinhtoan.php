<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $soA = $soB = 0;

    if (isset($_POST['soA']) && isset($_POST['soB'])) {
        $soA=$_POST['soA'];
        $soB=$_POST['soB'];
    }
    function PhepCong($a, $b)
    {
        return $a + $b;
    }
    ?>

    <h1>Form nhap phep tinh</h1>
    <form action="" method="POST">
        <label for="soA">Nhap so A:</label>
        <input type="text" name="soA" id="soA" value="<?php echo $soA ?>">
        <label for="soB">Nhap so B:</label>
        <input type="text" name="soB" id="soB" value="<?php echo $soB ?>">
        <label for="kq">Ket qua: </label>
        <input type="text" name="kq" id="kq" value="<?php echo PhepCong($soA, $soB) ?>">
        <input type="submit" value="Tinh">
    </form>
</body>

</html>