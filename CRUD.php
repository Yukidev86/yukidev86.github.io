<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="stylesheet" href="headerStyle.css" />
  
  <style>
    button{
      text-decoration:none;
      padding: 5px 10px;
      border-radius:5px;
      cursor: pointer;
      font-weight:700;
      margin:5px;
    }
    a{
      text-decoration:none;
    }
    .add a{
      color:orange;
    }
    button:hover{
      opacity: 0.5;
    }
    .add{
      color:orange;
      border:1px solid orange;
    }
    .container{
      padding: 0 50px;
    }
    table { 
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
   td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  white-space:nowrap;
  overflow:hidden;
  text-overflow:ellipsis;
  max-width:150px;
   }

  tr:nth-child(even) {
  background-color: #dddddd;
  }
  .all{
  display:flex;
  justify-content: center;
  align-items:center;
  }
  </style>
</head>
<body>
  <?php
include "connect.php";

//lấy dữ liệu từ bảng
$sql = 'SELECT * FROM yahoo';
$result =  mysqLi_query($conn,$sql);
//update
// $sql = "UPDATE `info` SET `email`='$email',`pass`='$pass',`username`='$username' WHERE id = 10;";
//không có cái này không chạy được
mysqLi_query($conn,$sql);

?>
 <header class="header fixed">
      <div class="main-content">
        <div class="body">
          <!-- nav-->
          <nav class="nav">
            <ul>
              <li class="active">
                <a href="./index1.html">Trang chủ</a>
              </li>
              <li>
                <a href="./CRUD.php">Bắt đầu</a>
              </li>
            </ul>
          </nav>
          <!-- btn action -->
          <div class="action">
            <a href="./introduce/Member.html" class="btn btn-sign-up">Giới thiệu</a>
          </div>
        </div>
      </div>
    </header>

<div class="hero">
  <div style="text-align: center;">
        <h1>Danh sách thông tin sinh viên</h1>
      </div>
  <div  class="all">
    <div style="text-align: center;font-size: 20px;margin-bottom:30px;" >
          <button class="add" ><a href="./AddNewUser.php">Thêm sinh viên</a></button>
    </div>
  </div>
  
  <div class="container">
    <form  method="GET">
      <table >
        <tr>      
          <th>Mã sinh viên</th>
          <th>Họ và tên đệm</th>
          <th>Tên</th>
          <th>Ngày sinh</th>
          <th>Nơi sống</th>
          <th>email</th>
          <th>action</th>
        </tr>
        <tr>
          <?php
               include "connect.php";
               $sql = 'SELECT * FROM yahoo';
               $result =  mysqLi_query($conn,$sql);
              if (!$result || mysqli_affected_rows($conn) < 0) {
                echo "Lỗi truy vấn hoặc không có kết quả " ;
                } else {            
               while($data = mysqLi_fetch_array($result)){           
         ?>
         <td> 
          <input type="hidden" name="MaNhanVien" value=<?php echo $data["MaNhanVien"]?>>
          <?php echo $data["MaNhanVien"]?>
        </td>
        <td>
           <input type="hidden" name="Ho" value=<?php echo $data["Ho"]?>> 
           <?php echo $data["Ho"]?>
        </td>
        <td> 
          <input type="hidden" name="Ten" value=<?php echo  $data["Ten"]?>>
          <?php echo $data["Ten"]?>
        </td>
        <td> 
          <input type="hidden" name="NgaySinh" value=<?php echo $data["NgaySinh"]?>>
          <input type="hidden" name="ThangSinh" value=<?php echo $data["ThangSinh"]?>>
          <input type="hidden" name="NamSinh" value=<?php echo $data["NamSinh"]?>>
          <?php echo $data["NgaySinh"]."/".$data["ThangSinh"]."/".$data["NamSinh"]?>
        </td>
        <!-- <td> 
          <input type="hidden" name="GioiTinh" value=<?php echo $data["GioiTinh"]?>> 
          <?php echo $data["GioiTinh"]?>
        </td> -->
        <td> 
          <input type="hidden" name="NoiSong" value=<?php echo $data["NoiSong"]?>>
          <?php echo $data["NoiSong"]?>
        </td>
        <td  > 
          <input type="hidden" name="Email" value=<?php echo $data["Email"]?>>
          <?php echo $data["Email"]?>
        </td>
         <td>
            <a 
              href="GetUpdateUser.php?id=<?php echo $data['id'] ?>" 
              style=" background-color: #FBBE00; color : black; padding:5px; border-radius:5px;margin: 0 5px">
              Cập nhật
            </a>
            <a 
              href="./Service/DeleteUser.php?id=<?php echo $data['id'] ?>" 
              style=" background-color: #DC3640; color : white; padding:5px; border-radius:5px">
              Xóa
            </a>
        </td>
      </tr>
      
         <?php            
         } 
        }
         ?>
      </table>
    </form>
</div>
</div>
</body>
</html>

              