<?
include("db.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
</head>
<body>

clinic
<form action="clinic.php" method="get">
    <input type="hidden" name="id_clinic">
    <input type="text" name="name">
    <input type="text" name="address">
    <input type="text" name="main_MD">
    <input type="text" name="phone_clinic">
    <input type="submit">
</form>


department
<form action="department.php" method="get">
    <input type="hidden" name="id_department">
    <input type="hidden" name="id_clinic">
    <input type="text" name="zav">
    <input type="text" name="phone_department">    
    <input type="submit">
</form>


medicine doctor
<form action="md.php" method="get">
    <input type="hidden" name="id_md">
    <input type="hidden" name="id_clinic">
    <input type="hidden" name="id_department">
    <input type="text" name="lastname">    
    <input type="text" name="born_year">    
    <input type="text" name="specialization">    
    <input type="submit">
</form>
    






</body>
</html>