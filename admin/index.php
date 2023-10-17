<?php
ob_start();
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else {
    if ($_SESSION['user']['role'] == 1) {
        header("location: ../index.php");
    }
}
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "header.php";
//controler

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //ktra xem nguoi dung co click vao nut add hay k
            if (isset($_POST['them']) && ($_POST['them'])) {
                $nameloai = $_POST['nameloai'];
                if ($nameloai != "") {
                    insert_dm($nameloai);
                    header("location:index.php?act=dslh");
                    $tbao = 'Them data thanh cong';
                }
            }
            include "danhmuc/add.php";
            break;
        case 'dslh':
            $dslh = loadall_dm();
            include "danhmuc/dsloaihang.php";
            break;
        case 'xoadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {
                delete_dm($_GET['id_dm']);
            }
            $dslh = loadall_dm();

            include "danhmuc/dsloaihang.php";
            break;
        case 'suadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {

                $suadm = loadone_dm($_GET['id_dm']);
            }

            include "danhmuc/suadm.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $nameloai = $_POST['nameloai'];
                $id_dm = $_POST['id_dm'];
                update_dm($nameloai, $id_dm);
                $tbao = 'Sua data thanh cong';
            }
            $dslh = loadall_dm();
            include "danhmuc/dsloaihang.php";
            break;

            /*controller cho sp */
        case 'addsp':
            //ktra xem nguoi dung co click vao nut add hay k
            if (isset($_POST['them']) && ($_POST['them'])) {
                $id_dm = $_POST['id_dm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $gg = $_POST['gg'];
                $mota = $_POST['mota'];
                $hdb = $_POST['hdb'];
                $file = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                if ($tensp != "") {
                    insert_sp($tensp, $giasp, $gg, $file, $mota, $hdb, $id_dm);
                    $tbao = 'Them data thanh cong';
                    header("location:index.php?act=dssp");
                }
            }
            $dslh = loadall_dm();
            include "sanpham/add.php";
            break;
        case 'dssp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_dm = $_POST['id_dm'];
            } else {
                $kyw = '';
                $id_dm = 0;
            }

            $dslh = loadall_dm();
            $dssp = loadall_sp($kyw, $id_dm);
            include "sanpham/dshh.php";
            break;
        case 'xoasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                delete_sp($_GET['id_sp']);
            }
            $dssp = loadall_sp("", 0);

            include "sanpham/dshh.php";
            break;
        case 'suasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {

                $suasp = loadone_sp($_GET['id_sp']);
            }
            $dslh = loadall_dm();
            include "sanpham/suasp.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_sp = $_POST['id_sp'];
                $id_dm = $_POST['id_dm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['price'];
                $gg = $_POST['gg'];
                $mota = $_POST['mota'];
                $hdb = $_POST['hdb'];
                $file = $_FILES['img']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['img']["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sp($id_sp, $tensp, $giasp, $gg, $file, $mota, $hdb, $id_dm);
                $tbao = 'Sua data thanh cong';
            }
            $dslh = loadall_dm();
            $dssp = loadall_sp("", 0);
            include "sanpham/dshh.php";
            break;
            /*controller cho kh */
        case 'addtk':
            if (isset($_POST['them']) && ($_POST['them'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['hoten'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                $file = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                if ($username != "") {
                    insert_taikhoan($username, $password, $ho_ten, $file, $email, $address, $tel);
                    header("location:index.php?act=dskh");
                    $tbao = 'Them data thanh cong';
                }
            }

            $dstk = loadall_tk();
            include "taikhoan/addtk.php";
            break;
        case 'dskh':

            $dstk = loadall_tk();

            include "taikhoan/dskh.php";
            break;
        case 'xoatk':
            if (isset($_GET['id_tk']) && ($_GET['id_tk']) > 0) {
                delete_tk($_GET['id_tk']);
            }
            $dstk = loadall_tk();

            include "taikhoan/dskh.php";
            break;
        case 'suatk':
            if (isset($_GET['id_tk']) && ($_GET['id_tk']) > 0) {

                $suatk = loadone_tk($_GET['id_tk']);
            }
            // $dslh = loadall_dm();
            include "taikhoan/suatk.php";
            break;
        case 'updatetk':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id_tk = $_POST['id_tk'];
                $username = $_POST['username'];
                // $password = $_POST['password'];
                $file = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                update_tk($id_tk, $username, $file, $email, $address, $tel);
                $tbao = 'Sua data thanh cong';
            }

            $dstk = loadall_tk();
            include "taikhoan/dskh.php";
            break;
            /*controller cho bl */
        case 'bluan':

            $dsbl = loadall_bl();

            include "binhluan/bluan.php";
            break;
        case 'xoabl':
            if (isset($_GET['id_bl']) && ($_GET['id_bl']) > 0) {
                delete_bl($_GET['id_bl']);
            }
            // header("location:index.php?act=ctbl");
            // $dsbl = loadall_bluan(0);
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $onebl = loadone_spbl($_GET['id_sp']);
                $ctbl = loadall_bluan($_GET['id_sp']);
            }

            include "binhluan/ctbl.php";
            break;
        case 'ctbl':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $onebl = loadone_spbl($_GET['id_sp']);
                $ctbl = loadall_bluan($_GET['id_sp']);
            }
            include "binhluan/ctbl.php";
            break;
        case 'bill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw, 0);
            include "donhang/dhang.php";
            break;
        case 'xoabill':
            if (isset($_GET['id_bill']) && ($_GET['id_bill']) > 0) {
                delete_bill($_GET['id_bill']);
            }
            $listbill = loadall_bill();

            include "donhang/dhang.php";
            break;
        case 'thongke':
            $listtk = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listtk = loadall_thongke();
            include "thongke/bieudo.php";
            break;
        case 'trangchu':
            $listtk = loadall_thongke();
            include "tcadmin/tchuadmin.php";
            break;
        default:
            $listtk = loadall_thongke();
            include "tcadmin/tchuadmin.php";
            break;
    }
} else {
    $listtk = loadall_thongke();
    include "tcadmin/tchuadmin.php";
}
include "ft.php";
