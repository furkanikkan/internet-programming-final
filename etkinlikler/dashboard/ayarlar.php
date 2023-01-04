  <?php require_once("header.php");  
  ?>

  <!-- page content -->
  <div class="right_col" role="main">

      <div class="container row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
              <div class="x_title">
                  <h2>Ayarlar</h2>
                  <div class="clearfix"></div>
              </div>
              <form method="post" action="dbIslemleri/ayarGuncelle" class="form-horizontal form-label-left">
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
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Site Başlığı <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="baslik" required="required"
                              value="<?php echo $ayar["ayarSiteBasligi"]; ?>" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Site Açıklama: <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <textarea type="text" name="aciklama" required="required"
                              class="form-control "><?php echo $ayar["ayarSiteAciklama"]; ?></textarea>
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Facebook: <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="facebok" required="required"
                              value="<?php echo $ayar["ayarFacebookUsername"]; ?>" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Instagram: <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="instagram" required="required"
                              value="<?php echo $ayar["ayarInstagramUsername"]; ?>" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Linkedin: <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="linkedin" required="required"
                              value="<?php echo $ayar["ayarLinkedinUsername"]; ?>" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Twitter: <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="twitter" required="required"
                              value="<?php echo $ayar["ayarTwitterUsername"]; ?>" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Youtube: <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="youtube" required="required"
                              value="<?php echo $ayar["ayarYoutubeUsername"]; ?>" class="form-control ">
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Tasarlayan: <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="tasarlayan" required="required"
                              value="<?php echo $ayar["ayarTasarlayan"]; ?>" class="form-control ">
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