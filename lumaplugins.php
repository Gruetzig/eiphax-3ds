<?php
$title = "Luma Plugins tutorial";
$desc = "How to install and run Luma Plugins on the 3DS";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1 id="luma3ds-plugin-loader-guide">Luma3ds Plugin Loader Guide</h1></center>
            <p>This guide will teach you how to install and use two custom luma forks with different plugin types</p>
            <p>If you're trying to use the ACNL plugin follow the steps listed in the <a href="https://discord.gg/EZSxqRr">AC Modding Discord Server</a></p>
            <h3 id="requirements">Requirements</h3>
            <ul>
            <li>A console with boot9strap installed</li>
            <li>A plugin file you want to use (<code>.3gx</code> or <code>.plg</code>), if you don't have any you can find them by doing a quick google search, here's a list of some good ones:</li>
            </ul>
            <p>Pokemon Ultra Sun and Ultra Moon: <a href="https://gbatemp.net/threads/release-ultrasumoframework-ntr-plugin-for-ultra-sumo.489098/">ultraSuMoFramework</a></p>
            <p>Pokemon Sun and Moon: <a href="https://github.com/AnalogMan151/sumoCheatMenu/releases">sumoCheatMenu</a></p>
            <p>Mario Kart 7: <a href="https://github.com/DarkFlare69/MK7-Online-NTR-Plugin-v3/raw/master/MarioKart7.3gx">Mario Kart 7 Online NTR Plugin</a></p>
            <p>The Legend of Zelda: Ocarina of Time 3D: <a href="https://github.com/Nanquitas/Zelda-Ocarina-Of-Time-3D-Plugin">Zelda-Ocarina-Of-Time-3D-Plugin</a></p>
            <p>Assorted Games: <a href="https://itspizzatime1501.github.io/files/plugins/CTRPF-Plugins-master.zip">CTRPF Plugins 3.0</a></p>
            <h3 id="installing-plugin-type-plg">Installing plugin type <code>.plg</code></h3>
            <p>Currently there are no up-to-date forks of Luma3ds that have <code>.plg</code> file support. Your only option is to use <a href="https://github.com/Nanquitas/BootNTR/releases">BootNTR Selector</a> which requires you to have the <a href="https://github.com/Nanquitas/Luma3DS/releases/latest"><code>.3gx</code> loader fork</a> of Luma3ds installed. To find out how to install the <code>.3gx</code> loader fork you can follow the instructions below. <a href="https://3ds.eiphax.tech/ntrplugins">Here</a> is a guide on using BootNTR Selector.</p>
            <h3 id="installing-plugin-type-3gx">Installing plugin type <code>.3gx</code></h3>
            <ol>
            <li>Download the <code>boot.firm</code> from <a href="https://github.com/Nanquitas/Luma3DS/releases/latest">here</a> and place it on your SD root, make sure you overwrite the current one.</li>
            <li>Make a folder called <code>plugins</code> if it doesn't already exist in the <code>luma</code> folder on your SD</li>
            <li>Inside of the <code>plugins</code> folder make a folder named the titleid of the game you want to use the plugin file for (If you don't know the game titleid you can find a list <a href="http://3dsdb.com">here</a> or <a href="https://hax0kartik.github.io/3dsdb/">here</a>)</li>
            <li>Place your <code>.3gx</code> file in the folder you just created, here is an example that could be helpful:
            <br/><br/><img alt="3gx location" src="/img/lumaplugins2.png" /> <br/><br/> (in this example <code>0004000000030800</code> is Mario Kart 7's titleid)</li>
            <li>Insert your SD into your 3ds and boot it up, if you get a luma config screen select <code>Show NAND or user string in System Settings</code> and press start</li>
            <li>Once you're in the home menu, open the rosalina menu (L + Dpad Down + Select by default) and enable the plugin loader</li>
            <li>Press B to exit rosalina</li>
            <li>Open the game you installed a plugin for, your screen should flash green or blue during the Nintendo 3ds splash</li>
            <li>The standard for cheat menus is the select button, if pressing select doesn't work consider reading the readme of the plugin you're using</li>
            </ol>
            <h3 id="troubleshooting"><span style="text-decoration: underline">Troubleshooting</span></h3>
            <h4 id="game-crashes-when-using-a-plugin"><strong>Game crashes when using a plugin</strong></h4>
            <p>Fix: Don't use that plugin</p>
            <h4 id="screen-doesnt-flash-and-plugin-doesnt-load"><strong>Screen doesn't flash and plugin doesn't load</strong></h4>
            <p>Fix: Check if you got the right titleid, if you're sure you did, try a different plugin</p></div><br/><br/><br/><br/>
		
<?php
include "footer.php";
?>
