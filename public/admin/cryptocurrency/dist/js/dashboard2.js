/*
Template Name: Admin Pro Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";
    // ==============================================================
    // Real Time chart
    // ==============================================================
    var data = [5, 10, 15, 20, 15, 30, 40],
        totalPoints = 100;

    function getRandomData() {
        if (data.length > 0) data = data.slice(1);
        // Do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 10,
                y = prev + Math.random() * 10 - 5;
            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }
            data.push(y);
        }
        // Zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }
        return res;
    }
    // Set up the control widget
    var updateInterval = 1000;
    $("#updateInterval").val(updateInterval).change(function() {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            if (updateInterval < 1) {
                updateInterval = 1;
            } else if (updateInterval > 3000) {
                updateInterval = 3000;
            }
            $(this).val("" + updateInterval);
        }
    });
    var plot = $.plot("#placeholder", [getRandomData()], {
        series: {
            shadowSize: 0, // Drawing is faster without shadows
            lines: { fill: true, fillColor: '#fec107' },
        },
        yaxis: {
            min: 0,
            max: 100,
            show: true
        },
        xaxis: {
            show: true
        },
        colors: ["#fec107"],
        grid: {
            color: "#fff",
            hoverable: true,
            borderWidth: 0,
            backgroundColor: 'transparent'
        },
        tooltip: true,
        tooltipOpts: {
            content: "Stock: %x",
            defaultTheme: false
        }
    });
    window.onresize = function(event) {
        $.plot($("#placeholder"), [getRandomData()]);
    }

    function update() {
        plot.setData([getRandomData()]);
        // Since the axes don't change, we don't need to call plot.setupGrid()
        plot.draw();
        setTimeout(update, updateInterval);
    }
    update();
    // ============================================================== 
    // Our Visitor
    // ============================================================== 

    var chart = c3.generate({
        bindto: '#visitor',
        data: {
            columns: [
                ['Desktop', 60],
                ['Tablet', 12],
                ['Mobile', 28],

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
            title: "Visits",
            width: 35,

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
        color: {
            pattern: ['#40c4ff', '#2961ff', '#ff821c', '#7e74fb']
        }
    });
    // ============================================================== 
    // Our Visitor
    // ============================================================== 
    var sparklineLogin = function() {
        $('#ravenue').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '100',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#fff'
        });
        $('#ravenue1').sparkline([16, 10, 16, 11, 8, 10, 12], {
            type: 'bar',
            height: '100',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#fff'
        });
        $('#ravenue2').sparkline([16, 10, 16, 11, 8, 10, 12], {
            type: 'bar',
            height: '65',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#fff'
        });
        $('#ravenue3').sparkline([16, 10, 16, 11, 8, 10, 12], {
            type: 'bar',
            height: '65',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#fff'
        });
        $('#ravenue4').sparkline([16, 10, 16, 11, 8, 10, 12], {
            type: 'bar',
            height: '65',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#fff'
        });
        $('#ravenue5').sparkline([16, 10, 16, 11, 8, 10, 12], {
            type: 'bar',
            height: '65',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#fff'
        });
        $('#active-users').sparkline([6, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9, 10, 12, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '60',
            barWidth: '4',
            width: '100%',
            resize: true,
            barSpacing: '8',
            barColor: '#2961ff'
        });
        $('#views').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'line',
            height: '65',
            lineColor: 'transparent',
            fillColor: 'rgba(255, 255, 255, 0.3)',
            width: '100%',

            resize: true,

        });
    };
    var sparkResize;

    $(window).resize(function(e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
});

$(function() {
    "use strict";
    // ============================================================== 
    // Newsletter
    // ============================================================== 

    var chart = new Chartist.Line('.campaign', {
        labels: [1, 2, 3, 4, 5, 6, 7, 8],
        series: [
            [0, 5, 6, 8, 25, 9, 8, 24],
            [0, 3, 1, 2, 8, 1, 5, 1]
        ]
    }, {
        low: 0,
        high: 28,

        showArea: true,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
        ],
        axisY: {
            onlyInteger: true,
            scaleMinSpace: 40,
            offset: 20,
            labelInterpolationFnc: function(value) {
                return (value / 1) + 'k';
            }
        },

    });

    // Offset x1 a tiny amount so that the straight stroke gets a bounding box
    // Straight lines don't get a bounding box 
    // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
    chart.on('draw', function(ctx) {
        if (ctx.type === 'area') {
            ctx.element.attr({
                x1: ctx.x1 + 0.001
            });
        }
    });

    // Create the gradient definition on created event (always after chart re-render)
    chart.on('created', function(ctx) {
        var defs = ctx.svg.elem('defs');
        defs.elem('linearGradient', {
            id: 'gradient',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(255, 255, 255, 1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(64, 196, 255, 1)'
        });
    });

});