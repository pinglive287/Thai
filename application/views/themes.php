<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes = base_url();
?>
<!DOCTYPE html>
<html lang="th">

<head>
  <meta charset=TIS-620>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= APP_NAME ?></title>
  <meta content="<?= DESCRIPTION_NAME ?>" name="description">
  <meta content="<?= KEYWORDS_NAME ?>" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $themes ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $themes ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= $themes ?>assets/css/Font-Prompt/stylesheet.css">
  <link rel="stylesheet" href="<?= $themes ?>assets/css/thsarabunnew/stylesheet.css">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- include -->
  <?php $this->load->view($view_file); ?>
  <!-- include -->
</body>

</html>