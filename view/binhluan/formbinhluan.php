<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .binhluan table {
            width: 90%;
            margin-left: 5%;
        }

        .binhluan table td:nth-child(1) {
            width: 50%;
        }

        .binhluan table td:nth-child(2) {
            width: 20%;
        }

        .binhluan table td:nth-child(3) {
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="row mb">
        <div class="boxtitle"><strong style="font-size: 1vw;">Binh luan</strong></div>
        <div class="boxcontent2 binhluan">
            <table>
                <?php
                    foreach ($dsbl as $dsbl) {
                        extract($dsbl);
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $iduser . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr>';
                    }
                ?>
            </table>
        </div>
        <?php if (isset($_SESSION['user'])): ?>
            <div class="boxfooter binhluanform">
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="gui_binhluan" value="Gui binh luan">
                </form>
            </div>
        <?php else: ?>
            <div class="boxfooter binhluanform">
                <p><strong style="font-size:1vw;">Ban can Dang nhap de comment.</strong></p>
            </div>
        <?php endif; ?>
        <?php
            if (isset($_POST['gui_binhluan']) && ($_POST['gui_binhluan'])) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        ?>
    </div>
</body>
</html>
