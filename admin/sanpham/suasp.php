<?php
if (is_array($suasp)) {
    extract($suasp);
}
$hinhpath = "../upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='70'>";
} else {
    $hinh = "No photo";
}
?>
<div class="r">
    <div class="row formtitle">
        <h1>CAP NHAP HANG HOA</h1>
    </div>
    <div class=" boxtr">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <select name="id_dm" id="">
                <option value="0" selected>TAT CA</option>
                <?php
                foreach ($dslh as $ds) {

                    if ($ds['id_dm'] == $id_dm) $s = "selected";
                    else $s = "";
                    echo '<option value="' . $ds['id_dm'] . '" ' . $s . '>' . $ds['name'] . '</option>';
                }
                ?>
            </select>
            <div class=" mb10">
                <p>GIAM GIA <br>
                    <input type="text" name="gg" value="<?= $discount ?>" />
                </p>
            </div>
            <div class="mb10">
                <p>HANG DAC BIET? <br>
                <div class="hdb">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hdb">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Dac biet
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hdb" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Binh thuong
                        </label>
                    </div>
                </div>
                </p>
            </div>

    </div>

    <div class=" boxtr">

        <div class="mb10">
            <p class="mhh"> TEN HANG HOA <br>
                <input type="text" name="tensp" width="100px" value="<?= $name ?>" />
            </p>
        </div>
        <div class=" mb10">
            <p>HINH ANH <br>
            <div class="hdb">
                <input type="file" name="img" />
            </div>
            </p>
            <?= $hinh ?>
        </div>
        <!-- <div class="mb10">
                 <p>NGAY NHAP <br>
                     <input type="text" name="date" id="">
                 </p>
             </div> -->

    </div>

    <div class=" boxtr">

        <div class="mb10 dg">
            <p class="mhh"> DON GIA <br>
            <div class="mb-3">

                <input type="text" class="form-control" name="price" value="<?= $price ?>">
            </div>

            </p>
        </div>
        <!-- <div class=" mb10">
                 <p>LOAI HANG <br>
                     <select class="form-select" aria-label="Default select example">
                         <option value="1">Dong ho</option>
                         <option value="2">Laptop</option>
                         <option value="3">Dien thoai</option>
                         <option value="3">Phu kien</option>
                     </select>
                 </p>
             </div> -->
        <div class="mb10 dg">
            <p>SO LUOT XEM <br>

            <div class="mb-3">

                <input type="text" class="form-control" id="" placeholder="0" disabled>
            </div>


            </p>
        </div>

    </div>
    <br>

    <p class="mt">MO TA
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="mota"><?= $mo_ta ?></textarea>
    </div>
    </p>

    <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
    <div class="i">
        <input type="submit" value="Cap nhap" name="capnhap">

        <input type="submit" value="NHAP LAI" name="nl">
        <a href="index.php?act=dssp">
            <input class="btn" type="button" value="DANH SACH">
        </a>
    </div>
</div>

<br>
</form>
<?php
if (isset($tbao) && $tbao != "")
    echo $tbao;
?>
</div>