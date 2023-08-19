<body onload="startTime() " style="background:url(https://i.pinimg.com/originals/76/5b/7c/765b7c2c847900a86e7d03430d091c02.jpg); color:yellow; font-weight:bolder; font-size:20px; padding:50px; text-align:center;">
    <script>
function startTime() {
  const date = new Date();
  document.getElementById("demo").innerHTML = date.toLocaleTimeString();
  setTimeout(function() {startTime()}, 1000);
}
</script>

<h1 id="demo"></h1>

<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>


<a style="background:red; color:white; border-radius:50px; padding:20px; text-decoration:none;" href="./kaynak.php">go to source </a>
<br>
<br>
<br>
<br>

</body>
<?php
$f = fopen("kaynak.php","w");

$cURL = curl_init();     
curl_setopt($cURL, CURLOPT_URL, 'https://www.fubiz.net/');     
curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, false);    
curl_setopt($cURL, CURLOPT_FILE, $f);
echo curl_exec($cURL);     
curl_close($cURL);