<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $query = $_POST['query'];

  $errorEmpty = false;
  $errorEmail = false;

  if(empty($name) || empty($email) || empty($query) ){
    echo "<p>Kindly fill out the required fields</p>";
    $errorEmpty = true;
  }
  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    echo "<p>Kindly write a valid email address</p>";
    $errorEmail = true;
  }
  else {
    echo"all set now upload to db";
  }
}

else{
  echo "if nahi chall rha";
}

 ?>
 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

 <script>
   var errorEmpty = <?php echo json_encode($errorEmpty); ?> ;
   var errorEmail = <?php echo json_encode($errorEmail); ?> ;
   console.log(errorEmail);
   console.log("error empty "+errorEmpty);

   if (errorEmpty == true) {
     $(".name , .email , .query").css("border","1px solid red");
   }
   if (errorEmail == true){
     $(".email").css("border","1px solid red");
   }
   if(errorEmpty == false && errorEmail == false) {
     var x = $(".optional-contact").val() ;
     if($(".optional-contact").val() != ""){
       alert("if");
       $(".name,.email,.query,.optional-contact,.country").css("border","1px solid green");
     }
     else {
       $(".name,.email,.query,.country").css("border","1px solid green");
     }
   }

 </script>
