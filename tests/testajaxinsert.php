<?php 
require_once('../configs/dbConfig.php');

?>
<!DOCTYPE html>
<html>


<script type="text/javascript" src="../bootsrap/js/jquery.min.js"></script>

<head>

  <title></title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

</head>
<body>
<script type="text/javascript">
  $(document).ready(function(){
    //check if the user click submit
    $('#submit').click(function(){

      var name=$('#name').val();
      var message=$('message').val();

      //check if all fields are filled
      if (name=='' || message='') {
        //show all fields are required under span tag error_message
        $('#error_message').html("All Fields Are Required");
      }
      else{
        //make the error span tag blanck
        $('#error_message').html('');

        //configure the ajax request
        $.ajax({
          url:"insert.php",
          method:"POST",
          data:{name:name,message:message},
          success:function(data){
            //if request is successfull, receive data from php page
            //first clear all form fields
            $("form").trigger("reset");
            $('#success_message').fadeIn().html(data);
            setTimeOut(function({
              $('#success_message').fadeOut('slow');
            }),2000);
          }
        });
      }
    });

  });
</script>
<div class="container" style="width: 500px;">
<form id="submit_form" method="POST">
  <label>Name</label>
  <input type="text" name="name" id="name" class="form-control">
  <br />

  <label>Message</label>
  <textarea type="text" name="message" id="message" class="form-control"></textarea>
  <br />
  <input type="submit" name="submit" id="submit" class="form-control btn btn-success" value="Submit">
  <span id="error_message" class="text-danger"></span>
  <span id="success_message" class="text-success"></span>


</form>
</div>
</body>
</html>
