<?php 
  use app\models\Penyakit; 
?>
<script>

FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "Column3d",
        "renderAt": "grafik-penyakit",
        "width": "100%",
        "height": "300",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption" : "Grafik Penyakit",
              "xAxisName": "Nama Penyakit",
              "yAxisName": "Jumlah",
              "theme": "fint"
           },
          "data":        
              [ <?php print Penyakit::getGrafikPerPenyakit(); ?> ]
        }
    });
    revenueChart.render();
})
        
</script> 
<div id="grafik-penyakit"> FusionChart XT will load here! </div>