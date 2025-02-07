$(function () {
    "use strict";
    Morris.Area({
        element: 'morris-area-chart'
        , data: [{
                period: '2010'
                , iphone: 10
                }, {
                period: '2011'
                , iphone: 1667
                }, {
                period: '2012'
                , iphone: 4912
                }, {
                period: '2013'
                , iphone: 3767
                }, {
                period: '2014'
                , iphone: 6810
                }, {
                period: '2015'
                , iphone: 5670
                }, {
                period: '2016'
                , iphone: 4820
                }, {
                period: '2017'
                , iphone: 15073
                }, {
                period: '2018'
                , iphone: 8087
                }, {
                period: '2019'
                , iphone: 10
                }


                ]
        , lineColors: ['#3d3d3d']
        , xkey: 'period'
        , ykeys: ['iphone']
        , labels: ['Site A']
        , pointSize: 0
        , lineWidth: 0
        , fillOpacity: 1
        , resize: true
        , behaveLikeLine: true
        , gridLineColor: '#e0e0e0'
        , hideHover: 'auto'
    });
    
    var sparklineLogin = function () {
        $('#sales1').sparkline([20, 40, 30], {
            type: 'pie'
            , height: '130'
            , resize: true
            , sliceColors: ['#808f8f', '#fecd36', '#f1f2f7']
        });
        $('#sales2').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar'
            , height: '154'
            , barWidth: '4'
            , resize: true
            , barSpacing: '10'
            , barColor: '#25a6f7'
        });
        $('#sparklinedash').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#4caf50'
        });
        $('#sparklinedash2').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#9675ce'
        });
        $('#sparklinedash3').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#03a9f3'
        });
        $('#sparklinedash4').sparkline([0, 5, 6, 10, 9, 12, 4, 9], {
            type: 'bar'
            , height: '30'
            , barWidth: '4'
            , resize: true
            , barSpacing: '5'
            , barColor: '#f96262'
        });
    }
    var sparkResize;
    $(window).resize(function (e) {
        clearTimeout(sparkResize);
        sparkResize = setTimeout(sparklineLogin, 500);
    });
    sparklineLogin();
});

// Sky Icons
var icons = new Skycons({
        "color": "#ed4040"
    })
    , list = [
        "clear-day", "clear-night", "partly-cloudy-day"
        , "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind"
        , "fog"
      ]
    , i;
for (i = list.length; i--;) {
    var weatherType = list[i]
        , elements = document.getElementsByClassName(weatherType);
    for (e = elements.length; e--;) {
        icons.set(elements[e], weatherType);
    }
}
icons.play();

