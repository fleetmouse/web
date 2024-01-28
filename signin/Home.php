<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Sidebar Menu</title>
  <meta name="description" content="This is the home page of our Sidebar Menu website.">
  <meta name="keywords" content="Sidebar, Menu, Home">
  <meta name="author" content="Your Name">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="omar2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="google-site-verification" content="ejmeDDoJ68EdCoFjDByVeeNqqSDWvm-ZkVIhjv5ev5s" />
</head>

<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="./img/scholarly-logo1.png" class="logo" alt="">
      <h3 class="hide">scholarly</h3>
    </div>

    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Dashboard</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="Meterials.php" data-active="1">
            <div class="icon">
              <i class='bx bx-folder'></i>
              <i class='bx bxs-folder'></i>
            </div>
            <span class="link hide">Clubs</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="contact-form/index.php" data-active="2">
            <div class="icon">
              <i class='bx bx-message-square-detail'></i>
              <i class='bx bxs-message-square-detail'></i>
            </div>
            <span class="link hide">Contact-us </span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="userprofile.php" data-active="3">
            <div class="icon">
              <i class='bx bx-bar-chart-square'></i>
              <i class='bx bxs-bar-chart-square'></i>
            </div>
            <span class="link hide">profile</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Dashboard</span>
          <span>Clubs</span>
          <span>Contact-us</span>
          <span>profile</span>
        </div>
      </ul>

      <h4 class="hide">Shortcuts</h4>

      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" data-active="4">
            <div class="icon">
              <i class='bx bx-notepad'></i>
              <i class='bx bxs-notepad'></i>
            </div>
            <span class="link hide">Tasks</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" data-active="5">
            <div class="icon">
              <i class='bx bx-help-circle'></i>
              <i class='bx bxs-help-circle'></i>
            </div>
            <span class="link hide">Help</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="6">
            <div class="icon">
              <i class='bx bx-cog'></i>
              <i class='bx bxs-cog'></i>
            </div>
            <span class="link hide">Settings</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Tasks</span>
          <span>Help</span>
          <span>Settings</span>
        </div>
      </ul>
    </div>

    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="" alt="">
          <div class="admin-info">
            <h3>
              <?php echo $_SESSION['username']; ?>
            </h3>
            <h5>@user</h5>
          </div>
        </div>
        <a href="login.php" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show">John Doe</span>
        <span>Logout</span>
      </div>
    </div>
  </nav>


  <main>




    <div class="right-sidebar">

      <div class="InputContainer">
        <input type="text" name="text" class="input" id="input" placeholder="Search">

        <label for="input" class="labelforsearch">
          <svg viewBox="0 0 512 512" class="searchIcon">
            <path
              d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
            </path>
          </svg>
        </label>
        <div class="border"></div>



      </div>

      <h3 class="personal">Personal recommendations</h3>

      <div class="card">
        <a class="card3" href="#">
          <p><strong>High stress level</strong></p>
          <p class="small">Personal psychological consultations recommended</p>
          <div class="go-corner" href="#">
            <div class="go-arrow">
              <i class="fas fa-bolt"></i>
            </div>
          </div>
        </a>
      </div>


      <div class="card">
        <a class="card3" href="#">
          <p><strong>Afterschool programs</strong></p>
          <p class="small">A penchant for art. Drawing classes recommended.</p>
          <div class="go-corner" href="#">
            <div class="go-arrow">
              <i class="fas fa-utensils"></i>
            </div>
          </div>
        </a>
      </div>

      <br>
      <h3 class="medical">Medical history:</h3>


      <div class="card">
        <a class="card3" href="#">
          <p>Medical history:</p>
          <p class="small">Anxiety disorder (F419)
            Personal consultation recommended</p>
          <div class="go-corner" href="#">
            <div class="go-arrow">
              <i class="fas fa-stethoscope"></i>
            </div>
          </div>
        </a>
      </div>


      <div class="card">
        <a class="card3" href="#">
          <p>Mild depressive episode (F32.0)</p>
          <p class="small">End of last disease episode - 03/08/24Cured</p>
          <div class="go-corner" href="#">
            <div class="go-arrow">
              →
            </div>
          </div>
        </a>
      </div>






    </div>



    </div>















    <div class="kid-information">
      <img src="img/kidimg.jpg" alt="kid" class="kid-img">
      <div class="info">
        <h1>Name: <strong>
            <?php echo $_SESSION['name']; ?>
          </strong></h1>
        <p><strong>School:</strong>
          <?php echo $_SESSION['school']; ?> <span class="age"><strong>Age:</strong>
            <?php echo $_SESSION['age']; ?>
          </span>
        </p>
        <p><strong>Mother:</strong>
          <?php echo $_SESSION['mother']; ?> <span class="father"><strong>Father:</strong>
            <?php echo $_SESSION['father']; ?>
          </span>
        </p>
        <a href="userprofile.php">
          <button type="button" name="viewProfile">View Full profile</button>
        </a>
      </div>
    </div>




    <h2 class="header2">Areas of interst -<strong>
        <?php echo $_SESSION['Hobbies']; ?>
      </strong> </h2>

    <div class="grid-container">
      <div class="progress-wrapper">
        <div class="progress-container">
          <label for="sportProgress">Sport:</label>
          <progress id="sportProgress" value="0" max="100"
            data-value="<?php echo $_SESSION['sportProgress']; ?>"></progress>
        </div>
        <div class="progress-container">
          <label for="readingProgress">Reading:</label>
          <progress id="readingProgress" value="0" max="100"
            data-value="<?php echo $_SESSION['readingProgress']; ?>"></progress>
        </div>
        <div class="progress-container">
          <label for="hiTechProgress">Hi-tech:</label>
          <progress id="hiTechProgress" value="0" max="100"
            data-value="<?php echo $_SESSION['hiTechProgress']; ?>"></progress>
        </div>
        <div class="progress-container">
          <label for="musicProgress">Music:</label>
          <progress id="musicProgress" value="0" max="100"
            data-value="<?php echo $_SESSION['musicProgress']; ?>"></progress>
        </div>
        <div class="progress-container">
          <label for="scienceProgress">Science:</label>
          <progress id="scienceProgress" value="0" max="100"
            data-value="<?php echo $_SESSION['scienceProgress']; ?>"></progress>
        </div>
      </div>
      <div class="radar">
        <canvas id="myRadarChart"></canvas>
      </div>
    </div>

    <div class="social">
      <h3 class="social">Social contact <span class="see-all">See all </span></h3>
    </div>
    <div class="chart-images-container">
      <div class="line">
        <canvas id="myLineChart"></canvas>
      </div>

      <div class="image-container">

        <div class="image-item">
          <img src="img/kid11.jpg" alt="Kid 11">
          <p>Ahmad</p>
        </div>
        <div class="image-item">
          <img src="img/kid22.jpg" alt="Kid 22">
          <p>Sara</p>
        </div>
        <div class="image-item">
          <img src="img/kid33.jpg" alt="Kid 33">
          <p>Abd Alrhman</p>
        </div>
      </div>
    </div>
    <br>
    <br>

    <p class="interst"></p>
    <p class="copyright">
      2024 - <span>Omar ALsane</span> Web course .
    </p>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="charts.js"></script>
  <script src="omar.js"></script>


</body>

</html>