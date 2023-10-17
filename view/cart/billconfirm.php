 <!-- Main Content  -->
 <div class="row_main mb ">
     <div class="box-left mr ">


         <div class="row_main mb">
             <div class="boxtitle">CAM ON</div>
             <div class="row_main boxconten cart" style="text-align: center;">
                 <h2>Cam on quy khach da dat hang</h2>
             </div>
         </div>

         <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
            ?>
         <div class="row_main mb">
             <div class="boxtitle">THONG TIN DON HANG</div>
             <div class="row_main boxconten cart" style="text-align: center;">
                 <li>MA DON HANG: <?= $bill['id_bill'] ?></li>
                 <li>NGAY DAT HANG: <?= $bill['ngaydh'] ?></li>
                 <li>TONG DON HANG: <?= number_format($bill['total'], 0, ",", ".") ."$" ?></li>
                 <li>PHUONG THUC THANH TOAN: <?= $bill['pttt'] ?></li>
             </div>
         </div>

         <div class="row_main mb">
             <div class="boxtitle">THONG TIN DAT HANG</div>
             <div class="row_main boxcontent cart">

                 <table>

                     <tr>
                         <td>Nguoi dat hang</td>
                         <td><?= $bill['name'] ?> </td>
                     </tr>
                     <tr>
                         <td>Dia chi</td>
                         <td><?= $bill['diachi'] ?></td>
                     </tr>
                     <tr>
                         <td>Email</td>
                         <td> <?= $bill['email'] ?></td>
                     </tr>
                     <tr>
                         <td>Dien thoai</td>
                         <td><?= $bill['tel'] ?></td>
                     </tr>

                 </table>
             </div>
         </div>


         <div class="row_main mb ">
             <div class="box-lef mr ">
                 <div class="row_main mb">
                     <div class="boxtitle">CHI TIET GIO HANG</div>
                     <div class="row_main boxcontent cart">
                         <table>
                             <!-- <tr>
                                 <th>STT</th>
                                 <th>HINH</th>
                                 <th>SAN PHAM</th>
                                 <th>DON GIA</th>
                                 <th>SO LUONG</th>
                                 <th>THANH TIEN</th>
                             </tr> -->

                             <?php
                                show_ctdh($billct);
                                ?>
                         </table>
                     </div>
                 </div>
             </div>

         </div>



     </div>
     <div class="box-right">
         <?php include "view/boxright.php"  ?>
     </div>
 </div>