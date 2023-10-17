<?php
session_start();
ob_start();
//Hàm ob_start() trong PHP được sử dụng khi bạn muốn bắt đầu bộ đệm đầu ra
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

$spnew = loadall_sp_home();
$dsdm = loadall_dm();
$dst10 = loadall_sp_top10();

if (isset($_GET['act']) && ($_GET['act']) != "") {
    $act = $_GET['act'];

    switch ($act) {
        case 'ctietsp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp']) > 0) {
                $onesp = loadone_sp($_GET['id_sp']);
                extract($onesp);
                $spcl = loadone_sp_cungloai($_GET['id_sp'], $id_dm);
                include "view/ctietsp.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id_dm']) && ($_GET['id_dm']) > 0) {
                $id_dm = $_GET['id_dm'];
            } else {
                $id_dm = 0;
            }
            $dssp = loadall_sp($kyw, $id_dm);
            $tendm = load_ten_dm($id_dm);
            include "view/sanpham.php";
            break;
        case 'dky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['hoten'];
                $file = $_FILES['hinh']['name'];
                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                //  $hinh=$_POST['hinh'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];

                insert_tk($username, $password, $ho_ten, $file, $email, $address, $tel);
                $tbao = "Da dang ky thanh cong! Vui long dang nhap de thuc hien chuc nang comment hoac dat hang!!";
            }
            include "view/taikhoan/dkytv.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {

                $username = $_POST['username'];

                $password = $_POST['password'];
                $check_user = check_user($username, $password);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;

                    header('Location:index.php');
                    // $tbao = "Ban da dang nhap thanh cong!";
                } else {
                    $tbao = "Tai khoan khong ton tai. Vui long kiem tra hoac dang ky!";
                }
            }
            include "view/taikhoan/dkytv.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ho_ten = $_POST['hoten'];
                $file = $_FILES['hinh']['name'];
                $target_dir = "./upload/";
                $target_file = $target_dir . basename($_FILES['hinh']["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id_tk = $_POST['id_tk'];

                update_taikhoan($id_tk, $username, $password, $ho_ten, $file, $email, $address, $tel);
                $_SESSION['user'] = check_user($username, $password);
                // header("location:index.php?act=edit_taikhoan");

                $tb = "Cap nhap tai khoan thanh cong!";
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {

                $email = $_POST['email'];
                $check_email =  check_email($email);
                if (is_array($check_email)) {
                    $tbao = "Mat khau cua ban la:" . $check_email['password'];
                } else {
                    $tbao = "Email nay khong ton tai!";
                }
            }
            include "view/taikhoan/quenpass.php";
            break;
        case 'thoat':
            session_unset();
            header('Location:index.php');
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'addtocart':
            //add thong tin sp tu cai form add to cart den session
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id_sp = $_POST['id_sp'];
                $name = $_POST['name'];
                $image = $_POST['image'];
                $price = $_POST['price'];
                $discount=$_POST['discount'];
                $soluong = 1;
                $thanhtien = $soluong * $price;
                $spadd = [$id_sp, $name, $image, $price,$discount, $soluong, $thanhtien];
                array_push($_SESSION['mycart'], $spadd); //add mang con($spadd) vao mang cha $_session...
            }

            include "view/cart/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location:index.php?act=viewcart');
            // include "view/cart/viewcart.php";
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset($_POST['dydh']) && ($_POST['dydh'])) {
                if (isset($_SESSION['user'])) $id_tk = $_SESSION['user']['id_tk'];
                else $id_tk = 0;
                $name = $_POST['username'];
                $diachi = $_POST['address'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $ngaydh = date("Y-m-d H:i:s", time());
                $tongdh = tongdh();
                //tao bill
                $id_bill = insert_bill($name, $diachi, $email, $tel, $pttt, $tongdh, $ngaydh, $id_tk);

                //insert into cart: voi $session['mycart'] $id_bill
                //neu ko login thi dung isset hay empty
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id_tk'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[5], $cart[6], $id_bill);
                }
                //xoa session
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($id_bill);
            $billct = loadall_cart($id_bill);
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            $listbill = loadall_bil($_SESSION['user']['id_tk']);
            include "view/cart/mybill.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/ft.php";
