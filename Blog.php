<?php
    $conn = new mysqli("localhost", "root", "", "afaqwebsite");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Picture/tabIcon.svg">
    <title>مدونة أفـــــاق</title>

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

    <!-- --------midmenu----- -->
    <section class="midmenush">
        <div class="rowsh">
            <div class="midmenu-colsh">
                <img src="Picture/image3.png" width="150px" height="160px">
                <div class="Layer">
                    <a href="Blog.php">
                        <h4>التـدونات</h4>
                    </a>
                </div>
            </div>
            <div class="midmenu-colsh">
                <img src="Picture/image2.png" width="140px" height="150px">
                <div class="Layer">
                    <a href="photopage.php">
                        <h4>الصــور</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br> <br> <br>

    <!--------------------الــــتــدويــنــات--------------------------->
    <div class="blogsh">
        <div class="center-columnsh">

            <?php if($conn) {
                $sb = 'SELECT * FROM blog';
                $rb = mysqli_query($conn, $sb);

                while($rb2 = mysqli_fetch_array($rb, MYSQLI_ASSOC)) { 
                    $sus = 'SELECT username from useres where email = "'.$rb2["emaill"].'"';
                    $rus = mysqli_query($conn, $sus);  
                    $rus2 = mysqli_fetch_array($rus, MYSQLI_ASSOC);

                    $sid = 'SELECT bid from blog where btitle = "'.$rb2["btitle"].'"';
                    $rid = mysqli_query($conn, $sid);  
                    $rid2 = mysqli_fetch_array($rid, MYSQLI_ASSOC);
                    $simg = "SELECT img from imgs where id ='".$rus2["username"]."".$rid2["bid"]."'";
                    $rimg = mysqli_query($conn, $simg);
                    echo '
                        <div> <article class="article" data-city="i'.$rb2["bid"].'" id="i'.$rb2["bid"].'">
                        <h2>'.$rb2["btitle"].'</h2>
                        <h5>كُتبَ بواسطة: '.$rus2["username"].'@</h5>
                        <p class="desc" style="display: inline;">'.$rb2["bdes"].'</p>
                        <div class="dots" style="display: inline;">...</div>
                        <div class="more" style="display: none;">'.$rb2["bcontent"].'<br><br>
                    ';
                    while($rimg23 = mysqli_fetch_array($rimg, MYSQLI_ASSOC)) 
                        echo '<img src="../blogsImgs/'.$rimg23["img"].'">';
                    echo ' </div>
                    <button onclick="readMore(\'i'.$rb2["bid"].'\')" class="myBtn"> أقرأ المزيد </button> 
                    <img class="myImage" onclick="changeHeart(\'i'.$rb2["bid"].'\')" src="Picture/unlike.png">
                   
                        </article> </div>'
                    ;
                }
            }


                ?>
        </div>
    </div>
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
    <script>
/*Read more function*/
    function readMore(city) {
        let desc = document.querySelector(`.article[data-city="${city}"] .desc`);
        let dots = document.querySelector(`.article[data-city="${city}"] .dots`);
        let more = document.querySelector(`.article[data-city="${city}"] .more`);
        let button = document.querySelector(`.article[data-city="${city}"] .myBtn`);
        let image = document.querySelector(`.article[data-city="${city}"] .myImage`);
        let Like = document.querySelector(`.article[data-city="${city}"] .like`);
        let Dislike = document.querySelector(`.article[data-city="${city}"] .dislike`);
        if (dots.style.display === "none") {
            desc.style.display = "inline";
            dots.style.display = "inline";
            button.textContent = "أقرأ المزيد";
            more.style.display = "none";
            image.style.display = "none"; //هنا القلب يختفي لين يضغط أقرأ المزيد 
        } else {
            desc.style.display = "none";
            dots.style.display = "none";
            button.textContent = " أقــل";
            more.style.display = "block";
            image.style.display = "inline";
        }
    }
    //----------- Like function-----------------------
    function changeHeart(city) {
        let image = document.querySelector(`.article[data-city="${city}"] .myImage`);
        if (image.src.match("unlike")) {
            image.src = "Picture/like.png";
        } else {
            image.src = "Picture/unlike.png";
        }
    }
    </script>
</body>

</html>