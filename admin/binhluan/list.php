<div class="row">
            <div class="row formtitle">
                <h1 style="font-size: 1.5vw;">Danh sach binh luan</h1>
            </div>
            <div class="row formcontent">
                    <div class="row mb10 formdanhsachloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Noi dung</th>
                                <th>Iduser</th>
                                <th>Idpro</th>
                                <th>Ngay binh luan</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                                foreach($listbinhluan as $listbinhluan){
                                    extract($listbinhluan);
                                    $xoabl="index.php?act=xoabl&id=".$id;
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$noidung.'</td>
                                            <td>'.$iduser.'</td>
                                            <td>'.$idpro.'</td>
                                            <td>'.$ngaybinhluan.'</td>
                                            <td>
                                                <a href="'.$xoabl.'"><input type="button" value="Xoa"></a>
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
                    </div>
        </div>