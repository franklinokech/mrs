<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="../bootstrap/jquery-3.2.1.js"></script>
  <!--
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
  
  <script type="text/javascript">
    function chk()
    {
      var name=document.getElementById('name').value;
      var message=document.getElementById('message').value;
      var dob=document.getElementById('dob').value;
      var dataString='name='+ name+'&message='+message+'&dob='+dob;
      $.ajax({
        type:"POST",
        url:"hi.php",
        data:dataString,
        cache:false,
        success:function(html){
          $('#msg').html(html);
        }
      });
      return false;
    }
  </script>
  <script type="text/javascript">
  window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script>
</head>
<body>

  <form method="POST">
    <input type="text" name="name" id="name"></form><br />
     <input type="text" name="message" id="message"><br />
     <input type="text" name="dob" id="dob"><br />
    <input type="submit" name="submit" value="submit" onclick="return chk()">
  </form>
  <p id="msg"></p>
</body>
</html>