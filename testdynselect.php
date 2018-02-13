<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="boostrap/css/bootstrap.css">
    <script type="text/javascript">
        $(document).ready(function(){

    $("#sel_depart").change(function(){
        var deptid = $(this).val();

        $.ajax({
            url: 'getUsers.php',
            type: 'post',
            data: {depart:deptid},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#sel_user").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

});
    </script>
</head>
<body>
    <select id="first-choice">
  <option selected value="base">Please Select</option>
  <option value="beverages">Beverages</option>
  <option value="snacks">Snacks</option>
</select>

<br>

<select id="second-choice">
  <option>Please choose from above</option>
</select>
</body>
</html>