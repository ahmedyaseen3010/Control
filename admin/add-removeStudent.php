<?php
session_start();

if ($_SESSION['user_type'] != "admin") {
    header('location:../login/');
}


?>
<?php  ?>
<?php
include "../login/conncection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $password = $_POST['Password'];
    $gender = $_POST['Gender'];
    $email = $_POST['Email'];
    $date = $_POST['date-of-birth'];
    $mobile = $_POST['mobile'];
    $grade = $_POST['rule'];








    $select = ("SELECT * FROM student WHERE email='$email' or phone_number= '$mobile' or name = '$name'");
    $run = $conn->query($select);
    // $row1 = $run->fetch(PDO::FETCH_ASSOC);
    $count = $run->rowCount();
    // echo '<pre>';
    // print_r($row1);
    // die;


    if ($count == 0) {

        $error1 = "";







        $sql = 'INSERT INTO `student`(`password`, `email`, `gender`, `name`, `phone_number`, `birthdate`, `image`, `grade`) VALUES (?,?,?,?,?,?,?,?)';

        $stmt = $conn->prepare($sql);

        $execution = $stmt->execute([$password, $email, $gender, $name, $mobile, $date, $file, $grade]);


        $select = ("SELECT * FROM student WHERE email='$email' or phone_number= '$mobile' or name = '$name'");
        $run2 = $conn->query($select);
        $row1 = $run2->fetch(PDO::FETCH_ASSOC);

        $tmp = $_FILES['student-image']['tmp_name'];
        $fileName = $_FILES['student-image']['name'];
        move_uploaded_file($tmp, '../photos/' . $row1['student_id'] . ".png");


        header('location: add-removeStudent.php');
    } else {

        $error1 = "email or phone number alredy exists";
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- This script got from frontendfreecode.com -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add & Remove student</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/AddNewStudent.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="fontawesome-free-6.3.0-web/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,500;0,600;1,400;1,500&family=Roboto+Slab:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <style>
    .dropdown-menu {

        background-color: #021d38 !important;
    }
    </style>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">

        <nav id="sidebar" class="js-fullheight">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>

                </button>
            </div>
            <div class="p-4">
                <div class="header-box px-2 pt-3 pb-1 d-flex justify-content-center">
                    <h1 class="fs-3"><span class="bg-white text-dark rounded shadow px-2"><i
                                class="fa-solid fa-bolt"></i></span> &nbsp;<span class="text-white">Control</span></h1>
                </div>
                <hr>
                <ul class="list-unstyled listItem px-3">
                    <li class=""><a href="dashboard.php" class="text-decoration-none px-3 py-2 d-block"><i
                                class="fa-solid fa-chart-line fa-fw"></i>&nbsp;
                            Dashboard</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class="active dropdown">
                        <a class="text-decoration-none px-3 py-2  d-block nav-link dropdown-toggle text-truncate"
                            id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user-graduate fa-fw"></i>&nbsp;
                            Students
                        </a>
                        <ul class="dropdown-menu st-option" aria-labelledby="dropdown">
                            <li><a class="dropdown-item ju" href="allStudents.php">&nbsp;
                                    <i class="fa-solid fa-users fa-fw"></i>&nbsp;
                                    All Students</a></li>
                            <li><a class="dropdown-item" href="studentInfo.php">&nbsp;
                                    <i class="fa-solid fa-graduation-cap fa-fw"></i>&nbsp;
                                    Student Details</a></li>
                            <li><a class="active dropdown-item" href="add-removeStudent.php">&nbsp;
                                    <i class="fa-solid fa-user-plus fa-fw"></i>&nbsp;
                                    Add & Remove </a></li>
                            <li><a class="dropdown-item" href="promotStudents.php">&nbsp;
                                    <i class="fa-solid fa-star fa-fw"></i>&nbsp;
                                    Promote</a></li>

                        </ul>
                    </li>
                    <hr class="mb-0 mt-0 bg-white">

                    <li class="dropdown">
                        <a class="text-decoration-none px-3 py-2  d-block nav-link dropdown-toggle text-truncate"
                            id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class=""></i><i class="fa-solid fa-user-tie fa-fw"></i>&nbsp;
                            Staff
                        </a>
                        <ul class="dropdown-menu st-option" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="allStuff.php">&nbsp;
                                    <i class="fa-solid fa-users fa-fw"></i>&nbsp;
                                    All Staff</a></li>
                            <li><a class="dropdown-item" href="stuff-Info.php">&nbsp;
                                    <i class="fa-solid fa-chalkboard-user fa-fw"></i>&nbsp;
                                    Staff Details</a></li>
                            <li><a class="dropdown-item" href="add-removeStuff.php">&nbsp;
                                    <i class="fa-solid fa-user-plus fa-fw"></i>&nbsp;
                                    Add & Remove</a></li>
                        </ul>
                    </li>


                    <!-- ////////////////////////////////////////// -->


                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="library.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-book fa-fw"></i>&nbsp;
                            Libirary</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="courses.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-pen fa-fw"></i>&nbsp;
                            Courses</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="exam.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-calendar-days fa-fw"></i>&nbsp;
                            Exams</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="noticeBoard.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-message fa-fw"></i>&nbsp;
                            Notice Board</a></li>

                </ul>

            </div>
            <div class="sidebar-buttons">
                <a href="change-pass-ad.php"><button id="changePass">Change Password</button></a>
                <a href="../login/index.php"><button id="logout">Log Out&nbsp;<i
                            class="fa-solid fa-right-from-bracket fa-fw"></i></button></a>

            </div>
        </nav>

        <!-- Page Content  -->
        <div class="navbar-light  py-0 ">

        </div>
        <div class="home">

            <h1 class="display-6"><i class="text-primary fa-solid fa-user-plus fa-fw"></i> Add<span
                    class="text-primary"> student</span></h1><br>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <button class="btn" id="openAddFormButton">Add Students</button>
            <section id="add-remove-table" class="section-p1 center-block fix-width scroll-inner mb-2">

                <?php if (isset($error1)) {
                    echo "<div  style='  color: #842029;background-color: #f8d7da;border-color: #f5c2c7;padding :10px'>";

                    echo $error1;

                    echo '</div>';
                } ?>



                <table width="100%" id="addStudents" class="overflow-scroll">
                    <thead>
                        <tr>
                            <th id="st-name">Name</th>
                            <th id="st-password">Password</th>
                            <th id="st-gender">Gender</th>
                            <th id="st-email">Email</th>
                            <th id="st-birthDate">DOB</th>
                            <th id="st-phaneNumber">phone number</th>
                            <th id="st-rule">Rule</th>
                            <th id="edit&del"></th>

                        </tr>
                    </thead>
                    <tbody id="tbody-cont1">
                        <?php

                        $query2 = ("SELECT * FROM student ");
                        $res = $conn->query($query2);

                        if ($res->rowCount() > 0) {
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {



                        ?>
                        <tr>
                            <?php echo '<td>' . $row['name'] . '</td>' ?>
                            <?php echo '<td>' . $row['password'] .  '</td>' ?>
                            <?php echo '<td>' . $row['gender'] .  '</td>' ?>
                            <?php echo '<td>' . $row['email'] .  '</td>' ?>
                            <?php echo '<td>' . $row['birthdate'] .  '</td>' ?>
                            <?php echo '<td>' . $row['phone_number'] .  '</td>' ?>
                            <?php echo '<td>' . $row['grade'] .  '</td>' ?>
                            <td>

                                <a href="delete.php?deleteEmail=<?php echo $row['email'] ?>&type=student
                                "><i class='material-icons '><i class="fa-solid fa-trash-can"></i></i></a>
                            </td>
                        </tr>

                        <?php }
                        } ?>

                    </tbody>
                </table>


            </section>

        </div>

        <div id="addStudentFormDiv">
            <i id="closeAddFormButton" class="material-icons"><i class="fa-solid fa-xmark"></i></i>
            <h2> Add New Student </h2>


            <form id="addStudentForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                enctype="multipart/form-data">
                <input required name="Name" type="text" placeholder="give name" id="addName" class="add-content">
                <input required name="Password" type="text" placeholder="enter password" id="addpassword"
                    class="add-content">
                <select required name="Gender" id="addGender" class="add-content">
                    <option value="male">male</option>
                    <option value="famale">famale</option>
                </select>
                <input required name="Email" type="email" placeholder="enter email" id="addEmail" class="add-content">
                <div class="error" id="nameExists"></div>
                <input required name="date-of-birth" type="date" placeholder="enter date-of-birth" class="add-content"
                    id="add-DOB">
                <input required name="mobile" type="" placeholder="enter phone number" id="add-phone-num"
                    class="add-content">
                <select required name="rule" id="addRule" class="add-content">
                    <option value="First Rule">first</option>
                    <option value="Second Rule">second</option>
                    <option value="Third Rule">third</option>
                    <option value="Fourth Rule">fourth</option>
                </select>
                <input required type="file" id="student-image" name="student-image" class="upload-input">
                <ul class="error" id="addError"></ul>
                <input required type="submit" name="submit" id="saveStudent" value="Add Student" class="add-content">
            </form>
        </div>




        <div id="updateStudentFormDiv">
            <i id="closeUpdateFormButton" class="material-icons"><i class="fa-solid fa-xmark"></i></i>
            <h2> UPDATE STUDENT </h2>
            <form id="updateStudentForm" action="index.html">
                <input required name="Name" type="text" placeholder="give name" class="add-content" id="updateName">
                <input required name="Password" type="text" class="add-content" placeholder="enter password"
                    id="updatepassword">
                <select required name="Gender" id="updateGender" class="add-content">
                    <option value="male" class="male">male</option>
                    <option value="famale" class="famale">famale</option>
                </select>
                <input required name="Email" type="email" placeholder="enter email" class="add-content"
                    id="updateEmail">
                <div class="error" id="updateNameExists"></div>
                <input required name="date-of-birth" type="date" class="add-content" placeholder="enter date-of-birth"
                    id="update-add-DOB">
                <input required name="mobile" type="" placeholder="enter phone number" class="add-content"
                    id="update-add-phone-num">
                <select required name="rule" id="update-Rule" class="add-content">
                    <option value="first">first</option>
                    <option value="second">second</option>
                    <option value="third">third</option>
                    <option value="fourth">fourth</option>
                </select>
                <input required type="file" id="update-student-image" name="student-image" class="upload-input">
                <ul class="error" id="updateError"></ul>
                <input required type="submit" name="submit" id="updateStudent" value="UDPATE" class="add-content">


            </form>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/addStudent.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/jquery-3.6.0.min_2.js"></script>

    <script>
    (function($) {
        "use strict";
        var fullHeight = function() {
            $(".js-fullheight").css("height", $(window).height());
            $(window).resize(function() {
                $(".js-fullheight").css("height", $(window).height());
            });
        };
        fullHeight();
        $("#sidebarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
        });
    })(jQuery);
    </script>
</body>

</html>