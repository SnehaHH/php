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
$query = "SELECT * FROM courses";
$result = mysqli_query($conn, $query);

?>


<html lang="en" dir="ltr">

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
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Edit Course</span>
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
                <img src="data:image/jpg;base64,<?php
                                                $row = mysqli_fetch_assoc($result1);
                                                echo  base64_encode($row["Profile_pic"]);
                                                ?>" alt="">
                <span class="admin_name"><?php echo ($_SESSION["name"]); ?></span>
                <i class='bx bx-chevron-down'></i>
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
                                echo "Course_Id";
                                echo "</th>";
                                echo "<th>";
                                echo "Language";
                                echo "</th>";
                                echo "<th>";
                                echo "Level";
                                echo "</th>";
                                echo "<th>";
                                echo "Course_name";
                                echo "</th>";
                                echo "<th>";
                                echo "Description";
                                echo "</th>";
                                echo "<th>";
                                echo "Price";
                                echo "</th>";
                                echo "<th>";
                                echo "Created";
                                echo "</th>";
                                echo "<th>";
                                echo "Updated";
                                echo "</th>";
                                echo "</tr>";

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
                                <input type="text" name="id" placeholder="Enter Course ID" required />
                                <button type="submit" name="submit">Check</button>
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
                                <label> Course ID </label> <input type="text" name="ID" value="<?php echo $id; ?> " readonly/> <br>
                                <label> Language </label> <input type="text" name="lang" value="<?php echo $lang; ?> " /> <br>
                                <label> Course Name </label> <input type="text" name="course_name" value=" <?php echo $c_Name; ?> " /> <br>
                                <label> Level </label> <input type="text" name="level" value=" <?php echo $level; ?> " /> <br>
                                <label> Description </label> <input type="text" name="desc" value="<?php echo $desc; ?> " /><br>
                                <label> Price </label><input type="text" name="price" value="<?php echo $price; ?> " /><br>
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

<style>
    /* Googlefont Poppins CDN Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .sidebar {
        position: fixed;
        height: 100%;
        width: 240px;
        background: #0A2558;
        transition: all 0.5s ease;
    }

    .sidebar.active {
        width: 60px;
    }

    .sidebar .logo-details {
        height: 80px;
        display: flex;
        align-items: center;
    }

    .sidebar .logo-details i {
        font-size: 28px;
        font-weight: 500;
        color: #fff;
        min-width: 60px;
        text-align: center
    }

    .sidebar .logo-details .logo_name {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }

    .sidebar .nav-links {
        margin-top: 10px;
    }

    .sidebar .nav-links li {
        position: relative;
        list-style: none;
        height: 50px;
    }

    .sidebar .nav-links li a {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .sidebar .nav-links li a.active {
        background: #081D45;
    }

    .sidebar .nav-links li a:hover {
        background: #081D45;
    }

    .sidebar .nav-links li i {
        min-width: 60px;
        text-align: center;
        font-size: 18px;
        color: #fff;
    }

    .sidebar .nav-links li a .links_name {
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
    }

    .sidebar .nav-links .log_out {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .home-section {
        position: relative;
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section {
        width: calc(100% - 60px);
        left: 60px;
    }

    .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        z-index: 100;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section nav {
        left: 60px;
        width: calc(100% - 60px);
    }

    .home-section nav .sidebar-button {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: 500;
    }

    nav .sidebar-button i {
        font-size: 35px;
        margin-right: 10px;
    }

    .home-section nav .search-box {
        position: relative;
        height: 50px;
        max-width: 550px;
        width: 100%;
        margin: 0 20px;
    }

    nav .search-box input {
        height: 100%;
        width: 100%;
        outline: none;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        font-size: 18px;
        padding: 0 15px;
    }

    nav .search-box .bx-search {
        position: absolute;
        height: 40px;
        width: 40px;
        background: #2697FF;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 4px;
        line-height: 40px;
        text-align: center;
        color: #fff;
        font-size: 22px;
        transition: all 0.4 ease;
    }

    .home-section nav .profile-details {
        display: flex;
        align-items: center;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        height: 50px;
        min-width: 190px;
        padding: 0 15px 0 2px;
    }

    nav .profile-details img {
        height: 40px;
        width: 40px;
        border-radius: 6px;
        object-fit: cover;
    }

    nav .profile-details .admin_name {
        font-size: 15px;
        font-weight: 500;
        color: #333;
        margin: 0 10px;
        white-space: nowrap;
    }

    nav .profile-details i {
        font-size: 25px;
        color: #333;
    }

    .home-section .home-content {
        position: relative;
        padding-top: 104px;
    }

    .home-content .overview-boxes {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 20px;
        margin-bottom: 26px;
    }

    .overview-boxes .box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% / 4 - 15px);
        background: #fff;
        padding: 15px 14px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .overview-boxes .box-topic {
        font-size: 20px;
        font-weight: 500;
    }

    .home-content .box .number {
        display: inline-block;
        font-size: 35px;
        margin-top: -6px;
        font-weight: 500;
    }

    .home-content .box .indicator {
        display: flex;
        align-items: center;
    }

    .home-content .box .indicator i {
        height: 20px;
        width: 20px;
        background: #8FDACB;
        line-height: 20px;
        text-align: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        margin-right: 5px;
    }

    .box .indicator i.down {
        background: #e87d88;
    }

    .home-content .box .indicator .text {
        font-size: 12px;
    }

    .home-content .box .cart {
        display: inline-block;
        font-size: 32px;
        height: 50px;
        width: 50px;
        background: #cce5ff;
        line-height: 50px;
        text-align: center;
        color: #66b0ff;
        border-radius: 12px;
        margin: -15px 0 0 6px;
    }

    .home-content .box .cart.two {
        color: #2BD47D;
        background: #C0F2D8;
    }

    .home-content .box .cart.three {
        color: #ffc233;
        background: #ffe8b3;
    }

    .home-content .box .cart.four {
        color: #e05260;
        background: #f7d4d7;
    }

    .home-content .total-order {
        font-size: 20px;
        font-weight: 500;
    }

    .home-content .sales-boxes {
        display: flex;
        justify-content: space-between;
        /* padding: 0 20px; */
    }

    /* left box */
    .home-content .sales-boxes .recent-sales {
        width: 100%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .home-content .sales-boxes .sales-details {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sales-boxes .box .title {
        font-size: 24px;
        font-weight: 500;
        /* margin-bottom: 10px; */
    }

    .sales-boxes .sales-details li.topic {
        font-size: 20px;
        font-weight: 500;
    }

    .sales-boxes .sales-details li {
        list-style: none;
        margin: 8px 0;
    }

    .sales-boxes .sales-details li a {
        font-size: 18px;
        color: #333;
        font-size: 400;
        text-decoration: none;
    }

    .sales-boxes .box .button {
        width: 100%;
        display: flex;
        justify-content: flex-end;
    }

    .sales-boxes .box .button a {
        color: #fff;
        background: #0A2558;
        padding: 4px 12px;
        font-size: 15px;
        font-weight: 400;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .sales-boxes .box .button a:hover {
        background: #0d3073;
    }

    /* Right box */
    .home-content .sales-boxes .top-sales {
        width: 35%;
        background: #fff;
        padding: 20px 30px;
        margin: 0 20px 0 0;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .sales-boxes .top-sales li {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 10px 0;
    }

    .sales-boxes .top-sales li a img {
        height: 40px;
        width: 40px;
        object-fit: cover;
        border-radius: 12px;
        margin-right: 10px;
        background: #333;
    }

    .sales-boxes .top-sales li a {
        display: flex;
        align-items: center;
        text-decoration: none;
    }

    .sales-boxes .top-sales li .product,
    .price {
        font-size: 17px;
        font-weight: 400;
        color: #333;
    }

    /* Responsive Media Query */
    @media (max-width: 1240px) {
        .sidebar {
            width: 60px;
        }

        .sidebar.active {
            width: 220px;
        }

        .home-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .sidebar.active~.home-section {
            /* width: calc(100% - 220px); */
            overflow: hidden;
            left: 220px;
        }

        .home-section nav {
            width: calc(100% - 60px);
            left: 60px;
        }

        .sidebar.active~.home-section nav {
            width: calc(100% - 220px);
            left: 220px;
        }
    }

    @media (max-width: 1150px) {
        .home-content .sales-boxes {
            flex-direction: column;
        }

        .home-content .sales-boxes .box {
            width: 100%;
            overflow-x: scroll;
            margin-bottom: 30px;
        }

        .home-content .sales-boxes .top-sales {
            margin: 0;
        }
    }

    @media (max-width: 1000px) {
        .overview-boxes .box {
            width: calc(100% / 2 - 15px);
            margin-bottom: 15px;
        }
    }

    @media (max-width: 700px) {

        nav .sidebar-button .dashboard,
        nav .profile-details .admin_name,
        nav .profile-details i {
            display: none;
        }

        .home-section nav .profile-details {
            height: 50px;
            min-width: 40px;
        }

        .home-content .sales-boxes .sales-details {
            width: 560px;
        }
    }

    @media (max-width: 550px) {
        .overview-boxes .box {
            width: 100%;
            margin-bottom: 15px;
        }

        .sidebar.active~.home-section nav .profile-details {
            display: none;
        }
    }

    @media (max-width: 400px) {
        .sidebar {
            width: 0;
        }

        .sidebar.active {
            width: 60px;
        }

        .home-section {
            width: 100%;
            left: 0;
        }

        .sidebar.active~.home-section {
            left: 60px;
            width: calc(100% - 60px);
        }

        .home-section nav {
            width: 100%;
            left: 0;
        }

        .sidebar.active~.home-section nav {
            left: 60px;
            width: calc(100% - 60px);
        }


    }
</style>

</html>