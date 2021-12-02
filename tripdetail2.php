<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Picture/tabIcon.svg">
    <title>السياحة الرياضية</title>

    <!-- style links -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--font links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
                    <li><a href="#contact">تواصل معنا</a></li>
                    <li><a href="#us">عنّا</a></li>
                    <li><a href="Main.php">الرئيسية</a></li>
                </ol>
            </div>
        </nav>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,192L60,202.7C120,213,240,235,360,229.3C480,224,600,192,720,192C840,192,960,224,1080,213.3C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section>

<br><br><br>
<!----------packages section------------->
<section class="packages" id="packages">
    <div class="box-container">
        <div class="box">
            <img src="Picture/IMG_9778.png" alt="" >
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> الامارات دبي</h3>
                <p> استمتع بتجربة شيّقة في حلبة "دبي أوتودروم" لرياضات السيارات والسباقات و"الكارتينغ" مع مضمار بطول 5.39 كلم معتمد من قبل الاتحاد الدولي للسيارات يستضيف جميع فعاليات رياضة السيارات المحلية والعالمية.</p>
                <div class="price"> <span> SAR 682 </span> SAR 1,194 </div>
           <a href="https://www.booking.com/city/ae/dubai.ar.html" >احجز الان!</a>
             </div>
        </div>
        <div class="box">
            <img src="Picture/IMG_9808.png" alt="" >
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> السعودية الرياض </h3>
                <p> من أهم الثروات السياحية الطبيعية التي أنعم الله بها على المملكة هي الجبال ذات الارتفاعات المختلفة والغنية بالتركيبات الصخرية الجميلة التي تجعلها المكان المناسب لممارسة الرياضات والهوايات الجبلية كتسلق الجبال وقيادة الدراجات الهوائية على الجبال بالإضافة إلى الطيران الشراعي من أعالي قمم الجبال </p>
                <div class="price"> <span> SAR 720 </span> SAR 6,140 </div>
           <a href="https://www.booking.com/city/sa/riyadh-sa.ar.html?aid=318615;label=Catch_All-AR-128111142680-jEKaU3PFtM8_ny5PMdj4xQS548736518630:pl:ta:p1:p2:ac:ap:neg:fi2655630328:tiaud-297601666995:dsa-1232732496451:lp9077038:li:dec:dm;ws=&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZbUjscbMwxyKDY_LVD3YJzR1LjVt-PP-ym5JD8unKCfTVw5igajwCkaAi30EALw_wcB" >احجز الان!</a>
             </div>
        </div>
        <div class="box">
            <img src="Picture/IMG_9809.png" alt="" >
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>المغرب عرق الشبي </h3>
                <p> في الصحراء الكبرى يمكنك ركوب عربات الكثبان الرملية او الدراجات الترابية عبر المناطق الداخلية الوعرة بالمغرب كما ان 
                    كثبان عرق شبي الرملية تقدم مناظر خلابه جعلتها تصنف كأجمل كثبان رملية في العالم وتكسبها شهرة لدى محبي التزلج على الرمال
                </p>
                <div class="price"> <span> SAR 74 </span> SAR 849 </div>
           <a href="https://www.booking.com/city/ma/merzouga.ar.html" >احجز الان!</a>
             </div>
        </div>
     <div class="box">
         <img src="Picture/IMG_9807.png" alt="" >
         <div class="content">
             <h3><i class="fas fa-map-marker-alt"></i> مصر الجونة</h3>
             <p> يمتاز البحر الأحمر بمياهه الصافية وشعابه المرجانية الملونة وأسماكه النادرة وجباله المتباينة الممتدة في سلسلة طويلة بمحاذاة البحر ,كما تتمتع سواحل خليج العقبة بتسهيلات كبيرة لممارسة رياضات الغوص والغطس وغيرها من الرياضات البحرية</p>
             <div class="price"> <span> SAR 223 </span> SAR 1,337 </div>
        <a href="https://www.booking.com/searchresults.ar.html?aid=318615;label=New_Arabic_AR_SA_20153458105-VvFkDNc%2AYVuuXu0CXOaZpAS217245753072%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg;sid=cacbc7af0433f78891cab23d601dbfe9;city=900040077;redirected=1;redirected_from_city=1;source=city&" >احجز الان!</a>
          </div>
     </div>
    </div>
 </section> 
                   <!---------- Footer  ---------------->
                   <section class="footer">
                    <div class="row2">
                        <div id="contact" class="contactSection ">

                            <form action="contact.php" method="post">
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
                                <textarea class="content" name="content" rows="3" cols="32" placeholder="هنا"></textarea><br>

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
                                <li><a href="Mailto:affaqhelpcenter@gmail.com"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li><a href="https://www.youtube.com/channel/UCWR3kKXx2yi7Jnr85GqxVdA/featured"><i
                                            class="fa fa-youtube"></i></a></li>
                            </ul>
                            <div class="Download">
                                <p>حمل التطبيق </p>
                                <a href="#" onclick="info(); return false;"><img
                                        src="Picture/App-store-desktop.png"></a>
                                <a href="#" onclick="info(); return false;"><img
                                        src="Picture/google-play-blanco-desktop.png"></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <p>copyright &copy;2021 .Affaq designed by <span>Anhar Shatha Shaden Dai Daniah </span></p>
                    </div>
                </section>
    </body>
    </html>
    