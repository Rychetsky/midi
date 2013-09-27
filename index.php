<?php

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get MarkdownExtra class
use \Michelf\MarkdownExtra;


# Array mit allen Seiten
$content = array(	'einleitung' => 'MIDI', 
					'einfluss' => 'Einfluss', 
					'timeline' => 'Timeline', 
					'technik' => 'Technik', 
					'unternehmen' => 'Unternehmen & Geräte', 
					'gegenwart' => 'Gegenwart', 
					'look' => 'Look', 
					'quellen' => 'Quellen', 
					'impressum' => 'Impressum'
				);

?>

<!doctype html>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<title>MIDI | Raphael Rychetsky</title>
	<meta name="description" content="Webseite über MIDI im Rahmen des History-Unterrichts an der SAE Frankfurt">
	<meta name="author" content="Raphael Rychetsky">
	<meta name="viewport" content="width=1300,maximum-scale=1.0" />
	<link rel="stylesheet" href="stylesheets/screen.css" />
	
</head>
<body>
	
<div class="wrapper">
	
	<header>
		
		<nav>
			<ul>
				<?php # Menü zusammenbauen
				foreach ($content as $key => $value)
					echo '<li><a href="#'.$key.'" class="'.$key.'">'.$value.'</a></li>';
				?>
			</ul>
		</nav>
		
	</header>
	
	<?php # Inhalte laden
	foreach ($content as $key => $value){
		echo '<div class="mood_'.$key.'"></div>';
		echo '<section class="'.$key.' sides " id="'.$key.'"><div class="inner">';
		echo MarkdownExtra::defaultTransform(file_get_contents('txt/'.$key.'.md'));
		echo '</div></section>';
	}
	?>

</div>	

<script type="text/javascript" src="//use.typekit.net/ubp0ppq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
<script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
<script type="text/javascript" src="js/midi.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9333390-12']);
  _gaq.push(['_setDomainName', 'raphael-rychetsky.de']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>