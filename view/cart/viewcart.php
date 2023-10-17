 <!-- Main Content  -->
 <div class="row_main mb ">
     <div class="box-left mr ">
         <div class="row_main mb">
             <div class="boxtitle">Giỏ hàng</div>
             <div class="row_main boxcontent cart">
                 <table>



                     <?php
                        view_cart(1);
                        ?>
                 </table>
             </div>
         </div>
         <div class="row_main mb">
             <a href="index.php?act=bill">
                 <input type="button" value="TIEP TUC DAT HANG" class="tt">
             </a>
             <a href="index.php?act=delcart">
                 <input type="button" value="XOA GIO HANG" class="dgh">
             </a>

         </div>
     </div>

     <div class="box-right">
         <?php include "view/boxright.php"  ?>
     </div>
 </div>