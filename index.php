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
	<title>MIDI</title>
	
	<link rel="stylesheet" href="stylesheets/screen.css" />
<!-- 	<link rel="stylesheet" href="stylesheets/responsive-nav.css"> -->
	<meta name="viewport" content="width=1300,maximum-scale=1.0" />
	
</head>
<body>
	
<div class="wrapper">
	
	<header>
		
		<nav class="nav-collapse">
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
<!-- <script type="text/javascript" src="js/responsive-nav.min.js"></script> -->
<script type="text/javascript" src="js/midi.js"></script>
<script>
/*   var nav = responsiveNav(".nav-collapse"); */
</script>
</body>
</html>