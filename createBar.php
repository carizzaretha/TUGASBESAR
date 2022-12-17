<script>
    var interaksi = <?php echo json_encode($y); ?>;
    var nama = <?php echo json_encode($x); ?>;
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['nama', "interaksi"],
  [nama[0],parseInt(interaksi[0])],
  [nama[1],parseInt(interaksi[1])],
  [nama[2],parseInt(interaksi[2])],
  [nama[3],parseInt(interaksi[3])],
  [nama[4],parseInt(interaksi[4])],
  [nama[5],parseInt(interaksi[5])],
  [nama[6],parseInt(interaksi[6])],
  [nama[7],parseInt(interaksi[7])],
  [nama[8],parseInt(interaksi[8])],
  [nama[9],parseInt(interaksi[9])]
]);

var options = {
  title:'top10 character'
};

var chart = new google.visualization.BarChart(document.getElementById('topBarChart'));
  chart.draw(data, options);
}
  

</script>