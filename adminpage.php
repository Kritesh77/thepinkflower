<?php
include("./inc/head.inc.php");
include("./inc/header.php");
include("./inc/functions.php");
?>

<section class="admin-page">
  <div class="category">
    <div class="toggle-box border-5 whitebg">
      <div class="toggle-box-header  add-category flex">
        <h3>Add a new category to your homepage</h3>
        <i  class="category-arrow arrow fas fa-arrow-down"></i>
      </div>
      <div class="toggle-box-body greybg">
        <p>Enter a category</p>
        <input class="input2" type="text" id="input-category" placeholder="Enter a new category...">
        <span class="category-error"></span>
        <input type="submit" id="submit-new-category" >
      </div>
    </div>
  </div>

  <div class="image-data">
    <div class="toggle-box border-5 whitebg">
      <div class="toggle-box-header  flex">
        <h3>Insert images into your categories</h3>
        <i  class="category-arrow arrow fas fa-arrow-down"></i>
      </div>
      <div class="toggle-box-body greybg">
        <p>Choose a Category</p>
        <input class="input2" type="text" id="input-category" placeholder="Enter a new category...">
        <span class="category-error"></span>
        <input type="submit" id="submit-new-category" >
      </div>
    </div>
  </div>



</section>
</body>
<script>
  AOS.init({}); 
$(document).ready(function(){
    $('.toggle-box-header').click(function () {
      console.log(this);
      $(".toggle-box-body").toggleClass("show-toggle-box");
      $(".category-arrow").toggleClass("arrow-up");
    });
    $("#submit-new-category").click(function(e){
      e.preventDefault();
      var category = $("#input-category").val();
      $(".category-error").load("./inc/ajaxFun.php" ,{
       category : category,
       submitCategory : "submit"
      });
    });
  });
</script>
