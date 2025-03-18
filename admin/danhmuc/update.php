<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="row">
            <div class="row formtitle">
                <h1 style="font-size: 1.5vw;">Cap nhat danh muc</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        Ma loai<br>
                        <input type="text" name="maloai" id="" disabled>
                    </div>
                    <div class="row mb10">
                        Ten Loai<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                        <input type="submit" name="capnhat" value="Cap nhat">
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