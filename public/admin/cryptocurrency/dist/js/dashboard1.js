$(function() {
    "use strict";

    // ============================================================== 
    // Our Visitor
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Lightcoin', 30],
                ['Ethereum', 10],
                ['Bitcoin', 40],
                ['Ripple', 50],
            ],

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Invest",

            width: 30,

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#eceff1', '#343a40', '#fb9678', '#009efb']
        }
    });
    // ============================================================== 
    // Our Income
    // ==============================================================
    var chart = c3.generate({
        bindto: '#income',
        data: {
            columns: [
                ['Bitcoin', 100, 200, 100, 300, 350],
                ['Ethereum', 130, 100, 140, 200, 120]
            ],
            type: 'bar'
        },
        bar: {
            space: 0.2,
            // or
            width: 15 // this makes bar width 100px
        },
        axis: {
            y: {
                tick: {
                    count: 5,

                    outer: false
                }
            }
        },
        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        grid: {
            x: {
                show: false
            },
            y: {
                show: true
            }
        },
        size: {
            height: 290
        },
        color: {
            pattern: ['#fb9678', '#343a40']
        }
    });
    // Dashboard 1 Morris-chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010',
            Ethereum: 0,
            Bitcoin: 0,
            itouch: 0
        }, {
            period: '2011',
            Ethereum: 130,
            Bitcoin: 100,
            itouch: 80
        }, {
            period: '2012',
            Ethereum: 80,
            Bitcoin: 60,
            itouch: 70
        }, {
            period: '2013',
            Ethereum: 70,
            Bitcoin: 200,
            itouch: 140
        }, {
            period: '2014',
            Ethereum: 180,
            Bitcoin: 150,
            itouch: 140
        }, {
            period: '2015',
            Ethereum: 105,
            Bitcoin: 100,
            itouch: 80
        }, {
            period: '2016',
            Ethereum: 250,
            Bitcoin: 150,
            itouch: 200
        }],
        xkey: 'period',
        ykeys: ['Ethereum', 'Bitcoin'],
        labels: ['Ethereum', 'Bitcoin'],
        pointSize: 0,
        fillOpacity: 0,
        pointStrokeColors: ['#fb9678', '#fb9678', '#343a40'],
        behaveLikeLine: true,
        gridLineColor: '#f6f6f6',
        lineWidth: 1,
        hideHover: 'auto',
        lineColors: ['#343a40', '#fb9678', '#343a40'],
        resize: true
    });

});
// sparkline
var sparklineLogin = function() {
    $('#sales1').sparkline([1, 4, 5, 4, 5, 6, 6, 7, 5, 7, 5, 4, 3], {
        type: 'line',
        width: '100%',
        height: '75',
        lineColor: '#00bfbf',
        fillColor: '#ecfaf8',
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: '#494646',
        spotRadius: 0
    });

    $('#sales2').sparkline([6, 10, 9, 11, 9, 10, 12], {
        type: 'bar',
        height: '130',
        barWidth: '4',
        width: '100%',
        resize: true,
        barSpacing: '8',
        barColor: '#25a6f7'
    });

};
var sparkResize;

$(window).resize(function(e) {
    clearTimeout(sparkResize);
    sparkResize = setTimeout(sparklineLogin, 500);
});
sparklineLogin();