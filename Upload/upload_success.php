<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Your file wa successfully uploaded !</h3>
    <ul>
        <?php foreach($upload_data as $item=>$value): ?>
        <li><?php $item; ?>: <?php echo $value; ?></li>
<?php endforeach; ?>
    </ul>

    <p><?php echo anchor('upload','Upload Another File !'); ?></p>
</body>
</html>