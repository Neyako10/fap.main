<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imgs/btec.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="div-main-left-small">
            <a href="./index.php"><img src="./imgs/btec.svg" alt="logo"></a>

            <div class="div-page-croll-left-main">
                <div class="div-home">
                    <a href="./homepage.php">
                        <p><i class="fa-solid fa-snowflake"></i>Home</p>
                    </a>
                </div>



                <div class="div-View-Information-main">
                    <p><i class="fa-solid fa-snowflake"></i>View Information</p>
                </div>
                <div class="div-child-view-Information-main">
                    <ul>
                        <a href="./student-view.php">
                            <li><strong>></strong><i class="fa-solid fa-user"></i>Student</li>
                        </a>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-address-book"></i>Specialization</li>
                        </a>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-headphones-simple"></i>Class</li>
                        </a>
                        <a href="./course-view.php">
                            <li><strong>></strong><i class="fa-solid fa-paperclip"></i>Course</li>
                        </a>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-table"></i>Score</li>
                        </a>
                    </ul>
                </div>

                <div class="div-Information-Management">
                    <p><i class="fa-solid fa-snowflake"></i>Information Management</p>
                </div>
                <div class="div-child-Information-Management">
                    <ul>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-chalkboard-user"></i>Teacher Management</li>
                        </a>
                        <a href="./student-view.php">
                            <li><strong>></strong><i class="fa-solid fa-user-tie"></i>Student Management</li>
                        </a>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-paperclip"></i> Course Management</li>
                        </a>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-receipt"></i> Mark Report</li>
                        </a>
                    </ul>
                </div>
                <div class="div-Reports">
                    <p><i class="fa-solid fa-snowflake"></i></i>Reports</p>
                </div>
                <div class="div-child-Reports">
                    <ul>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-book-bookmark"></i>Student Feedback</li>
                        </a>
                        <a href="#">
                            <li><strong>></strong><i class="fa-solid fa-question"></i>Q&A</li>
                        </a>

                    </ul>
                </div>
            </div>
        </div>


        <div class="div-main-right-big">
            <div class="nav-main">
                <a href="#aboutus">About Us</a> |
                <a href="#course">Courses Offered</a> |
                <a href="#contactus">Help</a>

                <div class="div-account">
                    <a href="#"><i class="fa-solid fa-bell"></i></a>
                    <a href="#"><img src="./imgs/username.svg" alt="username"></a>
                </div>
            </div>
            <div class="div-child-right-big">
                <div class="div-child-right-big-left">
                    <h1>Welcome back,<br> Nguyen Hoang Long</h1>
                    <div class="div-notify-main">
                        <ul class="ul-notify-main">
                            <a href="#">
                                <li class="items-main"><span>15/01/24 15:32 -</span> Bảng học phí và các khoản phí tại
                                    Cao đẳng Anh quốc BTEC - cơ sở Đà Nẵng (Theo QĐ số 08/QĐ-CTCPGDFPT ký ngày
                                    12/1/2024)</li>
                            </a>
                            <a href="#">
                                <li class="items-main"><span>21/12/23 21:33 -</span> [DVSV] THÔNG BÁO V/v TRIỂN KHAI
                                    TOOL ĐĂNG KÝ HỌC
                                    LẠI MỚI</li>
                            </a>
                            <a href="#">
                                <li class="items-main"><span>11/12/23 13:55 -</span> [P. TC&QLĐT] THÔNG BÁO KẾ HOẠCH HỌC
                                    TẬP HỌC KỲ
                                    SPRING 2024 (ANNOUNCEMENT OF STUDY PLAN FOR SPRING SEMESTER 2024)</li>
                            </a>
                            <a href="#">
                                <li class="items-main"><span>08/12/23 16:56 -</span> [KHẢO THÍ] THÔNG BÁO KẾ HOẠCH THI
                                    CUỐI KỲ PART 2
                                    FALL2023 CÁC LỚP TIẾNG ANH</li>
                            </a>
                        </ul>
                    </div>
                    <div class="search-more-notify">
                        <a href="#">
                            <p>More</p>
                        </a>
                        <!-- Search here -->
                        <div class="search-div">
                            <input type="text" id="myInput" onkeyup="filterFunction()" placeholder="Search for news...">
                            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
                <div class="div-child-right-big-right">
                    <img src="./imgs/pic1.svg" alt="">
                </div>
            </div>
            <div class="div-banner-center">
                <div class="div-banner-center-child-items">
                    <a href="#"><img src="./imgs/card_b1.svg" alt=""></a>
                    <strong>News</strong>
                </div>
                <div class="div-banner-center-child-items">
                    <a href="#"><img src="./imgs/btec_card_b2.svg" alt=""></a>
                    <strong>Q&A</strong>
                </div>
                <div class="div-banner-center-child-items">
                    <a href="#"><img src="./imgs/btec_card_b3.svg" alt=""></a>
                    <strong>Application</strong>
                </div>
            </div>
            <!-- tiếp đến sẽ là phần div main --- là div cha của 2 div nhỏ -->
            <div class="div-main-right-second">
                <div class="div-child-items-second-left">
                    <img src="./imgs/pic2.svg" alt="">
                </div>
                <div class="div-child-items-second-right">
                    <h1>“However difficult life may seem, there is <strong>always something you can do</strong> and
                        succeed at.”
                    </h1>
                    <p>STEVEN HAWKING</p>
                    <div class="div-child-items-second-right-lastest">

                        <div class="lastest-item">
                            <div class="div-img">
                                <a href="#"><img src="./imgs/c2_icon_1.svg" alt=""></a>
                            </div>
                            <div class="lastest-item-content">
                                <h3>Academic Report</h3>
                                <p>Information about your learning status</p>
                            </div>
                        </div>

                        <div class="lastest-item">
                            <div class="div-img">
                                <a href="#"><img src="./imgs/c2_icon_2.svg" alt=""></a>
                            </div>
                            <div class="lastest-item-content">
                                <h3>Mark Report</h3>
                                <p>Information about your current marks and GPA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-footer">
                <p>For more information or any queries, please contact: FPT Polytechnic International in Hanoi</p>
                <ul class="ul-footer">
                    <li><i class="fa-solid fa-location-dot"></i> Address: Số 66 Võ Văn Tần, Quận Thanh Khê, Đà Nẵng.
                    </li>
                    <li><i class="fa-solid fa-envelope"></i> Email: Academic Department:
                        <span>Academic.btec.dn@fe.edu.vn</span>
                    </li>
                    <li><i class="fa-solid fa-phone-volume"></i> Hotline: 024 730 99 588</li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</body>

</html>