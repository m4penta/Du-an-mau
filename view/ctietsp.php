<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name ?></div>
            <div class="row boxcontent hi">
                <?php
                $tt = $price - (($price * $discount) / 100);
                $hinh = $img_path . $image;
                echo '<div class="row mb spct"><img src="' . $hinh . '" ></div>';
                echo '<li>' . "MA SP:" . $id_sp . '</li>';
                echo '<li>' . "TEN SP:" . $name . '</li>';
                echo '<li>' . "DON GIA:" . number_format($tt, 0, ",", ".") . '$' .  '</li>';
                echo '<li>' . "GIAM GIA:" . $discount . "%" . '</li>';
                echo  $mo_ta;
                echo ' <div class="row">
       
                <form action="index.php?act=addtocart" method="post">
                  <input type="hidden" name="id_sp" value="' . $id_sp . '">
                  <input type="hidden" name="name" value="' . $name . '">
                  <input type="hidden" name="image" value="' . $image . '">
                  <input type="hidden" name="price" value="' . $price . '">
                  <input type="hidden" name="discount" value="' . $discount . '">
                  <input type="submit" value="THEM VAO GIO HANG" name="addtocart" class="gh">
                  
                </form>
              </div>';
                ?>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#bl").load("view/binhluan/binhluanform.php", {
                    id_sp: <?= $id_sp ?>
                });
            });
        </script>
        <div class="row mb" id="bl">
            <div class="boxtitle">BINH LUAN</div>
            <div class="row boxcontent">

            </div>

        </div>
        <div class="row mb">
            <div class="boxtitle">SAN PHAM CUNG LOAI</div>
            <div class="row boxcontent spcl">
                <?php
                foreach ($spcl as $cl) {
                    extract($cl);
                    $linksp = "index.php?act=ctietsp&id_sp=" . $id_sp;
                    echo '<li><a href="' . $linksp . '" id="a">' . $name . '</a></li>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>