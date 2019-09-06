<html>
<head>
<title>Upload Form</title>
</head>
<body>


<?php echo form_open('SaveData/save_data');?>

Student Name : 
<input type="text" name="txtName"><br><br>

Student Email: 
<input type="email" name="txtEmail"><br><br>

Student Phone Number: 
<input type="number" name="txtPhone"><br><br>
<?php echo form_submit("btnSubmit","Save User!"); ?>
</form>

</body>
</html>