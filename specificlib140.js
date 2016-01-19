    
    var tb1=$('#tb1').val();
    var bb1=$('#bb1').val();

    var line1 = new ProgressBar.Line('#progressbar1', {
        color: '#FCB03C',
        trailColor: '#B4B4DC',
        duration: 1500,
        strokeWidth: 1,
        trailWidth: 1,

           text: {
            value: '0'
    }, step: function(state, bar) {
        bar.setText((bar.value() * bb1).toFixed(0)+"/"+bb1);
    }

    });
    line1.path.setAttribute('stroke-linecap', 'round');
    line1.animate(1.0/bb1*tb1);  // Number from 0.0 to 1.0


    
    var tb2=$('#tb2').val();
    var bb2=$('#bb2').val();

    var line1 = new ProgressBar.Line('#progressbar2', {
        color: '#FCB03C',
        trailColor: '#B4B4DC',
        duration: 1500,
        strokeWidth: 1,
        trailWidth: 1,

           text: {
            value: '0'
    }, step: function(state, bar) {
        bar.setText((bar.value() * bb2).toFixed(0)+"/"+bb2);
    }

    });
    line1.path.setAttribute('stroke-linecap', 'round');
    line1.animate(1.0/bb2*tb2);  // Number from 0.0 to 1.0


    
    var tb3=$('#tb3').val();
    var bb3=$('#bb3').val();

    var line1 = new ProgressBar.Line('#progressbar3', {
        color: '#FCB03C',
        trailColor: '#B4B4DC',
        duration: 1500,
        strokeWidth: 1,
        trailWidth: 1,

           text: {
            value: '0'
    }, step: function(state, bar) {
        bar.setText((bar.value() * bb3).toFixed(0)+"/"+bb3);
    }

    });
    line1.path.setAttribute('stroke-linecap', 'round');
    line1.animate(1.0/bb3*tb3);  // Number from 0.0 to 1.0




    
    var tb4=$('#tb4').val();
    var bb4=$('#bb4').val();

    var line1 = new ProgressBar.Line('#progressbar4', {
        color: '#FCB03C',
        trailColor: '#B4B4DC',
        duration: 1500,
        strokeWidth: 1,
        trailWidth: 1,

           text: {
            value: '0'
    }, step: function(state, bar) {
        bar.setText((bar.value() * bb4).toFixed(0)+"/"+bb4);
    }

    });
    line1.path.setAttribute('stroke-linecap', 'round');
    line1.animate(1.0/bb4*tb4);  // Number from 0.0 to 1.0



    var target1=$('#t1').val();
    var base1=$('#b1').val();

    var circle1 = new ProgressBar.Circle('#compo1', { //노랑
        color: '#cc0006',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * base1).toFixed(0)+"/"+base1);
    }

    });
    circle1.path.setAttribute('stroke-linecap', 'round');
    circle1.animate(1/base1*target1);





    var target2=$('#t2').val();
    var base2=$('#b2').val();

    var circle2 = new ProgressBar.Circle('#compo2', { //노랑
        color: 'transparent',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: 'transparent',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * base2).toFixed(0)+"/"+base2);
    }

    });
    circle2.path.setAttribute('stroke-linecap', 'round');
    circle2.animate(1/base2*target2);


 





    var target3=$('#t3').val();
    var base3=$('#b3').val();

    var circle3 = new ProgressBar.Circle('#compo3', { //노랑
        color: '#Ff0066',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * base3).toFixed(0)+"/"+base3);
    }

    });
    circle3.path.setAttribute('stroke-linecap', 'round');
    circle3.animate(1/base3*target3);


  





    var target4=$('#t4').val();
    var base4=$('#b4').val();

    var circle4 = new ProgressBar.Circle('#compo4', { //노랑
        color: '#Ff0066',
        strokeWidth: 10,
        trailWidth: 10,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * base4).toFixed(0)+"/"+base4);
    }

    });
    circle4.path.setAttribute('stroke-linecap', 'round');
    circle4.animate(1/base4*target4);



    var target5=$('#t5').val();
    var base5=$('#b5').val();

    var circle5 = new ProgressBar.Circle('#compo5', { //노랑
        color: 'yellow',
        strokeWidth: 10,
        trailWidth: 10,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * base5).toFixed(0));
    }

    });
    circle5.path.setAttribute('stroke-linecap', 'round');
    circle5.animate(1/base5*target5);


