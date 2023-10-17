<div class="row mb">
  <div class="boxtrai mr">
    <div class="row">
      <div class="banner">
        <!-- Slideshow container -->
        <div class="slideshow-container">

          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <img src="image/anh1.jpg" style="width:100%">

          </div>

          <div class="mySlides fade">

            <img src="image/anh2.jpg" style="width:100%">

          </div>

          <div class="mySlides fade">

            <img src="image/anh3.jpg" style="width:100%">

          </div>

          <!-- Next and previous buttons -->
          <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>
    </div>
    <div class="row im">
      <?php
      $i = 0;
      foreach ($spnew as $s) {
        extract($s);
        $linksp = "index.php?act=ctietsp&id_sp=" . $id_sp;
        $tt = $price - (($price * $discount) / 100);
        $hinh = $img_path . $image;
        if (($i == 2) || ($i == 5) || ($i == 8)) {
          $mr = "";
        } else {
          $mr = "mr";
        }
        echo '<div class="boxsp ' . $mr . '">
        <div class="row img">
        <a class="linksp" href="' . $linksp . '">
            <img class="imsp" src="' . $hinh . '" />
      </a>
        </div>
       
        <div class="tien">$' . number_format($tt, 0, ",", ".") . '</div>
        <del class="t">' . number_format($price, 0, ",", ".") . '$' . '</del>
        <div class="dc"> -' . $discount . '%' . ' </div>
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
  <div class="boxphai">
    <?php include "boxright.php" ?>
  </div>
</div>