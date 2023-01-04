<?php require_once("header.php");?>

<div class="right_col" role="main">

    <div class="container row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="x_title">
                <h2>Sanatçı Ekle</h2>
                <div class="clearfix"></div>
            </div>
            <form method="post" action="dbIslemleri/sanatciEkle" enctype="multipart/form-data" class="form-horizontal form-label-left">
                <?php 
                        @$kontrol=$_GET["kontrol"];
                        if($kontrol=="basarili"){?>
                <div class="alert alert-success ">
                    Ayarlar güncellendi.
                </div>

                <?php }elseif($kontrol=="basarisiz"){?>

                <div class="alert alert-danger ">
                    Ayarlar güncellenmedi.
                </div>
                <?php }
                    ?>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Profil Resmi Ekle<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="file" name="profil" required="required" value="" class="form-control ">
                    </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Ad<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="sanatciAd" required="required" value="" class="form-control ">
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Soyad<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="sanatciSoyad" required="required" value="" class="form-control ">
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Telefon No<span
                            class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="sanatciTelefonNo" required="required" value="" class="form-control ">
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Mail<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="text" name="sanatciMail" required="required" value="" class="form-control ">
                    </div>
                </div>

                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3 text-right">
                        <button type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>


<?php   require_once("footer.php");   ?>