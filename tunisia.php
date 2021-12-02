<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Picture/tabIcon.svg">
    <title>تونس</title>

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

<!-- content -->
<button onclick="topFunction()" id="upBtn" title="الى أعلى الصفحة">
<img src="Picture/up.png" alt="up" width="20px" height="20px">
</button>

<section class="country_container">

  <img class="country-img" src="Picture/tunisia.svg">
<p>
  تونس دولة في أقصى شمال أفريقيا. وهي جزء من منطقة المغرب العربي، وتحدها الجزائر من الغرب والجنوب الغربي، ليبيا من الجنوب الشرقي والبحر الأبيض المتوسط من الشمال والشرق، تبلغ مساحتها 163,610 كم مربع،
    الدينار التونسي هو العملة الرسمية للجمهورية التونسية .
    <br>
  يتحدث التونسيون اللهجة التونسيّة، وهي لهجة بمفردات عربيّة، لكنها تحتوي العديد من الكلمات الفرنسيّة، وبعض الكلمات التركيّة، والإيطاليّة.
  تتميز جمهورية تونس بتنوع تضاريسها، فهناك المناطق الساحلية التي تضم الجبال الصخرية المرتفعة والمتعرجة، وهناك السواحل الرملية الممتدة على طول البحر الأبيض المتوسط، عدا عن الخلجان كخليج تونس وخليج الحمامات، بالإضافة إلى الهضاب والصحاري الموجودة في الجزء الجنوبي من أرض تونس، كما وأن فيها العديد من ينابيع المياة، ومن الجدير بالذكر بأن جمهورية تونس تضم أعلى نقطة في شمال القارة الإفريقية والتي يطلق عليها اسم رأس بن سكة.

  تتوفر في تونس جميع مقومات الجذب السياحي. فهناك وعي سياحي عال على المستويين الرسمي والشعبي، ويجد السائح في تونس بغيته مهما تنوّعت وتباينت، فإلى جانب شواطئها هناك المقصد السياحي الثقافي ممثلاً بكنوز من التراث والآثار والمتاحف تعكس كلها تواتر حضارات عريقة شهدتها تونس منذ فجر التاريخ. من اشهر المناطق :
</p>

<!-- Famous Cities -->
<div class="container">
  <div class="box">
    <div class="head">
    <img src="Picture/tunis1.jpeg" alt="tunis">
    <h3> العاصمة تونس </h3>
  </div>
    <p>
      تونس العاصمة هي احدى اهم وجهات السياحة في تونس فهي مدينة تمتلك كل مقومات الجذب للسياح من معالم اثرية وتاريخية واماكن ترفيهية من منتزهات وغيرها كما انها تشتهر بأسواقها الشعبية التي لا يمل السيّاح من التجوّل فيها.
    </p>
  </div>
  <div class="box">
    <div class="head">
      <img src="Picture/Sousse.jpeg" alt="soussa">
      <h3>سوسة </h3>
    </div>
    <p>
      تعد سوسة من اجمل مدن تونس السياحية ، تقع على الساحل الشرقي من البلاد وتتميز بجوّها المعتدل، تستقطب المدينة اعداد كبيرة من السيّاح حديث تحتضن اهم المناطق السياحية في تونس من شواطئ ساحرة ومناطق اثرية واماكن ترفيهية.
    </p>
</div>
  <div class="box">
    <div class="head">
      <img src="Picture/sidi.jpeg" alt="sidi">
      <h3> سيدي بوسعيد </h3>
    </div>
      <p>
القرية التي تشبه الأساطير واحدة من الأماكن السياحية الأكثر شهرة في تونس وإحدى ضواحي العاصمة، وهي عبارة عن قرية صغيرة تقع على ربوة عالية مطلة على البحر، تتميز بأزقتها البيضاء ذات النوافذ والأبواب الزرقاء، ومن أشهر معالمها قصر النجمة الزهراء والقرية المعمارية التونسية ومقهى سيدي شبعان.

      </p>
  </div>
 <div class="box">
   <div class="head">
     <img src="Picture/ruins-of-carthage-tunisia.jpeg" alt="carthage">
     <h3> قرطاج </h3>
   </div>
     <p>
       تتميز مدينة قرطاج بطبيعتها الجميلة واحتوائها على العديد من الأماكن الآثرية، ما يجعلها مدينة سياحية من الطراز الأول حيث تجلب حوالي مليون سائح سنوياً، وقد تم إدراج مدينة قرطاجة ضمن قائمة التراث العالمي لمنظمة اليونسكو.
     </p>
  </div>
  <div class="box">
    <div class="head">
      <img src="Picture/Djerba.jpeg" alt="Djerba">
      <h3> جزيرة جربة </h3>
    </div>
    <p>
      بموقعها المميز في قلب البحر الابيض المتوسط استطاعت جزيرة جربة أن تحتل مكانتها كواحدة من أفضل مناطق السياحة في تونس، تتمتع بطقس رائع وشواطئ رملية تحيط بها أشجار النخيل.

      </p>
</div>
</div>


<h2>تجول حسب ماتفضل !</h2>

<section class="country-menu">
    <div class="country-row">
        <div class="country-col">
            <img class="country-icons"src="Picture/shopping-bag.png">
          <a href="tripdetail3.php"> سياحة التسوق </a>
      </div>
      <div class="country-col">
          <img class="country-icons" src="Picture/sun-umbrella.png">
                <a href="tripdetail.php">السياحة البحرية </a>
            </div>
            <div class="country-col">
                <img class="country-icons" src="Picture/desert.png">
               <a href="tripdetail1.php">السياحة البيئية</a>
        </div>
        <div class="country-col">
            <img class="country-icons" src="Picture/amusement-park.png">
              <a href="tripdetail4.php">السياحة الترفيهية</a>
    </div>
    </div>
 </section>
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