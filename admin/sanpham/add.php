<div class="row">
            <div class="row formtitle">
                <h1 style="font-size: 1.5vw;">Them moi san pham</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Danh muc<br>
                        <select name="iddm" id="">
                            <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row mb10">
                        Ten san pham<br>
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="row mb10">
                        Habitat<br>
                        <input type="text" name="habitat" id="">
                    </div>
                    <div class="row mb10">
                        Img<br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb10">
                        Mo ta<br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Them moi">
                        <input type="reset" value="Nhap lai">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sach"></a>
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