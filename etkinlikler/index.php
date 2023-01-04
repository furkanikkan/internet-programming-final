<?php include("header.php"); ?>

<main>
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="center-section">
                        <div class="main-tabs">

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-top">
                                    <div class="main-posts">
                                        <div class="row">
                                            <!-- EVENTLER BÖLÜMÜ -->
                                            <p>Toplamda <strong><?php echo $say; ?></strong> etkinlik listelendi.</p>
                                            <?php 
                                            foreach($etkinlikler->fetchAll() as $etkinlik){ 
                                            ?>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.php">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/etkinlik/<?php echo $etkinlik["etkinlikImage"]; ?>"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="event-body">
                                                        <span
                                                            class="event-time"><?php echo $etkinlik["tarih"]; ?></span>
                                                        <a href="event_detail_view.php"
                                                            class="event-title"><?php echo $etkinlik["etkinlikBaslik"]; ?></a>
                                                        <span
                                                            class="event-type"><?php echo $etkinlik["il"]; ?>/<?php echo $etkinlik["ilce"]; ?></span>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i class=""></i><a
                                                                    href="database/biletSatis.php?etkinlikID=<?php echo $etkinlik["etkinlikID"]; ?>">Sepete
                                                                    Ekle</a></button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>

                                            <div class="col-md-12">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-local">
                                    <div class="main-posts">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-1.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Ludhiana</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-3.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Location</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-4.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-5.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-6.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-7.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Location</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-8.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Location</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="loading-btn">
                                                    <button class="process-btn btn-hover" type="button">
                                                        <i class="fa-solid fa-spinner fa-spin"></i>
                                                        Loading...
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-this-week">
                                    <div class="main-posts">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-1.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Ludhiana</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-3.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Location</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-4.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-5.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-6.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-7.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Location</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-8.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Location</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-classes">
                                    <div class="main-posts">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-5.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-6.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-8.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Location</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="loading-btn">
                                                    <button class="process-btn btn-hover" type="button">
                                                        No More
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-friends">
                                    <div class="full-width">
                                        <div class="no-events">
                                            <div class="no-event-icon">
                                                <img src="images/icon-calendar.png" alt="">
                                            </div>
                                            <span>No events found.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-online">
                                    <div class="main-posts">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-4.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="event-main-post">
                                                    <div class="main-photo">
                                                        <a href="event_detail_view.html">
                                                            <div class="photo-overlay"></div>
                                                            <img src="images/homepage/center/post-img-5.jpg" alt="">
                                                        </a>
                                                        <div class="option-ellipsis">
                                                            <div class="dropdown">
                                                                <a class="ellipsis-btn dropdown-toggle-no-caret"
                                                                    href="#" role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-eye-off icon-mr1"></i>Hide</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-bookmark icon-mr1"></i>Save</a>
                                                                    <a class="post-link-item" href="#"><i
                                                                            class="feather-user icon-mr1"></i>User
                                                                        Profile</a>
                                                                    <a class="post-link-item" href="#"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#reportModal"><i
                                                                            class="feather-flag icon-mr1"></i>Report</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="event-body">
                                                        <span class="event-time">thu,30 june 2022 at 3.00 pm</span>
                                                        <a href="event_detail_view.html" class="event-title">Event Title
                                                            Here</a>
                                                        <span class="event-type">Online</span>
                                                        <p class="ingo-counter">
                                                            <span>25 Interested</span>
                                                            <span>11 Going</span>
                                                        </p>
                                                        <div class="group-btns">
                                                            <button class="interest-btn btn-hover"><i
                                                                    class="feather-star me-2"></i>Interested</button>
                                                            <button class="share-btn btn-hover" data-bs-toggle="modal"
                                                                data-bs-target="#shareModal"><i
                                                                    class="feather-share-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="loading-btn">
                                                    <button class="process-btn btn-hover" type="button">
                                                        No More
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-following">
                                    <div class="full-width">
                                        <div class="no-events">
                                            <div class="no-event-icon">
                                                <img src="images/icon-calendar.png" alt="">
                                            </div>
                                            <span>No events found.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-12">

                    <?php

                if (isset($_SESSION["kullaniciAdi"])) {
                    ?>

                    <div class="main-left-sidebar mt-5 mt-lg-5 mt-xl-0">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                <div class="username-dt dpbg-1">
                                    <div class="usr-pic">
                                        <img src="images/profil/<?php echo $kullanici["profilResmi"]; ?>">
                                    </div>
                                </div>
                                <div class="user-main-details">
                                    <h4><?php echo $kullanici["ad"] . " " . $kullanici["soyad"]; ?></h4>
                                </div>
                                <div class="followers-dt-sm">
                                    <h4>Bakiye</h4>
                                    <span><?php echo $kullanici["bakiye"] . " TL"; ?></span>
                                </div>
                                <div class="profile-link">
                                    <a href="my_profile.php">Profilim</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-data full-width">

                        </div>

                    </div>
                    <?php } ?>

                </div>
                <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="right-side-items mt-0 mt-md-5 mt-lg-5 mt-xl-0">

                        <div class="explore-events">
                            <h4>Explore Events</h4>
                            <div class="explore-events-dt">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="explore-card light-blue">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-sun"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="feather-sun"></i>
                                                        <span>Today</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="explore-card light-yellow">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="feather-sun"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="feather-sun"></i>
                                                        <span>Tomorrow</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="explore-card dark-blue">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="feather-calendar"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="feather-calendar"></i>
                                                        <span>This Week</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#">
                                            <div class="explore-card light-green">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-calendar-check"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="feather-calendar"></i>
                                                        <span>Choose Date</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php
                           $weatherApi = file_get_contents("http://api.weatherapi.com/v1/current.json?key=ce71800cf15a4907817204818230301&q=Istanbul&aqi=no");
                           $jsonDecoded = json_decode($weatherApi); 
                                                
                        ?>
                        <div class="w-weather">
                            <div class="weather-top">
                                <div class="weather-left">
                                    <div class="weather-city"><?php echo $jsonDecoded->location->name; ?></div>
                                    <div class="week-text"><?php echo $jsonDecoded->location->tz_id; ?></div>
                                    <div class="week-text"><?php echo $jsonDecoded->location->localtime; ?></div>
                                    <div class="week-text" style="font-size: 18px;"> H.S:
                                        <?php echo $jsonDecoded->current->feelslike_c; ?>°</div>

                                </div>
                                <div class="weather-right">
                                    <img src="<?php echo $jsonDecoded->current->condition->icon; ?>" alt="">
                                    <span><?php echo $jsonDecoded->current->temp_c; ?>°</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</main>


<?php include("footer.php") ?>