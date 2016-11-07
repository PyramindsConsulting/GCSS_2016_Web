<?php 
    function activate($menu_item){
        
        $home=$about=$gcss=$speakers=$register=$blog=$contact=$live="";
        switch($menu_item){
            case "Home":
                $home="active";
                break;
            case "About":
                $about="active";
                break;
            case "9thGCSS":
                $gcss="active";
                break;
            case "Speakers":
                $speakers="active";
                break;
            case "Register":
                $register="active";
                break;
            case "Blog":
                $blog="active";
                break;
            case "Contact":
                $contact="active";
                break;
            case "Live":
                $live="active";
                break;
            default:
                break;
        } ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#MainMenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="index.php">
                        <img src="images/gcss_logo.png" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="MainMenu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="<?php echo $home;?>"><a href="index.php">HOME</a></li>
                        <li class="<?php echo $about;?>"><a href="about.php">ABOUT</a></li>
                        <li class="<?php echo $gcss;?>"><a href="schedule.php">SCHEDULE</a></li>
                        <li class="<?php echo $speakers;?>"><a href="Brahmarshi-Patriji.php">SPEAKERS</a></li>
                        <li class="<?php echo $register;?>"><a href="http://pssmovement.org/gcss-pg/" target="_blank">REGISTER</a></li>
                        <li class="<?php echo $blog;?>"><a href="http://www.spiritualcongress.org/blog/" target="_blank">BLOG</a></li>
                        <li class="<?php echo $contact;?>"><a href="#gcss_footer">CONTACT</a></li>
                        <li class="<?php echo $live;?>"><a href="http://pssmovement.org/GCSS-LIVE">LIVE</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<?php
    }
?>