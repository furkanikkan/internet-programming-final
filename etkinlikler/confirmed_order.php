<?php include("header.php");

$etkinlikID = $_GET["etkinlikID"];

$etkinlikDetay = $baglanti->prepare("SELECT * FROM etkinlikler WHERE etkinlikID=?");
$etkinlikDetay->execute(array($etkinlikID));
$etkinlikDetay = $etkinlikDetay->fetch();

$biletEkle = $baglanti->prepare("INSERT INTO biletler SET
  etkinlikID=?,
 kullaniciID=?  
 ");

$kayit=$biletEkle->execute(array($etkinlikID,$_SESSION["kullaniciId"]));

$biletId = $baglanti->lastInsertId();
?>

<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">

                </ol>
            </div>
        </div>
    </div>
</div>


<main class="discussion-mp">
    <div class="main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-6 col-md-8">
                    <div class="checkout-heading text-center">
                        <h2 class="mt-3">Bilet Başarıyla Alındı</h2>
                    </div>
                    <div class="confirm-order">
                        <div class="checkout-dt1">
                            <div class="check-img">
                                <img src="images/event-view/checkout-img.jpg" alt="">
                            </div>
                            <div class="evnt-dt-ckot1">
                                <h4><?php echo($etkinlikDetay ["etkinlikBaslik"]); ?></h4>
                                <div class="ctgory1"><?php echo($etkinlikDetay ["tip"]); ?></div>
                                <div class="date-tme1"><?php echo($etkinlikDetay ["tarih"]); ?></div>
                                <div class="lctn-dt1"><i class="feather-map-pin"></i>
                                    <?php echo($etkinlikDetay ["adres"]." ".$etkinlikDetay["ilce"]."/".$etkinlikDetay["il"]); ?>
                                </div>
                            </div>
                        </div>
                        <div class="confirm-tickets">
                            <!-- <div class="vip-left1">Booked Tickets :</div>
<div class="vip-left">0 VIP</div>
<div class="css-dot">,</div>
<div class="general-left">0 General</div>
</div> -->
                            <div class="congrats">
                                <h4>Tebrikler!!!</h4>
                                <span>Bilet satın alma başarıyla gerçekleşti.</span>
                                <p>QR</p>
                                <img src="http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=<?php echo $biletId ; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>


<?php include("footer.php"); ?>