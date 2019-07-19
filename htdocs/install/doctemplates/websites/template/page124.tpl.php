<?php // BEGIN PHP
$websitekey=basename(__DIR__); if (empty($websitepagefile)) $websitepagefile=__FILE__;
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once './master.inc.php'; } // Not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
// END PHP ?>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<meta name="title" content="Home" />
<meta name="description" content="Welcome" />
<meta name="generator" content="ICTCRM" />
<meta name="dolibarr:pageid" content="124" />
<link href="/" rel="canonical" />
<!-- Include link to CSS file -->
<link rel="stylesheet" href="styles.css.php?website=<?php echo $websitekey; ?>" type="text/css" />
<!-- Include HTML header from common file -->
<?php print preg_replace('/<\/?html>/ims', '', file_get_contents(DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html")); ?>
<!-- Include HTML header from page header block -->

</head>
<!-- File generated by Dolibarr website module editor -->
<body id="bodywebsite" class="bodywebsite">
<div class="page">
        
      <?php includeContainer('header'); ?>
        
        
      <!-- top images -->
      <section id="sectionimage" contenteditable="true">
        <div class="swiper-container swiper-slider swiper-variant-1 bg-black swiper-container-horizontal" data-loop="false" data-autoplay="5500" data-swipe="true" data-simulate-touch="true">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" data-slide-bg="medias/image/copy_of_template2/background_rough-horn.jpg" style="background-image: url('medias/image/copy_of_template2/background_rough-horn.jpg'); background-size: cover; width: 1905px;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s"><span class="text-thin">Boost your business</span>
                      </div>
                      <div data-caption-animate="fadeInUp" data-caption-delay="450s" class="fadeInUp animated">
                        <p class="text-big-19 text-white d-none d-md-inline-block">We provide powerful solutions for all businesses</p>
                      </div>
                      <div class="button-block fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="550s"><a class="btn btn-primary maincolorbisbackground" href="contact.php">Contact us</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-next" data-slide-bg="medias/image/copy_of_template2/background_sunset.jpg" style="background-image: url('medias/image/copy_of_template2/background_sunset.jpg'); background-size: cover; width: 1905px;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10 col-xl-12">
                      <div class="text-white text-uppercase jumbotron-custom border-modern not-animated" data-caption-animate="fadeInUp" data-caption-delay="0s">&nbsp;Best prices on the market&nbsp;
                      </div>
                      <div data-caption-animate="fadeInUp" data-caption-delay="450s" class="not-animated">
                        <p class="text-big-19 text-white d-none d-md-inline-block">Our optimized processes allows us to provide you very compatitive prices</p>
                      </div>
                      <div class="button-block not-animated" data-caption-animate="fadeInUp" data-caption-delay="550s"><a class="btn btn-primary" href="contact.php">Contact us</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-scrollbar d-xl-none"><div class="swiper-scrollbar-drag" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; width: 0px;"></div></div>
          <div class="swiper-nav-wrap d-none d-xl-block">
            <div class="swiper-button-prev swiper-button-disabled"><span class="icon text-white fa fa-chevron-right fa-2x"></span></div>
            <div class="swiper-button-next"><span class="icon text-white fa fa-chevron-right fa-2x"></span></div>
          </div>
        </div>
      </section>

<!--<script>
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline( 'sectionimage' , { toolbar: ['Bold','Italic'] } );
</script>
-->

      <!--Products box-->
      <section id="sectioniconbox" contenteditable="true">
        <div class="row no-gutters justify-content-sm-center justify-content-md-start row-40 row-sm-0">
          <div class="col-sm-10 col-md-6 height-fill">
            <div class="icon-box icon-box-top-line icon-box-hover">
              <div class="box-top">
                <div class="box-icon"><img width="50px" src="medias/image/copy_of_template2/briefcase.svg"></div>
                <div class="box-header">
                  <h3><a href="#">Competent Sales People</a></h3>
                </div>
              </div>
              <div class="box-body">
                <p class="text-black">Our sales representative are also technicians.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-10 col-md-6 height-fill">
            <div class="icon-box icon-box-top-line icon-box-hover">
              <div class="box-top">
                <div class="box-icon"><img width="50px" src="medias/image/copy_of_template2/package.svg"></div>
                <div class="box-header">
                  <h3><a href="#">A wide range of service</a></h3>
                </div>
              </div>
              <div class="box-body">
                <p class="text-black">A range of products and services to match all needs.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-10 col-md-6 height-fill">
            <div class="icon-box icon-box-hover">
              <div class="box-top">
                <div class="box-icon"><img width="50px" src="medias/image/copy_of_template2/light-bulb.svg"></div>
                <div class="box-header">
                  <h3><a href="#">Help and Support</a></h3>
                </div>
              </div>
              <div class="box-body">
                <p class="text-black">We provide a multi-channel full support.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-10 col-md-6 height-fill">
            <div class="icon-box icon-box-hover">
              <div class="box-top">
                <div class="box-icon"><img width="50px" src="medias/image/copy_of_template2/organization.svg"></div>
                <div class="box-header">
                  <h3><a href="#">After Sale service</a></h3>
                </div>
              </div>
              <div class="box-body">
                <p class="text-black">We continue to follow and assist you after the sale.</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Looking for our sevices -->
      <section id="sectionfirstclass" contenteditable="true" class="section-with-counters bg-accent text-center">
        <div class="container bg-cape-cod context-dark section-60 section-lg-90">
          <h2 class="text-rolling-stone font-weight-bold text-uppercase">Looking for</h2>
          <h1 class="section-title"><span class="text-thin">a high quality</span> service?</h1>
          <p class="text-black">With a lot of experience, hiring us is a security for your business!</p>
          <div class="row list-md-dashed row-40">
            <div class="col-md-4">
              <div class="h1 small counter-bold counter maincolorbis">11</div>
              <div class="counter-title text-black font-weight-bold text-uppercase">Years of Experience</div>
            </div>
            <div class="col-md-4">
              <div class="h1 small counter-bold counter maincolorbis">
                  <?php $sql = "SELECT COUNT(*) as nb FROM ".MAIN_DB_PREFIX."user where statut = 1"; $resql = $db->query($sql); $obj = $db->fetch_object($resql); print $obj->nb; ?>
              </div>
              <div class="counter-title text-black font-weight-bold text-uppercase">Experts</div>
            </div>
            <div class="col-md-4">
              <div class="h1 small counter-bold counter maincolorbis">
                  <?php $sql = "SELECT COUNT(*) as nb FROM ".MAIN_DB_PREFIX."societe where client in (1,3)"; $resql = $db->query($sql); $obj = $db->fetch_object($resql); print $obj->nb; ?>
              </div>
              <div class="counter-title text-black font-weight-bold text-uppercase">Trusted Clients</div>
            </div>
          </div>
          <div class="button-block inset-sm-left-60 inset-sm-right-60">
            <div class="d-md-flex justify-content-md-center align-items-md-center"><a class="btn btn-rect btn-primary d-block d-md-inline-block" href="contact.php">Contact us</a>
            <span class="font-italic text-black inset-md-left-20 inset-md-right-20 d-block d-md-inline-block text-big-18">&nbsp; or &nbsp;</span>
            <a class="btn btn-rect btn-white-outline d-block d-md-inline-block maincolorbisbackground" href="pricing.php" style="min-width:236px;">See our pricing</a></div>
          </div>
        </div>
      </section>

      
      
      <!-- Our plans -->
      <section id="sectionplans" contenteditable="true" class="section-67 section-md-top-75 section-md-bottom-75">
        <div class="container">
            <div id="carousel-plans-month" class="" data-interval="0" style="margin-top:50px">
                    <!-- begin .carousel-inner -->
                    <div class="pricing-plan-slider" role="listbox">
                        <!-- begin .item -->
                        <div class="item active">
                            <!-- begin .container -->
                            <div class="container">
                                <h1 class="text-center">our <span class="text-thin">plans</span></h1>

                                <!-- begin .row -->
                                <div class="plan-list flex-box row spacer-bottom-sm flexwrap_inherit">
                                    <!-- begin .plan-item -->
                                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-12 box">
                                            <div class="plan-tile"> 
                                                <div class="plan-box-header"></div>
                                                <div class="plan-title">FREE</div>
                                                <div class="plan-tag">The best choice for personal use</div>
                                                <div class="plan-feat"><span class="summaryplan">The service 1 for free</div>
                                                <div class="plan-pricer">
                                                    <span class="plan-price" id="monthly_plan_37"><span><sup></sup>0<sup>€</sup></span>/ month</span>
                                                </div>
                                                <div class="plan-features">
                                                    <span class="plan-features-title">Available features are :</span>                                                                                                        </span>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            Service 1                                                            
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="plan-btn plan-picker">
                                                    <a href="plan-a.php" class="btn btn-rect btn-primary d-block d-md-inline-block" id="plana">Subcribe</a>
                                                </div>
                                            </div>  
                                    </div>
                                    <!-- end .plan-item -->
                                    
                                    <!-- begin .plan-item -->
                                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-12 box ">                      
                                            <div class="plan-tile"> 
                                                <div class="plan-box-header"></div>
                                                <div class="plan-title">STARTER</div>
                                                <div class="plan-tag">For small companiess</div>
                                                <div class="plan-feat">The service 1 and product 1 at low price</div>
                                                <div class="plan-pricer">
                                                    <span class="plan-price" id="starter"><span><sup></sup>29<sup>€</sup></span>/ month</span>
                                                </div>
                                                <div class="plan-features">
                                                    <span class="plan-features-title">Available features are :</span>                                                                                                        </span>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            Service 1
                                                        </li>
                                                        <li>
                                                        	<i class="fa fa-check"></i>
                                                        	Product 1
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="plan-btn plan-picker">
                                                    <a href="plan-b.php" class="btn btn-rect btn-primary d-block d-md-inline-block" id="planb">Subscribe</a>
                                                </div>
                                            </div>  
                                    </div>
                                    <!-- end .plan-item -->
                                    
                                    <!-- Most popular plan box -->
                                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-12 box most-popular-plan-box2 most-popular-plan-box ">                  
                                        <div class="plan-tile">
                                            <div class="plan-box-header" id="default"></div> 
                                                <div class="plan-title">PREMIUM</div>
                                                <div class="plan-tag">For large companies</div>
                                                <div class="plan-feat">The full option package for a one shot price
                                                </div>
                                                <div class="plan-pricer">
                                                    <span class="plan-price planPremiumPrice" id="premium"><span><sup></sup>2499<sup>€</sup></span></span>
                                                </div>
                                                <div class="plan-features">
                                                    <span class="plan-features-title">Available features are :</span>
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <i class="fa fa-check"></i> 
                                                            Service 1                                                        </li>
                                                        <li id="higherFeature" class="hide">
                                                            <i class="fa fa-check"></i> 
                                                            Service 2                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check"></i> 
                                                            Product 1                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="plan-btn plan-picker">
                                                    <a href="planc.php" class="btn btn-rect btn-primary d-block d-md-inline-block maincolorbisbackground" id="planc">Buy</a>
                                                </div>
                                            </div>  
                                    </div>
                                    <!-- Ends // Most Popular Plan Box --> 
                                </div>
                                <!-- end .row -->
                            </div>
                            <!-- end .container -->
                        </div>
                        <!-- end .item -->
                    </div>
                    <!-- end .row -->
                <!-- end .carousel -->          
            </div>
        </div>
      </section>
      
      
      <!-- Our team -->
      <section id="sectionteam" contenteditable="true" class="section-66 section-md-top-100 section-md-bottom-75">
        <div class="container">
          <h1 class="text-center">our <span class="text-thin">team</span></h1>
          <div class="row justify-content-sm-center">
            <div class="col-md-8 col-xl-12">
              <div class="owl-carousel owl-carousel-center owl-nav-modern owl-style-minimal owl-style-minimal-inverse text-center" data-items="1" data-md-items="2" data-xl-items="3" data-stage-padding="15" data-loop="false" data-margin="15" data-mouse-drag="false" data-nav="true" data-dots="true">
                <div class="owl-item text-center">
                  <div class="thumbnail-variant-5">
                    <div class="thumbnail-variant-5-img-wrap"><img class="img-circle" src="medias/image/copy_of_template2/alberteinstein.jpg" width="129" height="129" alt=""></div>
                    <h2>Albert Einstein</h2>
                    <div>CEO</div>
                    <div class="divider-fullwidth bg-porcelain"></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-phone"></span><a class="link-black" href="callto:#">+555 123 456</a></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-envelope-o"></span><a class="link-black" href="mailto:#">email@example.com</a></div>
                  </div>
                </div>
                <div class="owl-item text-center">
                  <div class="thumbnail-variant-5">
                    <div class="thumbnail-variant-5-img-wrap"><img class="img-circle" src="medias/image/copy_of_template2/pierrecurie.jpg" width="129" height="129" alt=""></div>
                    <h2>Pierre Curie</h2>
                    <div>CTO</div>
                    <div class="divider-fullwidth bg-porcelain"></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-phone"></span><a class="link-black" href="callto:#">+555 123 456</a></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-envelope-o"></span><a class="link-black" href="mailto:#">email@example.com</a></div>
                  </div>
                </div>
                <div class="owl-item text-center">
                  <div class="thumbnail-variant-5">
                    <div class="thumbnail-variant-5-img-wrap"><img class="img-circle" src="medias/image/copy_of_template2/mariecurie.jpg" width="129" height="129" alt=""></div>
                    <h2>Marie Curie</h2>
                    <div>Bookkeeper</div>
                    <div class="divider-fullwidth bg-porcelain"></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-phone"></span><a class="link-black" href="callto:#">+555 123 456</a></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-envelope-o"></span><a class="link-black" href="mailto:#">email@example.com</a></div>
                  </div>
                </div>
                <div class="owl-item text-center">
                  <div class="thumbnail-variant-5">
                    <div class="thumbnail-variant-5-img-wrap"><img class="img-circle" src="medias/image/copy_of_template2/daviddoe.png" width="129" height="129" alt=""></div>
                    <h2>John Doe</h2>
                    <div>Project leader</div>
                    <div class="divider-fullwidth bg-porcelain"></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-phone"></span><a class="link-black" href="callto:#">+555 123 456</a></div>
                    <div class="link-group"><span class="icon icon-xxs icon-primary fa fa-envelope-o"></span><a class="link-black" href="mailto:#">email@example.com</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact form -->
      <section id="sectionformcontact" contenteditable="true" class="section-67 section-md-top-50 section-md-bottom-50 section-md-bottom-100 section-with-counters">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-md-10 col-lg-10 col-xl-12">
              <div class="panel bg-accent bg-default-outline-btn text-center" style="padding: 50px 15px;">
                <h1>Request <span class="text-thin">a callback</span></h1>
                <form class="formcontact" method="POST" action="request-callback.php">
                  <div class="inline-block valignmiddle">
                    <input class="form-input" placeholder="Name" id="index-request-name" type="text" name="name" required>
                  </div>
                  <div class="inline-block valignmiddle">
                    <input class="form-input" placeholder="Phone Number" id="index-request-phone" type="text" name="phone" required>
                  </div>
                  <div class="inline-block valignmiddle">
                    <input class="form-input" placeholder="Email" id="index-request-email" type="text" name="email" required>
                  </div>
                  <div class="inline-block valignmiddle">
                    <button class="btn btn-rect btn-primary d-block d-md-inline-block maincolorbisbackground" type="submit">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <!-- Testimonies -->
      <section id="sectiontestimonies" contenteditable="true" class="maincolorbackground context-dark">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start">
            <div class="col-sm-10 col-lg-12 text-left section-60 section-md-60">
              <div>
                <h1 class="text-center text-lg-left">successful <span class="text-thin">cases</span></h1>
                <div class="carousel-testimonials-home">
                  <div class="inset-xl-right-50">
                    <div class="slick-slider slick-slider slick-carousel-round-image slick-images" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false"
                       data-dots="false" data-swipe="true" data-items="1" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1" data-center-mode="false" data-center-padding="0">
                      <div class="itemphotouser">
                        <div class="imp-wrap"><img class="photouser" src="medias/image/copy_of_template2/alberteinstein.jpg" alt="" width="99" height="99"/>
                        </div>
                      </div>
                      <div class="itemphotouser">
                        <div class="imp-wrap"><img class="photouser" src="medias/image/copy_of_template2/pierrecurie.jpg" alt="" width="99" height="99"/>
                        </div>
                      </div>
                      <div class="itemphotouser">
                        <div class="imp-wrap"><img class="photouser" src="medias/image/copy_of_template2/mariecurie.jpg" alt="" width="99" height="99"/>
                        </div>
                      </div>
                      <div class="itemphotouser">
                        <div class="imp-wrap"><img class="photouser" src="medias/image/copy_of_template2/daviddoe.png" alt="" width="99" height="99"/>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="slick-slider carousel-parent slick-dots-variant-1" data-arrows="false" data-loop="false" data-dots="true"
                  data-swipe="true" data-child="#child-carousel" data-for="#child-carousel" data-items="1" data-sm-items="1" data-md-items="1" data-lg-items="1" data-xl-items="1" data-slide-to-scroll="1" data-center-mode="false">
                    <div class="inset-left-10 inset-right-10 inset-">
                      <div class="inset-xl-right-85">
                        <blockquote class="quote-left">
                          <div class="row align-items-sm-end row-20">
                            <div class="col-sm-6">
                              <div class="quote-name">
                                <cite>Albert Einstein</cite>
                              </div>
                              <div class="text-dusty-gray">Scientist, www.emc2.org</div>
                            </div>
                            <div class="col-sm-6 text-center">
                              <div class="quote-desc row d-flex">
                                <div class="col-sm-6">
                                  <div class="quote-desc-text maincolorbis">-20%</div>
                                  <div class="text-medium text-dusty-gray text-uppercase">Expenses</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="divider-fullwidth"></div>
                          <div>
                            <span class="fa fa-quote-left"></span>
                            <q>They did everything, with almost no time or effort for me. The best part was that I could trust their team to represent our company professionally with our clients.</q>
                            <span class="fa fa-quote-right"></span>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                    <div class="inset-left-10 inset-right-10 inset-">
                      <div class="inset-xl-right-85">
                        <blockquote class="quote-left">
                          <div class="row row-20">
                            <div class="col-sm-6">
                              <div class="quote-name">
                                <cite>Pierre Curie</cite>
                              </div>
                              <div class="text-dusty-gray">CEO “Cyclonic”</div>
                            </div>
                            <div class="col-sm-6 text-center">
                              <div class="quote-desc row d-flex">
                                <div class="col-sm-6">
                                  <div class="quote-desc-text maincolorbis">-30%</div>
                                  <div class="text-medium text-dusty-gray text-uppercase">Expenses</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="divider-fullwidth"></div>
                          <div>
                            <span class="fa fa-quote-left"></span>
                            <q>Their course gave me the confidence to implement new techniques in my work. I learn “how” to write – “what” and “why” also became much clearer.</q>
                            <span class="fa fa-quote-right"></span>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                    <div class="inset-left-10 inset-right-10 inset-">
                      <div class="inset-xl-right-85">
                        <blockquote class="quote-left">
                          <div class="row row-20">
                            <div class="col-sm-6">
                              <div class="quote-name">
                                <cite>Marie Curie</cite>
                              </div>
                              <div class="text-dusty-gray">CTO "Cyclonic"</div>
                            </div>
                            <div class="col-sm-6 text-center">
                              <div class="quote-desc row d-flex">
                                <div class="col-sm-6">
                                  <div class="quote-desc-text maincolorbis">+22%</div>
                                  <div class="text-medium text-dusty-gray text-uppercase">Turnover</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="divider-fullwidth"></div>
                          <div>
                            <span class="fa fa-quote-left"></span>
                            <q>We were skeptical to work with a consultant to optimize our sales emails, but they were highly recommended by many other startups we knew. They helped us to reach our objective of 20% turnover increase, in 4 monthes.</q>
                            <span class="fa fa-quote-right"></span>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                    <div class="inset-left-10 inset-right-10 inset-">
                      <div class="inset-xl-right-85">
                        <blockquote class="quote-left">
                          <div class="row row-20">
                            <div class="col-sm-6">
                              <div class="quote-name">
                                <cite>John Doe</cite>
                              </div>
                              <div class="text-dusty-gray">Sale representative</div>
                            </div>
                            <div class="col-sm-6 text-center">
                              <div class="quote-desc row d-flex">
                                <div class="col-sm-6">
                                  <div class="quote-desc-text maincolorbis">+40%</div>
                                  <div class="text-medium text-dusty-gray text-uppercase">Quotes</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="divider-fullwidth"></div>
                          <div>
                            <span class="fa fa-quote-left"></span>
                            <q>Their work on our website and Internet marketing has made a significant different to our business. We’ve seen a +40% increase in quote requests from our website.</q>
                            <span class="fa fa-quote-right"></span>
                          </div>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

      <!-- News -->
      <section id="sectionnews" contenteditable="true" class="section-50 section-md-90 section-md-bottom-100">
        <div class="container text-center">
          <h1>Latest <span class="text-thin">News</span></h1>
          <div class="row justify-content-sm-center row-40">
            <?php 
            $websitepage = new WebsitePage($db);
            $fuser = new User($db);
            $MAXNEWS = 3;
            $arrayofblogs = $websitepage->fetchAll($website->id, 'DESC', 'date_creation', $MAXNEWS, 0, array('type_container'=>'blogpost', 'lang'=>'en_US'));
            foreach($arrayofblogs as $blog)
            {
                $fuser->fetch($blog->fk_user_creat);
                ?>
                <div class="col-sm-8 col-md-7 col-lg-4">
                  <div class="post-boxed d-xl-inline-block">
                    <a href="<?php echo $blog->pageurl ?>.php">
                    <div class="post-boxed-img-wrap"><img src="<?php echo ($blog->image ? 'viewimage.php?modulepart=medias&file='.$blog->image : 'medias/image/'.$website->ref.'/calendar.svg"'); ?>" alt="" height="80"></div>
                    <div class="post-boxed-caption">
                      <div class="post-boxed-title font-weight-bold"><?php echo $blog->title ?></div>
                      <ul class="list-inline list-inline-dashed text-uppercase">
                        <li><?php $weblangs->load("main"); echo dol_print_date($blog->date_creation, 'daytext', 'tzuser', $weblangs); ?></li>
                        <li><span>by<span> <span class="text-primary"><?php echo $fuser->firstname ?></span></span></li>
                      </ul>
                    </div>
                    </a>
                  </div>
                </div>
                <?php 
            }
            ?>
 
          </div>
        </div>
      </section>


    <?php includeContainer('footer'); ?>


</div>
    
<a href="#" id="ui-to-top" class="ui-to-top"><span class="fa fa-angle-up" style="color: #fff; font-size: 1.9em;"></span></a>

<script src="/document.php?modulepart=medias&file=js/copy_of_template2/script.js"></script>

</body>
</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp);
// END PHP ?>