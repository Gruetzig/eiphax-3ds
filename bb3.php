<?php
$title = "BannerBomb3";
$desc = "BB3 tutorial (deprecated)";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>bannerbomb3</h1></center>
            <hr>
			<p>Since New Browserhax got patched with 11.15, we now use BannerBomb3 as an alternative method following the seedminer path. In most scenarios, you should be using Pichaxx. Read more about the instructions <a href="https://3ds.hacks.guide/"> here.</a> If you have any further questions ask the <a href="https://discord.gg/C29hYvh"> Nintendo Homebrew discord!</a></p>


		<!--
		<button class="btn-toggle-visibility" data-target="#seedminer">Seedminer</button>
		<div class="box hidden" id="seedminer">
		<h3>Section 1: Seedminer: finding your id0</h3>
        <ol>
            <li>Turn your console off and take out the SD card.</li>
            <li>Put the SD card into your computer, navigate to it and open the "Nintendo 3DS" folder.</li>
            <li>Inside this folder, you will see one or more folders with very long, seemingly random names. Do not open any further folders.</li>
            <li><b>If you only have ONE long named folder, skip to step 11. If you have TWO OR MORE, follow these steps in order.</b> <i>The "private" folder, if it exists, does not count.</i></li>
            <li>Back out of your Nintendo 3DS folder to your SD root. You may see folders such as Nintendo 3DS and DCIM. This means you are in the right place.</li>
            <li>Rename your Nintendo 3DS folder to "Nintendo BACKUP" <i>(right click and select "Rename")</i></li>
            <li>Safely eject your SD card, put it back in your console, and power it on.</li>
            <li>Wait for your console to generate some data.</li>
            <li>Once you see the home menu, power off your console, take out the SD card and put it in your computer.</li>
            <li>Navigate back to the "Nintendo 3DS" folder on your SD card. You should now only have one long named folder.</li>
            <li>The 32 character name of this long named folder is referred to as your 'id0'.</li>
            <li>Right click this 'id0' folder and select "Rename".</li>
            <li>The folder name should now be blue. Right click the blue text and select "Copy". DO NOT enter or replace any text. If you accidentally enter or replace any text, press Control+Z to undo this action and restore your 'id0' name.</li>
            <li>Left click away from the folder to deselect it, and paste (Control+V) your id0 somewhere (for example, a Notepad window).</li>
            <li><b>IF YOU NEEDED TO RENAME THE NINTENDO 3DS FOLDER</b>: delete the "Nintendo 3DS" folder, then rename "Nintendo BACKUP" to "Nintendo 3DS". If you did NOT need to rename the "Nintendo 3DS" folder, DO NOT delete or rename anything.</li>
        </ol>
        
        <h3>Section 2: Seedminer: movable.sed</h3>
        <ol>
            <li>Go to <a href="http://bruteforcemovable.com" target="_blank">bruteforcemovable</a>.</li>
            <li>Input your friend code and id0 into the fields given.</li>
            <li>Complete the "I'm not a robot" CAPTCHA.</li>
            <li>The website will give you a friend code. On your console, open the Friends List (home menu, top row, orange box with smiley face). <i>If, instead, it skips to "Done!" (step 4) and gives you the option to download your movable.sed directly, skip to step eight.</i></li>
			<li>Press "Register Friend", then "Internet", then enter the friend code from the website.</li>
			<li>Give it a random name. The name is not important.</li>
            <li>Back on BruteforceMovable, the website should be on step 2. When presented the option, click "Continue". <i>If it is not on step 2, refresh the page ONCE.</i></li>
            <li>Wait some time. Once the process is finished, you can download your "movable.sed". Put it somewhere you'll remember.</li>
        </ol>
		</div>
		<button class="btn-toggle-visibility" data-target="#bb3">BannerBomb3</button>
		<div class="box hidden" id="bb3">
		<h3>Section 3: BannerBomb3</h3>
		<ol>
			<li>Open the <a href="https://bb3.bruteforcemovable.com">BannerBomb3 tool</a>.</li>
			<li>Upload the movable.sed you just got.</li>
			<li>Click "Go". You will receive a zip file (tadmuffin_out.zip).</li>
			<li>Unzip this file and retrieve the exploit DSiWare (F00D43D5.bin).</li>
			<li>Power off your device and put your SD card in your computer if it is not already.</li>
			<li>Navigate to <div class="code">Nintendo 3DS > ID0 > ID1</div> on your SD card. <i>Note: The ID0 is the same one you used for Seedminer. The ID1 is the next folder inside the ID0.</i></li>
			<li>Inside your ID1, create a folder named "Nintendo DSiWare" if it does not already exist. If it does already exist, move any existing .bin files in this folder to your computer.</li>
			<li>Move your exploit DSiWare (F00D43D5.bin) into your Nintendo DSiWare folder.</li>
			<li>Put your SD card back in your console.</li>
			<li>Power on and navigate to System Settings > Data Management > DSiWare.</li>
			<li>Tap the SD Card tab.</li>
			<li>Your screen should flash a lovely purple/magenta colour, and the console will crash to the home screen. If it does, the exploit worked.</li>
			<li>Power off your console and put your SD card into your computer.</li>
			<li>In your SD root, there will be a file called 42383841.bin: this is your dumped DSiWare which you can use for <a href="./fredminer">Fredtool.</a></li>
			<li>Delete your F00D43D5.bin from your computer and your Nintendo DSiWare folder. Delete your tadmuffin_out.zip and the extracted folder. These are no longer needed once you have 42383841.bin.
			<br>If you moved any .bin files out of the Nintendo DSiWare folder back in step 7, move them back in now.</li>
		</div>
		-->
		
<?php
include "footer-btn.php";
?>