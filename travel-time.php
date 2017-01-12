<? $pageName = 'traveltime' ?>
  <? include './includes/functions.php'; ?>

  <? include './global/header.php'; ?>

    <? include './global/top-nav.php'; ?>



    <div class="container-fluid">
      <div class="row">

        <? include './global/left-nav.php'; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Final Grade based on Commute</h1>
          <div class="row placeholders">
            <div id="bar-chart" class="col-xs-12 col-sm-10 col-md-6 placeholder"></div>
            <div id="pie-chart" class="col-xs-12 col-sm-10 col-md-6 placeholder"></div>
          </div>

          <h2 class="sub-header">Indivudal Student Final Grades with Commute Time</h2>
          <div class="table-responsive">
            <table class="table table-striped failure-table">
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>1st Grade</th>
                  <th>2nd Grade</th>
                  <th>Final grade</th>
                  <th>Travel Time</th>
                </tr>
              </thead>
              <tbody>
                <?                
                  $myQuery = getQuery('traveltime',true); //get the result array
                  //echo json_encode($myQuery);
                  $myJson=json_encode($myQuery);

                  if (empty($myQuery) > 0){
                    echo "<tr><td colspan='5'>There was an error processing your request.</tr></td>";
                  } else {
                    foreach ($myQuery as $key => $myArray){
                        echo "<tr>";
                        //echo $key."||";
                      foreach ($myArray as $key) {
                          echo "<td>".$key."</td>";
                          //echo $key." ";
                      }
                      echo "</tr>";
                    }
                  }
                ?>
              </tbody>
            </table>
        </div>
      </div>
    </div>

<? include './global/footer.php'; ?>