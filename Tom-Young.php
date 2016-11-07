<!DOCTYPE html>
<html lang="en">

<head>
    <title>9th GCSS</title>
    <meta name="description" content="Tom Young is a Master Coach who helps re-define, heal & celebrate the ‘relational masculine’: from this re-definition, a deep sense of purpose can be claimed and then unleashed into the world in a conscious and intentional way.">
    <?php include "includes/headlinks.php" ?>
</head>

<body>
    <?php 
        include "includes/menu.php";
        activate("Speakers");
    ?>
        <!---------------- End of Navbar ---------------->
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
                    <div class="row">
                        <div class="col-sm-5">
                            <center> <img src="images/speakers/06TOM-YOUNG.png" class="img-responsive"> </center>
                        </div>
                        <br>
                        <div class="col-sm-7 speakerdata">
                            <table>
                                <tr>
                                    <th>NAME</th>
                                    <th>: </th>
                                    <td>Tom Young <small> (Dubai) </small> </td>
                                </tr>
                                <tr>
                                    <th>TOPIC </th>
                                    <th>:</th>
                                    <td><a href="re-defining-the-masculine.php" class="link_style">Re-defining the Masculine from Grandiosity and Shame to Wholeness and Freedom.</a></td>
                                </tr>
                                <tr>
                                    <th>TIME </th>
                                    <th>:</th>
                                    <td>10:00am – 1:30pm</td>
                                </tr>
                                <tr>
                                    <th>DATE </th>
                                    <th>:</th>
                                    <td>30th Sep 2016</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 aboutspeaker">
                            <h1> <b>ABOUT TOM YOUNG</b></h1>
                            <p class="aboutcontent ">This experiential workshop examines and challenges current definitions of masculinity, offers paths back to one’s deeper truth and introduces a new model of ‘relational living’ and help explore the extraordinary potential of combining the female and male energies. A workshop for both men & women to reclaim what is truly theirs!</p>
                            <p class="aboutcontent ">Tom Young is a Master Coach who helps re-define, heal & celebrate the ‘relational masculine’: from this re-definition, a deep sense of purpose can be claimed and then unleashed into the world in a conscious and intentional way.</p>
                            <p class="aboutcontent ">He is the founder of “Dubai Distant Dads” – a group to offer support to fathers who live away from their children and founder member of “The Next Level” – a men’s group dedicated to living lives of responsibility, contribution and being ‘men of integrity.’</p>
                            <p class="aboutcontent ">With a huge appetite for soulful adventure, he is also a fierce lover of 5 Rhythms Dance amongst many other ‘alternative’ healing practices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <!------------------------ Speaker Band ----------->
                    <?php 
                        include "includes/speaker-band.php";
                        display_band("Tom Young");
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <!------------------------------ Footer ----------->
        <?php include "includes/footer.php" ?>
</body>

</html>