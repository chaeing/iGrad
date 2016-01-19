
    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="progress.css">
    <link rel="stylesheet" type="text/css" href="css-percentage-circle-master/css/circle.css">
    <link rel="stylesheet" href="animsition-master/dist/css/animsition.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'> 
 
    <?php 
        $a=5;
        $a2=5;
     ?>


<div class = "back">

  <div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-left" data-animsition-out-duration="2000">
 
    <a href="./secondpg.php" class="animsition-link">

         <div class="progress4" id="container4" >  
            <div class="b" id="example-percent-container4"  >  </div>
        <div id="container4_name">Out of 140</div>
    
        </div>
    </a>
     
  </div>

</div>




    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="animsition-master/dist/js/animsition.min.js">//page transition </script> 
    <script src="progress.js">//page transition </script> 







    <script>///추후에 js로 넘길것
 


    var target4=<?php echo $a2; ?>;//post나 get으로 넘겨주자

    var circle4 = new ProgressBar.Circle('#example-percent-container4', { //노랑
        color: '#black',
        strokeWidth: 10,
        trailWidth: 10,
        trailColor: 'transparent',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * 140).toFixed(0));
    }

    });
    circle4.path.setAttribute('stroke-linecap', 'round');
    circle4.animate(1/140*100);

    </script>
