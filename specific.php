

    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="specific.css">
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
                <div class="na" id="name3">전공</div>
                <div id="compo3"  >  </div>
            </div>
            
            <div class="box2" id="container4">
                <div class="na" id="name4">영어</div>
                <div id="compo4"  >  </div>
            </div>

            <div class="box2" id="container5">
                <div class="na" id="name5">공학인증교양</div>
                <div id="compo5"  >  </div>
            </div>

            <br/>
         
           
        </div>


     
  </div>






<div id="container">
  
      <div class="bar-percentage" data-percentage="50"></div>
      <div class="bar-container">
        <div class="bar"></div>
      </div>
  
</div>

  


    
    <script src="library/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="specific.js">//page transition </script> 


