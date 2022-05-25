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


?>


<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

                            <form method="post" action="add_student.php">
                                <input type="text" name="name" placeholder="Name" required />
                                <input type="email" name="email" placeholder="Email" required />
                                <button type="submit" name="submit">Upload</button>
                            </form>

                            <?php
                            $errors = [];
                            if (isset($_POST["submit"])) {
                                $name = $_POST["name"];
                                $email = $_POST["email"];
                                $pass = (str_replace(' ', '', $name)) . (substr($email, 0, 3));
                                $query = "SELECT * from user WHERE Email='$email'";
                                $row = mysqli_query($conn, $query);
                                if (mysqli_num_rows($row) > 0) {
                                    echo (' <script> alert("User exists.") </script>');
                                } else {
                                    $query = "INSERT INTO user ( Name, Email, Password, Is_Admin,Created_at,Updated_at) 
                                    VALUES ('$name','$email','$pass','false',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
                                    $result = mysqli_query($conn, $query);
                                    echo (' <script> alert("Successfully added!") </script>');
                                }
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


</style>

</html>