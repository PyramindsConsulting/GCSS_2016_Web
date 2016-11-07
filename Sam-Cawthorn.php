<!DOCTYPE html>
<html lang="en">

<head>
    <title>9th GCSS</title>
    <meta name="description" content="Sam is the CEO for Empowering Enterprizes, a company dedicated to advance humanity bringing happiness, inspiration and empowering people around the world.">
    <?php include "includes/headlinks.php" ?>
</head>

<body>
    <?php 
        include "includes/menu.php";
        activate("Speakers");
    ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <cneter>
                        <h2 style="text-align:center"> SPEAKERS</h2></cneter>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-9">
                    <div class="container">
                        <div class="col-sm-5">
                            <center> <img src="images/speakers/07-SAM-CAWTHORNE.png" class="img-responsive"> </center>
                        </div>
                        <br>
                        <div class="col-sm-7 speakerdata">
                            <table>
                                <tr>
                                    <th>NAME</th>
                                    <th>: </th>
                                    <td>Sam Cawthorn <small> (Australia) </small></td>
                                </tr>
                                <tr>
                                    <th>TOPIC </th>
                                    <th>:</th>
                                    <td><a href="bounce-forward-crises-create-opportunity.php" class="link_style">Bounce Forward - <br>Crisis create opportunity</a></td>
                                </tr>
                                <tr>
                                    <th>TIME </th>
                                    <th>:</th>
                                    <td>9:30am – 5:30pm</td>
                                </tr>
                                <tr>
                                    <th>DATE </th>
                                    <th>:</th>
                                    <td>1st Oct 2016</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 aboutspeaker">
                            <h1> <b> ABOUT SAM CAWTHORN</b></h1>
                            <p class="aboutcontent ">Crisis provides with it an opportunity to start thinking creatively because all we want to do at the time is to bounce ourselves out of that, not bounce back, but bounce forward. Leveraging positivity enables better performance and productivity which inturn fuels success for the individual and the organization.</p>
                            <p class="aboutcontent ">Sam is the CEO for Empowering Enterprizes, a company dedicated to advance humanity bringing happiness, inspiration and empowering people around the world. He is an accomplished author having written 6 books including an international Best Seller and also a philanthropist starting a charity working with kids living with a disability in developing worlds.</p>
                            <p class="aboutcontent ">In October 2006, Sam’s life changed forever when he met with a major car accident, where he was pronounced DEAD. He was thankfully resuscitated, but left with an amputated right arm and a permanent disability in his right leg.</p>
                            <p class="aboutcontent ">Forever the opportunist Sam chose LIFE, and is now reaching tens of thousands of people around the world each month. Sam’s thought leadership is in peak performance and his research is in his message to not bounce back but bounce forward through difficult times.</p>
                            <p class="aboutcontent ">To know more: <a href="http://www.samcawthorn.com/home" target="_blank" class="link_style">www.samcawthorn.com</a> ; <a href="http://www.caringforpeople.org" target="_blank" class="link_style">www.caringforpeople.org</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <!------------------------ Speaker Band ----------->
                    <?php 
                        include "includes/speaker-band.php";
                        display_band("Sam Cawthorn");
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <!------------------------------ Footer ----------->
        <?php include "includes/footer.php" ?>
</body>

</html>