<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Picture/tabIcon.svg">
    <title>أفـــــاق</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
    .header {
        min-height: 100vh;
        max-width: 100%;
        background-image: linear-gradient(rgba(202, 227, 233, 0.5), rgba(202, 227, 233, 0.5)), url("Picture/background.jpg");
        background-position: center;
        background-size: cover;
        position: relative;
    }

    .closein {
        cursor: pointer;
        position: absolute;
        margin-top: -95%;
        margin-left: 45%;
        color: black;
        display: block;
    }
    </style>
</head>

<body>
    <script src="Js.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    // php line doesn't read js file, need wifi conn,dont chanage his place
    function success() {
        swal("نشكرك", "تم ارسال ملاحظتك بنجاح", "success");
    }
    </script>
    <!------Header------>
    <section class="header">
        <nav class="navBar">
            <a href=""><img src="Picture/logo2.svg"> </a>
            <div class="nav-links">
                <ol>
                    <li><a href="profile.php" target="_blank_">حسابي</a></li> <!--  هنا صفحة شادن-->
                    <li><a href="#connect">تواصل معنا</a></li>
                    <li><a href="#us">عنّا</a></li>
                    <li><a href="MainPage.html">الرئيسية</a></li>
                </ol>
            </div>
            <a id="loginbtn" href="#" onclick="blurr('signinDiv', 'blur')"> تسجيل الدخول </a> <!--  هنا صفحة شادن-->
        </nav>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,192L60,202.7C120,213,240,235,360,229.3C480,224,600,192,720,192C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- --------midmenu----- -->
    <div id="blur">
        <section class="midmenu">
            <div class="row">
                <div class="midmenu-col">
                    <img class="icons" src="Picture/world.svg">
                    <a href="">إستكشف دول العالم العربي!</a> <!--  هنا صفحة دانيا-->
                </div>
                <div class="midmenu-col">
                    <img class="icons" src="Picture/Feather.svg">
                    <a href="Blog.php"  target="_blank_">أخبرنا عن رحلتك</a> <!--  هنا صفحة شذى-->
                </div>
                <div class="midmenu-col">
                    <img class="icons" src="Picture/mapsvg.svg">
                    <a href=""> تجول حسب هواياتك</a> <!--  هنا صفحة ضي-->
                </div>
            </div>
        </section>
        <!------ Map ----->
        <section class="map">
            <div class="textbox">
                <h3>خارطة العالم العربي</h3>
                <p>!أنقر على وجهتك لإستكشافها</p>
            </div>
            <div class="mapdiv">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 580 300">
                    <g> <a xlink:title="السودان" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-1"
                                d="M383.23,209.86c-.09,2-.78,4.11-.12,6,.75,2.21,6.1,4.57,8.18,5.61h0a23.73,23.73,0,0,1,1.29-2.32c5-8.16,9.78-16.62,14.78-24.78-1.42-3.64-2.84-7.71-1.39-11.33.71-1.79,2.08-3.28,2.63-5.13.61-2,.15-4.29.8-6.33.82-2.59,3.23-4.29,5.49-5.8,2.7-1.8,4.14-3.8,6.84-5.6-3.14-3.33-8.44-4.15-11.14-7.85-2.34-3.2-2-7.54-1.83-11.5.16-3.3,0-7-1.81-9.58l-89.93,1,.86,14.34-8.38,1.62,0,14.26,0,11.39c0,2.2,1.23,8.45-1.05,9.17a27.27,27.27,0,0,0-2.88.62c-2.09.92-1.51,3.05-1.7,4.82a9.37,9.37,0,0,1-3.29,6.13,24,24,0,0,0-3.05,2.42,3.07,3.07,0,0,0-.61,3.57c1.18,1.78,4.78,1.51,4.9,3.65.06,1.1-1,1.93-1.3,3-.32,1.27.54,2.53,1.48,3.43,2.35,2.25,2.24,3.7,1,4.82h0a6.11,6.11,0,0,0,2.23,6.19,13.57,13.57,0,0,1,2.14,1.21c1.66,1.49,1.53,4.91,3.74,5.21,1.41.19,2.48-1.23,3-2.54s1.06-2.85,2.36-3.42c1.69-.74,3.54.65,4.65,2.12s2.12,3.26,3.88,3.77c2,.59,4-.74,6.11-1,2.32-.34,4.6.64,6.84,1.35s4.84,1.12,6.79-.19c2.78-1.86,3.42-6.67,6.74-7,2.81-.3,4.55,2.93,7,4.36,4.44,2.61,7.92-1,10.63-3.95,3.15-3.4,6.32-6.45,4.58-11.64a12.35,12.35,0,0,1-1-3.26,4.33,4.33,0,0,1,3.42-4.21,5.59,5.59,0,0,1,5.28,1.94A8,8,0,0,1,383.23,209.86Z" />
                        </a><a xlink:title="ليبيا" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-3"
                                d="M251.91,118.11l57.64,33.21v-3.19l8.38-1.62-.83-14.34-4.88-83.36a21.61,21.61,0,0,0-4.29-.94c-4.25-.47-8.88.43-12.57-1.73-2.16-1.27-3.74-3.49-6.07-4.41-3.38-1.34-7.15.44-10.13,2.51-3.14,2.19-6.3,6.12-4.4,9.45.71,1.25,2,2.06,2.82,3.24,2.16,3.1,0,7.85-3.6,9.12s-7.63-.28-10.38-2.87-4.72-6.08-8.29-6.74c-3.89-.72-8.66,2.29-11.45-.51-2.13-2.14-1-5.8-2-8.65-1.32-3.86-6.13-5.23-10.21-5.14s-9.33,2.76-12.59.3l-3.42-2.59-.7.42a5.59,5.59,0,0,1-3,7.67c-1.46.47-3.11.3-4.47,1-1.74.88-2.58,2.91-2.85,4.84s-.12,3.91-.56,5.81-1.63,3.67-3.44,4.13c.24,2.18.37,4.37.46,6.51.48,11,.64,22,2.93,32.76a11.78,11.78,0,0,0,2,5c2.75,3.38,13.86,6,11.53,12.24l.4.13,23.14,3.41C244.83,122.23,248.15,119.68,251.91,118.11Z" />
                        </a><a xlink:title="أثيوبيا" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-4"
                                d="M453.35,272.09c2.28-1.52,2.93-4.75,5.19-6.3,3.67-2.53,8.88.81,13.1-.63,3.12-1.06,4.77-4.34,6.56-7.1a32.17,32.17,0,0,1,11.61-10.71,16.73,16.73,0,0,0,3.71-2.34,4.2,4.2,0,0,0,1.4-3.95,4.25,4.25,0,0,0-3.4-2.73,21.88,21.88,0,0,0-4.58-.11c-4.36.05-8.61-1.33-12.76-2.69l-8-2.63a11.31,11.31,0,0,1-3.59-1.66c-1.57-1.24-2.37-3.2-3.1-5.07a23.3,23.3,0,0,1-1.76-6,7.8,7.8,0,0,1,1.36-5.93h0c-1.23-2.21-1.91-4.5-3.13-7.23a50,50,0,0,0-18.14-21.19c-3.37-2.2-7.13-4.11-9.35-7.46-3.58-5.4-2.27-13.31-6.72-18-2.7,1.8-4.14,3.8-6.85,5.6-2.26,1.51-4.67,3.2-5.5,5.79-.65,2-.2,4.29-.81,6.33-.55,1.84-1.92,3.34-2.64,5.12-1.45,3.62,0,7.7,1.38,11.33-5,8.15-9.81,16.61-14.82,24.76-1.27,2.07-2.6,4.45-1.95,6.78.59,2.13,2.73,3.85,2.41,6-.66,4.36-8.88,2.53-10.62,6.58-.82,1.88.37,4.09,2,5.31s3.69,1.74,5.53,2.62a16.4,16.4,0,0,1,6.71,6.24c1.84,2.84.75,5.2,2,8.12.78,1.85,3.16,3.18,4.87,2.12.94-.58,1.64-1.79,2.75-1.72s1.64,1.34,1.68,2.42-.21,2.23.27,3.2c.66,1.35,2.41,1.76,3.91,1.65s3-.58,4.49-.34c2.15.35,3.76,2.1,5.67,3.15,4.46,2.47,10,1,14.87-.41S449.32,269,453.35,272.09Z" />
                        </a><a xlink:title="مصر" href="" target="_blank">
                            <path class="cls-2"
                                d="M405.76,129.88c-2.7-2.33-7-2.49-9.13-5.35-1.9-2.57-1.21-6.13-1.52-9.3-.41-4.19-2.67-8-5.05-11.42s-5-6.9-6.21-10.92c-1.51-4.84.31-13.76,6.41-11.4a12.29,12.29,0,0,1-3.72-10.3c.41-3.73,1.3-7.6.13-11.18a10.27,10.27,0,0,0-5.09-5.89c-1.69,1.44-4.84,2.23-6.1.78-3.43,2-7.8,1-11.56-.36s-7.79-2.91-11.6-1.75c-3.06.92-5.35,3.45-8.22,4.86-5.78,2.85-12.76.73-18.49-2.24-4.41-2.29-8.72-5.11-13.39-6.6l4.88,83.36,90-.82A7.22,7.22,0,0,0,405.76,129.88Z" />
                        </a><a xlink:title="المملكة العربية السعودية" href="" target="_blank">
                            <path class="cls-3"
                                d="M547.14,115.79c.8-2.23.5-4.68.76-7s1.34-4.86,3.55-5.57a4,4,0,0,0-.55-2c-1.1-1.76-3.86-1.72-5.51-.46s-2.45,3.32-3.14,5.28-1.41,4-3,5.39c-3.7,3.27-14.57,2.21-19.18,1.15s-10.9-4.93-13.46-9.14c-2.43-4-.63-9.79-3.71-13.3-1.7-1.94-4.33-2.46-6.22-4.1-.93-.81-1.36-2.06-2.18-2.8s-2.29,0-2.87-1.75a12.94,12.94,0,0,1-.21-3.36c-.08-1.12-.63-2.4-1.73-2.62-2-.42-3.17,2.07-5.41,1.18-1-.41-2.68-2.87-3.53-3.76a11.67,11.67,0,0,1-1.64-2.15c-3.82,1.35-7.8,2.63-11.8,2.09-3.21-.44-6.13-2-9-3.57l-6.17-3.36c-6.54-3.57-13.19-7.21-18.5-12.45-2.12-2.09-4.11-4.49-6.87-5.6-5.24-2.1-11,1.12-15.7,4.22-1.27.83-2.69,1.92-2.69,3.44s1.18,2.42,1.94,3.57c2.28,3.44.28,8.85-3.69,10-1.68.48-3.62.09-5.18.94-1.39.75-2.2,2.59-3.89,2.83-1.23.17-2.34-.79-3.57-.91a3.66,3.66,0,0,0-3.32,2c-.67,1.21-.32,6.15-.48,7.51l.6.27c3.78,1.84,7.66,6,9.86,9.56,3.12,5.05,5.35,10.74,9.37,15.11,4.65,5,11.74,8.51,13.45,15.15,1.48,5.74-1.49,12.76,2.39,17.24,1.84,2.12,4.75,3,7,4.68,3.7,2.89,5,7.8,6.73,12.16s5.45,9.39,10.13,9.67a33.73,33.73,0,0,1,7.73,12.94l.24.18c1.4-4.21,1.6-8.9,6.84-9.84,3.21-.57,6.45.5,9.53,1.56,2.5.86,5.29,2,6.26,4.44.47,1.2.42,2.56.84,3.79s1.65,2.39,2.89,2,1.55-1.94,1.66-3.22a45.57,45.57,0,0,1,1.39-9.54c1-3.08,2.83-6,5.69-7.49,4.85-2.49,10.9-.18,16.09-1.83,3.24-1,5.8-3.47,8.79-5.09,6-3.25,13.24-3,19.72-5.08a12.33,12.33,0,0,0,4.91-2.71c3.91-3.88,2.49-10.6,1.63-15.34-.48-2.65-1.13-5.43-.27-8C544.46,119.83,546.32,118.05,547.14,115.79Z" />
                        </a><a xlink:title="مملكة الإمارات المتحدة" href="" target="_blank">
                            <path class="cls-2"
                                d="M545.39,100.74c-1.65,1.26-2.45,3.32-3.14,5.28s-1.41,4-3,5.39c-3.7,3.27-14.57,2.21-19.18,1.15a21.15,21.15,0,0,1-4.25-1.54,11.23,11.23,0,0,1,1.42,3.83c.05,1.51-.36,3-.19,4.53a3.68,3.68,0,0,0,1.75,2.85c1.19.58,2.4-.13,3.59-.38,2.4-.51,4.13.46,5.94,1.9a6.55,6.55,0,0,0,6.39.7,15.36,15.36,0,0,1,8.62-1h0a6.56,6.56,0,0,1,.31-1.38c.76-2.29,2.62-4.07,3.44-6.33s.5-4.68.76-7,1.34-4.86,3.55-5.57a4,4,0,0,0-.55-2C549.8,99.44,547,99.48,545.39,100.74Z" />
                        </a><a xlink:title="لبنان" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-2"
                                d="M411.14,52.09a34.75,34.75,0,0,1,7.94-4.15l0-.47a16.61,16.61,0,0,0-2.36-8.72l-.16-.08c-1.89,1.25-3.81,2.45-5.73,3.64C407.06,44.6,400,48,396.61,43.65c1.31,2.44,1.86,6.35.59,8.4-1.47,2.37-4.38,3.81-5.16,6.49-.62,2.15.34,4.4,1.14,6.5s-.16,5.74-1.34,7.65a3.14,3.14,0,0,1,2.22-.75c1.23.12,2.34,1.08,3.57.91,1.69-.24,2.5-2.08,3.89-2.83,1.56-.85,3.5-.46,5.18-.94,4-1.13,6-6.54,3.69-10-.76-1.15-1.93-2.19-1.94-3.57S409.87,52.92,411.14,52.09Z" />
                        </a><a xlink:title="فلسطين" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-4"
                                d="M395.15,40.39a3.21,3.21,0,0,0-4,0,11.1,11.1,0,0,0-2.71,3.32c-.79,1.21-3.21,4.06-4.55,4.59a9.22,9.22,0,0,1-1.07,4.88,3.7,3.7,0,0,1-.8.9,10.29,10.29,0,0,1,5.1,5.89c1.17,3.58.28,7.45-.14,11.18a12.29,12.29,0,0,0,3.72,10.3h0c.17-1.36-.19-6.3.48-7.51a4.6,4.6,0,0,1,1.11-1.3h0c1.18-1.91,2.14-5.56,1.34-7.65s-1.77-4.35-1.14-6.5c.77-2.68,3.68-4.12,5.15-6.49,1.27-2,.73-5.94-.57-8.38a6.07,6.07,0,0,1-.72-1.11A7.72,7.72,0,0,0,395.15,40.39Z" />
                        </a><a xlink:title="العراق" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-4"
                                d="M482.63,54.28c-1.35-2.54.72-6-.13-8.72-1.11-3.57-5.48-4.79-9.19-5.25s-8-1.07-9.87-4.33c-1.35-2.37-.82-5.37.16-7.92s2.37-5,2.71-7.7-.79-5.89-3.37-6.77c-.76-.26-1.58-.31-2.35-.54-2.47-.77-3.83-3.32-5.23-5.5-1.89-2.95-4.42-5.67-7.74-6.82s-7.49-.27-9.37,2.69c-.92,1.45-1.27,3.3-2.54,4.46-1.86,1.71-5.45,1.78-5.94,4.26-.22,1.16.44,2.28.88,3.38,1.78,4.49-.22,9.64-3.16,13.47a44.94,44.94,0,0,1-11,9.68l.15.08A16.61,16.61,0,0,1,419,47.47l0,.46a11.14,11.14,0,0,1,7.76-.06c2.76,1.11,4.75,3.51,6.87,5.6,5.31,5.24,12,8.88,18.5,12.45l6.17,3.36c2.84,1.55,5.76,3.13,9,3.57,4,.54,8-.74,11.8-2.09-1.55-2.62-1.56-5.52,2-7.83a12.05,12.05,0,0,1,5.39-1.75C486.47,57.67,484.17,57.18,482.63,54.28Z" />
                        </a><a xlink:title="سوريا" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-3"
                                d="M435.06,3.25c-1.14.71-2,1.8-3.29,2.28-3.63,1.37-7.21-3.15-11-2.58-3.11.46-5.13,4.09-8.27,4.2-2.62.1-4.92-2.38-7.51-2-2.21.33-3.53,2.52-4.95,4.24s-4.68,2.92-6.39,1.5v0a13.48,13.48,0,0,1-1.7,3.55c-.89,1.47-1.76,3.1-1.58,4.8s1.29,3,2,4.51a11.07,11.07,0,0,1-3.54,13.66c-1.28.87-2.77,1.48-3.79,2.64-1.51,1.72-1.65,4.22-1.6,6.51,0,.59,0,1.2,0,1.8,1.33-.53,3.76-3.38,4.54-4.59a11.26,11.26,0,0,1,2.71-3.32,3.23,3.23,0,0,1,4,0,7.7,7.7,0,0,1,1.22,2.17c3.07,5.91,10.88,2.21,14.89-.25,6.1-3.76,12.34-7.64,16.7-13.32,2.94-3.83,4.94-9,3.16-13.47-.44-1.1-1.1-2.22-.88-3.38.49-2.48,4.08-2.55,5.94-4.26,1.27-1.16,1.62-3,2.54-4.46.05-.08.12-.14.17-.21C437.6,2.42,436.08,2.61,435.06,3.25Z" />
                        </a><a xlink:title="عمان" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-4"
                                d="M576.67,122.89c-2.7-4.32-6.32-10.94-11-8.87a10.11,10.11,0,0,1-14.21-8.84c0-.81,0-1.66-.09-2.46,0,.16,0,.32.05.47-2.21.71-3.3,3.25-3.55,5.57s0,4.8-.76,7-2.68,4-3.44,6.33a5,5,0,0,0-.2.76c0,.2-.08.41-.11.61a20.93,20.93,0,0,0,.58,6.61c.86,4.74,2.28,11.46-1.63,15.34a12.33,12.33,0,0,1-4.91,2.71c-4.58,1.49-9.55,1.79-14.19,3l0,.18c-.42,2.35-.79,5,.53,7s4,2.86,4.8,5.06c.66,1.78-.51,3.84.17,5.52.55,1.36,2.66,2.71,3.91,3.33l0,0a15,15,0,0,1,2.56-1.22c3-1.09,6.1,0,8.95-.82,5.2-1.48,4.6-8.6,8.41-11.59,3.33-2.59,8.77-1.28,11.66-4.33,3.93-4.14-.61-11.88,2.91-16.38,2.47-3.15,7.08-2.76,9.86-5.36C580.19,129.55,578.55,125.89,576.67,122.89Z" />
                        </a><a xlink:title="اليمن" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-1"
                                d="M528.71,168.85c-.68-1.68.49-3.74-.17-5.52-.81-2.2-3.5-3.1-4.8-5.06s-1-4.6-.53-7l0-.18c.77-.2,1.55-.37,2.33-.53h0a27.67,27.67,0,0,0-7.86,2.62c-3,1.62-5.55,4.07-8.79,5.09-5.19,1.65-11.24-.66-16.09,1.83-2.86,1.47-4.73,4.41-5.69,7.49a45.57,45.57,0,0,0-1.39,9.54c-.11,1.28-.44,2.83-1.66,3.22s-2.47-.77-2.89-2-.37-2.59-.84-3.79c-1-2.46-3.76-3.58-6.26-4.44-3.08-1.06-6.32-2.13-9.53-1.56-5.24.94-5.44,5.63-6.84,9.84l-.24-.18h0a33.11,33.11,0,0,1,1.66,9.47c.07,2.59-.16,5.23.53,7.73,1.82,6.63,6.7,4.72,11.66,3.66a25.61,25.61,0,0,1,7.08-.64c2.35.19,4.59,1.58,7,1.32,3.16-.36,5.14-3.06,7.84-4.42,2.15-1.08,4.45-1.7,6.6-2.85,4.78-2.57,9-7.27,14.56-7.65,3.25-.22,6.84-.06,9.39-2.09,2-1.56,2.84-4.08,4.21-6.19a14.11,14.11,0,0,1,4.69-4.4l0,0C531.37,171.56,529.26,170.21,528.71,168.85Z" />
                        </a><a xlink:title="الصومال" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-1"
                                d="M511.53,246.93c3.52-4,5.82-8.09,6.38-13.46.54-5.15-2.84-8.41.75-12.89,1.65-2.06,2.58-4.92,1.67-7.4s-4.1-4.1-6.39-2.78c-1.34.77-2.09,2.27-3.28,3.25-2,1.61-4.74,1.56-7.28,1.65a44,44,0,0,0-14,2.82c-1.93.73-4.69,2.87-6.74,2.74-2.23-.14-3.58-2.51-6.18-2A16.73,16.73,0,0,0,473,220.5c-3.95,1.83-8.82-.06-11.75-3.28a16.17,16.17,0,0,1-2.16-3h0a7.8,7.8,0,0,0-1.36,5.93,23.3,23.3,0,0,0,1.76,6c.73,1.87,1.53,3.83,3.1,5.07a11.31,11.31,0,0,0,3.59,1.66l8,2.63c4.15,1.36,8.4,2.74,12.76,2.69a21.88,21.88,0,0,1,4.58.11,4.25,4.25,0,0,1,3.4,2.73,4.2,4.2,0,0,1-1.4,3.95,16.73,16.73,0,0,1-3.71,2.34,32.17,32.17,0,0,0-11.61,10.71c-1.79,2.76-3.44,6-6.56,7.1-4.22,1.44-9.43-1.9-13.1.63-2.26,1.55-2.91,4.78-5.19,6.3-2.47,1.65-6.07.76-8.43,2.57s-2.34,4.9-2.28,7.68c.1,4.43.21,8.87.3,13.31.05,2.64,1.08,5.38.88,8-.16,2.15-1.2,4,.52,5.93.5.57,2.15,1.17,3.9,1.6,2.29-3.34,4-7.11,6.67-10.14a60.56,60.56,0,0,1,12.66-10.34c7.23-4.66,15-8.64,21.4-14.38a50.44,50.44,0,0,0,13.51-19.79C504.41,251.37,508.17,250.7,511.53,246.93Z" />
                        </a><a xlink:title="المغرب" href="" target="_blank">
                            <path class="cls-3"
                                d="M122.61,52.45c-2.81,1.21-5-3.24-8-3.57-5.81-.64-4.38,9.36-6.72,12.25a9.2,9.2,0,0,1-5.46,3.07,10.85,10.85,0,0,0-5.27,2.46c-2.87,2.28-5.13,5.38-8.4,7-4.39,2.2-9.64,1.36-14.46,2.27a11.85,11.85,0,0,0-6.62,3.68c-1.6,1.82-1,4.85-3.15,6.06-1.4,1.93,1.31,6,1.65,8.38s.23,5.24-1.8,6.49a6.69,6.69,0,0,1-3.84.63L48,100.79a7.35,7.35,0,0,0-4.19.71c-4.08,2.66.25,7.45-1.71,10.55a15.18,15.18,0,0,0-1.64,2.45c-.71,1.84.27,4.31-1.16,5.67-1,.89-2.62.88-3.29,2a3.3,3.3,0,0,0-.27,2c.28,3.81.55,7.61.83,11.43H4.46A6.33,6.33,0,0,1,3.91,131c1-2.93,4.32-4.19,6.46-6.4s3-5.43,4-8.41c1.21-3.54,4.94-3.71,6-7.65.66-2.46.45-5.06.76-7.58s1.37-5.22,3.65-6.36c2.46-1.23,5.7-.31,8-1.88s2.36-4.29,2.85-7a.38.38,0,0,0,0-.1l.11-.54a7.38,7.38,0,0,1,2.11-4.37c2.28-2,5.74-1.24,8.76-1.42,4.32-.26,7.61-2.67,10.21-5.94,2-2.51,5.69-5.42,6-8.83.34-3.9-3.36-7.58-2.24-11.32,1-3.26,5-4.51,6.9-7.34,1.28-1.91,1.47-4.39,2.62-6.39,3-5.25,11.34-5.82,13.63-11.41,1.14-2.78,1.11-6.62,2.63-9.21S91.91,15,94,17.18c.76.84,1.1,2,1.91,2.81,2.35,2.34,6.3.13,9.61.45,2.25.21,4.17,1.64,6.14,2.75s4.45,1.9,6.45.83c.54,8.27-.8,14.67,3.5,20.36a13.62,13.62,0,0,1,2.51,4C124.52,49.89,124.07,51.83,122.61,52.45Z" />
                        </a><a xlink:title="موريتانيا" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-5"
                                d="M65.19,93.61c.35,2.35.23,5.23-1.8,6.49a6.86,6.86,0,0,1-3.84.63L47,100.31a7.27,7.27,0,0,0-4.19.72c-4.08,2.66.25,7.44-1.71,10.55A14.67,14.67,0,0,0,39.48,114c-.71,1.85.27,4.31-1.16,5.68-1,.89-2.62.88-3.29,2a3.32,3.32,0,0,0-.27,2q.42,5.72.83,11.43H5.11A12.57,12.57,0,0,0,6.32,137c1.51,2,3.4,3.7,4.36,6,2.06,4.86-1.89,9.14-1.34,14.3.61,5.65,1.24,11.26-1,16.69-1.89,4.5-8.45,6.65-8,12.23,0,0-3.47,9.1,38.27-1.67.91-.23-1.47-1.25-2.24-1.83H88.92l-5.29-76.62H94.21L64.53,85.19l-1,0h0C62.14,87.16,64.85,91.24,65.19,93.61Z" />
                        </a><a xlink:title="الجزائر" href="#" onclick="info(); return false;" target="_blank">
                            <path class="cls-4"
                                d="M205.53,108a11.67,11.67,0,0,1-2-5c-2.29-10.74-2.45-21.79-2.92-32.76-.39-9-1.44-18.93-8.09-25-2.71-2.48-6.62-5.14-5.74-8.7.37-1.47,1.51-2.58,2.41-3.79,4.68-6.27,3.57-15.46,1.69-23h0a5.73,5.73,0,0,1-3.6,1.39c-2.11-.07-3.81-1.76-5.86-2.29-4.74-1.24-9.28,4-14.09,3-3.36-.66-6.21-4.24-9.48-3.24-1.86.57-3,2.48-4.82,3.22-3,1.27-6.41-1.21-9.7-.91-5.36.49-8.82,8.08-14.07,6.88-1.24-.29-2.37-1.07-3.65-1.05-3.7.06-4.14,6-7.41,7.71a4.23,4.23,0,0,1-.58.25c.44,8-.72,14.17,3.46,19.7a13.42,13.42,0,0,1,2.51,4c.45,1.52,0,3.47-1.46,4.09-2.81,1.2-5-3.25-8-3.58-5.81-.64-4.38,9.36-6.71,12.25a9.23,9.23,0,0,1-5.46,3.07,10.85,10.85,0,0,0-5.27,2.46c-2.87,2.28-5.13,5.38-8.41,7C83.86,75.92,78.6,75.07,73.78,76a11.92,11.92,0,0,0-6.62,3.68c-1.59,1.82-1,4.83-3.12,6h1c22.46,14.36,46.39,34.5,68.86,48.86a34,34,0,0,1,7.5,5.86c1.53,1.74,2.79,3.88,4.89,4.87a43.53,43.53,0,0,0,4.27,1.22,15.52,15.52,0,0,1,4.95,3.38l7.74,6.92.68.2c0-.23,0-.46,0-.68,8.42-5.7,18.72-11.24,27.13-16.94l21.88-14.81c1.64-1.11,3.36-2.32,4.1-4.16C219.55,114.05,208.29,111.44,205.53,108Z" />
                        </a><a xlink:title="تونس" href="" target="_blank">
                            <path class="cls-5"
                                d="M215.25,39.85,208,34.32c-1.28-1-2.71-2.35-2.29-3.89.6-2.19,4.08-2,5.3-3.93,1.09-1.71-.22-3.91-1.57-5.41s-2.91-3.38-2.28-5.31c.5-1.56,2.36-3.07,1.43-4.42s-3.41.14-5.11-.43-1.87-3.29-3.27-4.63c-1.79-1.69-4.76-.47-6.62,1.14a36.41,36.41,0,0,1-3,2.54c1.83,7.53,2.86,16.58-1.76,22.77-.9,1.21-2,2.32-2.41,3.79-.88,3.56,3,6.22,5.74,8.7,5,4.59,6.85,11.39,7.61,18.33a5.93,5.93,0,0,0,3.93-4c.44-1.9.29-3.88.56-5.81s1.11-4,2.84-4.84c1.37-.69,3-.52,4.48-1a5.59,5.59,0,0,0,3-7.67Z" />
                        </a></g>
                </svg>
            </div>
        </section>
        <!---------- Footer  ---------------->
        <section class="footer">
            <div class="row2">
                <div id="connect" class="commentSection ">

                    <form action="comment.php" method="post">
                        <h3>للملاحظات والإستفسارات</h3>
                        <?php 
                    if(isset($_SESSION['status'])){            
                       echo' <script>success();</script>';            
                        unset( $_SESSION['status']);
                    }
                     ?>
                        <label for="name">
                            <p>الإسم:</p>
                        </label>
                        <input type="text" id="name" name="name"><br>

                        <label for="email">
                            <p>الإيميل</p>
                        </label>
                        <input type="email" id="email" name="email" placeholder="example@example.com"><br>

                        <label for="subject">
                            <p>اختر الموضوع</p>
                        </label>
                        <select id="subject" name="subject">
                            <option value="NOTE">ملاحظة</option>
                            <option value="PROBLEM">مشكلة</option>
                            <option value="OTHER">آخر</option>
                        </select>

                        <label for="content">
                            <p>المحتوى</p>
                        </label>
                        <textarea name="content" rows="3" cols="32" placeholder="هنا"></textarea><br>

                        <input type="submit" name="submit" value="إرسال">
                    </form>

                </div>

                <div id="us" class="footer-content">
                    <h3>أفــــــــاق</h3>
                    <p>صفحة عربية تساعدك على إكستشاف الوطن العربي
                        وتحديد وجهتك القادمة ومشاركة رحلاتك السابقة</p>


                    <ul class="socials">
                        <p>تابعنا على</p>
                        <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
                        <li><a href="https://twitter.com/sauditourism"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="Mailto:affaqhelpcenter@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCWR3kKXx2yi7Jnr85GqxVdA/featured"><i
                                    class="fa fa-youtube"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li> -->
                    </ul>
                    <div class="Download">
                        <p>حمل التطبيق </p>
                        <a href="#" onclick="info(); return false;"><img src="Picture/App-store-desktop.png"></a>
                        <a href="#" onclick="info(); return false;"><img
                                src="Picture/google-play-blanco-desktop.png"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2021 .Affaq designed by <span>Anhar Shatha Shaden Dai Daniah </span></p>
            </div>
        </section>
    </div>

    <div class="signDiv" id="signinDiv">
        <form class="signForm" id="signinForm" method="post" action="Main.php" enctype="multipart/form-data">
            <label class="signinTitle">تسجيـــل الدخول</label> <br><br><br>
            <label for="mailin" class="formit">الإيميــــل</label>
            <input type="email" id="mailin" required name="em"> <br><br><br>
            <label for="passwordin" class="formit">كلمة المـــرور</label>
            <input type="password" id="passwordin" name="password" aria-hidden="true" required>
            <i class="bi bi-eye-slash eye" id="togglePasswordin"
                onclick="showHidePass('togglePasswordin', 'passwordin')" style="cursor: pointer;"></i>
            <h1 onclick="hideSign();" class="closein bi bi-x"></h1>
            <input type="submit" value="تسجيل الدخول" class="submitButton" name="subForm">
        </form>
    </div>
    <?php
        $conn = new mysqli("localhost", "root", "", "afaqwebsite");

        if(isset($_POST['subForm'])) {
            $sql = "SELECT * FROM useres WHERE email = \"".$_POST['em']."\"";
            $result = mysqli_query($conn, $sql);
            $r2 = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($r2["pass"] == $_POST['password']) {
                $_SESSION["em"] = $_POST['em'];
                echo '<script> window.open("profile.php");</script>'; 
            } 
        }
        
    ?>
</body>

</html>