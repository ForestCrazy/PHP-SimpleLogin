<?php
session_start();
// เป็นการเริ่มการทำงานของ session
/*
session มีคุณสมบัติทุกอย่างเหมือนกับตัวแปรปกติ สามารถเก็บค่าข้อความหรือตัวเลขได้ แต่มีความพิเศษคือค่าตัวแปรจะยังคงอยู่ไม่ว่าจะเปลี่ยนหน้าไปหน้าใดก็ตาม 
ตัวแปรเซสชั่นนิยมนำมาใช้ในการจดจำการล็อกอิน หากมีการปิดหน้าเว็บข้อมูลใน session จะหายไปทันที

สำคัญ session_start ต้องอยู่บน tag html หรือ อยู่บนสุดของโค้ด
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP - Simple Login/Register</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php if (isset($_SESSION["username"])) { 
        // ถ้ามีการล็อกอินอยู่แล้วให้ทำงานใน {} นี้    
        ?>
            <div class="justify-content-md-center">
                <h2>Welcome! <?php echo $_SESSION["username"]; ?></h2><br>
                <a href="register.php">Goto Register page</a><br><br>
                <a href="logout.php">Logout</a>
            </div>
        <?php } else { 
        // แต่ถ้าเงื่อนไขที่ผ่านมาไม่ถูกต้องทั้งหมด ก็จะมาทำงานที่ else    
        ?>
            <div class="justify-content-md-center">
                <h2>You are not logged in.</h2><br>
                <a href="register.php">Goto Register page</a><br><br>
                <a href="login.php">Goto Login page</a>
        <?php } ?>
    </div>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>