<?php

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\Markdown;

# Read file and pass content through the Markdown praser
$text = file_get_contents('txt/file.md');
$html = Markdown::defaultTransform($text);

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
				<li><a href="#einleitung" class="brand">MIDI</a></li>
				<li><a href="#einleitung" class="einleitung">Einleitung</a></li>
				<li><a href="#einfluss" class="einfluss">Einfluss</a></li>
				<li><a href="#timeline" class="timeline">Timeline</a></li>
				<li><a href="#technik" class="technik">Technik</a></li>
				<li><a href="#unternehmen" class="unternehmen">Unternehmen & Geräte</a></li>
				<li><a href="#gegenwart" class="gegenwart">Gegenwart</a></li>
				<li class="divider"></li>
				<li><a href="#look" class="look">Look</a></li>
				<li><a href="#quellen" class="quellen">Quellen</a></li>
				<li><a href="#impressum" class="impressum">Impressum</a></li>
			</ul>
		</nav>
		
	</header>
	
	
	<section class="einleitung sides dark" id="einleitung">
		<div class="inner">
			
			<header>
				<h1>
					MIDI <span>die frühen Jahre (1980 bis 1989)</span>
				</h1>
			</header>
			
			<article>
				<?=Markdown::defaultTransform(file_get_contents('txt/einleitung.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
				<h4 class="quellen">Quellen</h4>
				<p>http://www.midi.org, http://de.wikipedia.org/wiki/Musical_Instrument_Digital_Interface, http://www.midi.org/aboutmidi/tut_history.php</p>
			</footer>
			
		</div>	
	</section>
	
	<div class="mood_einfluss"></div>

	<section class="einfluss sides dark" id="einfluss">
		<div class="inner">
			
			<header>
				<h1>
					Einfluss <span>Auswirkungen auf die Menschheit</span>
				</h1>
			</header>
			
			<article class="column2">
				<?=Markdown::defaultTransform(file_get_contents('txt/einfluss.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
				<h4 class="quellen">Quellen</h4>
				<p>http://www.midi.org, http://de.wikipedia.org/wiki/Musical_Instrument_Digital_Interface, http://www.midi.org/aboutmidi/tut_history.php</p>
			</footer>
			
		</div>	
	</section>


	<div class="mood_timeline"></div>

	<section class="timeline sides dark" id="timeline">
		<div class="inner">
			
			<div class="line"></div>
			
			<header>
				<h1 class="center">
					Timeline
				</h1>
			</header>
			
			<article>
				<dl>
				  <dt>Ende der 70er Jahre</dt>
				    <dd>Immer mehr Synthesizer werden Veröffentlicht, es gibt noch keinen einheitlichen Standard, um die Instrumente miteinander zu verbinden.</dd>
				  <dt>1981</dt>
				    <dd>Dave Smith, Ikutaru Kakehashi und Tom Oberheim Entwickeln ein Konzept, um die Synthesizer der unterschiedlichen Hersteller miteinander kompatibel zu machen. Erster Name: Universal Synthesizer Interface.</dd>
				  <dt>1982</dt>
				    <dd>Das Konzept des Universal Synthesizer Interface wird mit den führenden Herstellern überarbeitet und der Allgemeinheit unter dem Namen MIDI (Musical Instrument Digital Interface) vorgestellt.</dd>
				  <dt>1982</dt>
				    <dd>Das Konzept des Universal Synthesizer Interface wird mit den führenden Herstellern überarbeitet und der Allgemeinheit unter dem Namen MIDI (Musical Instrument Digital Interface) vorgestellt.</dd>
				  <dt>Dezember 1982</dt>
				    <dd>Das erste Instrument, mit MIDI-Implementierung erscheint: Der Sequential Prophet-600.</dd>
				  <dt>Januar 1983</dt>
				    <dd>Der Roland JP6 erscheint als weiterer MIDI-fähiger Synthesizer. Auf der NAMM-Show wird er zusammen mit dem Sequential Prophet-600 verbunden vorgeführt. <br>Der finale MIDI-Standard 1.0 wird veröffentlicht.</dd>
				  <dt>1984</dt>
				    <dd>Gründung des MIDI-Verbandes</dd>
				  <dt>Mitte der 1980er</dt>
				    <dd>MIDI-Sequencer-Programme für den C64 erscheinen, damit konnten Synthesizer und andere MIDI-Geräte über den Computer gesteuert werden.</dd>
				  <dt>1986</dt>
				    <dd>MIDI-Timecode wird veröffentlich</dd>
				</dl>
			</article>
				
			
		</div>	
	</section>


	<div class="mood_technik"></div>

	<section class="technik sides dark" id="technik">
		<div class="inner">
			
			<header>
				<h1>
					Technik <span>Wie funktioniert MIDI?</span>
				</h1>
			</header>
			
			<article class="column2">
				<?=Markdown::defaultTransform(file_get_contents('txt/technik.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
				<h4 class="quellen">Quellen</h4>
				<p>http://www.midi.org, http://de.wikipedia.org/wiki/Musical_Instrument_Digital_Interface, http://www.midi.org/aboutmidi/tut_history.php</p>
			</footer>
			
		</div>	
	</section>


	<div class="mood_unternehmen"></div>

	<section class="unternehmen sides dark" id="unternehmen">
		<div class="inner">
			
			<header>
				<h1>
					Unternehmen & Geräte <span></span>
				</h1>
			</header>
			
			<article class="column2">
				<?=Markdown::defaultTransform(file_get_contents('txt/unternehmen.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
				<h4 class="quellen">Quellen</h4>
				<p>http://www.midi.org, http://de.wikipedia.org/wiki/Musical_Instrument_Digital_Interface, http://www.midi.org/aboutmidi/tut_history.php</p>
			</footer>
			
		</div>	
	</section>


	<div class="mood_gegenwart"></div>

	<section class="gegenwart sides dark" id="gegenwart">
		<div class="inner">
			
			<header>
				<h1>
					Gegenwart <span></span>
				</h1>
			</header>
			
			<article class="column2">
				<?=Markdown::defaultTransform(file_get_contents('txt/gegenwart.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
				<h4 class="quellen">Quellen</h4>
				<p>http://www.midi.org, http://de.wikipedia.org/wiki/Musical_Instrument_Digital_Interface, http://www.midi.org/aboutmidi/tut_history.php</p>
			</footer>
			
		</div>	
	</section>


	<div class="mood_look"></div>

	<section class="look sides dark" id="look">
		<div class="inner">
			
			<header>
				<h1>
					Look <span></span>
				</h1>
			</header>
			
			<article class="column2">
				<?=Markdown::defaultTransform(file_get_contents('txt/look.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
				<h4 class="quellen">Quellen</h4>
				<p>http://www.midi.org, http://de.wikipedia.org/wiki/Musical_Instrument_Digital_Interface, http://www.midi.org/aboutmidi/tut_history.php</p>
			</footer>
			
		</div>	
	</section>



	<div class="mood_quellen"></div>

	<section class="quellen sides dark" id="quellen">
		<div class="inner">
			
			<header>
				<h1>
					Quellenverzeichnis <span></span>
				</h1>
			</header>
			
			<article class="column2">
				<?=Markdown::defaultTransform(file_get_contents('txt/quellen.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
			</footer>
			
		</div>	
	</section>



	<div class="mood_impressum"></div>

	<section class="impressum sides dark" id="impressum">
		<div class="inner">
			
			<header>
				<h1>
					Impressum <span></span>
				</h1>
			</header>
			
			<article class="column2">
				<?=Markdown::defaultTransform(file_get_contents('txt/impressum.md'))?>
			</article>
			
			<aside>
				
			</aside>
			
			<footer>
			</footer>
			
		</div>	
	</section>


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