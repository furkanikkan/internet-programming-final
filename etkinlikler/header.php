<?php
require("dashboard/Database/baglanti.php");
if(isset($_SESSION["kullaniciAdi"])){

  $kullaniciGetir = $baglanti->prepare("SELECT * FROM kullanicilar WHERE kullaniciAdi=?");
  $kullaniciGetir -> execute(array($_SESSION["kullaniciAdi"]));
  $kullanici = $kullaniciGetir->fetch();

  $_SESSION["kullaniciId"] = $kullanici["ID"];
  $_SESSION["kullaniciBakiye"] = $kullanici["bakiye"];

}
$etkinlikler = $baglanti->prepare("SELECT * FROM etkinlikler");
$etkinlikler->execute();
$say=$etkinlikler->rowCount();

$ayarlariGetir=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayarId=1");
$ayarlariGetir->execute();
$ayar=$ayarlariGetir->fetch();


$blog = $baglanti->prepare("SELECT * FROM blog");
$blog->execute();
$sayBlog=$blog->rowCount();
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, shrink-to-fit=9" />
    <meta name="description" content="Gambolthemes" />
    <meta name="author" content="Gambolthemes" />
    <title><?php echo $ayar["ayarSiteBasligi"];?></title>

    <link rel="icon" type="image/png" href="images/fav.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
        href="../../../css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/datepicker.min.css" rel="stylesheet" />

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="vendor/feather-icons/feather.css" rel="stylesheet" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet" />
    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet" />
    <link href="vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <div class="main-discussion-model">
        <div class="modal fade" id="FFModal" tabindex="-1" aria-labelledby="FFModalLabel">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content main-form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="FFModalLabel">
                            Following & Followers
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="modal-body px-4">
                        <div class="model-content follow-people-content">
                            <div class="">
                                <ul class="nav nav-pills ff-tablist mb-2" role="tablist">
                                    <li class="nav-item d-flex me-4">
                                        <a class="nav-link px-0 pt-0 pb-3 active" id="pills-following-tab"
                                            data-bs-toggle="pill" href="#following" role="tab" aria-controls="following"
                                            aria-selected="true">Following <span class="following_count">(3)</span></a>
                                    </li>
                                    <li class="nav-item d-flex">
                                        <a class="nav-link px-0 pt-0 pb-3" id="pills-followers-tab"
                                            data-bs-toggle="pill" href="#followers" role="tab" aria-controls="followers"
                                            aria-selected="false">Followers <span class="following_count">(2)</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4">
                                    <div class="tab-pane fade active show" id="following" role="tabpanel"
                                        aria-labelledby="pills-following-tab">
                                        <div class="users-list min-height-430">
                                            <div class="user-follow-card mb-4">
                                                <div class="follow-card-left">
                                                    <div class="follow-avatar">
                                                        <img src="images/find-peoples/user-2.jpg" alt="" />
                                                    </div>
                                                    <div class="follow-name">
                                                        <a href="user_profile.html">Jassica William</a>
                                                        <span>1 Follower</span>
                                                    </div>
                                                </div>
                                                <div class="follow-card-btn">
                                                    <button class="follow-btn">Following</button>
                                                </div>
                                            </div>
                                            <div class="user-follow-card mb-4">
                                                <div class="follow-card-left">
                                                    <div class="follow-avatar">
                                                        <img src="images/find-peoples/user-5.jpg" alt="" />
                                                    </div>
                                                    <div class="follow-name">
                                                        <a href="user_profile.html">Rock Smith</a>
                                                        <span>3 Followers</span>
                                                    </div>
                                                </div>
                                                <div class="follow-card-btn">
                                                    <button class="follow-btn">Following</button>
                                                </div>
                                            </div>
                                            <div class="user-follow-card mb-4">
                                                <div class="follow-card-left">
                                                    <div class="follow-avatar">
                                                        <img src="images/find-peoples/user-6.jpg" alt="" />
                                                    </div>
                                                    <div class="follow-name">
                                                        <a href="user_profile.html">Albert Doe</a>
                                                        <span>6 Followers</span>
                                                    </div>
                                                </div>
                                                <div class="follow-card-btn">
                                                    <button class="follow-btn">Following</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="followers" role="tabpanel"
                                        aria-labelledby="pills-followers-tab">
                                        <div id="followers-empty-state"
                                            class="d-none d-flex align-items-center justify-content-center flex-column min-height-430">
                                            <span>
                                                <svg width="60" height="47" viewbox="0 0 60 47" fill="none">
                                                    <path
                                                        d="M41.8884 39.501C41.2649 38.8161 41.1572 37.7618 41.9808 37.0461L48.8852 30.1433C50.44 28.5811 52.8108 30.9436 51.2559 32.4981L47.1225 36.6306H56.1899C56.467 35.6917 56.644 35.0145 56.644 34.0064C56.644 28.0732 50.5247 24.6256 45.152 24.6256C40.9724 24.6256 36.4387 26.5956 34.5067 30.4819C36.5234 33.0521 37.7088 36.138 37.7088 39.4702C37.7088 41.6788 37.1623 43.8566 36.1693 45.8267C35.1918 47.7967 32.1976 46.3038 33.1828 44.3337C33.9525 42.8023 34.3528 41.1863 34.3528 39.4702C34.3528 31.4515 26.1321 26.7188 18.8505 26.7188C11.5767 26.7188 3.36369 31.4515 3.36369 39.4702C3.36369 41.2017 3.74856 42.7793 4.52598 44.326C5.51892 46.2961 2.5247 47.7967 1.53945 45.8344C0.546504 43.8643 0 41.6711 0 39.4702C0 32.3749 5.23412 26.8573 11.6228 24.5948C7.8127 22.1322 5.49583 17.9151 5.49583 13.3594C5.49583 5.98709 11.4843 0 18.8505 0C26.2322 0 32.2207 5.98709 32.2207 13.3594C32.2207 17.9228 29.8961 22.1322 26.086 24.5948C28.3412 25.3874 30.3656 26.5495 32.0744 27.9808C33.6369 25.4798 36.0616 23.6098 38.7787 22.5016C36.1001 20.4854 34.5221 17.3533 34.5221 13.9904C34.5221 8.11875 39.2867 3.35524 45.152 3.35524C51.0327 3.35524 55.7896 8.11105 55.7896 13.9904C55.7896 17.3533 54.2117 20.4931 51.5253 22.5016C56.2668 24.4332 60 28.6811 60 34.0064C60 34.8683 59.8922 35.7379 59.6921 36.5921C59.492 37.4386 59.1841 38.262 58.7838 39.0623C58.4913 39.6472 57.9063 39.9858 57.2906 39.9858L47.1302 39.9935L51.2559 44.1183C52.8185 45.6805 50.4477 48.0507 48.8852 46.4885L41.8884 39.501ZM18.8505 3.36293C13.3239 3.36293 8.85183 7.83401 8.85183 13.3594C8.85183 18.9001 13.3085 23.3481 18.8505 23.3481C24.3926 23.3481 28.857 18.9001 28.857 13.3594C28.857 7.84171 24.3772 3.36293 18.8505 3.36293ZM45.152 6.71047C41.1418 6.71047 37.8781 9.97336 37.8781 13.9904C37.8781 18.0152 41.1341 21.255 45.1597 21.255C49.1931 21.255 52.4336 18.0228 52.4336 13.9904C52.4336 9.97336 49.1777 6.71047 45.152 6.71047Z"
                                                        fill="#6ac045"></path>
                                                </svg>
                                            </span>
                                            <p class="font-16 mt-4 text-light3">No followers yet</p>
                                        </div>
                                        <div class="users-list min-height-430">
                                            <div class="user-follow-card mb-4">
                                                <div class="follow-card-left">
                                                    <div class="follow-avatar">
                                                        <img src="images/find-peoples/user-2.jpg" alt="" />
                                                    </div>
                                                    <div class="follow-name">
                                                        <a href="user_profile.html">Jassica William</a>
                                                        <span>1 Follower</span>
                                                    </div>
                                                </div>
                                                <div class="follow-card-btn">
                                                    <button class="follow-btn">Following</button>
                                                </div>
                                            </div>
                                            <div class="user-follow-card mb-4">
                                                <div class="follow-card-left">
                                                    <div class="follow-avatar">
                                                        <img src="images/find-peoples/user-7.jpg" alt="" />
                                                    </div>
                                                    <div class="follow-name">
                                                        <a href="user_profile.html">Johnson</a>
                                                        <span>5 Followers</span>
                                                    </div>
                                                </div>
                                                <div class="follow-card-btn">
                                                    <button class="follow-btn">Follow</button>
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

    <div class="main-discussion-model">
        <div class="modal fade" id="add-discussion-model" role="dialog" aria-labelledby="addiscussionLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content main-form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addiscussionLabel">Add New Topic</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-input" type="text"
                                            placeholder="What is this discussion about in one brief sentence?" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="select-bg">
                                            <select class="selectpicker" title="Select Category" data-width="100%"
                                                data-size="5">
                                                <option>Music</option>
                                                <option>Festival</option>
                                                <option>Art</option>
                                                <option>Club</option>
                                                <option>Comedey</option>
                                                <option>Sports</option>
                                                <option>Theatre</option>
                                                <option>Promotions</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="select-bg">
                                            <select class="selectpicker" title="Select Sub Category" data-width="100%"
                                                data-size="5">
                                                <option value="Music">Music</option>
                                                <option value="Singer">Singer</option>
                                                <option value="Cricketer">Cricketer</option>
                                                <option value="Show">Show</option>
                                                <option value="Social">Social</option>
                                                <option value="NGO">NGO</option>
                                                <option value="Art">Art</option>
                                                <option value="Writer">Writer</option>
                                                <option value="Tv">Tv</option>
                                                <option value="Tech">Tech</option>
                                                <option value="Fashion">Fashion</option>
                                                <option value="Beauty">Beauty</option>
                                                <option value="Health and Fitness">
                                                    Health and Fitness
                                                </option>
                                                <option value="Festival">Festival</option>
                                                <option value="Film Promotion">Film Promotion</option>
                                                <option value="Comedy">Comedy</option>
                                                <option value="Club">Club</option>
                                                <option value="Ilets">Ilets</option>
                                                <option value="Minister">Minister</option>
                                                <option value="Gym">Gym</option>
                                                <option value="Fitness Model">Fitness Model</option>
                                                <option value="Signing">Signing</option>
                                                <option value="Hockey">Hockey</option>
                                                <option value="Cricket">Cricket</option>
                                                <option value="Kushti">Kushti</option>
                                                <option value="Kabbadi">Kabbadi</option>
                                                <option value="Wrestling">Wrestling</option>
                                                <option value="Volyball">Volyball</option>
                                                <option value="Baseball">Baseball</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Cafe">Cafe</option>
                                                <option value="Cloths">Cloths</option>
                                                <option value="Author">Author</option>
                                                <option value="Company">Company</option>
                                                <option value="Ecommerce">Ecommerce</option>
                                                <option value="Actor">Actor</option>
                                                <option value="Actress">Actress</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="screnshot" id="OpenImgUpload">
                                            <input type="file" id="file" />
                                            <label for="file"><i class="feather-image"></i> Add Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-textarea"
                                            placeholder="You must select a category before typing here..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="co-main-btn cancel-btn" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="main-btn btn-hover">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-discussion-model">
        <div class="modal fade" id="edit-profile-model" role="dialog" aria-labelledby="editprofileLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content main-form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editprofileLabel">Edit Profile</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">First Name*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="John" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Last Name*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="Doe" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Bio*</label>
                                        <textarea class="form-textarea" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Email*</label>
                                        <input class="form-input h_40" type="text" placeholder=""
                                            value="Johndoe@example.com" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Phone*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Website*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Facebook*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Instagram*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Twitter*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">LinkedIn*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Youtube*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <h4 class="address-title">Address</h4>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Address 1*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Address 2*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group main-form mt-4">
                                        <label class="form-label">Country*</label>
                                        <div class="dropdown bootstrap-select">
                                            <select class="selectpicker" data-size="5" title="Nothing selected"
                                                data-live-search="true">
                                                <option value="Algeria">Algeria</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria (Österreich)</option>
                                                <option value="Belgium">Belgium (België)</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Chile">Chile</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Dominican Republic">
                                                    Dominican Republic
                                                </option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Korea">South Korea</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Vietnam">Vietnam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">State*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">City/Suburb*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mt-4">
                                        <label class="form-label">Zip/Post Code*</label>
                                        <input class="form-input h_40" type="text" placeholder="" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="co-main-btn cancel-btn" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="main-btn btn-hover">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg custom-navbar bg-dark1">
            <div class="container">
                <button class="navbar-toggler align-self-start" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="custom-toggler-icon">
                        <i class="feather-menu"></i>
                    </span>
                </button>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="offcanvas-logo" id="offcanvasNavbarLabel">
                            <img src="images/logo.svg" alt="" />
                        </div>
                        <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <a href="#" class="add-event-btn btn-hover d-block d-lg-none">Add New Event</a>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">
                                    <span class="nav-icon d-lg-none me-3">
                                        <i class="feather-home"></i>
                                    </span>
                                    Anasayfa
                                </a>
                            </li>
                            <li class="nav-item">
                                <?php if(isset($_SESSION["kullaniciAdi"])){?>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="credit.php">
                                    <span class="nav-icon d-lg-none me-3">
                                        <i class="feather-home"></i>
                                    </span>
                                    Bakiye Yükle
                                </a>
                            </li>

                            <?php } ?>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="our_blog.php">
                                    <span class="nav-icon d-lg-none me-3">
                                        <i class="feather-home"></i>
                                    </span>
                                    Blog
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="about.php">
                                    <span class="nav-icon d-lg-none me-3">
                                        <i class="feather-home"></i>
                                    </span>
                                    Hakkımızda
                                </a>
                            </li>
                            <li class="nav-item">

                            <li class="nav-item">

                            <li class="nav-item"></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link custom-d-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="nav-icon d-lg-none me-3">
                                        <i class="feather-list"></i>
                                    </span>
                                    Hesap işlemleri<i class="fas fa-caret-down ms-2 d-none d-lg-inline-block"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="link-item" href="login.php">Giriş</a>
                                    <a class="link-item" href="register.php">Kayıt Ol</a>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="group-icons">
                    <li class="dropdown d-lg-inline-block d-none d-xl-none nav-icon iq-show">
                        <a href="#" class="icon-set" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="feather-search"></i>
                        </a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-end p-2 search-box">
                            <div class="position-relative">
                                <input class="form-control dsearch-box" placeholder="Search events by categories..." />
                                <i class="feather-search search-icon"></i>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"></li>
                </ul>

                <?php
          if (!empty($_SESSION["kullaniciAdi"])) { ?>


                <div class="account dropdown">
                    <a href="#" class="account-link dropdown-toggle-no-caret" id="dropdownMenuClickableInside"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <div class="user-dp"><img src="images/profil/<?php echo $kullanici["profilResmi"]; ?>"></div>
                        <i class="feather-chevron-down ms-2"></i>
                    </a>
                    <div class="dropdown-menu dropdown-account dropdown-menu-end"
                        aria-labelledby="dropdownMenuClickableInside">
                        <a class="link-item" href="my_profile.php"><i class="feather-user me-3"></i>Profilim</a>

                        <a class="link-item" href="credit.php"><i class="feather-credit-card me-3"></i>Bakiye Yükle
                            <span class="right-cm"><?php echo $kullanici["bakiye"] . " TL"; ?></span></a>

                        <a class="link-item" href="logout"><i class="feather-log-out me-3"></i>Çıkış yap</a>
                    </div>
                </div>
                <?php } ?>

            </div>
        </nav>
    </header>