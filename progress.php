
    <meta http-ｅquiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="progress.css">
    
 
    <?php 
        $a=5;
        $a2=5;
     ?>


<div class = "back">

  <div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="2000" data-animsition-out-class="fade-out-left" data-animsition-out-duration="2000">
 
    <a href="./secondpg.php" class="animsition-link">
        <div class="progress1" id="container1" >  
            <div class="a" id="example-percent-container1_1"  ></div>
            <div id="container1_name">교양</div>
    	</div>

        <div class="progress2" id="container2" >  
            <div class="a" id="example-percent-container2_1"  >  </div>
            <div id="container1_name">전공</div>

        </div>

        <div class="progress3" id="container3" >  
            <div class="a" id="example-percent-container3_1"  >  </div>
            <div id="container1_name">교양</div>
        </div>

    
        </div>
    </a>
     
  </div>

</div>




    <script type="text/javascript" src="/library/progressbar.js-master/dist/progressbar.js">//circlebar </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">//jquery </script>
    <script src="progress.js">//page transition </script> 







    <script>///추후에 js로 넘길것
    var target=<?php echo $a; ?>;//post나 get으로 넘겨주자

    var circle1_1 = new ProgressBar.Circle('#example-percent-container1_1', { //노랑
        color: '#cc0006',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * 24).toFixed(0)+"/24");
    }

    });
    circle1_1.path.setAttribute('stroke-linecap', 'round');
    circle1_1.animate(1/24*10);





    var target2=<?php echo $a2; ?>;//post나 get으로 넘겨주자

    var circle2_1 = new ProgressBar.Circle('#example-percent-container2_1', { //노랑
        color: '#Ff3366',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * 24).toFixed(0)+"/24");
    }

    });
    circle2_1.path.setAttribute('stroke-linecap', 'round');
    circle2_1.animate(1/24*14);


 





    var target3=<?php echo $a2; ?>;//post나 get으로 넘겨주자

    var circle3_1 = new ProgressBar.Circle('#example-percent-container3_1', { //노랑
        color: '#Ff0066',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * 24).toFixed(0)+"/24");
    }

    });
    circle3_1.path.setAttribute('stroke-linecap', 'round');
    circle3_1.animate(1/24*14);


  





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
