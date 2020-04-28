<html>
<head>
<title>Form Page</title>
</head>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

    function myfunction(){
        document.getElementById("curtime").innerHTML = setInterval(function() {
            var date = new Date();
            var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
          document.getElementById("curtime").innerText = time;
        },1000);

    }

    $(document).ready(function(){
        myfunction();
    });
</script>
<body class="justify-content-center">
<form action="index.php" method="post" >
    <label>Firstname:- </label>
     <input type="text" name="firstname" class="form-control" required><br><br>
     <label>Lastname:- </label>
     <input type="text" name="lastname" class="form-control" required><br><br>

    <input type="submit">
</form>

<?php
     $str = $_POST["firstname"];
     $str1 = $_POST["lastname"];
     if(!empty($str) && !empty($str1))
     {
        $str_base64= base64_encode ($str);
        $str1_base64= base64_encode ($str1);
        echo "<h2>Hello $str $str1,Welcome to WNS <br></h2>";
        date_default_timezone_set('Asia/Calcutta');
        echo date('d/m/y :', time()) . "<span id='curtime'>  </span>";
        echo "<p> where $str $str1 is the text which encoded to base64  string </p>";
        echo "The input string in the form of 'base64' string is $str_base64  $str1_base64<br>";
     
     }

    


?>


</body >
</html>