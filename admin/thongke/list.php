<div class="row">
            <div class="row formtitle">
                <h1 style="font-size: 1.5vw;">Thong ke san pham</h1>
            </div>
            <div class="row formcontent">
                    <div class="row mb10 formdanhsachloai">
                        <table>
                            <tr>
                                <th>STT</th>
                                <th>Ten danh muc</th>
                                <th>So luong san pham</th>
                            </tr>
                            <?php
                                foreach($listthongke as $thongke){
                                    extract($thongke);
                                    echo '<tr>
                                            <td>'.$madm.'</td>
                                            <td>'.$tendm.'</td>
                                            <td>'.$countsp.'</td>
                                        </tr>';
                                }
                            ?>
                        </table>
                    </div>
        </div>