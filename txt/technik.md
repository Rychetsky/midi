<header markdown="1">
# Technik <span>Wie funktioniert MIDI?</span>
</header>

<article markdown="1" class="column2">
Die schnelle Verbreitung von Synthesizern und Keyboards am Ende der 1970er Jahren führte zum Wunsch die verschiedenen Geräte verbinden zu können. Mit viel Aufwand konnte man zwar mit analogen Synthesizer weitere Geräte ansprechen, die neuen digitalen Geräte jedoch konnten so nicht eingebunden werden. Bevor der MIDI-Standard erschien, wurden Synthesizer schon mit Mikroprozessoren gesteuert und verschiedene Hersteller arbeiteten schon an eigenen Verbindungsmöglichkeiten. Roland entwickelte den Digital Communication Bus (DCB), Yamaha das Key Code Interface. Damit wuchs die Sorge, dass die verschiedenen Geräte weiterhin inkompatibel bleiben würden. Damit wären Musiker von den einzelnen Herstellern abhängig gewesen. 
Der Mikroprozessor war eine wichtige Vorraussetzung, da damit die Steuerung und Auswertung der MIDI-Signale möglich wurde.
Der Wunsch zur Verbindung der Instrumente kam daher, dass damals aktuelle Synthesizer lediglich wenige Töne, meist nur vier bis acht, gleichzeitig erzeugen konnten. Mehrere Sounds auf einmal waren so allerdings nicht erzeugbar, dafür mussten mehrere Instrumente synchron gespielt werden. 
## Günstiger Standard
Als der MIDI-Standard dann vorgestellt wurde, konnten kompatible Geräte einfach über ein 5-poliges MIDI-Kabel verbunden werden. Für die Hersteller der Instrumente war der MIDI-Standard interessant, weil er technisch einfach zu implementieren war. Damit war er kostengünstig zu verbauen, auch Lizenzabgaben mussten keine gezahlt werden. Die erste MIDI-Spezifikation war lediglich acht Seiten lang. Darin enthalten waren die Basisinformationen, wie beispielsweise eine Note gesendet wird, oder wie die Lautstärke verändert werden kann.
Bei der MIDI-Schnittstelle handelt es sich um eine serielle Verbindung, deren Datenübertragungsrate bei 31.250 Bits pro Sekunde liegt.
## Bits und Bytes
Der Austausch findet über ein binäres Datenformat statt, bei dem über "Status-Bytes" und "Datenbytes" alle Befehle an die jeweiligen Geräte gesendet werden. 
Die Status-Bytes teilen dem jeweiligen Gerät mit, welcher Befehl ausgeführt werden soll, beispielsweise Note einschalten, Pitch Bending oder Aftertouch auslösen. 
Die Datenbytes geben genauere Informationen an, beispielsweise welche Note gespielt werden soll.
Eine komplette MIDI-Nachricht ist beispielsweise *"10010001 00001101 01111111"*. Der erste Teil der Nachricht ist das Status-Byte und steht für "Note On" auf Kanal 2, der mittlere Teil ist ein Datenbyte und spezifiziert das Status-Byte, hier steht es für die zu spielende Note (Note 13, tiefes Cis). Der letzte Teil ist auch ein Datenbyte und steht für die Anschlagdynamik (hier also 12). Die Anschlagdynamik wird von 0 bis 127 gezählt, wobei 0 für kein Anschlag und 127 für den höchsten Anschlag steht. Anschlag 0 wird auch zum ausschalten eines Tons genutzt.
Da in einer MIDI-Gerätekette mehr als ein Gerät eingebunden ist, können über 16 verschiedene Kanäle pro (MIDI-Out) nur das gewünschte Gerät angesprochen werden. An den empfangenden Geräten (die sogenannten Slaves) kann über verschiedene Modi ausgewählt werden, auf welcher Kanal empfangen wird. Im Omni-Modus werden alle Kanäle empfangen, im Poly-Modus wird ein bestimmter Kanal gewählt, im Mono-Mode werden zwar mehrere Kanäle empfangen, aber nur eine Note pro Kanal gespielt (monophon). Im Multi-Mode wird auf mehreren Kanälen empfangen und polyphon abgespielt.
## Verkabelung
Bei der Verkabelung gibt es drei verschiedene MIDI-Anschlüsse, was auch MIDI-Trio genannt wird. Dabei wird MIDI-In von den Geräten zum Empfang der Signale verwendet, MIDI-Out zum Senden der Signale und MIDI-Thru leitet die Signale unbearbeitet weiter. Um einen Synthesizer mit einem Keyboard anzusteuern, muss man diesen über MIDI-Out vom Keyboard in MIDI-In am Synthesizer anschließen. Diese Methode wird auch Master-Slave-Prinzip genannt. Sollen gleichzeitig zwei Synthesizer angesteuert werden, muss über MIDI-Thru eine weitere Verbindung zum MIDI-In des zweiten Synthesizers hergestellt werden.
## MIDI-Timecode
Ein Problem, mit dem Nutzer von MIDI-Instrumenten zu kämpfen hatten war das Timing. So konnte es passieren, dass die verschiedenen Geräte nicht ganz synchron die Signale verarbeiteten und damit hörbare Verzögerungen entstanden. Durch die Entwicklung des MIDI-Timecode (1986) konnte dies behoben werden. Im Master-Gerät wird dieser achtstellige Zeitcode erzeugt und mit den MIDI-Signalen mitgesendet, alle angeschlossenen Geräte konnten sich nun danach richten. Auch für Aufnahmesysteme und Filmvertonung war die Entwicklung von MIDI-Timecode wichtig.
## Fazit
Weil MIDI technisch nicht sehr aufwändig war, konnte es sich schnell in der Musikindustrie etablieren. Die günstige und einfache Implementierung in die Instrumente und anderen Geräte waren gute Argumente für den Standard.
</article>

<aside markdown="1">

</aside>

<footer markdown="1">
Quellen:[midi.org](http://www.midi.org/aboutmidi/tut_history.php)
[wikipedia.de](http://de.wikipedia.org/wiki/Musical_Instrument_Digital_Interface)
[wikipedia.de](http://de.wikipedia.org/wiki/Atari_ST)
[wikipedia.de](http://de.wikipedia.org/wiki/http://de.wikipedia.org/wiki/Commodore_64)
[wikipedia.de](https://en.wikipedia.org/wiki/Digital_Control_Bus)
[itwissen.info](http://www.itwissen.info/definition/lexikon/musical-instrument-digital-interface-MIDI-MIDI-Schnittstelle.html)
[uni-lueneburg.de](http://dok.uni-lueneburg.de/texte/Audio/midi/story.html)
[rolandmusik.de](http://www.rolandmusik.de/links/midiguide/kap05.html)
[zem-college.de](http://www.zem-college.de/midi/mc_modi.htm)
</footer>