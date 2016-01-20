

    var target1=$('#t1').val();
    var base1=$('#b1').val();

    var circle1_1 = new ProgressBar.Circle('#maincircle_1', { //노랑
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
    circle1_1.path.setAttribute('stroke-linecap', 'round');
    circle1_1.animate(1/base1*target1);





    var target2=$('#t2').val();
    var base2=$('#b2').val();

    var circle2_1 = new ProgressBar.Circle('#maincircle_2', { //노랑
        color: '#Ff3366',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * base2).toFixed(0)+"/"+base2);
    }

    });
    circle2_1.path.setAttribute('stroke-linecap', 'round');
    circle2_1.animate(1/base2*target2);


 





    var target3=$('#t3').val();
    var base3=$('#b3').val();

    var circle3_1 = new ProgressBar.Circle('#maincircle_3', { //노랑
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
    circle3_1.path.setAttribute('stroke-linecap', 'round');
    circle3_1.animate(1/base3*target3);


  
    var total=$('#total').val();
    var base=$('#totalbase').val();

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
        bar.setText((bar.value() * base).toFixed(0));
    }

    });
    circle4.path.setAttribute('stroke-linecap', 'round');
    circle4.animate(1/base*total);
