<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
  $().ready(function() {
    $("#demoForm").validate({
      onfocusout: false,
      onkeyup: false,
      onclick: false,
      rules: {
        "username": {
          required: true,
        },
        "password": {
          required: true,
        }

      },
      messages: {
        "username": {
          required: "Bắt buộc nhập username",
        },
        "password": {
          required: "Bắt buộc nhập password",
        }
      }
    });
  });
</script>
<style>
  label.error {
    color: red;
  }
</style>
<div class="row mb">
  <div class="boxtitle">Tài Khoản</div>
  <div class="boxcontent formtk">
    <?php

    if (isset($_SESSION['user'])) {
      extract($_SESSION['user']);
    ?>
      <div class="row mb10 xc">
        XIN CHAO <br />
        <?= $username ?>
      </div>
      <div class="row mb10">
        <?php
        $hinhpath = "./upload/" . $hinh;
        if (is_file($hinhpath)) {
          $hinh = "<img src='" . $hinhpath . "' height='70'>";
        } else {
          $hinh = "No photo";
        }
        ?>
        <?= $hinh ?>
      </div>
      <div class="row mb10">
        <?php if ($role == 1) { ?>
          <li><a href="index.php?act=mybill">Don hang cua toi</a></li>
        <?php } ?>
        <li><a href="index.php?act=quenmk">Quen Pass</a></li>
        <li><a href="index.php?act=edit_taikhoan">Cap nhap tai khoan</a></li>
        <?php if ($role == 2) { ?>
          <li><a href="admin/index.php">Dang nhap admin</a></li>
        <?php } ?>
        <li><a href="index.php?act=thoat">Thoat</a></li>
      </div>

    <?php
    } else {


    ?>
      <form action="index.php?act=dangnhap" method="post" id="demoForm">
        <div class="row mb10">
          Tên Đăng Nhập <br />
          <input type="text" name="username" id="" />
        </div>
        <div class="row mb10">
          Pass <br />
          <input type="password" name="password" id="" />
        </div>

        <div class="row mb10">
          <input type="checkbox" name="ghinho" id="" /> Ghi nho tai
          khoan?
        </div>

        <div class="row mb10">
          <input name="dangnhap" type="submit" value="Dang nhap" />
        </div>
      </form>

      <li><a href="index.php?act=quenmk">Quen Pass</a></li>
      <li><a href="index.php?act=dky">Dang ky thanh vien</a></li>
    <?php  } ?>
  </div>
</div>
<div class="row mb">
  <div class="boxtitle">Danh Mục</div>
  <div class="boxcontent2 menudoc">
    <ul>
      <?php
      foreach ($dsdm as $ds) {
        extract($ds);
        $linkdm = "index.php?act=sanpham&id_dm=" . $id_dm;
        echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
      }
      ?>
    </ul>
  </div>
  <div class="boxft search">
    <form action="index.php?act=sanpham" method="post">
      <input type="text" name="kyw" id="" placeholder="Tu khoa tim kiem" />
      <input name="timkiem" type="submit" value="TIM KIEM" id="tk">
    </form>
  </div>
</div>
<div class="row">
  <div class="boxtitle">Top 10 Yeu Thich</div>
  <div class="row boxcontent">
    <?php
    foreach ($dst10 as $sp) {
      extract($sp);
      $linksp = "index.php?act=ctietsp&id_sp=" . $id_sp;
      $image = $img_path . $image;
      echo '<div class="row mb10 top10">
          <a class="linksp" href="' . $linksp . '"><img src="' . $image . '" alt="" /></a>
<a href="' . $linksp . '">' . $name . '</a>
</div>';
    }
    ?>

  </div>
</div>