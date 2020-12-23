<head>
  <meta charset="utf-8">
  <meta name="description" content="Artist Jayati Kaushik">
  <meta name="author" content="Jayati Kaushik">
  <meta name="tags" content="art, artist, printmaking,college of arts, ">
  <title>The Pink Flower</title>
</head>

<body>
  <?php include"./inc/header.php"; ?>
  <section class='image-sec border'>
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
      <!-- <a href="<?php echo  $_SERVER['HTTP_REFERER']; ?>">Previous</a> -->
      <!-- <p2>/</p2> -->
      <!-- <a href="">Next</a> -->
    </div>
  </div>
  <section class='works'>
    <?php
    getFeaturedExcept();
    ?>
  </section>
</body>
<script src="js/main.js" charset="utf-8"></script>
