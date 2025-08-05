<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>

<body>
    <?php
    $stringg = "Hello Alex";
    $boolean = "false";
    $num    = "123";
    $float  = "1,15";
    $ary    = ['a', 'b', 3, true]
    ?>

    <h1><?php echo $stringg; ?></h1>

    <!-- cara cek tipe data -->
    <h1><?php echo gettype($stringg); ?></h1>
    <h1><?php var_dump($stringg); ?></h1>
    <h1><?php echo is_string($stringg); ?></h1>
</body>

</html>