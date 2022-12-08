<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tingbers adalah website yang memberikan berbagai informasi">
    <meta name="keywords" content="tingbers informasi,tingbers website, website tingbers, tingbers tutorial,tingbers earn money, tingbers earnmoney, tingbers tutorial html, tingbers tutorial php, tingbers tutorial JavaScript">
    <meta name="author" content="Tingbers">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="blog-name" content="Ting | Bers" />
    <link rel="canonical" href="r.php?p=home/" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./removeBanner.js"></script>
    <link rel="icon" href="https://img.icons8.com/external-others-inmotus-design/2x/external-T-round-latin-keyboard-others-inmotus-design-2.png">
    <title>Ting | Bers</title>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
  <?php
    include "navbar.php";
  
?>

        <!-- Example Code -->
        <br>
        <br>
    <main class="container border">
        <div class="row">
                <div class="col-md-8">
                <section class="content">
                <?php
            
                    error_reporting(0);
            
                    $page = $_GET['p'];
                    
                  
                    if($page=="home"){
                        include "home.php";
                    }else if($page=="download"){
                        include "download.php";
                    }

                    // tutorial

                    else if($page=="ZiqoqoqoqUao"){
                        include "header.php";
                        include "tutorial/fphp/inputdenganphp.php";
                        
                    }else if($page=="Aiqoqoq31oqUaoaa"){
                        include "header.php";
                        include "tutorial/fphp/caramenampilkandatadaridatabase.php";
                        
                    }else if($page=="Aiailar121qUaoaa"){
                        include "header.php";
                        include "tutorial/fphp/caraeditdanhapusdatadenganphp.php";
                    }
                    // end tutorial 
                    // earnmoney
                    else if($page=="eMny1"){
                        include "header.php";
                        include "earnmoney/fphp/earnmoneyone.php";
                    }else if($page=="eMny2"){
                        include "header.php";
                        include "earnmoney/fphp/earnmoneytwo.php";
                    }
                ?>
            </section> 
            </div>
            <div class="col-md-4">
                <br>
                  <script type="text/javascript">
            	atOptions = {
            		'key' : '28c2dcbc343fef933519057a1bd22ceb',
            		'format' : 'iframe',
            		'height' : 250,
            		'width' : 300,
            		'params' : {}
            	};
            	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://eltontry.com/28c2dcbc343fef933519057a1bd22ceb/invoke.js"></scr' + 'ipt>');
                </script>
                    <br>
                    <a href="" onclick="window.open('//publishers.adsterra.com/referral/38HuigXmi7')"> <img alt="banner" src="https://landings-cdn.adsterratech.com/referralBanners/png/80%20x%2030%20px.png" /></a>
                <br>
                <h5>RECENT POST</h5>
                <i class="fa fa-list-ul" aria-hidden="true"><b> TUTORIAL</b></i>
                <li>
                <a href="r.php?p=ZiqoqoqoqUao" style="text-decoration:none; color:black;">Cara input dengan php</a><br>
                </li>
                <li>
                <a href="r.php?p=Aiqoqoq31oqUaoaa" style="text-decoration:none; color:black;">Cara menampilkan data dari database</a><br>
                </li>
                <li>
                 <a href="r.php?p=Aiailar121qUaoaa" style="text-decoration:none; color:black;">Cara edit dan hapus data dengan php</a><br>
                </li>       
                <br>
                <i class="fa fa-list-ul" aria-hidden="true"><b> Earn Money</b></i>         
                <li>
                <a href="r.php?p=eMny1" style="text-decoration:none; color:black;"> Cara menghasilkan uang dari internet</a><br>
                </li>
            </div>

        </div>   
                <!-- Main content -->
    </main>
    <br>
    <?php
            include "footer.php"
            ?>
    </body>
</html>