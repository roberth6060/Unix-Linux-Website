<?php
$path = "./";
$page = "Installation";
include $path."assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Installation</h1>
    <h2>How to Install Linux on Windows 10</h2>
    <ul>
        <li>Start typing in the Windows Search Bar. This is the magnifying glass-shaped icon in your screen's
            bottom-left corner.</li>
        <li>Then, in the search bar, type "DISKMGMT.MSC" and press enter.</li>
        <li>Select Shrink Volume from the context menu of your primary hard drive. If you have more than one drive,
            select the one labeled Primary Partition. This is commonly referred to as the C: drive.</li>
        <li>Then select how much you want to reduce the size of your drive. For Linux, it is advised that you set aside
            at least 20GB (20,000MB).</li>
        <li>Press the Shrink button. Writing a Linux Distro onto a USB thumb drive or external drive 4GB or larger is
            required once you have a designated space to install Linux. </li>
    </ul>
    <img src="assets/img/Picture1.png">
    <h2>How to make your USB Linux bootable</h2>
    <p>When doing this make sure you use an empty stick, as all the data will erase!</p>
    <ul>
        <li>Download an ISO image of a Linux distribution. A disk image is represented by an ISO file. Some of the best
            choices include Ubuntu, Mint, and Debian. They are available for free download from the main website of each
            distribution. We're going to use Ubuntu, as it is the most beginner friendly, for this article.</li>
        <li>Plug in the USB drive to your computer. You may be asked to format your hard drive. This will erase all of
            the data on your hard drive, so make a backup before you begin.</li>
        <li>Etcher can be downloaded for free. The most recent version of the application can be found here.</li>
        <li>Select your USB drive from the Device list in Etcher. If you are unsure which drive to use, eject all other
            drives until you are left with only one to choose from.</li>
        <li>Click the Select button under Boot Selection and select the ISO file you downloaded earlier. Change none of
            the other default settings.</li>
        <li>Lastly, press Start. If a pop-up window appears asking you to choose a mode for writing the image, select
            ISO.</li>
    </ul>
    <h2>How to Install Linux from USB</h2>
    <p>Be careful, changing BIOS can be a bad idea if you don’t follow the instructions completely. If you didn’t make
        copies of your had disk you will loose all data, as the installation deletes everything. INCLUDING WINDOWS! So,
        if you don’t have a copy of Windows, you can’t go back that easily.</p>
    <ul>
        <li>Insert a USB bootable Linux drive.</li>
        <li>Select the Start button. This is the button that looks like the Windows logo in the lower-left corner of
            your screen.</li>
        <li>Then, while clicking Restart, hold down the SHIFT key. You will now be in the Windows Recovery Environment.
        </li>
        <li>Then select Use a Device.</li>
        <li>Look for your device in the list. If your drive isn't listed, select EFI USB Device, then select your drive
            from the next screen.</li>
        <li>Linux will now boot up on your computer. If your computer restarts Windows, there was either a problem with
            your drive or you may need to change BIOS settings.</li>
        <li>Choose Install Linux. Some distributions also allow you to test the OS before installing it.</li>
        <li>Follow the installation instructions. This will vary depending on the distribution you are attempting to
            install. These specifics could include your WiFi network, language, time zone, keyboard layout, and so on.
            You may also be required to set up an account, complete with a username and password. Make a note of any
            pertinent information, as you will most likely require it in the future.</li>
        <li>During the installation process, most distributions will allow you to partition your drive or erase it and
            perform a clean install. That means all your apps and data will be erased.</li>
        <li>When prompted, restart your computer. If your system has more than one operating system, rebooting will take
            you to a GNU GRUB screen. This screen allows you to choose which operating system to boot.</li>
        <li>Try moving your Linux distribution higher on your boot list in BIOS if you don't see a GRUB screen when your
            computer starts up.</li>
    </ul>
    <p>After that, you can perform a hardware check. To make some hardware work, you may need to download additional
        drivers in some cases. The option to download drivers can be found in your new Linux OS's Systems Settings.
        After ensuring that your hardware is operational, you can begin exploring and using your Linux distribution.
        If you are a Mac user who wants a Linux operating system on it. Don’t.
    </p>
    <h2>First look at Linux</h2>
    <p>Now, we will speak from Unbuntus perspective, as we downloaded him first. When you first get the loading screen,
        it will ask you to make a lot of ubuntu associated accents. Additionally, a double passport login. Don’t get
        scared, that's just security precautions we talked about earlier. Closely follow what the screen tells you,
        write down all accounts and passwords.</p>
</div>
<?php
include $path."assets/inc/footer.php";
?>