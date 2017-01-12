
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
    <?  //wire this up to redraw the charts on page resize for responsiveness
        /*$(window).resize(function(){
            getChart.drawChart();
        });*/
    ?>

    
    <?  // Draw the charts and bar chart when Charts is loaded.
        //Convert to Ajax Request
        switch ($pageName) {
            case "internet"://Construct Data Objects
                $a[]=array('Has Internet', 329);
                $a[]=array("Doesn't Have Internt", 66);
                
                $b[]=array('Has Internet', 11, '');
                $b[]=array("Doesnt' Have Internet", 8, '#dc3912');
                echo "getChart.drawChart(".json_encode($a).','.json_encode($b).",getChart.internetProp.pieTitle, getChart.internetProp.barTitle);";
                break;

            case "failures"://Construct Data Objects
                $a[]=array('0 Failures', 312);
                $a[]=array('1 Failures', 15);
                $a[]=array('2 Failures', 17);
                $a[]=array('3 Failures', 6);

                $b[]=array('0 Failures', 11, '');
                $b[]=array('1 Failures', 8, '#dc3912');
                $b[]=array('2 Failures', 6, '#ff9900');
                $b[]=array('3 Failures', 6, '#109618');
                echo 'getChart.drawChart('.json_encode($a).','.json_encode($b).', getChart.failureProp.pieTitle, getChart.failureProp.barTitle);';
                break;

            case "studytime"://Construct Data Objects
                $a[]=array('2 Hours', 105);
                $a[]=array('2-5 Hours', 198);
                $a[]=array('5-10 Hours', 65);
                $a[]=array('10+ Hours', 27);

                $b[]=array('2 Hours', 10, '');
                $b[]=array('2-5 Hours', 10, '#dc3912');
                $b[]=array('5-10 Hours', 11, '#ff9900');
                $b[]=array('10+ Hours', 11, '#109618');
                echo "getChart.drawChart(".json_encode($a).",".json_encode($b).", getChart.studyProp.pieTitle, getChart.studyProp.barTitle);";
                break;

            case "absences"://Construct Data Objects
                $a[]=array('1 - 5 Absences', 249);
                $a[]=array('6-10 Absences', 80);
                $a[]=array('11-15 Absences', 33);
                $a[]=array('16-20 Absences', 18);
                $a[]=array('21+ Absences', 15);

                $b[]=array('1-5 Absences', 10, '');
                $b[]=array('6-10 Absences', 11, '#dc3912');
                $b[]=array('11-15 Absences', 10, '#ff9900');
                $b[]=array('16-20 Absences', 10, '#109618');
                $b[]=array('21+ Absences', 10, '#990099');
                echo 'getChart.drawChart('.json_encode($a).','.json_encode($b).', getChart.absencesProp.pieTitle, getChart.absencesProp.barTitle);';
                break;

            case "overallhealth"://Construct Data Objects
                $b[]=array('Health', 'G1', 'G2', 'G3');
                $b[]=array('Very Bad', 12, 12, 12);
                $b[]=array('Bad', 11, 11, 10);
                $b[]=array('Normal', 11, 10, 10);
                $b[]=array('Good', 11, 11, 10);
                $b[]=array('Very Good', 11, 11, 10 );
                echo "getChart.drawHealthChart(".json_encode($b).", getChart.healthProp.pieTitle, getChart.healthProp.barTitle);";
                break;

            case "traveltime"://Construct Data Objects
                $a[]=array('1-15 Minutes', 257);
                $a[]=array('15-30 Minutes', 107);
                $a[]=array('30-60 Minutes', 23);
                $a[]=array('60+ Minutes', 8);

                $b[]=array('1-15 Minutes', 11, '');
                $b[]=array('15-30 Minutes', 10,'#dc3912');
                $b[]=array('30-60 Minutes', 9, '#ff9900');
                $b[]=array('60+  Minutes', 9, '#109618');
                echo 'getChart.drawChart('.json_encode($a).','.json_encode($b).', getChart.travelProp.pieTitle, getChart.travelProp.barTitle);';
                break;
        }

    ?>
    </script>
  </body>
</html>
