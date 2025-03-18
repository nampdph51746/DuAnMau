<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }

    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'";
    }else{
        $hinh="No photo.";
    }
?>

<div class="row">
            <div class="row formtitle">
                <h1 style="font-size: 1.5vw;">Cap nhat san pham</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm" id="">
                        <option value="<?=$iddm?>" selected>All</option>
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                // extract($danhmuc);
                                if($iddm==$id) $s="selected"; else $s="";
                                echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                                }
                        ?>
                    </select>
                    </div>
                    <div class="row mb10">
                        Ten san pham<br>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb10">
                        Habitat<br>
                        <input type="text" name="habitat" value="<?=$habitat?>">
                    </div>
                    <div class="row mb10">
                        Img<br>
                        <input type="file" name="hinh" id="">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mo ta<br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cap nhat">
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