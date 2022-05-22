<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php

include("../connection.php");
?>


<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="dashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin Dashboard</title>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admin Dashboard</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="course_list.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">List of Courses</span>
        </a>
      </li>
      <li>
        <a href="Upload_course.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Upload course</span>
        </a>
      </li>
      <li>
        <a href="edit_course.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Edit Course</span>
        </a>
      </li>
      <li>
        <a href="delete_course.php">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Delete Course</span>
        </a>
      </li>
      <li>
        <a href="student_list.php">
          <i class='bx bx-coin-stack'></i>
          <span class="links_name">List of Students</span>
        </a>
      </li>
      <li>
        <a href="add_student.php">
          <i class='bx bx-book-alt'></i>
          <span class="links_name">Add Student</span>
        </a>
      </li>
      <li>
        <a href="edit_student.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Edit Student</span>
        </a>
      </li>
      <li>
        <a href="delete_student.php">
          <i class='bx bx-message'></i>
          <span class="links_name">Delete Student</span>
        </a>
      </li>
      <li class="log_out">
        <a href="../Logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>

      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>
    <div class="sales-boxes">
      <div class="recent-sales box">
        <div class="sales-details">
          <ul class="details">
        </div>
      </div>

    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>