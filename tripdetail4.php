<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Picture/tabIcon.svg">
    <title>السياحة الترفيهية</title>

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
            <img src="Picture/IMG_9729.png" alt="" >
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>الامارات عجمان</h3>
                <p>عجمان من اهم مدن الامارات فموقعها على الساحل الغربي جعل منها واحدة من وجهات السياحة في الامارات العربية المتحدة كما أنها تضم العديد من الاماكن السياحية البارزة التي تلبي شغف سياح المدينة في استكشاف ثقافتها والتمتع بجمال معالمها</p>
                <div class="price"> <span> SAR 165 </span> SAR 2,765 </div>
           <a href="https://www.booking.com/city/ae/ajman-uae.ar.html" >احجز الان!</a>
             </div>
        </div>
        <div class="box">
            <img src="Picture/IMG_9730.png" alt="" >
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>السعودية الظهران </h3>
                <p> تعتبر مدينة الظهران واحدة من أهم مدن السياحية في السعودية لما تتضمنه من اماكن ترفيهية رائعة مثل مركز الملك عبدالعزيز الثقافي العالمي ومعرض الطاقة وشاطىء نصف القمر </p>
                <div class="price"> <span> SAR 242 </span> SAR 1,587 </div>
           <a href="https://www.booking.com/searchresults.ar.html?aid=318615;label=New_Arabic_AR_SA_20153462305-%2AzytRtGa3CC9mwRy77VlwQS77619298465%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg;sid=cacbc7af0433f78891cab23d601dbfe9;city=-3093628;redirected=1;redirected_from_city=1;source=city&" >احجز الان!</a>
             </div>
        </div>
        <div class="box">
            <img src="Picture/IMG_9727.png" alt="" >
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>المغرب الدار البيضاء </h3>
                <p>الدار البيضاء أو كازابلانكا اكبر مدن المغرب وأجمل مدن الساحل المغربي المطلة على المحيط، والعاصمة الاقتصادية للبلاد.
 
                 كازابلانكا مدينة غنية بالأماكن السياحية المتنوعة والرائعة حيث تحتوي على العديد من اهم المناطق السياحية في المغرب مما يعطيها سحر وجمالية خاصة</p>
                 <div class="price"> <span> SAR 135 </span> SAR 526 </div>
           <a href="https://www.booking.com/city/ma/casablanca.ar.html" >احجز الان!</a>
             </div>
        </div>
        <div class="box">
         <img src="Picture/IMG_9728.png" alt="" >
         <div class="content">
             <h3><i class="fas fa-map-marker-alt"></i>تونس العاصمة تونس </h3>
             <p>تونس العاصمة هي احدى اهم وجهات السياحة في تونس فهي مدينة تمتلك كل مقومات الجذب للسياح من معالم اثرية وتاريخية واماكن ترفيهية من منتزهات وغيرها كما انها تشتهر بأسواقها الشعبية التي لا يمل السيّاح من التجوّل فيها</p>
             <div class="price"> <span> SAR 314 </span> SAR 1,084 </div>
        <a href="https://www.booking.com/city/tn/tunis.ar.html" >احجز الان!</a>
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
    