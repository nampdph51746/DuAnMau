<div class="row">
            <div class="row formtitle mb">
                <h1 style="font-size: 1.5vw;">Danh sach san pham</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0" selected>All</option>
                    <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                    ?>
                </select>
                <input type="submit" name="listok" value="Ok">
            </form>
            <div class="row formcontent">
                    <div class="row mb10 formdanhsachloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Ma san pham</th>
                                <th>Ten san pham</th>
                                <th>Noi song</th>
                                <th>Hinh anh</th>
                                <th>Luot xem</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listsanpham as $sanpham){
                                    extract($sanpham);
                                    $suasp="index.php?act=suasp&id=".$id;
                                    $xoasp="index.php?act=xoasp&id=".$id;
                                    $hinhpath="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80'";
                                    }else{
                                        $hinh="No photo.";
                                    }
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$habitat.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$mota.'</td>
                                            <td>
                                                <a href="'.$suasp.'"><input type="button" value="Sua"></a>
                                                <a href="'.$xoasp.'"><input type="button" value="Xoa"></a>
                                            </td>
                                        </tr>';
                                }
                            ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chon tat ca">
                        <input type="button" value="Bo chon tat ca">
                        <input type="button" value="Xoa cac muc da chon">
                        <a href="index.php?act=addsp"><input type="button" value="Them moi"></a>
                    </div>
        </div>