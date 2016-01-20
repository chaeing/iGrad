

    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="secondpg_slide_eng_140.css">
    <!-- 부트스트랩 -->
    <link href="/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
 
    <?php 
        $target1=10;
        $target2=15;
        $target3=20;
        $target4=10;
        $target5=15;

        $base1=24;
        $base2=36;
        $base3=45;
        $base4=24;
        $base5=36;


    //  container3의 막대바
        $bar3_1=10;
        $bar3_2=20;

        $bar3_1_b=30;
        $bar3_2_b=20;

    //  container5의 막대바
        $bar5_1=1;
        $bar5_2=15;

        $bar5_1_b=30;
        $bar5_2_b=20;

     ?>



<div class = "back" id="all">

    <input type="hidden" id="t1" value="<?=$target1?>" />
    <input type="hidden" id="t2" value="<?=$target2?>" />
    <input type="hidden" id="t3" value="<?=$target3?>" />
    <input type="hidden" id="t4" value="<?=$target4?>" />
    <input type="hidden" id="t5" value="<?=$target5?>" />

    <input type="hidden" id="b1" value="<?=$base1?>" />
    <input type="hidden" id="b2" value="<?=$base2?>" />
    <input type="hidden" id="b3" value="<?=$base3?>" />
    <input type="hidden" id="b4" value="<?=$base4?>" />
    <input type="hidden" id="b5" value="<?=$base5?>" />

    <input type="hidden" id="tb3_1" value="<?=$bar3_1?>" />
    <input type="hidden" id="tb3_2" value="<?=$bar3_2?>" />

    <input type="hidden" id="bb3_1" value="<?=$bar3_1_b?>" />
    <input type="hidden" id="bb3_2" value="<?=$bar3_2_b?>" />

    <input type="hidden" id="tb5_1" value="<?=$bar5_1?>" />
    <input type="hidden" id="tb5_2" value="<?=$bar5_2?>" />

    <input type="hidden" id="bb5_1" value="<?=$bar5_1_b?>" />
    <input type="hidden" id="bb5_2" value="<?=$bar5_2_b?>" />

 

        <div class="progress1" id="bigcontainer" >

            <div class="box1" id="container1">
                <div class="na" id="name1">영어학점</div>
                <div  id="compo1"  >  </div>
            </div>

             <div class="box1" id="container2">
                <div class="nadef" id="name2">,</div>
                <div id="compo2">  </div>
            </div>
            

            <br/>


            <div class="box2" id="container3">
                <div class="na" id="name3">교양</div>
                <div id="compo3"  >  </div>
            </div>
            
            <div class="box2" id="container4">
                <div class="na" id="name4">1전공</div>
                <div id="compo4"  >  </div>
            </div>

            <div class="box2" id="container5">
                <div class="na" id="name5">2전공</div>
                <div id="compo5"  >  </div>
            </div>

            <br/>

            <div id="specific_bar">
                <div id="notice">
                     <div id="ment_notice">
                    blabalbal3333a
                    </div>

                </div>

                <div id="about_container3">
                     <div id="ment_3">
                    
                    </div>

                </div>

                <div id="about_container4">
                    <div id="ment_4">
                    
                    </div>

                </div>


                <div  id="about_container5">
                     <div id="ment_5">
                    
                    </div>

                </div>
            </div>


        </div>
  </div>







    
    <script src="library/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="secondpg_slide_eng_140.js">//page transition </script> 


