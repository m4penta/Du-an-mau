  <div class="row">
      <div class="row formtitle">
          <h1>DANH SACH DON HANG</h1>
      </div>
      <form action="index.php?act=bill" method="post">
          <input type="text" name="kyw" placeholder="nhap ma don hang">
          <input type="submit" name="go" value="Go">
      </form>

      <div class="row formdh">
          <div class="row mb10 formdsdh">
              <table>
                  <tr>
                      <th></th>
                      <th>MA DON HANG</th>
                      <th>KHACH HANG</th>
                      <th>SO LUONG HANG</th>
                      <th>GIA TRI DON HANG</th>
                      <th>TINH TRANG DON HANG</th>
                      <th>NGAY DAT HANG</th>
                      <th>THAO TAC</th>
                      <th></th>
                  </tr>
                  <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $xoabill = "index.php?act=xoabill&id_bill=" . $id_bill;
                        $kh = $bill["name"] . '
                        <br> ' . $bill["email"] . '
                        <br>' . $bill["diachi"] . '
                        <br> ' . $bill["tel"];
                        $countsp = loadall_cart_count($bill["id_bill"]);
                        $ttdh = get_ttdh($bill["status"]);
                        echo '   <tr>
                   <td><input type="checkbox" name="cb" id="" /></td>
                   <td>' . $id_bill . '</td>
                   <td>' . $kh . '</td>
                   <td>' . $countsp . '</td>
                   <td><strong>' . number_format($total, 0, ",", ".") . '$' . '</strong></td>
                   <td>' . $ttdh . '</td>
                   <td>' . $ngaydh . '</td>
                   <td>
                   <a href="' . $xoabill . '">
                       <input type="button" value="xoa" class="xdh" onclick ="return confirm(\'ban co chac chan muon xoa?\')" id="x"/></a>
                   </td>
               </tr>';
                    }
                    ?>

              </table>
          </div>
          <div class=" mb10">
              <input type="submit" value="CHON TAT CA" />
              <input type="submit" value="BO CHON TAT CA" />
              <input type="submit" value="XOA CAC MUC DA CHON" />
         
          </div>
      </div>
  </div>
  </div>
  </body>

  </html>