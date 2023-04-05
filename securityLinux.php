<?php
$path = "./";
$page = "Security Linux";
include $path."assets/inc/header.php";
?>
<div id="top" class="container">
    <h1>Security Linux</h1>
    <h2>Linux security principles</h2>
    <p>At all stages of setting up your Linux computer, security should be a top priority. Implementing a good security
        policy on a machine necessitates a solid understanding of Linux fundamentals as well as some of the applications
        and protocols that are used.

        Linux security is a vast subject with numerous complete books on the subject. I couldn't include everything in
        this tutorial, but it does provide a basic overview of security and how techniques and tools can be used to
        provide additional security on a Linux computer. Hopefully, this will provide enough information to investigate
        other sources of information.
        Despite the fact that Linux users are less vulnerable to viruses than users of other major operating systems,
        there are still many security issues that Linux users and administrators must deal with.

        Identifying why you are doing something is one of the most important steps in any task. Rather than simply
        stating that a system must be secure, you must consider what is meant by secure, what risks are associated with
        any data that is available, and what impact your security measures will have on your users. How else will you
        know if you've met your goal of making a system secure if you don't first consider any of these factors?
    </p>
    <h2>Security requirements</h2>
    <p>It is important to think about the aspects of security that are necessary after determining the reasons why
        security is being implemented. The following are the primary security requirements:

        Authorisation entails only granting access to those who require it.
        Authenticity entails confirming that they are who they claim to be.
        Privacy / Confidentiality - Ensure that personal information is not jeopardized.
        Integrity entails making certain that the data has not been tampered with.
        Non-repudiation - Proof that data was received. The ability to demonstrate it in court
        Availability - Ensure that the system can carry out its function.

        There are some security requirements that you must comply with even though you have no direct control over them.
        These could be legal requirements (such as the Data Protection Act of 1998), standards compliance (such as the
        ISO 7984-2 International Standards Organization Security Standard), or corporate policy. If you process credit
        card transactions, you may be required to meet the Payment Card Industry's minimum security standards (PCI).

        The Data Protection Act, for example, only states that "appropriate security should be in place" in some of
        these standards, whereas other ones might be more detailed (e.g. a corporate policy may insist on a minimum
        length of passwords etc.).
    </p>
    <h2>Enemy</h2>
    <p>To effectively protect a computer system, you must first understand who is attempting to attack your system and
        what they are attempting to do. I provided some examples by answering a few questions about those who might
        attempt to attack a computer system.

        Who would want to? What are they thinking? What do they hope to achieve? How do they manage it?

        After reviewing the security requirements in the previous section, you can begin developing your own security
        policy. It could entail creating a security policy from scratch or attempting to implement a mandated corporate
        security policy. Even if a security policy is already in place, there may be additional steps that are more
        appropriate for specific systems. There are several factors to consider when developing your own security
        policy.

        If the principles of Authorization, Authenticity, Privacy / Confidentiality, Integrity, Non-repudiation, and
        Availability apply to your system, you should make sure you have addressed them. Consider how this will be
        implemented by users and system administrators. If a security process is difficult to implement or prevents
        someone from doing their job, the process may be ignored or not followed. It's important to take enforcement and
        auditability into account when creating security policies.

        After the computer has been secured, it should be tested to see if there are any unanticipated potential
        vulnerabilities. This can take the form of network port scanning and/or dedicated security software capable of
        fully analyzing a system from both the local software and networking perspectives. Penetration testing is the
        practice of testing access. Security testing tools are available as either open-source or proprietary software.
        Nmap is a popular open-source network scanner that can be used to detect network vulnerabilities. Only use
        penetration testing tools on systems where you have permission. Running these against other systems may be
        considered a crime.
    </p>

</div>
<?php
include $path."assets/inc/footer.php";
?>