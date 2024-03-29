<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= BASE_URL ?>assets/client/assets/img/favicon.png" rel="icon">
  <link href="<?= BASE_URL ?>assets/client/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?= BASE_URL ?>assets/client/assets/css/variables.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require_once PATH_VIEW . 'layouts/partials/header.php'; ?>
  <!-- End Header -->

  <main id="main">

  <?php require_once PATH_VIEW . $view . '.php'; ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once PATH_VIEW . 'layouts/partials/footer.php'; ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= BASE_URL ?>assets/client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASE_URL ?>assets/client/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= BASE_URL ?>assets/client/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= BASE_URL ?>assets/client/assets/vendor/aos/aos.js"></script>
  <script src="<?= BASE_URL ?>assets/client/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= BASE_URL ?>assets/client/assets/js/main.js"></script>

</body>

</html>