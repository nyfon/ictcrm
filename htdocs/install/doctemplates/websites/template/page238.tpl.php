<?php // BEGIN PHP
$websitekey=basename(__DIR__); if (empty($websitepagefile)) $websitepagefile=__FILE__;
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) { require_once './master.inc.php'; } // Not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
// END PHP ?>
<html lang="en">
<head>
<title>Clients Testimonials</title>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="testimonials, use cases, success story" />
<meta name="title" content="Clients Testimonials" />
<meta name="description" content="Client Testimonials" />
<meta name="generator" content="ICTCRM" />
<link href="/clients-testimonials.php" rel="canonical" />
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

      <section id="sectionimage" contenteditable="true">
        <div class="">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" style="height: 200px; background-image: url('medias/image/template/background_sunset.jpg'); background-size: cover;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s">Testimonials</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>


      <div class="center">
      <br><br>
      <h1 class="text-center">What they say <span class="text-thin">about us</span></h1>
      <br><br><br><br>
      Send us your testimonial (by email to <a href="mailto:<?php echo $mysoc->email; ?>"><?php echo $mysoc->email; ?></a>)
      <br><br><br><br>
      <br><br>
      </div>

    <br><br>

    <?php includeContainer('footer'); ?>

</div>
    

<a href="#" id="ui-to-top" class="ui-to-top"><span class="fa fa-angle-up" style="color: #fff; font-size: 1.9em;"></span></a>

<script src="/document.php?modulepart=medias&file=js/template/script.js"></script>


</body>
</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp);
// END PHP ?>