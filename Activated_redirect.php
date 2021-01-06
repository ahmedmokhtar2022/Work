<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/activation_message_page.css">
    <meta http-equiv = "refresh" content = "3; url =login.php" />
</head>

<body>

<div class="activated_div">
    <h1 class="activated_word_h1">Congratulations You Are All Done !</h1>
    <h2 class="activated_word_h2">Your email address has been verified successfully</h2>
</div>

<div class="count-line" align="center">
    <p class="redirecr-word">Redirect in......</p>
    <div class="count-down" id="counter" >5</div>
    <div>
        <script type="text/javascript">
            function countdown() {
                var i = document.getElementById('counter');
                i.innerHTML = parseInt(i.innerHTML)-1;
                if (parseInt(i.innerHTML)==0) {
                    clearInterval(timerId);
                }
            }

            var timerId = setInterval(function(){ countdown(); },1000);
        </script>

</body>
</html>