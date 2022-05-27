<!DOCTYPE html>

<?php
session_start();
include("../connection.php");
$a = $_SESSION["userid"];
$query1 = "SELECT Profile_pic from user where User_Id='$a'";
$result1 = mysqli_query($conn, $query1);
$ppic = true;
$row=mysqli_fetch_assoc($result1);
if ($row["Profile_pic"]!=null) {
    $ppic = true;
} else
    $ppic = false;
?>
<?php

include("../connection.php");
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

?>


<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="dashboard.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin Dashboard</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl'></i>
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
                <a href="edit_course.php">
                <i class="bi-pencil-square"></i>
                    <span class="links_name">Edit Course</span>
                </a>
            </li>
            <li>
                <a href="student_list.php">
                <i class="bi-file-earmark-person"></i>
                    <span class="links_name">List of Students</span>
                </a>
            </li>
            <li>
                <a href="add_student.php">
                <i class="bi-person-plus"></i>
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
                <i class="bi-x-lg"></i>
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
        <span class="logo_name"><a href="../homepage.php">SCRIBO</span></a>
      </div>

      <div class="profile-details">
                <?php
                if ($ppic == true) {

                    echo ('<img src="data:image/jpg; base64,' . base64_encode($row["Profile_pic"]) . 'alt="">');
                } else
                    echo ('<img src="../images/ram.png"');

                ?>
                <span class="admin_name"><?php echo ($_SESSION["name"]); ?></span>

            </div>
        </nav>
        <div class="home-content">

            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="sales-details">
                        <ul class="details">

                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table class='table table-hover'>";
                                echo "<thead scope='col' class='thead-light'>";
                                echo "<tr>";
                                echo "<th scope='col'>";
                                echo "User Id";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Name";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Email";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Admin";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Created";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Updated";
                                echo "</th>";
                                echo "</tr>";
                                echo "</thead>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["User_Id"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Name"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Email"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Is_Admin"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Created_at"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Updated_at"];
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo ("No users added yet!");
                            }
                            ?>
                    </div>
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