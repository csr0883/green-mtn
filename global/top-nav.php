<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Cody Roberts - Software Development Evaluation</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Dashboard</a></li>
        <li class="<?=$pageName == 'internet' ? 'active' : '' ?>"><a href="index.php">Internet Access <span class="sr-only">(current)</span></a></li>
        <li class="<?=$pageName == 'failures' ? 'active' : '' ?>"><a href="failures.php">Fail Rate</a></li>
        <li class="<?=$pageName == 'studytime' ? 'active' : '' ?>"><a href="study-time.php">Study Time</a></li>
        <li class="<?=$pageName == 'absences' ? 'active' : '' ?>"><a href="absences.php">Absenteeism</a></li>
        <li class="<?=$pageName == 'todo' ? 'active' : '' ?>"><a href="todo.php">To Do's</a></li>
        <li class="<?=$pageName == 'challenges' ? 'active' : '' ?>"><a href="challenges.php">Challenges</a></li>
        <li class="<?=$pageName == 'resume' ? 'active' : '' ?>"><a href="/resume/codyroberts_resume.pdf">Resume</a></li>
      </ul>
    </div>
  </div>
</nav>