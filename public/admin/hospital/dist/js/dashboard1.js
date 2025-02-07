

// Dashboard 1 Morris-chart
Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            period: '2010',
            OPD: 0,
            ICU: 0,
            
        }, {
            period: '2011',
            OPD: 130,
            ICU: 100,
            
        }, {
            period: '2012',
            OPD: 30,
            ICU: 60,
            
        }, {
            period: '2013',
            OPD: 30,
            ICU: 200,
            
        }, {
            period: '2014',
            OPD: 200,
            ICU: 150,
            
        }, {
            period: '2015',
            OPD: 105,
            ICU: 90,
            
        },
         {
            period: '2016',
            OPD: 250,
            ICU: 150,
           
        }],
        xkey: 'period',
        ykeys: ['OPD', 'ICU'],
        labels: ['OPD $', 'ICU $'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors:['#b4becb', '#00c292'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#b4becb', '#00c292'],
        resize: true
        
    });
Morris.Bar({
        element: 'morris-area-chart1',
        data: [{
            period: '2010',
            OPD: 40,
            ICU: 50,
            
        }, {
            period: '2011',
            OPD: 130,
            ICU: 100,
            
        }, {
            period: '2012',
            OPD: 30,
            ICU: 60,
            
        }, {
            period: '2013',
            OPD: 30,
            ICU: 200,
            
        }, {
            period: '2014',
            OPD: 200,
            ICU: 150,
            
        }, {
            period: '2015',
            OPD: 105,
            ICU: 90,
            
        },
         {
            period: '2016',
            OPD: 250,
            ICU: 150,
           
        }],
        xkey: 'period',
        ykeys: ['OPD', 'ICU'],
        labels: ['OPD', 'ICU'],
        pointSize: 0,
       
        pointStrokeColors:['#469fb4', '#01c0c8'],
        barColors:['#469fb4', '#01c0c8'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#469fb4', '#01c0c8'],
        resize: true
        
    });

 
$("#sparkline8").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
            type: 'line',
            width: '100%',
            height: '130',
            lineColor: '#00c292',
            fillColor: 'rgba(0, 194, 146, 0.2)',
            maxSpotColor: '#00c292',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#00c292'
        });
        $("#sparkline9").sparkline([2,4,8,6,8,5,6,4,8,6,6,2 ], {
            type: 'line',
            width: '100%',
            height: '130',
            lineColor: '#03a9f3',
            fillColor: 'rgba(3, 169, 243, 0.2)',
            minSpotColor:'#03a9f3',
            maxSpotColor: '#03a9f3',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#03a9f3'
        });
        $("#sparkline10").sparkline([2,4,4,6,8,5,6,4,8,6,6,2], {
            type: 'line',
            width: '100%',
            height: '130',
            lineColor: '#fb9678',
            fillColor: 'rgba(251, 150, 120, 0.2)',
            maxSpotColor: '#fb9678',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#fb9678'
        });
