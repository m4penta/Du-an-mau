<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>quan-tri</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<style>
  #s,
  #ct {
    color: white;
    background-color: blue;
  }

  #s:hover,
  #ct:hover {
    background-color: #ccc;
  }

  #x {
    color: white;
    background-color: red;
  }

  #x:hover {
    background-color: #ccc;
  }

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

  .btn {
    border: 2px solid #999;
    margin-top: 2px;
  }

  .btn:hover {
    background-color: #666;
  }

  .i input:hover {
    background-color: #666;
  }

  .boxtr {
    height: 300px;
  }

  .formdshh table th:nth-child(1) {
    width: 5%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdshh table th:nth-child(2) {
    width: 10%;

    background-color: #ccc;
  }

  .formdshh table th:nth-child(3) {
    width: 20%;

    background-color: #ccc;
  }

  .formdshh table th:nth-child(4) {
    width: 10%;

    background-color: #ccc;
  }

  .formdshh table th:nth-child(5) {
    width: 15%;

    background-color: #ccc;
  }

  .formdshh table th:nth-child(6) {
    width: 10%;

    background-color: #ccc;
  }

  .formdshh table th:nth-child(7) {
    width: 15%;

    background-color: #ccc;
  }

  .formdshh table th:nth-child(8) {
    width: 15%;

    background-color: #ccc;
  }

  .formhh {
    margin-top: 30px;
  }


  .formdstk table {
    width: 100%;
    border-collapse: collapse;
  }

  .formdstk table td {
    padding: 10px 20px;
    border: 1px solid #ccc;
  }

  .formdstk table th:nth-child(1) {
    width: 3%;
    padding: 10px;
    background-color: #ccc;
  }

  .formdstk table th:nth-child(2) {
    width: 5%;

    background-color: #ccc;
  }

  .formdstk table th:nth-child(3) {
    width: 12%;

    background-color: #ccc;
  }

  .formdstk table th:nth-child(4) {
    width: 5%;

    background-color: #ccc;
  }

  .formdstk table th:nth-child(5) {
    width: 15%;

    background-color: #ccc;
  }

  .formdstk table th:nth-child(6) {
    width: 5%;

    background-color: #ccc;
  }

  .formdstk table th:nth-child(7) {
    width: 15%;

    background-color: #ccc;
  }

  .formdstk table th:nth-child(8) {
    width: 5%;

    background-color: #ccc;
  }

  .formdstk table th:nth-child(9) {
    width: 15%;

    background-color: #ccc;
  }
  .formdstk table th:nth-child(10) {
    width: 10%;

    background-color: #ccc;
  }

  .formtk {
    margin-top: 30px;
  }

  form {
    margin: 20px 0;

  }

  form input {
    margin-top: 20px;
  }

  form input[type="submit"]:hover {
    background-color: red;
  }

  .formdsdh input:hover {
    background-color: #999;
  }

  .formdsdh table th:nth-child(1) {
    width: 5%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdh table th:nth-child(2) {
    width: 5%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdh table th:nth-child(3) {
    width: 20%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdh table th:nth-child(4) {
    width: 5%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdh table th:nth-child(5) {
    width: 15%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdh table th:nth-child(6) {
    width: 25%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdh table th:nth-child(7) {
    width: 15%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdh table th:nth-child(8) {
    width: 10%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdm table {
    width: 100%;
    border-collapse: collapse;
  }

  .formdsbl table {
    width: 100%;
    border-collapse: collapse;
  }

  .formdsdm table th:nth-child(1) {
    width: 5%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdm table th:nth-child(2) {
    width: 10%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdm table th:nth-child(3) {
    width: 25%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdm table th:nth-child(4) {
    width: 15%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdm table th:nth-child(5) {
    width: 25%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdm table th:nth-child(6) {
    width: 20%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsdm table td {
    padding: 10px 20px;
    border: 1px solid #ccc;
  }

  .xdh {
    padding: 5px 7px;
  }

  .xdh:hover {
    background-color: red;
  }

  .formdsbl table th:nth-child(1) {
    width: 30%;
    padding: 20px;
    background-color: #ccc;
  }

  .formdsbl table th:nth-child(2) {
    width: 10%;

    background-color: #ccc;
  }

  .formdsbl table th:nth-child(3) {
    width: 20%;

    background-color: #ccc;
  }

  .formdsbl table th:nth-child(4) {
    width: 20%;

    background-color: #ccc;
  }

  .formdsbl table th:nth-child(5) {
    width: 20%;

    background-color: #ccc;
  }

  .tenhh {
    font-size: 30px;
    margin: 5px 0;
  }
</style>

<body>
  <div class="boxcenter">
    <div class="row mb headeradmin">
      <h1>Quan Tri WebSite</h1>
    </div>
    <div class="row mb menu">
      <ul>
        <li><a href="index.php?act=trangchu">Trang Chủ</a></li>
        <li><a href="index.php?act=adddm">Loại Hàng </a></li>
        <li><a href="index.php?act=addsp">Hàng Hóa</a></li>
        <li><a href="index.php?act=dskh"> Khách Hàng </a></li>
        <li><a href="index.php?act=bluan">Bình luận </a></li>
        <li><a href="index.php?act=bill">Đơn hàng </a></li>
        <li><a href="index.php?act=thongke">Thống kê </a></li>
        <li><a href="../index.php">Quay về website </a></li>
      </ul>
    </div>