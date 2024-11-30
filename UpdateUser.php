<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
          <link rel="stylesheet" href="./css/delete.css" />
  </head>
 <body>
  <header class="header fixed">
      <div class="main-content">
        <div class="body">
          <!-- logo -->
          <!-- <a href="./index1.html"><img src="./img/Logo_Truong_Dai_hoc_Mo_-_Dia_chat-removebg-preview.png" alt="HUMG" class="logo" /></a> -->
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

        <form action="./GetUpdateUser.php" method="post">
          <div class="container">         
            <div class="content2">
              <form action="" id="form">    
                <div class="content1">
              <h1>Chỉnh sửa thông tin </h1>
              <p>!Nhanh chóng và !dễ dàng</p>
            </div>          
                <div>
                  <input
                    type="text"
                    class="password mnv"
                    placeholder="Mã sinh viên"
                    name="MaNhanVien"
                    oninput="CheckDelete()"
                  />
                </div>                             
                <div style="text-align:center;margin:20px 50px">
                  <button class="btn1" id="btn" disabled>Xác nhận</button>
                </div>
              </form>
            </div>
          </div>
          <script src="./js/validate.js"></script>
      </body>
</html>