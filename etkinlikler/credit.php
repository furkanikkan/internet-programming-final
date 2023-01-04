<?php include("header.php"); ?>


<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="index.html">Ansayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bakiye Yükle</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<main class="discussion-mp">
    <div class="main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-12">
                    <div class="main-card">
                        <div class="categories-left-heading border_bottom">
                            <h3>Bakiye Bilgileri</h3>
                        </div>
                        <div class="credit-counter-block">
                            <div class="credit-counter">
                                <span class="h-color">Şuanki Bakiye</span>
                                <span class="ms-auto"><?php echo @$kullanici["bakiye"] | 0; ?></span>
                            </div>
                            <div class="credit-counter">
                                <span class="h-color">Para Birimi</span>
                                <span class="ms-auto">TL</span>
                            </div>
                            <div class="credit-counter">
                                <span class="h-color">Kredi Kartı</span>
                                <span class="ms-auto">Visa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="main-card">
                        <div class="categories-left-heading border_bottom">
                            <h3>Kart İle Bakiye Yükle</h3>
                        </div>
                        <form method="post" action="database/bakiyeYukle.php">
                        <?php 
                                            @$kontrol=$_GET["kontrol"];
                                              if($kontrol=="basarili"){
                                                echo '  <div class="alert alert-success">
                                                    Bakiye ekleme işleminiz başarılı.
                                                  </div>';
                                              }elseif($kontrol=="basarisiz"){
                                                  echo '  <div class="alert alert-danger">
                                                    Bakiye ekleme işleminiz başarısız.
                                                      </div>';
                                              }
                                            ?>
                            <div class="credit-form">
                                <div class="form-group">
                                    <label class="form-label">Kart Numara*</label>
                                    <input class="form-input" type="text" required placeholder="...">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kart Üzerindeki İsim*</label>
                                    <input class="form-input" type="text" required placeholder="...">
                                </div>
                                <div class="exp-cvv">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Kart Üzerindeki Tarih*</label>
                                                <input class="form-input datepicker-here" required type="text" data-language="en"
                                                    data-min-view="months" data-view="months" data-date-format="MM yyyy"
                                                    placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Cvv / Cvc*</label>
                                                <input class="form-input" required type="text" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Eklenicek Miktar*</label>
                                    <input class="form-input" required type="text" name="eklenicekBakiye" placeholder="TL">
                                </div>
                                <div class="add-crdt-amnt mt-4">
                                    <button class="main-btn btn-hover h_50 w-100" type="submit">Yükle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include("footer.php") ?>