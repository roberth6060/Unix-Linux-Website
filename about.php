<?php
$path = "./";
$page = "About";
include $path."assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>About</h1>
    <h2>What is Linux</h2>
    <p>Linux is a free and open source operating system (OS). A system's hardware and resources, such as the CPU,
        memory, and storage, are directly managed by an operating system, which is a piece of software. The OS
        establishes connections between all of your software and the working physical resources by sitting in between
        applications and hardware.
    </p>
    <h2>How does Linux work</h2>
    <p>The kernel is at the heart of every Linux system. The kernel distinguishes Linux from other operating systems. It
        is the heart of the operating system, serving as a link between user-level applications and the underlying
        hardware components.

        It allows software to communicate with the underlying physical hardware. All running processes, memory, files,
        and so on are managed by the kernel. In a nutshell, the kernel is responsible for the following:

        Memory Management - The kernel keeps track of the memory used by the system's various applications.
        Device Management - It also manages various system-connected devices such as input and output devices.
        Process Management - The kernel manages running processes in order to avoid conflicts and deadlocks and to
        ensure that the system runs smoothly.
        System calls and security - The kernel receives and handles service requests from processes. [2]

        As previously stated, the kernel sits directly between user processes and the underlying hardware, which
        includes RAM, CPU, I/O devices, storage, graphics, and networking.

        Other essential components of the Linux operating system, in addition to the kernel, include GNU tools, system
        utilities, installed applications, and many more. All of these, when combined, form a functional operating
        system.
    </p>
    <h2>What is a Linux Desktop Environment</h2>
    <p>An integrated Graphical User Interface (GUI) that enables users to interact with the operating system is provided
        by a desktop environment's components. To name a few, it includes graphical elements such as icons, menus,
        windows, taskbars, wallpapers, widgets, and panels.

        Modern graphical Linux distributions such as Debian, Ubuntu, Fedora, Rocky, and AlmaLinux include a desktop
        environment by default. In contrast to the command line interface, which requires a high skill set to use, it
        improves user interaction and allows users to easily manage the system.

        FUN FACT: There are currently over 600 active Linux distributions. Another 500 are in the works, forming a
        complex living system that is constantly upgraded and expanded. According to Linux distribution usage
        statistics, the most popular are Debian, Gentoo, Ubuntu, Linux Mint, Red Hat Enterprise Linux, CentOS, Fedora,
        Kali Linux, Arch Linux, and OpenSUSE. [4]
    </p>
    <h2>Linux and Open Source</h2>
    <p>In 1991, the first version of the Linux operating system for the general public was made available. The GNU
        General Public License is currently in effect (GPL). Open Source implies that anyone can study, modify, and
        redistribute the source code as long as they do so under the terms of the GNU GPL license.

        Linux has grown by leaps and bounds over the years to become one of the world's largest open-source projects. It
        has won the hearts of IT professionals, desktop enthusiasts, and hobbyists all over the world.

        It benefits from a sizable community of active and tireless developers who work on the kernel, look for and fix
        bugs, add new features, and co
    </p>
    <h2>Beginner-Friendly Linux Distributions</h2>
    <p>A Linux distribution, also known as a 'distro,' is a version of the Linux operating system based on the Linux
        kernel. It also includes system tools and services, applications, and additional programs such as LibreOffice,
        GIMP, and the Firefox web browser.

        Ubuntu from Canonical, Debian from the Debian Project, Fedora from the Fedora Project, OpenSUSE from SUSE, and
        Rocky and AlmaLinux, both of which are 100% binary compatible with Red Hat, are all popular free Linux
        distributions.

        Oracle Linux, Red Hat Enterprise Linux (RHEL), and SUSE Enterprise Server are commercial distributions (SLES).

        Ubuntu is the best option when looking for a Linux distribution that is user- and learner-friendly. It is a
        completely free and open-source distribution with an intuitive and user-friendly interface that provides a
        seamless user experience.

        The LibreOffice suite, Firefox browser, audio & video player, photo viewer, screenshot tool, Thunderbird email
        client, calendar, and many more useful programs are included right out of the box. It is highly customizable and
        adaptable.

        Linux Mint, Zorin, Elementary OS, MX Linux, and Linux Lite are some other beginner-friendly distributions. It's
        worth noting that the majority of these are based on Debian or Ubuntu.
    </p>
    <h2>Linux distributions for Servers</h2>
    <p>RHEL, SUSE Linux Enterprise Server (SLES), Debian stable, Ubuntu Server, and Fedora (Fedora Server and Fedora
        CoreOS for containerized workloads) are among the Linux distributions optimized for server environments,
        including bare-metal and cloud deployments.

        Due to their excellent performance, remarkable stability, and security, they are regarded as ideal. Ubuntu
        Studio and Fedora Design Suite are useful tools for artists, content creators, and multimedia content producers.
    </p>
</div>
<?php
include $path."assets/inc/footer.php";
?>