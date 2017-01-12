<? $pageName = 'overallhealth' ?>
  <? include './includes/functions.php'; ?>

  <? include './global/header.php'; ?>

    <? include './global/top-nav.php'; ?>



    <div class="container-fluid">
      <div class="row">

        <? include './global/left-nav.php'; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main ">
          <h1 class="page-header">Overall Student Health and Grade Average</h1>
          <div class="row placeholders">
            <div id="bar-chart" class="col-xs-12 col-sm-10 col-md-10 placeholder"></div>
          </div>
          <h2 class="sub-header">Individual Student Grades and Overal Health Condition</h2>
          <div class="table-responsive">
            <table class="table table-striped failure-table">
              <thead>
                <tr>
                  <th>Student ID</th>
                  <th>1st Grade</th>
                  <th>2nd Grade</th>
                  <th>Final grade</th>
                  <th>Overall Health</th>
                </tr>
              </thead>
              <tbody>
                <?                
                  $myQuery = getQuery('overallhealth',true); //get the result array
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
    </div>

<? include './global/footer.php'; ?>