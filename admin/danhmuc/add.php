<div class="row">
            <div class="row formtitle">
                <h1 style="font-size: 1.5vw;">Them moi danh muc</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Ma loai<br>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Ten Loai<br>
                        <input type="text" name="tenloai" id="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Them moi">
                        <input type="reset" value="Nhap lai">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sach"></a>
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