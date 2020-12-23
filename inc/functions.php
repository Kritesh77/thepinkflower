
<?php

function getFeatured()
{
    include "database.php";
    $sql = 'SELECT * FROM featured GROUP BY category desc';
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $image = $row['image'];
            $category = $row['category'];
            $tempPath = "./img/temp/".$image; ?>
      <div class="box">
        <div class="imgbox trans">
          <a href="image.php?image=<?php echo $category; ?>">
            <img src="<?php echo $tempPath; ?>" alt="">
          </a>
        </div>
        <p class='label'><?php echo $category; ?></p>
      </div>
    <?php
        }
    } else {
        echo mysqli_error($conn);
    }
}

function getImage()
{
    include "database.php";
    $category = $_REQUEST['image'];
    $sql = "SELECT * FROM images WHERE category = '$category' ";
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_assoc($result);
        $image = $row['image'];
        $title = $row['category']; ?>
    <div class="full-image">
      <img src="./img/<?php echo $image; ?>" alt="">
    </div>
    <div class="desc">
      <h2 class='title med'><?php echo $title; ?></h2>
      <p class='info med'>This lithograph called ‘Growth’ is very close to my heart! I have always received an emotional response from the audience about this art. How they see themselves in this and how this piece tells their story. And that’s what made it special for me. ❤️ :’)
      </p>
    </div>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $image = $row['image'];
        $title = $row['category']; ?>
      <div class="full-image">
        <img src="./img/<?php echo $image; ?>" alt="">
      </div>
      <?php
      }//while ends
    }//if ends
    else {
        echo mysqli_error($conn);
    }
}

function getFeaturedExcept()
{
    include "database.php";
    $category = $_REQUEST['image'];
    $sql = "SELECT * FROM featured WHERE category != '$category' GROUP BY category desc";
    if ($result = mysqli_query($conn, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $image = $row['image'];
            $category = $row['category'];
            $tempPath = "./img/temp/".$image; ?>
      <div class="box">
        <div class="imgbox trans">
          <a href="image.php?image=<?php echo $category; ?>">
            <img src="<?php echo $tempPath; ?>" alt="">
          </a>
        </div>
        <p class='label'><?php echo $category; ?></p>
      </div>
    <?php
        }
    } else {
        echo mysqli_error($conn);
    }
}

function getCategories(){
  include "database.php";
  $existingCategories = array();
  $sql = "SELECT * FROM categories";
  if ($result = mysqli_query($conn, $sql)) {
      $num_rows = mysqli_num_rows($result);
      if($num_rows > 0 ){
        while($row = mysqli_fetch_assoc($result)){
          array_push($existingCategories , $row['category']);
          // print_r($existingCategories);
        }
        return array_unique($existingCategories);
    }else {
      //first insertions
      return 0;
    }
  }
  else {
    return mysqli_error($conn);
  }
}

function insertNewCategory($newCategory){
    include "database.php";
    date_default_timezone_set('Asia/Calcutta');
    $date = date("Y/m/d");
    $time = date("H:i:s");
    $sql = "INSERT INTO categories(category,date,time)
            VALUES ('$newCategory','$date','$time')";
    if(mysqli_query($conn,$sql)){
      return "SUCCESS";
    }else {
      return "FAILED";
    }
}






?>
