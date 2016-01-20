
    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="firstmain_progress.css">
    <link rel="stylesheet" href="animsition-master/dist/css/animsition.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'> 
 
    <?php 
        $total=50;
        $totalbase=140;
     ?>


<div class = "back">

    <input type="hidden" id="total" value="<?=$total?>" />
    <input type="hidden" id="totalbase" value="<?=$totalbase?>" />

    <div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-left" data-animsition-out-duration="2000">
 
        <a href="./secondpg_140.php" >
             <div class="progress4" id="container4" >  
                <div class="b" id="example-percent-container4"  >  </div>
                <div id="container4_name">Out of 140</div>
            </div>
        </a>
         
    </div>

</div>



    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="firstmain_progress.js">//page transition </script> 


