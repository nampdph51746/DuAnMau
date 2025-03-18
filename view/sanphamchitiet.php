<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
                    <?php
                        extract($onesp);
                    ?>
                    <div class="boxtitle"><strong style="font-size: 1vw;"><?=$name?></strong></div>
                    <div class="row boxcontent">
                        <?php
                            $img=$img_path.$img;
                            echo '<div class="row mb spct"><img src="'.$img.'"></div>
                            <div class="name"><a href="">'.$name.'</a></div>
                            <div class="habitat1"><p>'.$habitat.'</p></div>
                            <div class="mota"><p>'.$mota.'</p></div>';
                        ?>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#binhluan").load("view/binhluan/formbinhluan.php", {idpro: <?=$id?>});
                    });
                </script>
                <div class="row" id="binhluan">

                </div>

                <div class="row mb">
                    <div class="boxtitle"><strong style="font-size: 1vw;">San pham cung loai</strong></div>
                    <div class="row boxcontent">
                        <?php
                            foreach($sp_cungloai as $sp_cungloai){
                                extract($sp_cungloai);
                                $linksp="index.php?act=sanphamchitiet&id=".$id;
                                echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?> 
            </div>
        </div>
        <script>
        document.addEventListener("DOMContentLoaded", function() {

            var oceanicColor = 'rgb(0,102,204)'; 
            var coastalColor = 'rgb(47,25,105)';
            var shallowColor = 'rgb(0,178,178)';

            var habitatElements = document.querySelectorAll('.habitat1 p');

            habitatElements.forEach(function(element) {
                var habitatText = element.textContent.trim();


                if (habitatText.toLowerCase() === 'oceanic') {
                    element.parentElement.style.backgroundColor = oceanicColor;
                    element.style.color = 'white'; 
                }
                else if (habitatText.toLowerCase() === 'coastal') {
                    element.parentElement.style.backgroundColor = coastalColor;
                    element.style.color = 'white'; 
                }
                else if (habitatText.toLowerCase() === 'shallow') {
                    element.parentElement.style.backgroundColor = shallowColor;
                    element.style.color = 'white'; 
                }
            });
        });
    </script>
        