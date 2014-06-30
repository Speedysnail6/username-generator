<?php
  $file = "adjectives.txt";



  $lines1 = count(file($file));


$lines = file( $file ); 
$it = $lines[rand(0,$lines1)];
?>
<?php

  $file = "nouns.txt";



  $lines1 = count(file($file));


$lines = file( $file ); 

if ($_GET['importantnouns']) {
	if (rand(1,3) == '1') {
			$it2 = $_GET['importantnouns'];
	}
	else {
		$it2 = $lines[rand(0,$lines1)];
	}
}
else {
	$it2 = $lines[rand(0,$lines1)];
}
?>
<?php

  $file = "numbers.txt";



  $lines1 = count(file($file));


$lines = file($file);
$it3 = $lines[rand(0,$lines1)];
if ($_GET['gm'] == 2) {
	$stuff = $it . $it2;
}
else {
	$stuff = $it . $it2 . $it3;
}
$final = $_GET['prefix'] . preg_replace('/\s+/','',$stuff) . $_GET['suffix'];
if (!$final) {
   header( 'Location: ?mk=1' ) ;
   }
echo $final;
?>