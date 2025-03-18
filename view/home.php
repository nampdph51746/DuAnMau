
<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner mb10">
                        <img src="upload/banner_01.png" alt="">
                    </div>
                </div>
                <div class="row" align="center">
                    <h1 style="font-size: 1.5vw; text-align=center;">Cac loai ca moi nhat</h1>
                    <?php
                    $i=0;
                        foreach($sanphamnew as $sp){
                            extract($sp);
                            $hinh=$img_path.$img;
                            $linksp="index.php?act=sanphamchitiet&id=".$id;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo '<div align="center" class="boxsp '.$mr.'">
                                <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></div>
                                <div class="name"><a href="'.$linksp.'">'.$name.'</a></div>
                                <div class="habitat1"><p>'.$habitat.'</p></div>
                                </div>';
                                $i+=1;
                        }
                    ?>
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

