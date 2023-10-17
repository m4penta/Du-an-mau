<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
    $().ready(function() {
        $("#demoForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "email": {
                    required: true,
                    email: true
                }

            },
            messages: {

                "email": {
                    required: "Bắt buộc nhập email",
                    email: "Hãy nhập dúng định dạng email"
                }
            }
        });
    });
</script>
<style>
    label.error {
        color: red;
    }
</style>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">QUEN MAT KHAU</div>
            <div class="row boxcontent formdky">
                <form action="index.php?act=quenmk" method="post" id="demoForm">
                    <p>
                        <label for="">EMAIL:</label>
                        <input type="email" name="email" id="">
                    </p>

                    <input type="submit" value="GUI" name="guiemail">
                    <input type="reset" value="Nhap lai">
                </form>
            </div>
            <h2 class="tbao">
                <?php
                if (isset($tbao) && ($tbao) != "") {
                    echo $tbao;
                }
                ?>
            </h2>
        </div>


    </div>
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>