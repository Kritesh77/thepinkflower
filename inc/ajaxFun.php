<?php
include("./functions.php");
if(isset($_POST['submitCategory'])){
  $newCategory = $_POST['category'];
  $insertNewCategory = "";
  if(empty($newCategory)){
    echo "Enter a category to insert";
  }else{
    $previousCategories = getCategories();
    print_r($previousCategories);
    if($previousCategories != 0){
      // print_r($previousCategories);
      $categoryExists = array_search($newCategory,$previousCategories);
      // echo(gettype($categoryExists));
      if(is_int($categoryExists)){
        echo "Category already exists";
      }
      else {
        $insertNewCategory = insertNewCategory($newCategory);
      }
    }
    else {
      //first insertions
      $insertNewCategory = insertNewCategory($newCategory);
    }
    if ($insertNewCategory === "SUCCESS") {
      echo "New category inserted Successfully";
    }elseif($insertNewCategory === "FAILED") {
      echo "New category insertion Failed SYSTEM FAILUER CHECK functions.php insertNewCategory";
    }
  }
}

?>
