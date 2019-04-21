<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Scada" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/style.css">

    <!-- favicon -->
    <link rel="icon" href="<?=base_url() ;?>assets/img/favicon.png" type="image/gif">
    <title><?php echo $title ?></title>
  </head>
  <body>
      <div class="container-fluid padding-bgheader">
          <div class="container-fluid prelatif">
              <div class="row">
                  <div class="col-md-3 col-sm-3">
                      <div class="height-45">
                      </div>
                      <div class="box-header-search margin-left-20">
                          <form class="search-homepage" action="#" method="get">
                              <input class="form-control form-controll" type="text" name="" placeholder="Search Products">
                              <button class="btn btn-default btn-search" type="submit" name="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </form>
                      </div>
                  </div>

                  <div class="col-md-9 col-sm-9">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-md8">
                                  <div class="logo-top">
                                      <a href="<?php base_url(); ?>">
                                          <img src="<?php echo base_url()  ?>assets/img/logo-juragan-cash.png" alt="">
                                      </a>
                                  </div>
                              </div>
                              <div class="col-4">
                                  <div class="headcomments">
                                      <!-- <i class="fa fa-comments" id="chat1">Chat With Us</i> -->
                                  </div>
                                  <div class="back-header-right-signup">
                                    <div class="height-10">

                                    </div>
                                    <?php //echo $this->session->userdata("email"); ?>
                                      <a class="bt-link-signupheadright" href="<?php base_url();?>member">
                                          <i class="fa fa-key">
                                          </i>
                                           Sign In/Sign Up
                                      </a>
                                      <div class="prelatife dis_inline block-topMenutopCart">
                                          <a class="btn-cart fright" tabindex="0">
                                              <i class="fa fa-shopping-cart"></i> Cart
                                          </a>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="container-menu-top container-fluid prelatife">
          <div class="outer-top-menu">
            <div class="l-list-menu">
                  <ul class="list-inline">
                      <li><a href="<?php base_url();?>index"><i class="fa fa-home"></i></a></li>
                      <li><a href="#">GAME</a></li>
                      <li><a href="#">VOUCHER</a></li>
                      <li><a href="#">GAMING GEAR</a></li>
                      <li><a href="#">POINT REWARD</a></li>
                      <li><a href="#">CARA BELANJA</a></li>
                      <li><a href="<?php base_url() ?>registrasi">CARA REGISTRASI</a></li>
                      <li><a href="#">CARA TOP UP SALDO</a></li>
                      <li><a href="#">FAQ</a></li>
                  </ul>
            </div>
          </div>
      </div>


<!-- pindahin ke pages home -->
<!-- pindahin ke pages home -->
<!-- pindahin ke pages home -->
      <!-- <div class="container-fluid slirder-home">
        <div class="test-div">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100 img-corousal-home" src="<?php base_url(); ?> assets/img/slirder-coursal/thumb_5a3cf-Gopay_adaptiveResize_1583_388.jpg"alt="First slide">
                  </div>
                  <div class="carousel-item img-corousal-home">
                      <img class="d-block w-100" src="<?php base_url(); ?> assets/img/slirder-coursal/thumb_6aa92-RO Ultraman Series_adaptiveResize_1583_388.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item img-corousal-home">
                      <img class="d-block w-100" src="<?php base_url(); ?> assets/img/slirder-coursal/thumb_98dd9-PUBG Razer Pin_adaptiveResize_1583_388.jpg" alt="Third slide">
                  </div>
                  <div class="carousel-item img-corousal-home">
                      <img class="d-block w-100" src="<?php base_url(); ?> assets/img/slirder-coursal/thumb_b4e94-Waspada Penipuan_adaptiveResize_1583_388.jpg" alt="Third slides">
                  </div>
                  <div class="carousel-item img-corousal-home">
                      <img class="d-block w-100" src="<?php base_url(); ?> assets/img/slirder-coursal/thumb_bda76-Google IDR_adaptiveResize_1583_388.jpg" alt="Third slides">
                  </div>
                  <div class="carousel-item img-corousal-home">
                      <img class="d-block w-100" src="<?php base_url(); ?> assets/img/slirder-coursal/thumb_d6ad6-Razer PIN_adaptiveResize_1583_388.jpg" alt="Third slides">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
              </div>
        </div>
      </div> -->

      <!-- <div class="container-fluid prelatif">
          <div id="gesges" class="menu-2-pbn">
              <div class="row">
                  <div class="col-sm-4 activer">
                      <a href="#"><p class="gesges-tengah">PROMO</p></a>
                  </div>
                  <div class="col-sm-4">
                      <a href="#"><p class="gesges-tengah">BEST SELLER</p></a>
                  </div>
                  <div class="col-sm-4">
                      <a href="#"><p class="gesges-tengah">NEW ITEM</p></a>
                  </div>
              </div>
          </div>
      </div> -->

      <!-- <div class="container-fluid prelatif bg-cokolate">
          <div class="row">
              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol">
                  <div class="item new-back">
                      <div class="left-col-pict float-left">
                        <a href="#">
                            <div class="picture"> -->
                                <!-- ukuran gambar 110x117 px -->
                                <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_a54fa-psn-plus-png_adaptiveResize_110_117.png" alt="">
                            </div>
                        </a>
                      </div>
                      <div class="left-col-desc float-left">
                          <a href="#">
                            <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                          </a>
                          <p class="label">
                            <i class="fa fa-tag">
                            </i>
                            VOUCHER
                          </p>
                      </div>
                      <div class="price">
                          <a class="buy" href="#"></a>
                      </div>
                  </div>
              </div>
              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol">
                  <div class="item new-back " >
                    <div class="left-col-pict float-left">
                      <a href="#">
                          <div class="picture"> -->
                              <!-- ukuran gambar 110x117 px -->
                              <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_04200-player-logo-jpg_adaptiveResize_110_117.jpg" alt="">
                          </div>
                      </a>
                    </div>
                    <div class="left-col-desc float-left">
                        <a href="#">
                          <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                        </a>
                        <p class="label">
                          <i class="fa fa-tag">
                          </i>
                          ACTION
                        </p>
                    </div>
                    <div class="price">
                        <a class="buy" href="#"></a>
                    </div>
                  </div>
              </div>
              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol ">
                  <div class="item new-back">
                    <div class="left-col-pict float-left">
                      <a href="#">
                          <div class="picture"> -->
                              <!-- ukuran gambar 110x117 px -->
                              <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_c92bd-psn-jpg_adaptiveResize_110_117.jpg" alt="">
                          </div>
                      </a>
                    </div>
                    <div class="left-col-desc float-left">
                        <a href="#">
                          <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                        </a>
                        <p class="label">
                          <i class="fa fa-tag">
                          </i>
                          VOUCHER
                        </p>
                    </div>
                    <div class="price">
                        <a class="buy" href="#"></a>
                    </div>
                  </div>
              </div>
              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol">
                  <div class="item new-back">
                    <div class="left-col-pict float-left">
                      <a href="#">
                          <div class="picture"> -->
                              <!-- ukuran gambar 110x117 px -->
                              <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_e2758-lineage-2-rev-logo-jpg_adaptiveResize_110_117.jpg" alt="">
                          </div>
                      </a>
                    </div>
                    <div class="left-col-desc float-left">
                        <a href="#">
                          <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                        </a>
                        <p class="label">
                          <i class="fa fa-tag">
                          </i>
                          MMORPG
                        </p>
                    </div>
                    <div class="price">
                        <a class="buy" href="#"></a>
                    </div>
                  </div>
              </div>

              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol">
                  <div class="item new-back">
                      <div class="left-col-pict float-left">
                        <a href="#">
                            <div class="picture"> -->
                                <!-- ukuran gambar 110x117 px -->
                                <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_a54fa-psn-plus-png_adaptiveResize_110_117.png" alt="">
                            </div>
                        </a>
                      </div>
                      <div class="left-col-desc float-left">
                          <a href="#">
                            <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                          </a>
                          <p class="label">
                            <i class="fa fa-tag">
                            </i>
                            VOUCHER
                          </p>
                      </div>
                      <div class="price">
                          <a class="buy" href="#"></a>
                      </div>
                  </div>
              </div>
              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol">
                  <div class="item new-back " >
                    <div class="left-col-pict float-left">
                      <a href="#">
                          <div class="picture"> -->
                              <!-- ukuran gambar 110x117 px -->
                              <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_04200-player-logo-jpg_adaptiveResize_110_117.jpg" alt="">
                          </div>
                      </a>
                    </div>
                    <div class="left-col-desc float-left">
                        <a href="#">
                          <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                        </a>
                        <p class="label">
                          <i class="fa fa-tag">
                          </i>
                          ACTION
                        </p>
                    </div>
                    <div class="price">
                        <a class="buy" href="#"></a>
                    </div>
                  </div>
              </div>
              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol ">
                  <div class="item new-back">
                    <div class="left-col-pict float-left">
                      <a href="#">
                          <div class="picture"> -->
                              <!-- ukuran gambar 110x117 px -->
                              <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_c92bd-psn-jpg_adaptiveResize_110_117.jpg" alt="">
                          </div>
                      </a>
                    </div>
                    <div class="left-col-desc float-left">
                        <a href="#">
                          <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                        </a>
                        <p class="label">
                          <i class="fa fa-tag">
                          </i>
                          VOUCHER
                        </p>
                    </div>
                    <div class="price">
                        <a class="buy" href="#"></a>
                    </div>
                  </div>
              </div>
              <div id="nb-pad" class="col-md-4 col-sm-6 col-lg-3 sienol">
                  <div class="item new-back">
                    <div class="left-col-pict float-left">
                      <a href="#">
                          <div class="picture"> -->
                              <!-- ukuran gambar 110x117 px -->
                              <!-- <img src="<?php base_url() ; ?>assets/img/picture-conten/thumb_e2758-lineage-2-rev-logo-jpg_adaptiveResize_110_117.jpg" alt="">
                          </div>
                      </a>
                    </div>
                    <div class="left-col-desc float-left">
                        <a href="#">
                          <h3>PlayStation Plus Membership (PS Plus) (SEA)</h3>
                        </a>
                        <p class="label">
                          <i class="fa fa-tag">
                          </i>
                          MMORPG
                        </p>
                    </div>
                    <div class="price">
                        <a class="buy" href="#"></a>
                    </div>
                  </div>
              </div>
          </div>
      </div> -->



      <!-- <div class="container-fluid s-footers-home prelatif">
          <div class="row no-gutters justify-content-center">
              <div class="bg-news-custom">
                <div class="bg-news-updatebanner prelatif">
                    <p class="text-center title-abs-newbannertop">NEWS UPDATE</p>
                    <div class="box-banner-twitter">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                <a href="#" class="text-center">
                                    <img src="<?php base_url() ; ?>assets/img/news-update/thumb_f1a3c-Ford_FF_adaptiveResize_100_100.png" class="text-center" alt="">
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                              <div class="item">
                                  <div class="title-newsupdate">
                                      <a href="#">
                                        Karakter Garena Free Fire: Ford
                                      </a>
                                  </div>
                                      <span class="red-date">08 April 2019</span>
                                  <div class="clear"></div>
                              </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                <a href="#" class="text-center">
                                    <img src="<?php base_url() ; ?>assets/img/news-update/thumb_8e23d-Olivia_FF_adaptiveResize_100_100.png" class="text-center" alt="">
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                              <div class="item">
                                  <div class="title-newsupdate">
                                      <a href="#">
                                        Karakter Garena Free Fire: Olivia
                                      </a>
                                  </div>
                                      <span class="red-date">08 April 2019</span>
                                  <div class="clear"></div>
                              </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                <a href="#" class="text-center">
                                    <img src="<?php base_url() ; ?>assets/img/news-update/thumb_d4ec0-Andrew_FF_adaptiveResize_100_100.png" class="text-center" alt="">
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                              <div class="item">
                                  <div class="title-newsupdate">
                                      <a href="#">
                                        Karakter Garena Free Fire: Andrew
                                      </a>
                                  </div>
                                      <span class="red-date">08 April 2019</span>
                                  <div class="clear"></div>
                              </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                <a href="#" class="text-center">
                                    <img src="<?php base_url() ; ?>assets/img/news-update/thumb_d0c40-Kelly_FF_adaptiveResize_100_100.png" class="text-center" alt="">
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                              <div class="item">
                                  <div class="title-newsupdate">
                                      <a href="#">
                                        Karakter Garena Free Fire: Kelly
                                      </a>
                                  </div>
                                      <span class="red-date">08 April 2019</span>
                                  <div class="clear"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div> -->
              <!-- <div class="w-100"></div> -->
              <!-- <div class="bg-news-custom">
                <div class="bg-news-sosmedbanner prelatif">
                    <p class="text-center title-abs-newbannertop">SOCIAL MEDIA</p>
                    <div class="">

                    </div>
                </div>
              </div>
          </div>
      </div> -->

      <!-- untuk testimoni  -->
      <!-- <div class="block-outer-testimonial-bottom"> -->
        <!-- <div class="container-fluid"> -->
                <!-- <div id="carouseltestimoni" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row no-gutters justify-content-center">
                            <div class="col-md-2.5 ">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                      						<div class="title-testimoni">bener - bener Juragan lah..</div>
                      						<div class="clear height-5"></div> <div class="height-3"></div>
                      						<p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                      						<span class="users-com">Ed Serano</span>
                      					</div>
                              </div>
                            </div>
                            <div class="col-md-2.5 sienoll">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                                  <div class="title-testimoni">bener - bener Juragan lah..</div>
                                  <div class="clear height-5"></div> <div class="height-3"></div>
                                  <p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                                  <span class="users-com">Ed Serano</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2.5">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                                  <div class="title-testimoni">bener - bener Juragan lah..</div>
                                  <div class="clear height-5"></div> <div class="height-3"></div>
                                  <p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                                  <span class="users-com">Ed Serano</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2.5">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                                  <div class="title-testimoni">bener - bener Juragan lah..</div>
                                  <div class="clear height-5"></div> <div class="height-3"></div>
                                  <p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                                  <span class="users-com">Ed Serano</span>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div class="carousel-item">
                        <div class="row no-gutters justify-content-center">
                            <div class="col-md-2.5">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                                  <div class="title-testimoni">bener - bener Juragan lah..</div>
                                  <div class="clear height-5"></div> <div class="height-3"></div>
                                  <p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                                  <span class="users-com">Ed Serano</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2.5">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                                  <div class="title-testimoni">bener - bener Juragan lah..</div>
                                  <div class="clear height-5"></div> <div class="height-3"></div>
                                  <p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                                  <span class="users-com">Ed Serano</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2.5">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                                  <div class="title-testimoni">bener - bener Juragan lah..</div>
                                  <div class="clear height-5"></div> <div class="height-3"></div>
                                  <p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                                  <span class="users-com">Ed Serano</span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-2.5">
                              <div class="bg-testimoni">
                                <div class="inner-testimoni">
                                  <div class="title-testimoni">bener - bener Juragan lah..</div>
                                  <div class="clear height-5"></div> <div class="height-3"></div>
                                  <p>Juragan Cash..bener - bener Juragan lah, terdepan soal online currency..</p>
                                  <span class="users-com">Ed Serano</span>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div> -->
                      <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="fourd slide">
                      </div> -->
                    <!-- </div>
                    <a class="carousel-control-prev sienoll" href="#carouseltestimoni" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon bot-prevtesti" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next sienoll" href="#carouseltestimoni" role="button" data-slide="next">
                      <span class="carousel-control-next-icon bot-nexttesti" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                </div>
        </div>
      </div> -->
