<?php
    function loaddall_thongke(){
        $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp";
        $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
        $sql.=" group by danhmuc.id  order by danhmuc.id desc";
        $listthongke=pdo_query($sql);
        return $listthongke;
    }
?>