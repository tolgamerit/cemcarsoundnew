<?php 
 function seo($str){
	$preg = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#', '.');
	$match = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp', '');
	$perma = strtolower(str_replace($preg, $match, $str));
	$perma = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $perma);
	$perma = trim(preg_replace('/\s+/', ' ', $perma));
	$perma = str_replace(' ', '-', $perma);
	return $perma;
}
function htmlclean($text){
    $text = preg_replace("'<script[^>]*>.*?</script>'si", '', $text );
    $text = preg_replace('/<a\s+.*?href="([^"]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)',$text );
    $text = preg_replace( '/<!--.+?-->/', '', $text );
    $text = preg_replace( '/{.+?}/', '', $text );
    $text = preg_replace( '/&nbsp;/', ' ', $text );
    $text = preg_replace( '/&amp;/', ' ', $text );
    $text = preg_replace( '/&quot;/', ' ', $text );
    $text = strip_tags($text);
    $text = htmlspecialchars($text);
    return $text;
}
function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}

 ?>