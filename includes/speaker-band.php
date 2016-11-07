<?php
    function display_band($speaker){
        $Brahmarshi_Patriji=$Jasmuheen=$Buddha_Maitreya=$Newton=$Sam_Osmanagich=$Tom_Young=$Sam_Cawthorn=$Judy_Satori=$Shola_Birgitt=$Satya_Hinduja="inline";
        switch($speaker){
            case "Brahmarshi Patriji":
                $Brahmarshi_Patriji="none";
                break;
            case "Jasmuheen":
                $Jasmuheen="none";
                break;
            case "Buddha Maitreya":
                $Buddha_Maitreya="none";
                break;
            case "Newton":
                $Newton="none";
                break;
            case "Sam Osmanagich":
                $Sam_Osmanagich="none";
                break;
            case "Tom Young":
                $Tom_Young="none";
                break;
            case "Sam Cawthorn":
                $Sam_Cawthorn="none";
                break;
            case "Judy Satori":
                $Judy_Satori="none";
                break;
            case "Shola Birgitt":
                $Shola_Birgitt="none";
                break;
            case "Satya Hinduja":
                $Satya_Hinduja="none";
                break;
                
        } ?>
        <div class="col-xs-6">
            <a href="Tom-Young.php" style="display:<?php echo $Tom_Young;?>;"><img src="images/speakers/06TOM-YOUNG.png" class="img-responsive"><br></a>
            <a href="Judy-Satori.php" style="display:<?php echo $Judy_Satori;?>;"><img src="images/speakers/08_JUDY-SATORI.png" class="img-responsive"><br></a>
            <a href="Shola-Birgitt.php" style="display:<?php echo $Shola_Birgitt;?>;"><img src="images/speakers/09_SHOLA_BIRGITT_STARP.png" class="img-responsive"><br></a>
            <a href="Jasmuheen.php" style="display:<?php echo $Jasmuheen;?>;"><img src="images/speakers/02_JASMUHEEN.png" class="img-responsive"><br></a>
            <a href="Satya-Hinduja.php" style="display:<?php echo $Satya_Hinduja;?>;"><img src="images/speakers/10_SATYA_HINDUJA.png" class="img-responsive"><br></a>
        </div>
        <div class="col-xs-6">
            <a href="Brahmarshi-Patriji.php" style="display:<?php echo $Brahmarshi_Patriji;?>;"><img src="images/speakers/01_BRAHMARSHI-PATRIJI.png" class="img-responsive"><br></a>
            <a href="Buddha-Maitreya.php" style="display:<?php echo $Buddha_Maitreya;?>;"><img src="images/speakers/03_BUDDHA-MAITREYA-THE-CHRIST.png" class="img-responsive"><br></a>
            <a href="Sam-Osmanagich.php" style="display:<?php echo $Sam_Osmanagich;?>;"><img src="images/speakers/05_Dr.-SAM-OSMANAGICH,.png" class="img-responsive"><br></a>
            <a href="Sam-Cawthorn.php" style="display:<?php echo $Sam_Cawthorn;?>;"><img src="images/speakers/07-SAM-CAWTHORNE.png" class="img-responsive"><br></a>
            <a href="Newton.php" style="display:<?php echo $Newton;?>;"><img src="images/speakers/04_Dr.-NEWTON-&-Dr.-LAKSHMI.png" class="img-responsive"><br></a>
            <br>
        </div>
    <br>
    <br>
<?php
    }
?>
