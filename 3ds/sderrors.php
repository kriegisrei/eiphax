<?php
$title="SD Errors";
require('header.php');
?>
<div class="container">
    <div class="content">
        <center><h1>Verifying the integrity of an SD card</h1></center>
        <hr>
        <p><div class="blue">This short guide will walk you through the process of ensuring your SD/microSD card is free of errors. It is intended for situations in which an illegitimate or failing SD/microSD card may be causing issues with booting, running or otherwise using your system.
        <p>Please ensure you follow all steps and understand the instructions.
        <p>This guide is written with Windows users in mind. The process and steps will be similar for Mac users, and I assume anyone smart enough to use Linux knows how to copy and paste.</div>
        <hr><br>
        Note: if someone has directed you here to diagnose a problem, please <b><u>take a screenshot of the h2testw results window and send that to them when it is finished.</b></u>
        <p>
        <ol>
            <li>Create a new folder on your desktop named "SD". </li>
            <li>Open a file explorer window and navigate to the root of your SD/microSD card. The root is the first thing you see when you open your SD card, but do not open any folders.</li>
            <li>Select all files and folders in the window. If on Windows: click inside the open window and hold <div class="code">Control/CTRL</div> <i>(Mac users Command)</i> and, while holding <div class="code">Control</div>, press A. All items in the window should now have a transparent blue highlight.</li>
            <li>Right click any highlighted item on the list and select <div class="code">Copy</div>. (You may also hold <div class="code">Control</div> and press C.)</li>
            <li>Without closing the current window, open the folder on your desktop named "SD".</li>
            <li>Click inside the open window and then either hold <div class="code">Control</div> and press V, or right click and select <div class="code">Paste</div>.</li>
            <li>Once this operation has finished, deselect these items and switch back to your open SD/microSD card root window.</li>
            <li>Select all items on your SD card again, and delete them with the <div class="code">Del/Delete</div> key, or by right clicking any item and selecting <div class="code">Delete</div> to delete all selected items. In order to achieve reliable results using this test, the card in question should be empty at this point.</li>
            <li>Format your SD/microSD card using one of the recommended tools (see bottom of page), making sure it is a full format, NOT quick format (or equivalent), fat32 format type and 32kb/32768 allocation size. It will take a while.</li>
            <li>Follow instructions <a href="https://3ds.hacks.guide/h2testw-(windows).html">here</a>. This will take a while too. <i>Linux users should instead follow <a href="https://3ds.hacks.guide/f3-(linux)">this</a>. Mac users <a href="https://3ds.hacks.guide/f3x-(mac)">here</a>.</i></li>
            <li>If it passes, delete all the h2test files and move your own files back from the "SD" folder on your desktop, then try what you were doing again. If there is any failure whatsoever, you will probably need a new SD card.</li>
        </ol>
        <p>
        <div class="info">Note: This test is intended to rule out the possibility of a bad card. While a format + test <b>may</b> fix some corruption or hardware failure issues <b>temporarily</b>, if you have had issues with corrupted files, Windows asking to format the drive etc, you should buy a new SD card at your earliest convenience. Flash storage (ie SD cards) are not meant as a long term storage solution and are prone to failure for absolutely no reason.</div>
        <div class="blue">
            <p>Suggested format tool for <a href="http://www.ridgecrop.demon.co.uk/index.htm?guiformat.htm">Windows</a>
            <br>Suggested format tool for <a href="https://gparted.org/download.php">Linux</a>
            <br>Suggested format tool for <a href="https://support.apple.com/guide/disk-utility/format-a-disk-for-windows-computers-dskutl1010">MacOS</a>
        </div>
    </div>
</div>
<?php require('footer.php'); ?>
