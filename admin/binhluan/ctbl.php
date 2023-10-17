<div class="row">
    <div class="row formtitle">
        <h1>CHI TIET BINH LUAN</h1>
    </div>
    <!-- <?php

            extract($onebl);
            ?> -->
    <div class="tenhh">
        HANG HOA:<?= $name ?>
    </div>
    <div class="row formkh">
        <div class="row mb10 formctbl">
            <table>
                <tr>
                    <th></th>
                    <th>NOI DUNG</th>
                    <th>NGAY BL</th>
                    <th>NGUOI BL</th>
                    <th></th>
                </tr>
                <?php
                foreach ($ctbl as $ct) {
                    // var_dump($ctbl);
                    extract($ct);
                    $xoabl = "index.php?act=xoabl&id_bl=" . $id_bl . "&id_sp=" . $id_sp;
                    echo ' <tr>
                    <td><input type="checkbox" name="cb" id="" /></td>
                    <td>' . $noidung . '</td>
                    <td>' . $ngaybl . '</td>
                    <td>' . $nguoibl . '</td>
                    <td><a href="' . $xoabl . '">
                        <input type="button" value="xoa" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>
                    </td>
                </tr>
';
                }
                ?>

            </table>
        </div>

        <div class=" mb10 ">
            <input type="button" value="CHON TAT CA" />
            <input type="button" value="BO CHON TAT CA" />
            <input type="button" value="XOA CAC MUC DA CHON" />
        </div>
    </div>
</div>
</div>