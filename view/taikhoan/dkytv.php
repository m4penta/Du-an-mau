<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
    $().ready(function() {
        $("#demoForm").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "username": {
                    required: true,
                    maxlength: 10
                },
                "password": {
                    required: true,
                    minlength: 3
                },
                "re-password": {
                    equalTo: "#password",
                    minlength: 3

                },
                "hoten": {
                    required: true,
                    minlength: 5
                },
                "email": {
                    required: true,
                    email: true
                },
                "address": {
                    required: true,
                }
            },
            messages: {
                "username": {
                    required: "Bắt buộc nhập username",
                    maxlength: "Hãy nhập tối đa 10 ký tự"
                },
                "password": {
                    required: "Bắt buộc nhập password",
                    minlength: "Hãy nhập ít nhất 3 ký tự"
                },
                "re-password": {
                    equalTo: "Hai password phải giống nhau",
                    minlength: "Hãy nhập ít nhất 3 ký tự"
                },
                "hoten": {
                    required: "Bắt buộc nhập ho ten",
                    maxlength: "Hãy nhập ít nhất 5 ký tự"
                },
                "email": {
                    required: "Bắt buộc nhập email",
                    email: "Hãy nhập dúng định dạng email"
                },
                "address": {
                    required: "Bắt buộc nhập address",
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

            <div class="boxtitle">DANG KY THANH VIEN</div>
            <div class="row boxcontent formdky">
                <form action="index.php?act=dky" method="post" enctype="multipart/form-data" id="demoForm">
                    <p>
                        <label for=""> USERNAME:</label>
                        <input type="text" name="username" id="">
                    </p>
                    <p>
                        <label for="">PASSWORD:</label>
                        <input type="password" name="password" id="password">
                    </p>
                    <p>
                        <label for="">RE-PASSWORD: </label>
                        <input type="password" name="re-password">

                    </p>
                    <p>
                        <label for="">HO TEN:</label>
                        <input type="text" name="hoten" id="">
                    </p>

                    HINH:<input type="file" name="hinh" id="">
                    <p>
                        <label for="">EMAIL: </label>
                        <input type="email" name="email" id="">
                    </p>
                    <p>
                        <label for="">ADDRESS:</label>
                        <input type="text" name="address" id="">
                    </p>

                    <p>
                        <label for=""> TEL:</label>
                        <input type="text" name="tel" id="">
                    </p>


                    <input type="submit" value="Dang ky" name="dangky">
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