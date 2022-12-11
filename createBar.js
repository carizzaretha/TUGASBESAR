src="https://www.gstatic.com/charts/loader.js"

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart(const charaInteraksi) {
  const arr= [['namaChara','interaksi']]+charaInteraksi;

var data = google.visualization.arrayToDataTable(arr);

var options = {
  title:'top 10 character interction'
};

var chart = new google.visualization.BarChart(document.getElementById('bar'));
  chart.draw(data, options);
}
