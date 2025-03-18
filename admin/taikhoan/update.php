<?php
    if(is_array($tk)){
        extract($tk);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1><strong style="font-size:1.2vw;">Cap nhat tai khoan</strong></h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=update_taikhoan" method="post">
                    <div class="row mb10">
                        Username<br>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Password<br>
                        <input type="text" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Email<br>
                        <input type="text" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Address<br>
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Tel<br>
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                        Role<br>
                        <input type="int" name="role" value="<?=$role?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cap nhat">
                        <input type="reset" value="Nhap lai">
                        <a href="index.php?act=dskh"><input type="button" value="Danh sach"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo  $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>