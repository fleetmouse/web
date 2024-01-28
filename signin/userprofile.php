<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Menu</title>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="omar2.css">
  <link rel="stylesheet" href="userprofile.css">
  <link rel="stylesheet" href="calender/evo-calendar.min.css">
  <link rel="stylesheet" href="calender/evo-calendar.royal-navy.min.css">

</head>

<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <a href="Home.php">
        <img src="./img/scholarly-logo1.png" class="logo" alt="">
      </a>
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
          <a href="#" data-active="1">
            <div class="icon">
              <i class='bx bx-folder'></i>
              <i class='bx bxs-folder'></i>
            </div>
            <span class="link hide">Clubs</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" data-active="2">
            <div class="icon">
              <i class='bx bx-message-square-detail'></i>
              <i class='bx bxs-message-square-detail'></i>
            </div>
            <span class="link hide">Contact-us</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="#" data-active="3">
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

    <h1>Omar Jamal Alsane</strong></h1>
    <h3>Studant house location </h3>
    <br>

    <div class="flex-container-prof">
      <iframe class="map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.574875233609!2d35.82992627642417!3d31.972428074010367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca17f274178b1%3A0xe04bf74531579108!2sAlHussein%20Technical%20University!5e0!3m2!1sen!2sjo!4v1705802471191!5m2!1sen!2sjo"
        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

      <div class="card-container">
        <div class="card">
          <h2><strong>Tuition Fees</strong></h2>
          <div class="text-background">
            <p>1000$</p>
          </div>
        </div>
        <div class="card">
          <h2><strong>Scholarships</strong></h2>
          <div class="text-background">
            <p>2000$</p>
          </div>
        </div>
        <div class="card">
          <h2><strong>Payment History</strong></h2>
          <div class="text-background">
            <p>3000$</p>
          </div>
        </div>
        <div class="card">
          <h2><strong>Outstanding Balances</strong></h2>
          <div class="text-background">
            <p>4000$</p>
          </div>
        </div>
      </div>
    </div>

    <table border="1" class="table">
      <thead>
        <tr>
          <th>Day</th>
          <th>Topic 1</th>
          <th>Topic 2</th>
          <th>Topic 3</th>
          <th>Topic 4</th>
          <th>Topic 5</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Sunday</td>
          <td>Math</td>
          <td>Science</td>
          <td>English</td>
          <td>Art</td>
          <td>Physical Education</td>
        </tr>
        <tr>
          <td>Monday</td>
          <td>History</td>
          <td>Geography</td>
          <td>Music</td>
          <td>Computer Science</td>
          <td>Library</td>
        </tr>
        <tr>
          <td>Tuesday</td>
          <td>Math</td>
          <td>Science</td>
          <td>English</td>
          <td>Art</td>
          <td>Physical Education</td>
        </tr>
        <tr>
          <td>Wednesday</td>
          <td>History</td>
          <td>Geography</td>
          <td>Music</td>
          <td>Computer Science</td>
          <td>Library</td>
        </tr>
        <tr>
          <td>Thursday</td>
          <td>Math</td>
          <td>Science</td>
          <td>English</td>
          <td>Art</td>
          <td>Physical Education</td>
        </tr>
      </tbody>
    </table>




</body>

</html>


<h4 class="contact-title">Contact Us - Or Schedule an Absence Day</h4>
<div class="button-container">
  <a href="contact-form/index.php">
    <button class="green-button">Contact Us</button>
  </a>
  <button class="blue-button">Schedule</button>
</div>








</div>
</div>

<div id="calendar"></div>



<p class="interst"></p>
<p class="copyright">
  2024 - <span>Omar ALsane</span> Web course .
</p>
</main>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="omar.js"></script>
<script src="calender/evo-calendar.min.js"> </script>
</body>

</html>