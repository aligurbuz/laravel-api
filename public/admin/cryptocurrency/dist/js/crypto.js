$(function() {
    "use strict";
    // ============================================================== 
    // For Crypto Cards
    // ==============================================================
    var sparklineLogin = function() {
        $('.crypto').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '5',
            barColor: '#ffffff'
        });
        $('.crypto1').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '5',
            barColor: '#343a40'
        });
        $('.range').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '5',
            barColor: '#343a40'
        });
        $('.range1').sparkline([9, 10, 10, 11, 10, 10, 12], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '5',
            barColor: '#03a9f3'
        });
        $('.range2').sparkline([10, 15, 11, 13, 12, 12, 15], {
            type: 'bar',
            height: '30',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '5',
            barColor: '#20c997'
        });

    };
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
});