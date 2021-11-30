<?php 
session_start();
?> 
<!DOCTYPE html>
<html dir="rtl">
<head> 
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Affaq Website</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!--font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;400&display=swap" rel="stylesheet">
    
</head>
    <body>
        <script src="Js.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script> 
            // php line doesn't read js file, need wifi conn,dont chanage his place
            function success(){
            swal("نشكرك", "تم ارسال ملاحظتك بنجاح", "success");
                } 
        </script>
        <!------Header------>
    <section class="header">
            <nav class="navBar">
                <a href=""><img src="Picture/Asset 6.svg" > </a>
              <div class="nav-links">
                <ol>
                <li><a href="">حسابي</a></li> <!--  هنا صفحة شادن-->
                <li><a href="#connect">تواصل معنا</a></li>
                <li><a href="#us">عنّا</a></li>
                <li><a href="MainPage.html">الرئيسية</a></li>
                </ol>
             </div>
                <a id="loginbtn"  href="">  تسجيل الدخول </a> <!--  هنا صفحة شادن-->
            </nav>
           <svg  class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
               <path fill="#ffffff" fill-opacity="1" d="M0,192L60,202.7C120,213,240,235,360,229.3C480,224,600,192,720,192C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
           </svg>
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
                    }  ?>
                <label for="email"><p>الايميل</p></label>
                <input type="email" id="email" name="email" placeholder="example@example.com" ><br>

                <label for="subject"><p>اختر الموضوع</p></label>
                    <select id="subject" name="subject" >
                        <option value="note">ملاحظة</option>
                        <option value="problem">مشكلة</option>
                        <option value="other">آخر</option>
                    </select>              
                <label for="content"> <p>المحتوى</p></label>
                <textarea name="content" rows="5" cols="32" placeholder="هنا"></textarea><br>

                <input type="submit" name="submit" value="إرسال">
            </form>       
        </div>
   
        <div id="us" class="footer-content">
                <h3>أفــــــــاق</h3>
                <p>صفحة عربية تساعدك على إكستشاف الوطن العربي
                وتحديد وجهتك القادمة ومشاركة رحلاتك السابقة</p>

                
            <ul class="socials">
                <p>تابعنا على</p>
                <li><a href="https://twitter.com/sauditourism"><i class="fa fa-twitter"></i></a></li>
                <li><a href="Mailto:affaqhelpcenter@gmail.com"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCWR3kKXx2yi7Jnr85GqxVdA/featured"><i class="fa fa-youtube"></i></a></li>
            </ul> 
             <div class="Download">
                <p>حمل التطبيق </p>
                <a  href="#" onclick="info(); return false;"><img src="Picture/App-store-desktop.png"></a>
                <a  href="#" onclick="info(); return false;"><img src="Picture/google-play-blanco-desktop.png"></a>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2021 .Affaq designed by <span>Anhar Shatha Shaden Dai Daniah  </span></p>
        </div>
    </section>
    </body> 
</html>