<meta>
  <?php include"./inc/head.inc.php"; ?>
</meta>
<body>
  <?php
  include"inc/header.php";
  ?>

<section class='flex about-sec'>
  <div class="about-img" data-aos="fade-up">
  </div>
  <div class="about-info " >
    <h2 class='title med' data-aos="fade-in"data-aos-delay="300">Jayati Kaushik</h2>
    <p class='info med'data-aos="fade-in"data-aos-delay="600">This lithograph called ‘Growth’ is very close to my heart! I have always received an emotional response from the audience about this art. How they see themselves in this and how this piece tells their story. And that’s what made it special for me. ❤️ :’)

  </div>
</section>

</body>

<script>
  $(".nav a").removeClass("selected");
  $(".about").addClass("selected");
  AOS.init({
        easing: 'ease-in-out-sine',
        duration: 600
      });
</script>
<script src="js/main.js" charset="utf-8"></script>
