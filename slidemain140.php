

    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="slidemain.css">

    
 
    <?php 

        session_start();

        require_once('140_eng_total_score.php');

        $target1=$_SESSION['lib_total'];
        $target2=$_SESSION['prac_total'];
        $target3=$_SESSION['maj_total'];
        $target4=$_SESSION['eng_total'];
        $target5=$_SESSION['140_spec_total'];
        $target6=$_SESSION['total'];

        $base1=40;
        $base2=20;
        $base3=66;;
        $base4=24;
        $base5=33;
        $base6=140;
     ?>


<div class = "back" id="all">
    <input type="hidden" id="t1" value="<?=$target1?>" />
    <input type="hidden" id="t2" value="<?=$target2?>" />
    <input type="hidden" id="t3" value="<?=$target3?>" />
    <input type="hidden" id="t4" value="<?=$target4?>" />
    <input type="hidden" id="t5" value="<?=$target5?>" />
    <input type="hidden" id="t6" value="<?=$target6?>" />

    <input type="hidden" id="b1" value="<?=$base1?>" />
    <input type="hidden" id="b2" value="<?=$base2?>" />
    <input type="hidden" id="b3" value="<?=$base3?>" />
    <input type="hidden" id="b4" value="<?=$base4?>" />
    <input type="hidden" id="b5" value="<?=$base5?>" />
    <input type="hidden" id="b6" value="<?=$base6?>" />
    
  <div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-left" data-animsition-out-duration="2000">
 

        <div class="progress1" id="bigcontainer" >

            <div class="box" id="container1">
                <div class="na" id="name1">교양</div>
                <div  id="compo1"  >  </div>
            </div>
             <div class="box" id="container2">
                <div class="na" id="name2">실무</div>
                <div id="compo2">  </div>
            </div>
            
            <br/>

            <div class="box" id="container3">
                <div class="na" id="name3">전공</div>
                <div id="compo3"  >  </div>
            </div>
            
            <div class="box" id="container4">
                <div class="na" id="name4">영어</div>
                <div id="compo4"  >  </div>
            </div>

            <br/>

            <div class="box" id="container5">
                <div class="na" id="name5"></div>
                <div id="compo5"  >  </div>
            </div>

            <div class="box" id="container6">
                <div class="na" id="name6">총합</div>
                <div id="compo6"  >  </div>
            </div>
           
        </div>


     
  </div>

</div>

  


    

    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="slidemain.js">//page transition </script> 
