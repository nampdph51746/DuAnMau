<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Du An Mau</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<style>
.search-container {
    display: flex;
    align-items: center;
    margin-left: auto;
}

.search-container form {
    /* display: flex;
    gap: 10px; */
}

.search-container input[type="text"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.search-container input[type="submit"] {
    padding: 10px 20px;
    font-size: 1vw;
    background-color: white;
    color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    border: 1px solid black
}

.search-container input[type="submit"]:hover {
    background-color: #b2ebf2;
}
</style>
<body>
    <div class="boxcenter">
        <div class="row mb header">
            <!-- <h1>FOcean</h1> -->
            <img class="logo" src="upload/logo.png" height="150px" width="150px">
            <div class="row mb menu">
                <ul>
                    <li><a href="index.php">Trang chu</a></li>
                    <li><a href="index.php?act=gioithieu">Gioi thieu</a></li>
                    <li><a href="index.php?act=lienhe">Lien he</a></li>
                    <li><a href="index.php?act=gopy">Gop y</a></li>
                    <li><a href="index.php?act=hoidap">Hoi dap</a></li>
                </ul>
                <div class="search-container">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw">
                        <input type="submit" name="timkiem" value="Tim kiem">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="banner mb10">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <!-- <div class="numbertext">1 / 3</div> -->
                            <img src="view/images/banner_1.jpg" alt="Image 1">
                            <!-- <div class="text">Caption Text</div> -->
                        </div>

                        <div class="mySlides fade">
                            <!-- <div class="numbertext">2 / 3</div> -->
                            <img src="view/images/banner_2.jpg" alt="Image 2">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                            <!-- <div class="numbertext">3 / 3</div> -->
                            <img src="view/images/banner_3.jpg" alt="Image 3">
                            <!-- <div class="text">Caption Three</div> -->
                        </div>
                        </div>
                    </div>
                </div>
        </div>
