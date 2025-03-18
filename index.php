<?php
    session_start();
    include "view/header.php";
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "global.php";
    include "model/taikhoan.php";

    $sanphamnew=loadall_sanpham_home();
    $danhsachdm=loadall_danhmuc();
    $danhsachtop10=loadall_sanpham_top10();

    if((isset($_GET['act']))&&($_GET['act']!=="")){
        $act = $_GET['act'];
        switch($act){
            case 'gioithieu':
                include "view/gioithieu.php";
                break;

            case 'lienhe':
                include "view/lienhe.php";
                break;

            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Dang ky thanh cong";
                }
                include "view/taikhoan/dangky.php";
                break;

            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        header('Location: index.php');
                    }else{
                        $thongbao="Tai khoan khong ton tai";
                    }
                }
                include "view/taikhoan/dangky.php";
                break;

            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    update_taikhoan($id, $user, $pass, $email, $address, $tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('Location: index.php?act=edit_taikhoan');
                    $thongbao="Cap nhat thanh cong";
                }
                include "view/taikhoan/edit_taikhoan.php";
                break;
            case 'quenmk':
                if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                    $email=$_POST['email'];
                    $checkemail=checkemail($email);
                    if(is_array($checkemail)){
                        $thongbao="Mat khau cua ban la: ".$checkemail['pass'];
                    }else{
                        $thongbao="Email khong ton tai";
                    }
                }
                include "view/taikhoan/quenmk.php";
                break;

            case 'thoat':
                session_unset();
                header('Location: index.php');
                break;

            case 'sanphamchitiet':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onesp=loadone_sanpham($id);
                    extract($onesp);
                    $sp_cungloai=load_sanpham_cungloai($id,$iddm);
                    include "view/sanphamchitiet.php";
                }else{
                    include "view/home.php";
                }
                break;

            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $ds_sanpham=loadall_sanpham($kyw,$iddm);
                $name_dm=load_ten_dm($iddm);
                include "view/sanpham.php";
                break;

            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";
?>