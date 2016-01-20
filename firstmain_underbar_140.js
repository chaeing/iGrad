 var eng=$('#eng').val();
    var engbase=$('#engbase').val();

    var circle1_1 = new ProgressBar.Circle('#sub', { //노랑
        color: '#cc0006',
        strokeWidth: 9,
        trailWidth: 9,
        trailColor: '#B4B4DC',
        duration: 1500,

        text: {
            value: '0'
    },
    step: function(state, bar) {
        bar.setText((bar.value() * engbase).toFixed(0)+"/"+engbase);
    }

    });
    circle1_1.path.setAttribute('stroke-linecap', 'round');
    circle1_1.animate(1/engbase*eng);