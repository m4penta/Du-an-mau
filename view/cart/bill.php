 <!-- Main Content  -->
 <div class="row_main mb ">
     <div class="box-left mr ">

         <form action="index.php?act=billconfirm" method="post">
             <div class="row_main mb">
                 <div class="boxtitle">THONG TIN DAT HANG</div>
                 <div class="row_main boxcontent cart">
                     <table>
                         <?php
                            if (isset($_SESSION['user'])) {
                                $name = $_SESSION['user']['username'];
                                $diachi = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            } else {
                                $name = "";
                                $diachi = "";
                                $email = "";
                                $tel = "";
                            }
                            ?>
                         <tr>
                             <td>Nguoi dat hang</td>
                             <td> <input type="text" name="username" value="<?= $name ?>"></td>
                         </tr>
                         <tr>
                             <td>Dia chi</td>
                             <td> <input type="text" name="address" value="<?= $diachi ?>"></td>
                         </tr>
                         <tr>
                             <td>Email</td>
                             <td> <input type="text" name="email" value="<?= $email ?>"></td>
                         </tr>
                         <tr>
                             <td>Dien thoai</td>
                             <td> <input type="text" name="tel" value="<?= $tel ?>"></td>
                         </tr>


                     </table>
                 </div>
             </div>
             <div class="row_main mb">
                 <div class="boxtitle">Phuong thuc thanh toan</div>
                 <div class="row_main box-content ">
                     <table>
                         <tr>
                             <td><input type="radio" name="pttt" value="1" checked>Tra tien khi nhan hang</td>
                             <td><input type="radio" name="pttt" value="2" id="">Chuyen khoan ngan hang</td>
                             <td><input type="radio" name="pttt" id="" value="3">Thanh toan online</td>
                         </tr>
                         </tr>
                     </table>
                 </div>
             </div>


             <div class="row_main mb ">
                 <div class="box-lef mr ">
                     <div class="row_main mb">
                         <div class="boxtitle">Giỏ hàng</div>
                         <div class="row_main boxcontent cart">
                             <table>


                                 <?php
                                    view_cart(0);
                                    ?>
                             </table>
                         </div>
                     </div>
                     <div class="row_main mb">

                         <input name="dydh" type="submit" value="DONG Y DAT HANG" class="tt">

                     </div>
                 </div>
         </form>
     </div>

 </div>

 <div class="box-right">
     <?php include "view/boxright.php"  ?>
 </div>
 </div>
 <!-- Main Content  -->