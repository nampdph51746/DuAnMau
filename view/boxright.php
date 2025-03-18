<div class="row mb">
    <div class="boxtitle"><strong style="font-size: 1vw;">Tai khoan</strong></div>
    <div class="boxcontent formtaikhoan">
        <?php if (isset($_SESSION['user'])) {
            extract($_SESSION['user']); ?>
            <div class="row mb10">
                Xin chao, <?= $user ?>
            </div>
            <div class="row mb10">
                <li><a href="index.php?act=quenmk">Quen mat khau</a></li>
                <li><a href="index.php?act=edit_taikhoan">Cap nhat tai khoan</a></li>
                <?php if ($role == 1) { ?>
                    <li><a href="admin/index.php">Dang nhap admin</a></li>
                <?php } ?>
                <li><a href="index.php?act=thoat">Thoat</a></li>
            </div>
        <?php } else { ?>
            <form id="loginForm" action="index.php?act=dangnhap" method="post" onsubmit="return validateForm()">
                <div class="row mb10">
                    Ten dang nhap<br>
                    <input type="text" id="user" name="user">
                    <div id="userError" style="color:red;"></div>
                </div>
                <div class="row mb10">
                    Mat khau<br>
                    <input type="password" id="pass" name="pass">
                    <div id="passError" style="color:red;"></div>
                </div>
                <div class="row mb10">
                    <input type="checkbox">Ghi nho tai khoan<br>
                </div>
                <div class="row mb10">
                    <input type="submit" value="Dang nhap" name="dangnhap">
                </div>
            </form>
            <li><a href="">Quen mat khau</a></li>
            <li><a href="index.php?act=dangky">Dang ky thanh vien</a></li>
        <?php } ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle"><strong style="font-size: 1vw;">Danh muc</strong></div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($danhsachdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li>
                    <a href="' . $linkdm . '">' . $name . '</a>
                 </li>';
            }
            ?>

        </ul>
    </div>
    <div class="boxfooter">
    </div>
</div>
<div class="row mb">
    <div class="boxtitle"><strong style="font-size: 1vw;">Top 10 yeu thich</strong></div>
    <div class="row boxcontent">
        <?php
        foreach ($danhsachtop10 as $sp10) {
            extract($sp10);
            $linksp = "index.php?act=sanphamchitiet&id=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                                    <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                                    <div class="name"><a href="' . $linksp . '">' . $name . '</a></div>
                                    </div>';
        }
        ?>
    </div>
</div>
<script>
    function validateForm() {
        let isValid = true;

        const username = document.getElementById('user').value;
        const password = document.getElementById('pass').value;

        const userError = document.getElementById('userError');
        const passError = document.getElementById('passError');

        userError.textContent = '';
        passError.textContent = '';

        if (!username) {
            userError.textContent = 'Username không được để trống.';
            isValid = false;
        } else if (username.length < 3 || username.length > 30) {
            userError.textContent = 'Độ dài Username phải nằm trong khoảng 3 đến 30 ký tự.';
            isValid = false;
        }

        if (!password) {
            passError.textContent = 'Password không được để trống.';
            isValid = false;
        } else if (password.length < 6 || password.length > 10) {
            passError.textContent = 'Độ dài Password phải nằm trong khoảng 6 đến 10 ký tự.';
            isValid = false;
        }

        return isValid;
    }
</script>