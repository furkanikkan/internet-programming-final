<?php include("header.php") ?>


<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<main class="categories-mp">
    <div class="main-section">
        <div class="container">
            <div class="row">
                <p>Toplamda <strong><?php echo $sayBlog; ?></strong> yazı listelendi.</p>
                <?php foreach ($blog->fetchAll() as $blog) { ?>
                <div class="col-lg-4 col-md-6">
                    <div class="our-blogs">
                        <div class="blog-img">
                            <a href="blog_detail_view.php?blogId=<?php echo $blog["blogID"]; ?>"><img src="images/our-blog/img-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-item1">
                            <span><?php echo $blog["tarih"]; ?></span>
                            <a href="blog_detail_view.php?blogId=<?php echo $blog["blogID"]; ?>">
                                <h4><?php echo $blog["baslik"]; ?></h4>
                            </a>
                            <p><?php echo $blog["icerik"]; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php") ?>