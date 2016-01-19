

    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="specificlib140.css">
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


        $bar1=10;
        $bar2=20;
        $bar3=30;
        $bar4=40;

        $bar1_b=30;
        $bar2_b=20;
        $bar3_b=40;
        $bar4_b=40;

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

    <input type="hidden" id="tb1" value="<?=$bar1?>" />
    <input type="hidden" id="tb2" value="<?=$bar2?>" />
    <input type="hidden" id="tb3" value="<?=$bar3?>" />
    <input type="hidden" id="tb4" value="<?=$bar4?>" />

    <input type="hidden" id="bb1" value="<?=$bar1_b?>" />
    <input type="hidden" id="bb2" value="<?=$bar2_b?>" />
    <input type="hidden" id="bb3" value="<?=$bar3_b?>" />
    <input type="hidden" id="bb4" value="<?=$bar4_b?>" />

 

        <div class="progress1" id="bigcontainer" >

            <div class="box1" id="container1">
                <div class="na" id="name1">교양</div>
                <div  id="compo1"  >  </div>
            </div>

             <div class="box1" id="container2">
                <div class="nadef" id="name2">실무</div>
                <div id="compo2">  </div>
            </div>
            

            <br/>


            <div class="box2" id="container3">
                <div class="na" id="name3">신앙 및 세계관</div>
                <div id="compo3"  >  </div>
            </div>
            
            <div class="box2" id="container4">
                <div class="na" id="name4">인성 및 리더십</div>
                <div id="compo4"  >  </div>
            </div>

            <div class="box2" id="container5">
                <div class="na" id="name5">기초학문</div>
                <div id="compo5"  >  </div>
            </div>

            <br/>
        
            <div class ="box3" id="bar1">
                <div class="barname">채플</div>
                <div id="progressbar1"></div>
            </div>
        
            <div class ="box3" id="bar2">
                <div class="barname">공동체 리더십 훈련</div>
                <div id="progressbar2"></div>
            </div> 

            <div class ="box3" id="bar3">
                <div class="barname">교양독서</div>
                <div id="progressbar3"></div>
            </div>

            <div class ="box3" id="bar4">
                <div class="barname">한동인성교육</div>
                <div id="progressbar4"></div>
            </div>





        </div>
  </div>





    
    <script src="library/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="specificlib140.js">//page transition </script> 


