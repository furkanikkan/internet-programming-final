  <?php require_once("header.php");  
  ?>

  <!-- page content -->
  <div class="right_col" role="main">

      <div class="container row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
              <div class="x_title">
                  <h2>Etkinlik Ekle</h2>
                  <div class="clearfix"></div>
              </div>
              <form method="post" action="dbIslemleri/etkinlikEkle" class="form-horizontal form-label-left">
                  <?php 
                        @$kontrol=$_GET["kontrol"];
                        if($kontrol=="basarili"){?>
                  <div class="alert alert-success ">
                    Etkinlik eklendi.
                  </div>

                  <?php }elseif($kontrol=="basarisiz"){?>

                  <div class="alert alert-danger ">
                  Etkinlik Eklenmedi.
                  </div>
                  <?php }
                    ?>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Sanatçı<span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <select name="sanatci" class="form-control">
                            <?php 
                                $sanatciListele=$baglanti->prepare("SELECT * FROM sanatcilar");
                                $sanatciListele->execute();
                                foreach ($sanatciListele->fetchAll() as $sanatci) {
                                   echo '<option value="'.$sanatci["sanatciID"].'">'.$sanatci["ad"]." ".$sanatci["soyad"].'</option>';
                                }
                             ?>
                        </select>
                      </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align">Profil Resmi Ekle<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <input type="file" name="profilResim" required="required" value="" class="form-control ">
                    </div>
                </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Bilet Ücret <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="number" name="biletUcret" required="required" class="form-control "> 
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">icerik <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="icerik" required="required"
                              value="" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">adres <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="adres" required="required"
                              value="" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">ilce <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="ilce" required="required"
                              value="" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">il <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="il" required="required"
                              value="" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">tip <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <select name="tip" class="form-control">
                                <option value="Yüz Yüze" selected>Yüz Yüze</option>
                                <option value="Online" >Online</option>
                          </select>
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">tarih <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="datetime-local" name="tarih" required="required"
                              value="" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Max Kişi Sayısı <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="number" name="maxKisiSayisi" required="required"
                              value="" class="form-control ">
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
  <!-- /page content -->

  <?php   require_once("footer.php");   ?>