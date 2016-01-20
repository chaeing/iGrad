
    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="progress.css">
    
 
    <?php 
        $target1=5;
        $target2=5;
        $target3=5;
        $base1=15;
        $base2=25;
        $base3=35;
     ?>


<div class = "back">

    <input type="hidden" id="t1" value="<?=$target1?>" />
    <input type="hidden" id="t2" value="<?=$target2?>" />
    <input type="hidden" id="t3" value="<?=$target3?>" />
    <input type="hidden" id="b1" value="<?=$base1?>" />
    <input type="hidden" id="b2" value="<?=$base2?>" />
    <input type="hidden" id="b3" value="<?=$base3?>" />
    
    
  <div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-left" data-animsition-out-duration="2000">
 
    <a href="./secondpg.php" class="animsition-link">
        <div class="progress1" id="container1" >  
            <div class="a" id="maincircle_1"  ></div>
            <div id="container1_name">교양</div>
    	</div>
    </a>

    <a href="./secondpg.php" class="animsition-link">
        <div class="progress2" id="container2" >  
            <div class="a" id="maincircle_2"  >  </div>
            <div id="container1_name">실무</div>

        </div>
    </a>
    
    <a href="./secondpg.php" class="animsition-link">

        <div class="progress3" id="container3" >  
            <div class="a" id="maincircle_3"  >  </div>
            <div id="container1_name">교양</div>
        </div>
    </a>

    
        </div>
     
  </div>

</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="progress.js">//page transition </script> 





