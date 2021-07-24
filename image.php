<head>
  <meta charset="utf-8">
  <meta name="description" content="Artist Jayati Kaushik">
  <meta name="author" content="Jayati Kaushik">
  <meta name="tags" content="art, artist, printmaking,college of arts, ">
  <title>The Pink Flower</title>
  <?php include"./inc/head.inc.php"; ?>
</head>

<body>
  <?php include"./inc/header.php"; ?>
  <section class='image-sec'>
    <?php
      include_once "inc/functions.php";
      getImage();
    ?>
  </section>
  <div class="bar med">
    <div class="back">
      <a href="./index.php">Back to Work</a>
    </div>
    <div class="prev-next">
      <a href="<?php echo  $_SERVER['HTTP_REFERER']; ?>">Previous</a>
      <p>/</p>
      <p href="#">Next</p>
    </div>
  </div>
  <section class='works'>
    <?php
    getFeaturedExcept();
    ?>
  </section>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</body>
<script src="./js/main.js" charset="utf-8"></script>
<script>
  AOS.init({
        easing: 'ease-in-out-sine',
        duration: 600
      });
</script>
