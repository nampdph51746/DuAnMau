<div class="row mb">
            <div class="boxtrai mr">
                <div class="row mb">
                    <div class="boxtitle">San pham <strong style="font-size:1.2vw;"><?=$name_dm?></strong></div>
                    <div class="row boxcontent">
                        <?php
                            $i=0;
                            foreach($ds_sanpham as $ds_sanpham){
                                extract($ds_sanpham);
                                $hinh=$img_path.$img;
                                $linksp="index.php?act=sanphamchitiet&id=".$id;
                                if(($i==2)||($i==5)||($i==8)||($i==11)){
                                    $mr="";
                                }else{
                                    $mr="mr";
                                }
                                echo '<div align="center" class="boxsp ' . $mr . '">
                                <div class="row img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                                <div class="name"><a href="'.$linksp.'">'.$name.'</a></div>
                                <div class="habitat1"><p>'.$habitat.'</p></div>
                                </div>';
                                $i+=1;
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
        