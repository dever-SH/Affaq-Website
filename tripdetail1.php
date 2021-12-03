<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Picture/tabIcon.svg">
    <title>السياحة البيئية</title>

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
            <img src="Picture/IMG_9737.png" alt="" >
            <div class="contentD">
                <h3><i class="fas fa-map-marker-alt"></i>مصر محمية ابو جالوم </h3>
                <p> محمية أبو جالوم توجد بمحافظة جنوب سيناء، وتمتلك تلك المحمية أنواع من النباتات النادرة، والعديد من أنواع الطيور البرية والحيوانات، بالإضافة إلى الكائنات البحرية المختلفة والشعاب المرجانية، كما أنها تضم مجموعة من الجبال والأودية</p>
           <div class="price"> <span> SAR 203 </span> SAR 638 </div>
           <a href="https://www.booking.com/searchresults.ar.html?dest_id=3151;dest_type=region&aid=318615;label=Catch_All-AR-124337863134-g9QbhhCGAp8TMdV16WoVDAS548736516440:pl:ta:p1:p2:ac:ap:neg:fi:tiaud-297601666995:dsa-1227182643302:lp9077038:li:dec:dm;ws=&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZa98ozcdeV-L_OCrHNKZL8SJSiuQKBj5cIN_LQRe3aGHujLpnEYDLwaAo7SEALw_wcB" >احجز الان!</a>
             </div>
        </div>
        <div class="box">
         <img src="Picture/IMG_9936.png" alt="" >
         <div class="contentD">
             <h3><i class="fas fa-map-marker-alt"></i>السعودية محميّة عروق بني معارض</h3>
             <p> محمية طبيعية تقع في جنوب المملكة العربية السعودية على الطرف الغربي من صحراء الربع الخالي، أكبر صحراء رملية في العالم في منطقة نجران وتضم المحمية عدداً من التشكيلات الأرضية والمواطن الفطرية الطبيعية الهامة منها الكثبان الرملية المرتفعة وهضبة جيرية متقطعة،وتنقسم المحمية إلى ثلاثة مناطق؛ المنطقة الرئيسية للمحمية والمنطقة التي يُسمح فيها بالرعي الخاضع للرقابة ومنطقة الصيد</p>
        <div class="price"> <span> SAR 200 </span> SAR 1,132 </div>
        <a href="https://www.booking.com/city/sa/najran.ar.html" >احجز الان!</a>
          </div>
     </div>
     <div class="box">
         <img src="Picture/IMG_9739.png" alt="" >
         <div class="contentD">
             <h3><i class="fas fa-map-marker-alt"></i>الامارات محمية المها العربي الطبيعية</h3>
             <p>بإمكانك الآن مشاهدة حيوان المها العربي بأعداد كبيرة في المحمية الطبيعية المخصَّصة في أبوظبي، استكشف الحيوانات الموجودة بين الكثبان الرملية في الصحراء، وسيدهشك التنوع الوافر للحيوانات المختلفة مثل الغزلان والثعالب وفئران الصحراء والأرانب البرية والزواحف والطيور</p>
        <div class="price"> <span> SAR 230 </span> SAR 1,481 </div>
        <a href="https://www.booking.com/searchresults.ar.html?aid=318615;label=Catch_All-AR-124337861494-8zvmDhIRyKpHtE4clMbpPQS548736516380%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi2642434411%3Atiaud-297601666995%3Adsa-1232732499011%3Alp9077038%3Ali%3Adec%3Adm;sid=cacbc7af0433f78891cab23d601dbfe9;city=-782066;expand_sb=1;highlighted_hotels=69939;hlrd=no_dates;keep_landing=1;redirected=1;source=hotel&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZYuFpfgtAvNeXaFv_k-64q8mpVPUxSBrFR-PA_k0LwaHfoRI-E3FQMaAoZmEALw_wcB&room1=A,A,;" >احجز الان!</a>
          </div>
     </div>
     <div class="box">
         <img src="Picture/IMG_9741.png" alt="" >
         <div class="contentD">
             <h3><i class="fas fa-map-marker-alt"></i> تونس محمية اشكل</h3>
             <p> تعتبر محمية" اشكل"، الواقعة في ولاية بنزرت، شمال البلاد، إحدى أجمل المحميات الطبيعية لما تتوفر عليه من ثروات مائية ونباتية
              و  يتنوع الغطاء النباتي بأنواع من الزهور والنباتات بدءا بأشجار الخروب وزهور المريم، مرورا بالسحلبيات البديعة  </p>
        <div class="price"> <span> SAR 157 </span> SAR 441 </div>
        <a href="https://www.booking.com/city/tn/bizerte.ar.html?aid=318615;label=New_Arabic_AR_SA_20153458105-VvFkDNc*YVuuXu0CXOaZpAS217245753072:pl:ta:p1:p2:ac:ap:neg;ws=&gclid=Cj0KCQiA7oyNBhDiARIsADtGRZakYCgK-7tCBb9zAllo_8QibukEQxqSdhcuEa5QUrmAJ3NESZ8gQOIaAkwzEALw_wcB" >احجز الان!</a>
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
    