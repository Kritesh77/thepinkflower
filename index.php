<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Artist Jayati Kaushik">
  <meta name="author" content="Jayati Kaushik">
  <meta name="tags" content="art, artist, printmaking,college of arts, ">
  <title>The Pink Flower</title>
  <?php include"./inc/head.inc.php"; ?>
</head>
  <?php include"./inc/header.php"; ?>
  <section class='works'>
    <?php
      include_once "inc/functions.php";
      getFeatured();
    ?>
  </section>
  <script src="./js/main.js" charset="utf-8"></script>

</body>

<script>
  $(".nav a").removeClass("selected");
  $(".work").addClass("selected");
</script>
</html>
