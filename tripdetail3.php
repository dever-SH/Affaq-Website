<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Picture/tabIcon.svg">
    <title>سياحة التسوق</title>

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
                    <img src="Picture/IMG_9732.png" alt="" >
                    <div class="contentD">
                        <h3><i class="fas fa-map-marker-alt"></i> الامارات دبي </h3>
                        <p> يعتبر مهرجان دبي للتسوق السنوي واحد من أكبر الفعاليات الإجتماعية العالمية أفضل أماكن التسوق في دبي، حيث يقصده العديد من الزوار من كافة أنحاء العالم للتمتع بتجربة تسوق فريدة من نوعها.
                     </p>
                     <div class="price"> <span> SAR 398 </span> SAR 1,194 </div>
                   <a href="https://www.booking.com/city/ae/dubai.ar.html?aid=1610824;label=dubai-4H69Thbyz6gR8EEPo06YAgS438085912445:pl:ta:p1:p2:ac:ap:neg:fi:tiaud-297601666995:kwd-299837298422:lp9077038:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YcLgEXIAJSu2B2IWGgtmRcQ;ws=&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZbO5--I0eF1Yo6aSgD36Xk5sFVeznmhAXRZhNxw_YL9YCDr3E0k-GgaApkdEALw_wcB" >احجز الان!</a>
                     </div>
                </div>
                <div class="box">
                 <img src="Picture/IMG_9733.png" alt="" >
                 <div class="contentD">
                     <h3><i class="fas fa-map-marker-alt"></i> السعودية الرياض </h3>
                     <p>يتميز مهرجان مدينة الرياض للتسوق والترفيه الذي يقام من صيف كل عام، بأنه يجمع بين السياحية الثقافية والترفيهية والتسويقية،
                          ويشكل حدثاً وطنياً يسعى إلى الرقي بالسياحة الداخلية من خلال فعاليات المهرجان المتنوعة</p>
                     <div class="price"> <span> SAR 720 </span> SAR 6,140 </div>
                <a href="https://www.booking.com/city/sa/riyadh-sa.ar.html?aid=318615;label=Catch_All-AR-128111142680-jEKaU3PFtM8_ny5PMdj4xQS548736518630:pl:ta:p1:p2:ac:ap:neg:fi2655630328:tiaud-297601666995:dsa-1232732496451:lp9077038:li:dec:dm;ws=&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZa2W40qTR8Uw2yKD_Gp0VL91KDRVJrWx9hfFcN4FfXWCfNKgZweIigaAhb6EALw_wcB" >احجز الان!</a>
                  </div>
             </div>
             <div class="box">
                 <img src="Picture/IMG_9734.png" alt="" >
                 <div class="contentD">
                     <h3><i class="fas fa-map-marker-alt"></i>مصر خان الخليلي</h3>
                     <p>يعود تاريخ هذا السوق في المناطق الداخلية لمدينة القاهرة القديمة إلى قرون، ويمكنك التجول في هذا السوق لتجربة صخب هذه المدينة العربية الرائعة، حتى لو لم تكن من عشاق التسوق
                         ولربما يُعَد خان الخليلي هو أفضل مكان في مصر بأكملها لشراء قمصان جديدة، وزجاجات صغيرة من الرمال الملونة عليها صور للإبل، بالإضافة إلى الهدايا التذكارية الرائعة التي تحمل اسمك بالهيروغليفية
                         </p>
                     <div class="price"> <span> SAR 61 </span> SAR 2,063 </div>
                <a href="https://www.booking.com/city/eg/cairo.ar.html?aid=318615;label=New_Arabic_AR_SA_20153458105-VvFkDNc*YVuuXu0CXOaZpAS217290640699:pl:ta:p1:p2:ac:ap:neg;ws=&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZb49paa3qW9xEbkn80zYAxdLMoSRj3v7_yvHwiu_GXJiuUGyVevi80aAghGEALw_wcB" >احجز الان!</a>
                  </div>
             </div>
             <div class="box">
                 <img src="Picture/IMG_9735.png" alt="" >
                 <div class="contentD">
                     <h3><i class="fas fa-map-marker-alt"></i>تونس سوق البركة</h3>
                     <p>واحد من أقدم الأسواق الذي يستقطب مُحبي السياحة في تونس العاصمة حتى يتسنى لهم شراء المجوهرات الثمينة كالإكسسوارات والأحجار الكريمة بأشكالها وأحجامها المختلفة
                         كما يتميز سوق البركة بانتشار العديد من المقاهي والمطاعم التي تعمل على تقديم خدماتها الرائعة بإسلوب راقي للزائرين</p>
                     <div class="price"> <span> SAR 103 </span> SAR 658 </div>
                <a href="https://www.booking.com/landmark/tn/medina1.ar.html" >احجز الان!</a>
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
                                <textarea class="contentD" name="content" rows="3" cols="32" placeholder="هنا"></textarea><br>

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
    