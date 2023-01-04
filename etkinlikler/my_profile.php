<?php require("header.php");

if (empty($_SESSION["kullaniciAdi"])) {
    header("Location:login.php");
}
?>


<main class="dashboard-mp">
    <div class="profile-banner">
        <div class="hero-cover-block">
            <div class="hero-cover">
                <div class="hero-cover-img hero-img-1"></div>
            </div>
            <div class="upload-profile-cover">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-dt-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="main-card user-left-dt">
                            <div class="user-avatar-img">
                                <img src="images/profil/<?php echo $kullanici["profilResmi"]; ?>">
                                <div class="avatar-img-btn">
                                    <input type="file" id="avatar-img" />
                                    <label for="avatar-img"><i class="feather-camera"></i></label>
                                </div>
                            </div>

                            <div class="user-description">
                                <p>
                                    <?php echo $kullanici["ad"] . " " . $kullanici["soyad"]; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="dash-tabs-block mt-4">
                            <ul class="nav nav-pills nav-fill p-2 dash-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                                        role="tab" aria-controls="dashboard" aria-selected="true"><i
                                            class="feather-grid"></i>Biletlerim</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                        aria-controls="about" aria-selected="false"><i
                                            class="feather-info"></i>Hakkımda</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="main-card mt-4 mb-0">
                                    <!-- bilet başlangıç -->
                                    <div class="about-details">

                                    <?php
                                    $biletListele = $baglanti->prepare("SELECT *FROM biletler 
                                    INNER JOIN kullanicilar ON biletler.kullaniciID=kullanicilar.ID
                                    INNER JOIN etkinlikler ON biletler.etkinlikID=etkinlikler.etkinlikID
                                    WHERE kullanicilar.ID=?
                                    ");
                                    $biletListele->execute(array($_SESSION["kullaniciId"]));
                                    foreach ($biletListele->fetchAll() as $listeleYaz) { ?>
                                          
                                        <div class="about-step">
                                            <span>
                                                Etkinlik Başlık: <?php echo $listeleYaz["etkinlikBaslik"]." --- "."Bilet Fiyat: ".$listeleYaz["biletUcret"]." --- "."Etkinlik Tarih: ".$listeleYaz["tarih"]; ?>
                                            </span>
                                        </div>
                                        
                                        <?php } ?>
                                         
                                    </div>
                                    <!-- bilet son -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="main-card mt-4 mb-0">
                                    <div
                                        class="events-dash-heading d-flex align-items-center w-100 py-2 pe-2 ps-4 border_bottom">
                                        <h4>Hakkımda</h4>
                                    </div>
                                    <div class="about-details">
                                        <div class="about-step">
                                            <h5>İsim</h5>
                                            <span>
                                                <?php echo $kullanici["ad"] . " " . $kullanici["soyad"]; ?>
                                            </span>
                                        </div>
                                        <div class="about-step">
                                            <h5>
                                                <?php echo $kullanici["hakkinda"]; ?>
                                            </h5>
                                        </div>
                                        <div class="about-step">
                                            <h5>Sosyal Medya Hesaplarım</h5>
                                            <div class="social-links">
                                                <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="Facebook"
                                                    aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
                                                <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="Instagram"
                                                    aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                                <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="Twitter"
                                                    aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                                <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="LinkedIn"
                                                    aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="Youtube"
                                                    aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                                                <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="" data-bs-original-title="Website"
                                                    aria-label="Website"><i class="fa-solid fa-globe"></i></a>
                                            </div>
                                        </div>
                                        <div class="about-step">
                                            <h5>Adres Bilgisi</h5>
                                            <p class="mb-0">
                                                <?php echo $kullanici["adres"]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fde" id="discussion" role="tabpanel" aria-labelledby="discussion-tab">
                                <div class="main-card mt-4 mb-0">
                                    <div
                                        class="events-dash-heading d-flex align-items-center w-100 py-2 pe-2 ps-4 border_bottom">
                                        <h4>All Discussions</h4>
                                        <a class="main-btn btn-hover h_40 ms-auto" data-bs-toggle="modal"
                                            href="#add-discussion-model" role="button">Add Topic</a>
                                    </div>
                                    <div class="my-all-discussions">
                                        <div class="dis-item">
                                            <div class="row no-gutters">
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="dis-img-text">
                                                        <img src="images/discussion/img-1.jpg" alt="" />
                                                        <a href="single_discussion_view.html">
                                                            <h4>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit.
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <ul class="dis-reviews">
                                                        <li>
                                                            <a href="#">5 h</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">3k views</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">5 replies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dis-item">
                                            <div class="row no-gutters">
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="dis-img-text">
                                                        <img src="images/discussion/img-1.jpg" alt="" />
                                                        <a href="single_discussion_view.html">
                                                            <h4>
                                                                ellentesque vitae metus at neque cursus
                                                                finibus.
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <ul class="dis-reviews">
                                                        <li>
                                                            <a href="#">6 h</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">6k views</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">10 replies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dis-item">
                                            <div class="row no-gutters">
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="dis-img-text">
                                                        <img src="images/discussion/img-1.jpg" alt="" />
                                                        <a href="single_discussion_view.html">
                                                            <h4>
                                                                Cras vel lorem gravida, ullamcorper mi sed.
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <ul class="dis-reviews">
                                                        <li>
                                                            <a href="#">6 h</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">7k views</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">15 replies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dis-item">
                                            <div class="row no-gutters">
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="dis-img-text">
                                                        <img src="images/discussion/img-1.jpg" alt="" />
                                                        <a href="single_discussion_view.html">
                                                            <h4>
                                                                Obortis risus. Nunc egestas arcu sit amet
                                                                blandit finibus.
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <ul class="dis-reviews">
                                                        <li>
                                                            <a href="#">7 h</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">10k views</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">50 replies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dis-item">
                                            <div class="row no-gutters">
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="dis-img-text">
                                                        <img src="images/discussion/img-1.jpg" alt="" />
                                                        <a href="single_discussion_view.html">
                                                            <h4>
                                                                Quisque in purus ut velit facilisis
                                                                consequat ac id eros.
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <ul class="dis-reviews">
                                                        <li>
                                                            <a href="#">7 h</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">7.5k views</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">48 replies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dis-item">
                                            <div class="row no-gutters">
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="dis-img-text">
                                                        <img src="images/discussion/img-1.jpg" alt="" />
                                                        <a href="single_discussion_view.html">
                                                            <h4>
                                                                Pellentesque semper urna est, non egestas
                                                                massa vestibulum a.
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <ul class="dis-reviews">
                                                        <li>
                                                            <a href="#">8 h</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">8k views</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">60 replies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dis-item">
                                            <div class="row no-gutters">
                                                <div class="col-xl-8 col-lg-12 col-md-12">
                                                    <div class="dis-img-text">
                                                        <img src="images/discussion/img-1.jpg" alt="" />
                                                        <a href="single_discussion_view.html">
                                                            <h4>
                                                                Nunc maximus mauris non tincidunt tincidunt.
                                                            </h4>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-12 col-md-12">
                                                    <ul class="dis-reviews">
                                                        <li>
                                                            <a href="#">9 h</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">8.2k views</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">52 replies</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                                <div class="main-card mt-4 mb-0">
                                    <div class="events-dash-heading d-flex align-items-center w-100 py-2 pe-2 ps-4">
                                        <h4>Events</h4>
                                        <a href="add_new_event.html" class="main-btn btn-hover h_40 ms-auto">Create</a>
                                    </div>
                                    <div class="events-dash-options main-form">
                                        <div class="row g-2">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="event-search-dash">
                                                    <div class="position-relative">
                                                        <input class="form-input" type="text"
                                                            placeholder="Search event" />
                                                        <span class="icon-158"><i class="feather-search"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-12">
                                                <select class="selectpicker" data-width="100%">
                                                    <option value="publish-event">
                                                        Published Events
                                                    </option>
                                                    <option value="draft-event">
                                                        Draft and Scheduled Events
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-12">
                                                <select class="selectpicker" data-width="100%">
                                                    <option value="event-date">Event Date</option>
                                                    <option value="publish-date">Publish Date</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-dash-events">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-12 col-md-6 col-12">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="#">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-1.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="event-body">
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <div class="dash-counter-block">
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-lock me-2"></i>Budget
                                                                    Spent</span>
                                                                <span class="ms-auto">$100</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-users me-2"></i>Reach</span>
                                                                <span class="ms-auto">148</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-star me-2"></i>Responses</span>
                                                                <span class="ms-auto">122</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-tag me-2"></i>Ticket
                                                                    Clicks</span>
                                                                <span class="ms-auto">55</span>
                                                            </p>
                                                        </div>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover w-100">
                                                                <i class="feather-edit me-2"></i>Edit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-12 col-md-6 col-12">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="#">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-2.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="event-body">
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <div class="dash-counter-block">
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-lock me-2"></i>Budget
                                                                    Spent</span>
                                                                <span class="ms-auto">$100</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-users me-2"></i>Reach</span>
                                                                <span class="ms-auto">148</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-star me-2"></i>Responses</span>
                                                                <span class="ms-auto">122</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-tag me-2"></i>Ticket
                                                                    Clicks</span>
                                                                <span class="ms-auto">55</span>
                                                            </p>
                                                        </div>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover w-100">
                                                                <i class="feather-edit me-2"></i>Edit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-12 col-md-6 col-12">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="#">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-3.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="event-body">
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <div class="dash-counter-block">
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-lock me-2"></i>Budget
                                                                    Spent</span>
                                                                <span class="ms-auto">$100</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-users me-2"></i>Reach</span>
                                                                <span class="ms-auto">148</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-star me-2"></i>Responses</span>
                                                                <span class="ms-auto">122</span>
                                                            </p>
                                                            <p class="dash-event-counter">
                                                                <span class="h-color"><i
                                                                        class="feather-tag me-2"></i>Ticket
                                                                    Clicks</span>
                                                                <span class="ms-auto">55</span>
                                                            </p>
                                                        </div>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover w-100">
                                                                <i class="feather-edit me-2"></i>Edit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="loading-btn mb-0">
                                                    <button class="process-btn btn-hover" type="button">
                                                        No More Events
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include("footer.php") ?>