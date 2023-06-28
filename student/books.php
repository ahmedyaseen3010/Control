<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="icon" type="image/x-icon" href="img/C.png">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/books.css">
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
                    <li class="">
                        <a href="home.php" class="text-decoration-none px-3 py-2 d-block ">
                            <i class="fa-solid fa-house fa-fw"></i>&nbsp;
                            Home</a>
                    </li>
                    <hr class="mb-0 mt-0 bg-white">

                    <li class=""><a href="scanQR.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-expand fa-fw"></i>&nbsp;
                            Scan QR code</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="view-attendence.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-user-check fa-fw"></i>&nbsp;
                            View Attendence</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="study time table.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-table-cells fa-fw"></i>&nbsp;
                            Study Time Table</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="Exam time table.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-calendar-days fa-fw"></i>&nbsp;
                            Exams Time Table</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="Resources.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-book fa-fw"></i>&nbsp;
                            Resources</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class="active"><a href="books.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-book-open fa-fw"></i>&nbsp;
                            Books</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="results.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-graduation-cap fa-fw"></i>&nbsp;
                            Results</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="notifications.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-bell fa-fw"></i>&nbsp;
                            Notifications</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <li class=""><a href="questionnaire.php" class="text-decoration-none px-3 py-2 d-block">
                            <i class="fa-solid fa-square-poll-vertical fa-fw"></i>&nbsp;
                            Questionnaire</a></li>
                    <hr class="mb-0 mt-0 bg-white">
                    <!-- ////////////////////////////////////////// -->
                </ul>

            </div>
            <div class="sidebar-buttons">
                <a href="change-pass-st.php"><button id="changePass">Change Password</button></a>
                <a href="../admin/logout.php"><button id="logout">Log Out&nbsp;<i
                            class="fa-solid fa-right-from-bracket fa-fw"></i></button></a>

            </div>
        </nav>

        <!-- Page Content  -->
        <div class="navbar-light  py-0 ">

        </div>

        <div class="home">
            <div class="container mt-1">
                <h1 class="display-6"><i class="fa fa-book-open text-primary"></i> Books<span class="text-primary">
                        List</span></h1>
                <nav class="navbar bg-body-tertiary navbar-light justify-content-center mt-5 mb-4">
                    <form class="d-flex" role="search">
                        <input id="search" class="form-control mr-sm-2" type="search"
                            placeholder="Search your course time" aria-label="Search">&nbsp;
                        <button id="search-btn" class="buttonx" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </nav>
                <div class="table-responsive">
                    <table class="table table-striped text-center" style="width: 100%">
                        <!-- Table headers -->
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Link</th>
                            </tr>
                        </thead>
                        </thead>
                        <!-- Table body -->
                        <tbody id="myTable">
                            <?php
                            include '../login/conncection.php';
                            $select = 'SELECT * FROM `library`';
                            $res = $conn->query($select);
                            while ($row = $res->fetch(PDO::FETCH_ASSOC)) {

                            ?>
                            <tr>
                                <td>

                                    <?php echo $row['title']; ?>

                                </td>
                                <td><?php echo $row['author']; ?></td>
                                <td><a href='<?php echo $row['link']; ?>'><?php echo $row['link']; ?></a></td>
                            </tr>
                            <?php }
                            ?>



                        </tbody>
                    </table>
                </div>

            </div>


        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/all.js"></script>
        <script src="js/books.js"></script>
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