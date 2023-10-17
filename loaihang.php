<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADD-SP</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="boxcenter">
      <div class="row mb headeradmin">
        <h1>Quan Tri WebSite</h1>
      </div>
      <div class="row mb menu">
        <ul>
          <li><a href="tchuadmin.php">Trang Chủ</a></li>
          <li><a href="loaihang.php">Loại Hàng  </a></li>
          <li><a href="hanghoa.php">Hàng Hóa</a></li>
          <li><a href="khachhang.php"> Khách Hàng </a></li>
          <li><a href="bluan.php">Bình luận </a></li>
          <li><a href="dhang.php">Đơn hàng </a></li>
          <li><a href="#">Thống kê </a></li>
        </ul>
      </div>
      <div class="row">
        <div class="row formtitle"><h1>QUAN LY LOAI HANG</h1></div>
        <div class="row formct">
          <form action="" method="post">
            <div class="row mb10">
              Ma loai <br />
              <input type="text" name="idloai" disabled placeholder="auto number"/>
            </div>
            <div class="row mb10">
              Ten loai <br />
              <input type="text" name="nameloai" />
            </div>

            <div class="row mb10">
              <input type="submit" value="THEM MOI" />
              <input type="reset" value="NHAP LAI" />
              <a href="dsloaihang.php"
                ><input type="button" value="DANH SACH"
              /></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
