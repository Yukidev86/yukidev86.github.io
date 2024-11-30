<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
             <link rel="stylesheet" href="./css/NewStyle.css">
    <style>
      .update-error {
        width: 500px;
        height: 500px;
        border: 2px solid;
        margin: 0 auto;
      }
      a{
        color:white;
      }
    </style>
  </head>
  <body >
    <?php 
          include "connect.php";
         $id = $_GET['id'];
         $sql = "SELECT * FROM `yahoo` WHERE id = $id;";
               $result =  mysqLi_query($conn,$sql);
         if (!$result || mysqli_affected_rows($conn) > 0) {         
               while($data = mysqLi_fetch_array($result)){    
    ?>
    <header class="header fixed">
      <div class="main-content">
        <div class="body">
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
          <form action="./Service/UpdateUser.php" method="get">
              <div class="container">
            <div class="content1">
              <h1>Chỉnh sửa thông tin</h1>
              <p>Nhanh chóng và !dễ dàng</p>
            </div>
            <div class="content2">
              <form action="" id="form">
                <div class="text-1" for="">
                   <input
                    type="text"
                    placeholder="họ"
                    class="ho"
                    name="id"  
                    value=<?php echo $data["id"]?>
                    hidden                 
                  />
                  <input
                    type="text"
                    placeholder="họ"
                    class="ho"
                    name="Ho"  
                    value=<?php echo $data["Ho"]?>
                    oninput="checkUpdateInput()"                 
                  />
                  <input
                    type="text"
                    placeholder="tên"
                    class="ten"
                    name="Ten"
                    value=<?php echo $data["Ten"]?>   
                    oninput="checkUpdateInput()"                 
                  />
                </div>
                <label for="phone-email">
                  <input
                    class="phone-email"
                    type="text"
                    placeholder="emaii"
                    name="Email"       
                    value=<?php echo $data["Email"]?>  
                    oninput="checkUpdateInput()"  
                  />
                </label>

                <div>
                  <input
                    type="password"
                    class="password"
                    placeholder="password"
                    name="password"
                    disabled 
                  />
                </div>
                <div>
                  <input
                    type="text"
                    class="password mnv"
                    placeholder="Mã Nhân Viên"
                    name="MaNhanVien"
                    value=<?php echo $data["MaNhanVien"]?>
                    oninput="checkUpdateInput()"
                   
                  />
                </div>
                <div>
                  <input
                    type="text"
                    class="password ns"
                    placeholder="Nơi sống"
                    name="NoiSong"
                    value=<?php echo $data["NoiSong"]?>
                    oninput="checkUpdateInput()"  
                  />
                </div>
                <div>
                  ngày sinh
                  <div class="birth">
                    <div>
                      <label for="">
                        <select name="birth-day" id="birthday" >
                        <?php
                            for($i=1;$i<=31;$i++){
                             ?>
                             <option value=<?php echo $i?>><?php echo $i?></option>
                        <?php
                            } 
                             ?>
                        </select>
                      </label>
                    </div>
                    <div>
                      <label for="">
                        <select name="birth-month" id="birthmonth" >
                          <?php
                            for($i=1;$i<=12;$i++){
                             ?>
                             <option value=<?php echo $i?>><?php echo $i?></option>
                        <?php
                            } 
                             ?>
                        </select>
                      </label>
                    </div>
                    <div>
                      <label for="">
                        <select name="birth-year" id="birthyear" >
                          <?php
                            for($i=2000;$i<=2024;$i++){
                             ?>
                             <option value=<?php echo $i?>><?php echo $i?></option>
                        <?php
                            } 
                             ?>
                        </select>
                      </label>
                    </div>
                  </div>
                </div>

                <div>
                  Giới tính
                  <div class="Gender">
                    <div>
                      <label for="male">Nam</label>
                      <input
                        type="radio"
                        id="male"
                        name="gender"
                        value="Nam"
                        class="check-gender"
                      />
                    </div>
                    <div>
                      <label for="female">Nữ</label>
                      <input
                        type="radio"
                        id="female"
                        name="gender"
                        value="Nữ"
                        class="check-gender"
                      />
                    </div>
                    <div>
                      <label for="other">Tuỳ chọn</label>
                      <input
                        type="radio"
                        id="other"
                        name="gender"
                        value="other"
                        class="check-gender"
                        selected
                      />
                    </div>
                  </div>
                </div>
                <div class="btn1"><button id="btn" disabled>Hoàn thành</button></div>
              </form>
            </div>
          </div>
          </form>
  <?php }}?>
          <script src="./js/validate.js"></script>
  </body>
</html>
