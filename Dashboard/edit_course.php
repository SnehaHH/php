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
$query = "SELECT * FROM courses";
$result = mysqli_query($conn, $query);

?>


<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin Dashboard</title>
  <style>
        .inc_size
        {
            width: 80%;
        }

        </style>
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
                <div class="recent-sales box w-100">
                    <div class="sales-details">
                        <ul class="details">

                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table class='table table-hover'>";
                                echo "<thead scope='col' class='thead-light'>";
                                echo "<tr>";
                                echo "<th scope='col'>";
                                echo "Course_Id";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Language";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Level";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Course_name";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Description";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Price";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Created";
                                echo "</th>";
                                echo "<th scope='col'>";
                                echo "Updated";
                                echo "</th scope='col'>";
                                echo "</tr>";
                                echo "</thead>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo $row["Course_Id"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Language"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Level"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Course_name"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Description"];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $row["Price"];
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
                            }
                            else {
                                echo ("No courses added yet!");
                              }
                            ?>
                            <form method="post" action="edit_course.php" class="login-form" name="form_log">
                                <div class="form-group"><label for="id">Course Id</label>
                                <input class="form-control" type="text" name="id" placeholder="Enter Course ID" required /></div>
                                <button class="btn btn-primary" type="submit" name="submit">Check</button>
                            </form>
                            <?php
                            if (isset($_POST["submit"])) {
                                $id = $_POST["id"];
                                $query = "SELECT * FROM courses WHERE Course_Id ='$id' ";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                        $lang = $row["Language"];
                                        $level = $row["Level"];
                                        $c_Name = $row["Course_name"];
                                        $desc = $row["Description"];
                                        $price = $row["Price"];
                                        ?>
                                <form method="post" action="edit_course.php">
                                    <div class="form-group">
                                <label> Course ID </label> <input class="form-control" type="text" name="ID" value="<?php echo $id; ?> " readonly/> </div>
                                    <div class="form-group">
                                        <label> Language </label> <input class="form-control" type="text" name="lang" value="<?php echo $lang; ?> " /> </div>
                                    <div class="form-group">
                                        <label> Course Name </label> <input class="form-control" type="text" name="course_name" value=" <?php echo $c_Name; ?> " /> </div>
                                    <div class="form-group">
                                        <label> Level </label> <input class="form-control" type="text" name="level" value=" <?php echo $level; ?> " /> </div>
                                    <div class="form-group">
                                        <label> Description </label> <input class="form-control" type="text" name="desc" value="<?php echo $desc; ?> " /></div>
                                    <div class="form-group">
                                        <label> Price </label><input class="form-control" type="text" name="price" value="<?php echo $price; ?> " /></div>
                                <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                            </form>
                                <?php
                                    }
                                }
                                else {
                                    echo (' <script> alert("No such ID found.") </script>');
                                }
                            }
                            if (isset($_POST["edit"])) {
                                        $id=$_POST["ID"];
                                        $lang = $_POST["lang"];
                                        $level = $_POST["level"];
                                        $course_name = $_POST["course_name"];
                                        $desc = $_POST["desc"];
                                        $price = $_POST["price"];
                                $query1 = "UPDATE courses SET Language='$lang',Level='$level',Course_name='$course_name',
                                     Description='$desc', Price='$price', Updated_at=CURRENT_TIMESTAMP 
                                     WHERE Course_Id ='$id' ";
                                $result1 = mysqli_query($conn, $query1);
                                echo (' <script> alert("Successfully uploaded!") </script>');
                                echo("<script> window.location.replace('edit_course.php'); </script>");
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