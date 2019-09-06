<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php echo validation_errors(); ?>
    <?php echo form_open("form"); ?>

    <h5>Username</h5>
    <input type="text" name="username" value="" size="50">

    <h5>Password</h5>
    <input type="text" name="password" value="" size="50">
<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />
    <h5>Password Confirm</h5>
    <input type="text" name="passconf" value="" size="50">
    
    <h5>Email Address</h5>
    <input type="text" name="email" value="" size="50" />

    <div><input type="submit" value="submit"></div>
</body>
</html>