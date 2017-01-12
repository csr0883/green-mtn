<? $pageName = 'todo' ?>
  <? include './includes/functions.php'; ?>

  <? include './global/header.php'; ?>

    <? include './global/top-nav.php'; ?>



    <div class="container-fluid">
      <div class="row">

        <? include './global/left-nav.php'; ?>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Improvements and Goals</h1>
          <div class="row placeholders">
            <div class="col-xs-12 col-sm-3 placeholder">
              <h3 class="text-left">Goals</h3>
              <ul>
                <li>Make Fully Dynamic</li>
                <li>SQL Injection Prevention</li>
                <li>Adjust SQL Table Data Structure</li>
                <li>Add More Error Checks</li>
                <li>Load Charts Asynchronously</li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-3 col-sm-push-3 placeholder">
              <h3 class="text-left">Improvements</h3>
              <ul>
                <li>Pagination on Data</li>
                <li>Data Filtering</li>
                <li>Chart Builder</li>
                <li>Query Builder</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<? include './global/footer.php'; ?>