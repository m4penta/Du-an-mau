<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hang hoa</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
    .headeradmin {
        padding: 20px 0;
    }

    .menu {
        padding: 15px 0;
    }

    .menu a {
        transition: 0.2s;
    }

    .formtitle {
        padding: 20px 0;
    }
</style>

<body>
    <div class="boxcenter">
        <div class="row mb headeradmin">
            <h1>Quan Tri WebSite</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="tchuadmin.php">Trang Chủ</a></li>
                <li><a href="loaihang.php">Loại Hàng </a></li>
                <li><a href="hanghoa.php">Hàng Hóa</a></li>
                <li><a href="khachhang.php"> Khách Hàng </a></li>
                <li><a href="bluan.php">Bình luận </a></li>
                <li><a href="dhang.php">Đơn hàng </a></li>
                <li><a href="#">Thống kê </a></li>
            </ul>
        </div>

        <div class="r">
            <div class="row formtitle">
                <h1>THEM MOI KHACH HANG</h1>
            </div>
            <div class=" boxkh kh">
                <form action="" method="post">
                    <div class="mb10">
                        <p class="mhh"> MA KHACH HANG <br>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </p>
                    </div>
                    <div class=" mb10">
                        <p> MAT KHAU<br>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </p>
                    </div>
                    <div class="mb10">
                        <p>DIA CHI EMAIL <br>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </p>
                    </div>

                    <p>KICH HOAT?
                    <div class="hdb">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           Chua kich hoat
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Kich hoat
                        </label>
                    </div>
                    </div>
                    </p>
                </form>
            </div>

            <div class=" boxkh kh">
                <form action="" method="post">
                    <div class="mb10">
                        <p class="mhh"> HO VA TEN<br>
                        <div class="mb-3">

                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        </p>
                    </div>
                    <div class=" mb10">
                        <p>XAC NHAN MAT KHAU <br>

                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </p>
                    </div>
                    <div class="mb10">
                        <p>HINH ANH <br>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">

                        </div>
                        </p>
                    </div>

                    <p>VAI TRO?
                    <div class="hdb">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Khach hang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Nhan vien
                        </label>
                    </div>
                    </div>
                    </p>
                </form>
            </div>

            <a class="btn btn-primary" href="#" role="button">THEM MOI</a>
            <button class="btn btn-primary" type="submit">NHAP LAI</button>
            <a href="dskh.php">
                <input class="btn btn-primary" type="button" value="DANH SACH">
            </a>

        </div>
    </div>

</body>

</html>