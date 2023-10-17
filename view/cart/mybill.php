 <!-- Main Content  -->
 <div class="row_main mb ">
     <div class="box-left mr ">
         <div class="row_main mb">
             <div class="boxtitle">DON HANG CUA BAN</div>
             <div class="row_main boxcontent cart">
                 <table>
                     <tr>
                         <th>MA DON HANG</th>
                         <th>NGAY DAT</th>
                         <th>SO LUONG MAT HANG</th>
                         <th>TONG GIA TRI DON HANG</th>
                         <th>TINH TRANG DON HANG</th>
                     </tr>
                     <?php
                        if (is_array($listbill)) {
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['status']);
                                $countsp = loadall_cart_count($id_bill);
                                echo ' <tr>
                            <td>' . $id_bill . '</td>
                            <td>' . $ngaydh . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . number_format($total, 0, ",", ".") . '$' . '</td>
                            <td>' . $ttdh . '</td>
                                     </tr>';
                            }
                        }
                        ?>

                 </table>
             </div>
         </div>

     </div>

     <div class="box-right">
         <?php include "view/boxright.php"  ?>
     </div>
 </div>