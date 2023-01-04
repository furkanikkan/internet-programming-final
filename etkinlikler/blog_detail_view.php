<?php include("header.php"); 
$blogId=$_GET["blogId"];
$blogDetay = $baglanti->prepare("SELECT * FROM blog WHERE blogID=?");
$blogDetay->execute(array($blogId));
$blogDetay = $blogDetay->fetch();
?>


<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                    <li class="breadcrumb-item"><a href="our-blog.html">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog Detay</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<main class="blog-mp">
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">

                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="blog-main-img">
                        <img src="images/our-blog/big-1.jpg" alt="">
                    </div>

                    <div class="date-user1">
                        <div class="date-itm-left">
                            <?php echo($blogDetay ["tarih"]); ?>
                        </div>

                    </div>
                    <div class="blog-main-content">
                        <div class="blog-title-des">
                            <h2><?php echo($blogDetay ["baslik"]); ?></h2>
                            <p><?php echo($blogDetay ["icerik"]); ?></p>
                           
                        </div>
                    </div>
                    <div class="by-tags-social">

                        <div class="comnt-rght">
                            <ul class="share-social-links">
                                <li>
                                    <div class="shre-txt">Share :</div>
                                </li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php"); ?>