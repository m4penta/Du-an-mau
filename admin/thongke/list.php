<div class="row">
    <div class="row formtitle">
        <h1>THONG KE SAN PHAM THEO DANH MUC</h1>
    </div>
    <div class="row formct">
        <div class="row mb10 formdsdm">
            <table>
                <tr>
                    <th>MA DANH MUC</th>
                    <th>TEN DANH MUC</th>
                    <th>SO LUONG</th>
                    <th>GIA CAO NHAT</th>
                    <th>GIA THAP NHAT</th>
                    <th>GIA TRUNG BINH</th>
                </tr>

                <?php foreach ($listtk as $tk) {
                    extract($tk);

                    echo '<tr>
  <td>' . $madanhmuc . '</td>
  <td>' . $tendanhmuc . '</td>
  <td>' . $countsp . '</td>
  <td>' . number_format($maxgia, 0, ",", ".") . '$' . '</td>
  <td>' . number_format($mingia, 0, ",", ".") . '$' . '</td>
  <td>' . number_format($giatb, 0, ",", ".") . '$' . '</td>
  </tr>';
                }
                ?>

            </table>
        </div>

        <div class=" mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem bieu do" /></a>
        </div>
    </div>
</div>
</div>