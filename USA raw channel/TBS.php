<?php
$base_url -
'https://cdn.plt.one/cdn/premium336/chunks.m3u8';
$today = gmdate("n/j/Y g:i:s A");

$key= "wasitv"; //enter your key here
$validminutes = 1;
$str2hash = $key . $today .
$validminutes;
$md5raw = md5($str2hash, true);
$base64hash = base64_encode($md5raw);
$urlsignature = "server_time=".
$today ."&hash_value=" . $base64hash.
 "&validminutes=$validminutes";
base64url($urlsignature);

?>

<?php echo "{$base_url}?
wmsAuthSign=$base64urlsignature";?>
