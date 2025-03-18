<div class="row">
            <div class="row formtitle">
                <h1 style="font-size: 1.5vw;">Danh sach tai khoan</h1>
            </div>
            <div class="row formcontent">
                    <div class="row mb10 formdanhsachloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>Ma Tk</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Tel</th>
                                <th>Role</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listtaikhoan as $taikhoan){
                                    extract($taikhoan);
                                    $suatk="index.php?act=suatk&id=".$id;
                                    $xoatk="index.php?act=xoatk&id=".$id;
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$user.'</td>
                                            <td>'.$pass.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$address.'</td>
                                            <td>'.$tel.'</td>
                                            <td>'.$role.'</td>
                                            <td>
                                                <a href="'.$suatk.'"><input type="button" value="Sua"></a>
                                                <a href="'.$xoatk.'"><input type="button" value="Xoa"></a>
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
                        <a href="index.php?act=adddm"><input type="button" value="Them moi"></a>
                    </div>
        </div>