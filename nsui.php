<?php
$title = "NSUI Tutorial";
$desc = "How to use NSUI for 3DS";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>New Super Ultimate Injector usage guide</h1></center>
            <hr>
            The <a href="https://www.dropbox.com/s/s8fxlz3zv25edtw/Debug.zip?dl=0" target=”_blank”>New Super Ultimate Injector</a> can be used to create installable games from certain older consoles on a 3DS Family system. <br>The 3DS natively contains hardware to run such games, which is why VC Injects (which is what these are) are more desirable than emulators, as they automatically get better performance and compatibility. 
            <div class="warning"><b>If you wish to run Nintendo DS (ie "old DS") games, you should use <a href="https://wiki.ds-homebrew.com/twilightmenu/installing-3ds.html" >TWiLightMenu++</a> instead.</b></div>
            <hr>
           <p>For this example, I will be making a VC inject of Pokemon Emerald for the Game Boy Advance. Broadly speaking, the steps will not differ too much for other supported VC injectable consoles.
            <br>To begin, open New Super Ultimate Injector for 3DS.exe, and create a new project.<br>
            <br><img src="./img/nsui1.png"><br>
            <p>Once the project loads, import your legally dumped GBA rom by navigating to it in the window that appears when you click this button.<br>
            <br><img src="./img/nsui2.png"><br>
            <br>Most of the information about your rom will be automatically prefilled. You may customise it as you wish. The options are reasonably self-explanatory, however if you are unsure, hover your mouse over a box or button for a short explanation of what it does.
            <p><img src="./img/nsui3.png"><br>
            <br>Most of the customisation is up to you. You can pick a long and short name, change the game icon, choose a title ID, modify the CIA banner, etc, etc. If you are lazy, most of these options can be left unchanged, but you should click "Download title screen from database" under icon settings and banner settings in order to get a half decent icon and banner image that you don't have to go hunting for.
            <br><b>Importantly, at this time, there is no way to change button mapping for a VC inject.</b>
            <br>Under "Edit content options" at the bottom, you can apply a hard reset and or a sleep patch, if you want to do that.
            <br>Once you have finished customising your rom, export it.
            <p><img src="./img/nsui4.png"><br>
            <br>It can then be installed to your console via FBI, which by this point you should already have.
            <br>Here is an example of what the database title screen import looks like on a console. It's pretty good, for something that takes no effort on the user's behalf.
            <p><img src="./img/nsui5.png"><br>
            <div class="blue">VC injects count as Home Menu titles. You may have 300 Home Menu titles at one time, system apps do count, and folders don't change the limit.</div>
<?php
include "footer.php";
?>