$(function() {
    $.ajax({
    url: "http://localhost/SERVER-VC-details/chart1.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Chart to for VC details Month wise column",
        xAxisName: "Months",
        yAxisName: "VC Number",
        rotatevalues: "1",
        theme: "zune"
      };
      apiChart = new FusionCharts({
        type: "column2d",
        renderAt: "chart-container",
        width: "550",
        height: "350",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData
        }
      });
      apiChart.render(chartcontainer);
    }
    });
});

$(function() {
    $.ajax({
    url: "http://localhost/SERVER-VC-details/chart1.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Chart to for VC details Month wise doughnut",
        xAxisName: "Months",
        yAxisName: "VC Number",
        rotatevalues: "1",
        theme: "zune"
      };      
      var chartObj = new FusionCharts({
        type: 'doughnut3d',
        renderAt: 'chart-container',
        width: '550',
        height: '450',
        dataFormat: 'json',
        dataSource: {
            chart: chartProperties,
            data: chartData
          }
          });
    chartObj.render(doughnutcontainer);
    }
    });
});

