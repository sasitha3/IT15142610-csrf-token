<?php 	
  session_start();	
?>
<html>

  <head>
    <link rel="shortcut icon" type="image/x-icon" href="logo-black.png"/>
    <link href="home.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
    <title>CSRF Attack PREVENT - Profile</title>
    <script>
      $(document).ready(function(){
        
        var token = document.getElementById("token").value;
        var session_id = getCookie("PHPSESSID");
        json_data =  JSON.stringify({"session_id": session_id, "token": token})
        $.ajax({
            type: 'POST',
            url: 'http://localhost:5000/check_csrf',
            headers: {
                "Content-Type":"application/json"
            },
            data: json_data,      
            success: function (result) {
              if(!result['result']){
                alert('user not valid');
                window.location = "http://localhost/csrf-token/index.php?fail=2";
              } else {
                
              }
            }
          });//AJAX call to check csrf token is valid
        });
        function getCookie(c_name) {
          if (document.cookie.length > 0) {
              c_start = document.cookie.indexOf(c_name + "=");
              if (c_start != -1) {
                  c_start = c_start + c_name.length + 1;
                  c_end = document.cookie.indexOf(";", c_start);
                  if (c_end == -1) {
                      c_end = document.cookie.length;
                  }
                  return unescape(document.cookie.substring(c_start, c_end));
              }
          }
          return "";
      }//read seassion cookie
    </script>   
  </head>

  <body style="background-color:#222223;">
    <div style="color:#fff;">
      <center>
        <h1> This is a valid profile </h1>
        <h3>You have valid CSRF Token!</h3>
        <input id="token" type="hidden" value = <?php echo $_POST['token'] ?> />
      </center>
    </div>
	</body> 
</html>