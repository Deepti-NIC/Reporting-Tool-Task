$(function() {
    $.ajax({
    url: "http://localhost/SERVER-VC-details/chart1.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Number of VCs Month wise",
        xAxisName: "Months",
        yAxisName: "VC Count",
        lineThickness: "2",
        rotatevalues: "1",
        showBorder: "1",
        borderColor: "#000080",
        borderThickness: "5",
        borderAlpha: "80",
        rotatevalues: "1",
        theme: "zune"
      };
      apiChart = new FusionCharts({
        type: "line",
        renderAt: "chart-container",
        width: "1150",
        height: "300",
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
        caption: "Number of VCs as per VC Mode",
        xAxisName: "Months",
        yAxisName: "VC Number",
        rotatevalues: "1",
        showBorder: "1",
        borderColor: "#000080",
        borderThickness: "5",
        borderAlpha: "80",
        rotatevalues: "1",
        theme: "zune"
      };      
      var chartObj = new FusionCharts({
        type: 'doughnut3d',
        renderAt: 'chart-container',
        width: '380',
        height: '300',
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



$(function() {
  $.ajax({
  url: "http://localhost/SERVER-VC-details/chart12.php",
  type: "GET",
  success: function(data) {
    chartData = data;
    var chartProperties = {
      caption: "Count of VCs chaired by Hon'ble Minsiter and MoS ",
      xAxisName: "Count",
      yAxisName: "VC_Date",
      showBorder: "1",
      borderColor: "#000080",
      borderThickness: "5",
      borderAlpha: "80",
      rotatevalues: "1",
      theme: "zune"
    };      
    var chartObj = new FusionCharts({
      type: 'pie3d',
      renderAt: 'chart-container',
      width: '350',
      height: '300',
      dataFormat: 'json',
      dataSource: {
          chart: chartProperties,
          data: chartData
        }
        });
  chartObj.render(piechartcontainer);
  }
  });
});

$(function() {
    $.ajax({
    url: "http://localhost/SERVER-VC-details/chart11.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Number of VCs as per VC Mode",
        xAxisName: "VC Mode",
        yAxisName: "VC Count",
        rotatevalues: "1",
        showBorder: "1",
        borderColor: "#000080",
        borderThickness: "5",
        borderAlpha: "80",
        rotatevalues: "1",
        theme: "zune"
      };
      apiChart = new FusionCharts({
        type: "column2d",
        renderAt: "chart-container",
        width: "400",
        height: "300",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData
        }
      });
      apiChart.render(colchartcontainer);
    }
    });
});
