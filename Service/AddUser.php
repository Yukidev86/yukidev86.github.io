<?php
include "connectService.php";
$sql = 'SELECT * FROM yahoo';   
$id='';
$tenHo=$_POST['Ho'];
$tenGoi=$_POST['Ten'];
$NgaySinh=$_POST['birth-day'];
$ThangSinh=$_POST['birth-month'];
$NamSinh=$_POST['birth-year'];
$GioiTinh = $_POST['gender'];
$NoiSong = $_POST['NoiSong'];
$MaNhanVien=$_POST['MaNhanVien'];
$email=filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
$pass = $_POST['password'];
$sql = "SELECT * FROM yahoo where MaNhanVien = $MaNhanVien";
$result = mysqLi_query($conn,$sql);
$sql1 = "SELECT * FROM yahoo where Email = '$email'";
$result1 = mysqLi_query($conn,$sql1);

if($result->num_rows <= 0 && 
   $result1->num_rows <= 0 && 
   filter_var($_POST['Ho'],FILTER_SANITIZE_STRING) &&
   filter_var($_POST['Ten'],FILTER_SANITIZE_STRING) &&
   filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL) &&
   filter_var($_POST['MaNhanVien'],FILTER_VALIDATE_INT)){
    $sql = " INSERT INTO `yahoo` (`id`, `Ho`, `Ten`, `NgaySinh`, `ThangSinh`, `NamSinh`, `GioiTinh`, `NoiSong`, `MaNhanVien`, `Email`, `pass`) 
         VALUES (NULL, '$tenHo', '$tenGoi', $NgaySinh, $ThangSinh, $NamSinh, '$GioiTinh', '$NoiSong', '$MaNhanVien', '$email', '$pass');"; 
    mysqLi_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .container {
          width: 100vw;
          height: 100vh;
          display:flex;
          justify-content:center;
          align-items:center;
          --color: #E1E1E1;
          background-color: #F3F3F3;
          background-image: linear-gradient(0deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent),
                            linear-gradient(90deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent);
          background-size: 55px 55px;
         }
        .link{
            text-decoration:none;
            border:3px solid;    
            padding: 30px;
            border-radius:5px;
        }
        /* From Uiverse.io by portseif */ 
        button {
            border: 1px solid rgb(209, 213, 219);
            border-radius: 0.5rem;
            color: #111827;
            font-size: 0.875rem;
            font-weight: 600;
            line-height: 1.25rem;
            padding: 0.75rem 1rem;
            text-align: center;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            cursor: pointer;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            background-color: #ffffff;
        }
        
        button:hover {
            background-color: #f9fafb;
       }

        button:focus {
            outline: 2px solid rgba(0, 0, 0, 0.1);
            outline-offset: 2px;
          }

        button:focus-visible {
           -webkit-box-shadow: none;
           box-shadow: none;
        }


    </style>
</head>
<body>
   <div class="container"> 
  <form action="../CRUD.php">
       <h1>Thành công</h1>
       <br/>
       <button>Trở về trang chủ</button>
  </form>
</div>
</body>
</html>
<?php       
     } else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .container {
          width: 100vw;
          height: 100vh;
          display:flex;
          justify-content:center;
          align-items:center;
          --color: #E1E1E1;
          background-color: #F3F3F3;
          background-image: linear-gradient(0deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent),
                            inear-gradient(90deg, transparent 24%, var(--color) 25%, var(--color) 26%, transparent 27%,transparent 74%, var(--color) 75%, var(--color) 76%, transparent 77%,transparent);
          background-size: 55px 55px;
         }
        .link{
            text-decoration:none;
            border:3px solid;    
            padding: 30px;
            border-radius:5px;
        }
        /* From Uiverse.io by portseif */ 
        button {
            border: 1px solid rgb(209, 213, 219);
            border-radius: 0.5rem;
            color: #111827;
            font-size: 0.875rem;
            font-weight: 600;
            line-height: 1.25rem;
            padding: 0.75rem 1rem;
            text-align: center;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            cursor: pointer;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-user-select: none;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            background-color: #ffffff;
        }
        
        button:hover {
            background-color: #f9fafb;
       }

        button:focus {
            outline: 2px solid rgba(0, 0, 0, 0.1);
            outline-offset: 2px;
          }

        button:focus-visible {
           -webkit-box-shadow: none;
           box-shadow: none;
        }


    </style>
</head>
<body>
   <div class="container"> 
    <h1></h1>
  <form action="../CRUD.php">
       <button><?php echo "Lỗi: đã tồn tại mã sinh viên hoặc email" ?></button>
  </form>
</div>
</body>
</html>
<?php
       }
?>