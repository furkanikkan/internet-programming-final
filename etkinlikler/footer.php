<?php 
  require_once("dashboard/Database/baglanti.php");

$ayarlariGetir=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayarId=1");
$ayarlariGetir->execute();
$ayar=$ayarlariGetir->fetch();

 ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="footer-left">
                    <ul>
                        <li><a href="privacy_policy.php">Gizlilik</a></li>
                        <li><a href="term_conditions.php">Şartlar ve Koşullar</a></li>
                        <li><a href="about.php">Hakkımızda</a></li>
                        <li><a href="contact_us.php">İletişim</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer-right">
                    <ul class="copyright-text">
                        <li>
                            <div class="social-links">
                                <a href="https://facebook.com/<?php echo $ayar["ayarFacebookUsername"];?>" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="Facebook" aria-label="Facebook"><i
                                        class="fab fa-facebook-square"></i></a>
                                <a href="https://instagram.com/<?php echo $ayar["ayarInstagramUsername"];?>" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="Instagram" aria-label="Instagram"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://twitter.com/<?php echo $ayar["ayarTwitterUsername"];?>" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="Twitter" aria-label="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/company/<?php echo $ayar["ayarLinkedinUsername"];?>" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="LinkedIn" aria-label="LinkedIn"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a href="https://youtube.com/<?php echo $ayar["ayarYoutubeUsername"];?>" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="Youtube" aria-label="Youtube"><i
                                        class="fab fa-youtube"></i></a>
                          
                            </div>
                        </li>
                        <li>
                            <div class="ftr-1"><i class="far fa-copyright"></i> 2023 <?php echo $ayar["ayarTasarlayan"];?>. </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="js/jquery-3.6.0.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="vendor/OwlCarousel/owl.carousel.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/i18n/datepicker.en.js"></script>
<script src="js/custom.js"></script>
</body>

</html>