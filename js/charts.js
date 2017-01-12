var getChart = {
    internetProp: {
      pieTitle:'% of Students with Internet Access',
      pieSubTitle:'',
      barTitle:'Avg Final Grade based on Ineternet Access',
      barSubTitle:''
    },

    failureProp: {
      pieTitle:'Past Failure %',
      pieSubTitle:'',
      barTitle:'Avg Final Grades by Failures ',
      barSubTitle:''
    },

    studyProp: {
      pieTitle:'Student Study Time breakdown %',
      pieSubTitle:'',
      barTitle:'Avg Final Grade by Study Time',
      barSubTitle:''
    },

    absencesProp: {
      pieTitle:'% of Students with Absences',
      pieSubTitle:'',
      barTitle:'Avg Final Grades by Absences',
      barSubTitle:''
    },

    travelProp: {
      pieTitle:'Avg Final Grades by Commute',
      pieSubTitle:'',
      barTitle:'Avg Final Grades by Commute',
      barSubTitle:'',
    },

    healthProp: {
      pieTitle:'Avg Final Grades by Student Health',
      pieSubTitle:'',
      barTitle:'',
      barSubTitle:'',
    },

    drawChart: function(pieData, barData, pieTitle, barTitle, pieSubtitle, barSubTitle){
      google.charts.setOnLoadCallback(drawInternet);

      function drawInternet() {

        var data_a = new google.visualization.DataTable();
        data_a.addColumn('string', 'label');
        data_a.addColumn('number', 'label');
        data_a.addRows(pieData);

        var piechart_options = {
                      title:pieTitle,
                      subtitle:pieSubtitle,
                      width:'auto',
                      height:400,
                      is3D: true
                    };
        var piechart = new google.visualization.PieChart(document.getElementById('pie-chart'));
        piechart.draw(data_a, piechart_options);

        var data_b = new google.visualization.DataTable();
        data_b.addColumn('string', 'label');
        data_b.addColumn('number', 'label');
        data_b.addColumn({type: 'string', role: 'style'});
        data_b.addRows(barData);

        var barchart_options = {
                      title:barTitle,
                      subTitle:barSubTitle,
                      width:'auto',
                      height:400,
                      legend: 'none'
                    };
        var barchart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
        barchart.draw(data_b, barchart_options);
      }
    },
    drawHealthChart: function(barData, barTitle){

      google.charts.setOnLoadCallback(drawHealth);
      function drawHealth() {
        var data = google.visualization.arrayToDataTable(barData);

        var barchart_options = {
          chart: {
            title: 'Overall Student Health',
            subtitle: 'Grade 1, Grade 2, Final Grade (Grade 3)',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('bar-chart'));

        chart.draw(data, barchart_options);
      }
    },
    gatherChartData: function(internet){
      var url="/rest/getData.php";
      $.ajax({
          type: "POST",
          url: url,
          data: '',
          success: function(response) {
            
          },
          error: function(response){
            console.log(response.status + " " + response.statusText);
          }
        });
    }


}