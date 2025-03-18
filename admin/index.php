<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case "adddm":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Them thanh cong";
                }
                
                include "danhmuc/add.php";
                break;

            case "listdm":
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case "xoadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case "suadm":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;

            case "updatedm":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao="Cap nhat thanh cong";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            /* san pham */
            case "addsp":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $habitatsp=$_POST['habitat'];
                    $motasp=$_POST['mota'];
                    $imgsp=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{

                    }
                    insert_sanpham($tensp,$habitatsp,$imgsp,$motasp,$iddm);
                    $thongbao="Them thanh cong";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;
    
            case "listsp":
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw="";
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
    
            case "xoasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
    
            case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
    
            case "updatesp":
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $habitatsp=$_POST['habitat'];
                    $motasp=$_POST['mota'];
                    $imgsp=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir . basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){

                    }else{

                    }
                    update_sanpham($id, $iddm, $tensp, $habitatsp, $motasp, $imgsp);
                    $thongbao="Cap nhat thanh cong";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;

            case 'dskh':
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/list.php";
                break;

            case 'dsbl':
                $listbinhluan=loadall_binhluan(0);
                include "binhluan/list.php";
                break;

            case "suatk":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $tk=loadone_taikhoan($_GET['id']);
                }
                include "taikhoan/update.php";
                break;
            
            case 'update_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $tel=$_POST['tel'];
                    $role=$_POST['role'];
                    update_taikhoan($id, $user, $pass, $email, $address, $tel, $role);
                    $thongbao="Cap nhat thanh cong";
                }
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/list.php";
                break;

            case "xoatk":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan=loadall_taikhoan();
                include "taikhoan/list.php";
                break;

            case "xoabl":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan=loadall_binhluan(0);
                include "binhluan/list.php";
                break;

            case "thongke":
                $listthongke=loaddall_thongke();
                include "thongke/list.php";
                break;

            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>