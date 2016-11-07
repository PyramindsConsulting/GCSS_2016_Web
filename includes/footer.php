<?php 
    $mailerror="";
    $name="";
    $email="";
?>
    <?php 
    if (isset($_POST["subscirbe_submit"])) {

        if(empty($_POST["name"]) || empty($_POST["email"])){
            $mailerror="Enter Name & Email";
            $name=$_POST["name"];
            $email=$_POST["email"];
        }else{
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $mailerror = "Invalid email format"; 
                $name=$_POST["name"];
                $email=$_POST["email"];
            }else{
                $Name=$_POST['name'];
                $EmailId=$_POST['email'];
                $encodedname=urlencode($Name);
                $ch = curl_init("http://176.32.230.53/worksbypyraminds.co/GCSS-email-optin/index.php?emailid=$EmailId&name=$encodedname");
                curl_setopt($ch, CURLOPT_POST, true);
                //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                $mailerror="Subscribed Successfully";
                $name="";
                $email="";
            }
        }
        
    } 
?>
        <div id="gcss_footer" class="container-fluid footer">
            <div class="row">
                <div class="col-sm-3">
                    <div>
                        <h4>ABOUT US</h4>
                        <h5 class="abouttext">The <b>Global Congress of Spiritual Scientists (GCSS) </b> Is a unique platform created to bring together several New Age Spiritual Masters and Scientists of the world to share their spiritual perspectives, research works and experiences.
                        </h5>
                        <div class="learnmore">
                            <h5> <a href="about.php">Learn More</a></h5></div>
                        <br> </div>
                    <div>
                        <h4>  PHOTO GALLERY </h4>
                        <div class="row ">
                            <div class="col-lg-4 col-sm-6 col-xs-6 imggalary"> <img src="images/photogalary/gcss_img-(1).JPG" class="img-responsive"> </div>
                            <div class="col-lg-4 col-sm-6 col-xs-6 imggalary"> <img src="images//photogalary/gcss_img-(2).JPG" class="img-responsive"> </div>
                            <div class="col-lg-4 col-sm-6 col-xs-6 imggalary"> <img src="images//photogalary/gcss_img-(3).JPG" class="img-responsive"> </div>
                            <!--
                    <div class="col-lg-4 col-sm-6 col-xs-6 imggalary"> <img src="images/photogalary/gcss_img-(4).JPG" class="img-responsive"> </div>
                    <div class="col-lg-4 col-sm-6 col-xs-6 imggalary"> <img src="images/photogalary/gcss_img-(5).jpg" class="img-responsive"> </div>
                    <div class="col-lg-4 col-sm-6 col-xs-6 imggalary"> <img src="images//photogalary/gcss_img-(6).JPG" class="img-responsive"> </div>
--></div>
                        <br>
                        <div class="learnmore">
                            <h5> <a href="#" target="_blank"> View More </a> </h5></div>
                    </div>
                </div>
                <!--------------- Orginazers--------------->
                <div class="col-sm-3">
                    <h4 class="org">ORGANIZED BY</h4>
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <center>
                                <a href="http://pyramidvalley.org/accommodation/" target="_blank"> <img class="img-responsive" src="images/Orgnizers/PVI-Logo.png"></a>
                            </center>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <center>
                                <a href="http://thriive.in" target="_blank"> <img class="img-responsive" src="images/Orgnizers/Trive.png"></a>
                            </center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-6">
                            <center>
                                <a href="http://luglobal.org/" target="_blank"> <img class="img-responsive" src="images/Orgnizers/LU-Logo.png"></a>
                            </center>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <center>
                                <h4><center>Powered By</center></h4>
                                <a href="http://www.pyraminds.co/" target="_blank"> <img class="img-responsive powered" src="images/Orgnizers/Pyraminds_Logo_PNG.png"></a>
                            </center>
                        </div>
                    </div>
                    <div class="row">
                        <h4><center> Download the ‘GCSS‘ app from </center></h4>
                        <div class="col-xs-6" style="text-align:right;">
                            <a href="https://play.google.com/store/apps/details?id=com.ionicframework.congress469382&hl=en" target="_blank"> <img class="img-responsive" src="images/icons/Android-App-Logo-300x105.png" width="150px" style="display:inline;"> </a>
                        </div>
                        <div class="col-xs-6" style="text-align:left;">
                            <a href="https://itunes.apple.com/in/app/gcss/id1072347603?mt=8" target="_blank"> <img class="img-responsive" src="images/icons/Apple-app-store-logo-300x105.png" width="150px"> </a>
                        </div>
                    </div>
                </div>
                <!--------------- Archives Section --------------->
                <div class="col-sm-3">
                    <div class="row">
                        <h4><center>ACCOMMODATION </center></h4>
                        <br>
                        <center>
                            <a href="accommodation.php"> <img class="img-responsive" src="images/Rooms.jpg"></a>
                        </center>
                    </div>
                    <br>
                    <div class="row">
                        <h4>  <center>FREE E-BOOK</center></h4>
                        <center>
                            <a href="free-ebook.php"> <img class="img-responsive" src="images/e_book.jpg" width="130px"></a>
                        </center>
                    </div>
                    <br> </div>
                <!--------------- Contact info --------------->
                <div class="col-sm-3">
                    <div>
                        <br>
                        <ul class="continfo">
                            <li>
                                <p class="mail"><i class="fa fa-map-marker cont"></i> &nbsp;&nbsp; <a href="http://pyramidvalley.org/" target="_blank">Pyramid Valley, Bengaluru</a></p>
                            </li>
                            <li>
                                <p class="mail"><i class="fa fa-phone cont"></i> &nbsp;&nbsp; <a href="tel:+91 74119 40373">+91 74119 40373</a> </p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope-o cont"></i> &nbsp;&nbsp; <span class="mail"><a href="mailto:info@spiritualcongress.org">info@spiritualcongress.org</a></span></p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div>
                            <h4>FOLLOW US </h4> </div>
                        <form class="form-inline " role="form" action="#gcss_footer<?php //echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method="post">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" id="email" placeholder="Name" value="<?php echo $name ?>"> </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?php echo $email ?>"> </div>
                            <button name="subscirbe_submit" type="submit" class="btn btn-default">Subscribe</button>
                            <div>
                                <span>
                                    <p>
                                        <?php
                                            switch ($mailerror){
                                                case "":
                                                    break;
                                                case "Enter Name & Email":
                                                    echo "<span style='color:red'>".$mailerror."</span>";
                                                    break;
                                                case "Invalid email format":
                                                    echo "<span style='color:red'>".$mailerror."</span>";
                                                    break;
                                                case "Subscribed Successfully":
                                                    echo "<span style='color:yellow'>".$mailerror."</span>";
                                                    break;
                                            }
                                        ?>
                                    </p>
                                </span>
                            </div>
                        </form>
                    </div>
                    <br>
                    <!------------ SOCIAL MEDIA -------------->
                    <div>
                        <ul class="socialmedia">
                            <li><a href="https://www.facebook.com/events/1109226392445634" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/gcss2016" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/+SpiritualcongressOrg-GCSS" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.instagram.com/gcss2016/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://in.pinterest.com/gcss2016" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div>
                        <br>
                        <b>TO BOOK A TAXI:</b> <br>
                        Call : Balaji Tours & Travels <br>
                        B.V.Srinivas : +91 8050771881, +91 9845365245
                    </div>
                </div>
                <!--End of Contact--->
            </div>
            <a class="pull-right" href="#top" style="font-size:20px; color:WHITE;"> <span class="glyphicon glyphicon-arrow-up"></span> </a>
        </div>
        <!--End of Footer--->
        <!------------------------------------Powered By Pyraminds Bar------------------------------>
        <div class="container-fluid footernav">
            <center><span class="powered"> <a  href="http://www.pyraminds.co/" target="_blank">POWERED BY PYRAMINDS </a> </span> </center>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/c5630b7c55.js"></script>
        
    <!-- Google Analytics -->
        <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-65241370-1', 'auto');
              ga('send', 'pageview');

            </script>

            <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "Event",
              "name": "Global Congress of Spiritual Scientists",
              "startDate" : "2016-09-29T10:00",
              "endDate" : "2016-10-02T17:00",
              "url" : "http://www.spiritualcongress.org/GCSS_Live_Site/blog/",
              "image" : "http://www.spiritualcongress.org/GCSS_Live_Site/blog/wp-content/uploads/2016/04/Last-Slide-2.jpg",
              "location" : {
                "@type" : "Place",
                "sameAs" : "http://www.pyramidvalley.org",
                "name" : "Pyramid Valley International",
                "address" : "Kebbedoddi Village, Harohalli Hobli, Kanakapura Road, Bengaluru. Pin: 562112 Karnataka, India."
              }
            }
        </script>