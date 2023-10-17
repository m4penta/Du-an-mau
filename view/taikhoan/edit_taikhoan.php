<?php
if (is_array($_SESSION['user'])) {
    extract($_SESSION['user']);
}
$hinhpath = "/asm/upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='70'>";
} else {
    $hinh = "No photo";
}
?>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div style="color: red;">
                <?php
                if (isset($tb) && ($tb) != "") {
                    echo $tb;
                }
                ?>
            </div>

            <div class="boxtitle">CAP NHAP TAI KHOAN</div>
            <div class="row boxcontent formdky">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post" enctype="multipart/form-data">
                    USERNAME: <input type="text" name="username" value="<?= $username ?>">
                    PASSWORD: <input type="password" name="password" value="<?= $password ?>">
                    HO TEN: <input type="text" name="hoten" value="<?= $ho_ten ?>">
                    HINH:<input type="file" name="hinh" value="<?= $hinh ?>">
                    <!-- <?= $hinh ?> -->
                    EMAIL: <input type="email" name="email" value="<?= $email ?>">
                    ADDRESS:<input type="text" name="address" value="<?= $address ?>">
                    TEL:<input type="text" name="tel" value="<?= $tel ?>">
                    <input type="hidden" name="id_tk" value="<?= $id_tk ?>">
                    <div class="v">
                        <input type="submit" value="CAP NHAP" name="capnhap" id="cn">
                        <input type="reset" value="Nhap lai" id="nl">
                    </div>

                </form>
            </div>

        </div>


    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>