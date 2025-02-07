$(function() {
    "use strict";

    // ============================================================== 
    // sparkline charts
    // ==============================================================
    var sparklineLogin = function() {
        $("#spark1").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#36bea6',
            fillColor: '#ecfaf8',
            maxSpotColor: '#36bea6',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#36bea6'
        });
        $("#spark2").sparkline([0, 2, 8, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#009efb',
            fillColor: '#E5F0FC',
            minSpotColor: '#009efb',
            maxSpotColor: '#009efb',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#009efb'
        });
        $("#spark3").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#f62d51',
            fillColor: '#FEEAED',
            maxSpotColor: '#f62d51',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#f62d51'
        });
        $("#spark4").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#ffbc34',
            fillColor: '#FFF8EA',
            maxSpotColor: '#ffbc34',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#ffbc34'
        });
        $("#spark5").sparkline([0, 2, 8, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#343a40',
            fillColor: '#EAEBEB',
            minSpotColor: '#343a40',
            maxSpotColor: '#343a40',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#343a40'
        });
        $("#spark6").sparkline([2, 4, 4, 6, 8, 5, 6, 4, 8, 6, 6, 2], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#7460ee',
            fillColor: '#F1EFFD',
            maxSpotColor: '#7460ee',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#7460ee'
        });

    }
    var sparkResize;
    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
});