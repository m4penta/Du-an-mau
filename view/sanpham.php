<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">SAN PHAM:<strong><?= $tendm ?></strong> </div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssp as $s) {
                    extract($s);
                    $linksp = "index.php?act=ctietsp&id_sp=" . $id_sp;
                    $tt = $price - (($price * $discount) / 100);
                    $hinh = $img_path . $image;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i = 11)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="boxsp ' . $mr . '">
   <div class="row img">
   <a class="linksp" href="' . $linksp . '">
       <img src="' . $hinh . '" class="imsp"/>
 </a>
   </div>
   <div class="tien">$' . number_format($tt, 0, ",", ".") . '</div>
   <del class="t">' . number_format($price, 0, ",", ".") . '$' . '</del> <br>
   <a class="linkspp" href="' . $linksp . '">' . $name . ' </a>
   <div class="row">
       
    <form action="index.php?act=addtocart" method="post">
      <input type="hidden" name="id_sp" value="' . $id_sp . '">
      <input type="hidden" name="name" value="' . $name . '">
      <input type="hidden" name="image" value="' . $image . '">
      <input type="hidden" name="price" value="' . $price . '">
      <input type="hidden" name="discount" value="' . $discount . '">
      <input type="submit" value="THEM VAO GIO HANG" name="addtocart" class="gh">
      
    </form>
  </div>
 </div>';
                    $i += 1;
                }

                ?>
            </div>
        </div>


    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>