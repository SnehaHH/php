<!DOCTYPE html>

<?php
session_start();
include("../connection.php");
$a = $_SESSION["userid"];
$query1 = "SELECT Profile_pic from user where User_Id='$a'";
$result1 = mysqli_query($conn, $query1);
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
                <img src="data:image/jpg;base64,<?php
                                                $row = mysqli_fetch_assoc($result1);
                                                echo  base64_encode($row["Profile_pic"]);
                                                ?>" alt="">
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
                                echo "<table border='1'>";
                                echo "<tr>";
                                echo "<th>";
                                echo "User Id";
                                echo "</th>";
                                echo "<th>";
                                echo "Name";
                                echo "</th>";
                                echo "<th>";
                                echo "Email";
                                echo "</th>";
                                echo "<th>";
                                echo "Admin";
                                echo "</th>";
                                echo "<th>";
                                echo "Created";
                                echo "</th>";
                                echo "<th>";
                                echo "Updated";
                                echo "</th>";
                                echo "</tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $admin="No";
                                    if($row["Is_Admin"]===1)
                                        $admin="Yes";
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
                                    echo $admin;
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
                            <form method="post" action="edit_student.php">
                                <input type="text" name="id" placeholder="Enter User ID" required />
                                <button type="submit" name="submit">Check</button>
                            </form>
                            <?php
                            if (isset($_POST["submit"])) {
                                $id = $_POST["id"];
                                $query = "SELECT * FROM user WHERE User_Id ='$id' ";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                        $name = $row["Name"];
                                        $email = $row["Email"];
                                        ?>
                                <form method="post" action="edit_student.php">
                                <label> User ID </label> <input type="text" name="ID" value="<?php echo $id; ?> "readonly /> <br>
                                <label> Name </label> <input type="text" name="name" value="<?php echo $name; ?> " /> <br>
                                <label> Email </label> <input type="email" name="email" value=" <?php echo $email; ?> "/> <br>
                                <button type="submit" name="edit">Edit</button>
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
                                        $name = $_POST["name"];
                                        $email = $_POST["email"];
                                $query1 = "UPDATE user SET Name='$name',Email='$email', Updated_at=CURRENT_TIMESTAMP 
                                     WHERE User_Id ='$id' ";
                                $result1 = mysqli_query($conn, $query1);
                                echo (' <script> alert("Successfully uploaded!") </script>');
                                echo("<script> window.location.replace('edit_student.php'); </script>");
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