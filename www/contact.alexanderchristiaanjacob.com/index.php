<?php

switch($_SERVER['REQUEST_METHOD']):
case 'GET':

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset=utf-8>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="description" content="Send Alexander Christiaan Jacob a direct message.">
<meta name="rating" content="general">
<meta name="robots" content="follow,index,noarchive">
<meta name="viewport" content="initial-scale=1.0,width=device-width">
<meta property="fb:admins" content="509248955">
<meta property="og:description" content="Send Alexander Christiaan Jacob a direct message.">
<meta property="og:image" content="https://contact.alexanderchristiaanjacob.com/apple-touch-icon-precomposed.png">
<meta property="og:title" content="Contact me">
<meta property="og:type" content="website">
<meta property="og:url" content="http://contact.alexanderchristiaanjacob.com/">
<title>Contact Alexander Christiaan Jacob</title>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
<link rel="author" href="https://alexanderchristiaanjacob.com/" title="Alexander Christiaan Jacob">
<link rel="canonical" href="https://contact.alexanderchristiaanjacob.com/">
<link rel="shortcut icon" href="favicon.ico">
<style>

*{border:0;border-radius:0;font-family:inherit;font-size:1em;margin:0;outline:0;padding:0;text-decoration:none}

a{color:#fff}
button,input,textarea{display:block;font-family:Calibri,sans-serif;width:100%}
button{background:#000;color:#fff;cursor:pointer;font-size:6em;height:1em;line-height:1;text-transform:uppercase}
h1{background:#000;font-size:1.5em;font-style:italic;font-weight:normal;line-height:1;padding:.75em}
html{font:normal 100%/1.5 Calibri,sans-serif}
input{font-size:2em;height:1.5em;line-height:1.5;text-indent:.25em}
label{display:block;left:0;padding:1em;position:absolute;right:0}
textarea{box-sizing:border-box;font-size:2em;height:100%;line-height:1.5;padding:0 0 0 .25em;resize:none}

:root{text-rendering:optimizeLegibility}

h1 a:before{content:'↩ '}

.subject{height:3em;top:3em}
.from{height:3em;top:8em}
.message{bottom:8em;top:13em}
.send{bottom:0;height:6em}

<?php

echo '.subject{';
echo 'background:rgb(' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ');';
echo 'background:-moz-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-webkit-gradient(linear,left top,right bottom,color-stop(0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)),color-stop(100%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)));';
echo 'background:-webkit-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-o-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-ms-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:linear-gradient(135deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo '}';

echo '.from{';
echo 'background:rgb(' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ');';
echo 'background:-moz-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-webkit-gradient(linear,left top,right bottom,color-stop(0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)),color-stop(100%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)));';
echo 'background:-webkit-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-o-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-ms-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:linear-gradient(135deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo '}';

echo '.message{';
echo 'background:rgb(' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ');';
echo 'background:-moz-linear-gradient(45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-webkit-gradient(linear,left top,right bottom,color-stop(0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)),color-stop(100%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)));';
echo 'background:-webkit-linear-gradient(45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-o-linear-gradient(45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-ms-linear-gradient(45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:linear-gradient(-135deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo '}';

echo '.send{';
echo 'background:rgb(' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ');';
echo 'background:-moz-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-webkit-gradient(linear,left top,right bottom,color-stop(0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)),color-stop(100%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1)));';
echo 'background:-webkit-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-o-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:-ms-linear-gradient(-45deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo 'background:linear-gradient(135deg,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 0%,rgba(' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',' . mt_rand(0, 255) . ',1) 100%);';
echo '}';



?>
@media (height:30em){
h1{display:none}
.subject{top:0}
.from{top:5em}
.message{top:10em}
.send{bottom:0;height:6em}
}
</style>
<script src="https://use.typekit.net/mcl4hff.js"></script>
<script>

try{Typekit.load();}catch(e){}

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36264471-3', 'alexanderchristiaanjacob.com');
  ga('send', 'pageview');
</script>
</head>
<h1><a href="https://alexanderchristiaanjacob.com/">Alexander Christiaan Jacob</a></h1>
<form action="https://contact.alexanderchristiaanjacob.com/" method="post">
<label class="subject"><input name="subject" placeholder="Subject" required></label>
<label class="from"><input name="from" placeholder="From" required type="email"></label>
<label class="message"><textarea cols="32" name="body" placeholder="Message" rows="8"></textarea></label>
<label class="send"><button type="submit">Send</button></label>
</form>
</html>
<?php

break;
case 'POST':

$to = 'info@alexanderchristiaanjacob.com';
$from = isset($_POST['from']) ? $_POST['from'] : 'noreply@acjs.net';
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'message via website';
$body = isset($_POST['body']) ? $_POST['body'] : '';
$headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

@mail($to, $subject, $body, $headers);

unset($_POST);
header('Location: https://contact.alexanderchristiaanjacob.com/');
//exit;

break;
endswitch;


?>