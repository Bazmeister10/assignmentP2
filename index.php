<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Homepage for SwinNet website" />
    <meta name="keywords" content="HTML5, tags" />
    <meta name="author" content="Tessa Mordue" />
    <title>Homepage</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="./images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <!-- below is code for the navigation bar, specifically when screen size is above 1460px -->
    <div class="navbar">
        <div class="initial">
            <a class="link" href=enhancements.php><span>Enhancements</span></a>
            <a class="link" href=about.php><span>About Us</span></a>
            <a class="link" href=apply.php><span>Apply Now</span></a>
            <a class="link" href=jobs.php><span>Job Opportunities</span></a>
            <a class="link active" href=index.php><span>Homepage</span></a>
            <a href="index.php">
                <img id="logo" src="styles/images/logo.png" alt="SwinNet logo featuring a cloud icon overlayed with connected nodes. It links to the homepage." title="SwinNet logo" />
            </a> 
        </div>
    <!-- below is code for the navigation bar, specifically when the screen size is below 1460px, 
        it results in the navigation bar compressing to form a burger menu dropdown -->
        <div class="drop">
            <button class="buttonDrop"></button>
            <div class="dropContent">
                <a class="link active" href=index.php><span>Homepage</span></a>
                <a class="link" href=jobs.php><span>Job Opportunities</span></a>
                <a class="link" href=apply.php><span>Apply Now</span></a>
                <a class="link" href=about.php><span>About Us</span></a>
                <a class="link" href=enhancements.php><span>Enhancements</span></a>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- this div is for setting a link destination for the top of the page -->
        <div id="topI">
            <div class="anchor"></div>
        </div>
        <section class="headAll">
            <h1>WELCOME TO SWINNET</h1>
        </section>
        
        <section id="otherText">
            <section class="services">
            <h2>Our Team</h2>
            </section>
            <p>Here at SwinNet we pride ourselves on delivering only the best network service and assistance to our customers. </p>
            <p>SwinNet has been providing quality networking services for over 10 years! Our team values your safety online. </p>
            <p>As the ability to connect with others through the internet improves, the risk involed also increases. Our team is fully equiped to ensure your safety on your network while making the network easy to use.</p>
        
            
            <p id="location">Click <a href="https://www.youtube.com/watch?v=AV9m5cm3nAs">HERE</a> to view our youtube video explaining each page further.</p>
        </section>
        <div id="photoHolder">
            <img id="groupPhoto" src="images/group_photo.jpg" alt="Group photo of SwinNet website creators" title="Group photo of SwinNet website creators">
        </div>
        <section id="beneathDL">
            <dl>
                <dt>Here are links to our email:</dt>
                <dd>Emily Hocking = <a href="mailto:104554365@student.swin.edu.au">104554365@student.swin.edu.au</a><br>
                    Tessa Mordue = <a href="mailto:104540555@student.swin.edu.au">104540555@student.swin.edu.au</a><br>
                    Finbarr Brennan = <a href="mailto:104022163@student.swin.edu.au">104022163@student.swin.edu.au</a><br>
                    Nisha Purumandla = <a href="mailto:104188984@student.swin.edu.au">104188984@student.swin.edu.au</a><br>
                    Keshav Arora = <a href="mailto:104322960@student.swin.edu.au">104322960@student.swin.edu.au</a><br><br>
                    Group Email = <a href="mailto:104554365@student.swin.edu.au,104540555@student.swin.edu.au,104022163@student.swin.edu.au,104188984@student.swin.edu.au,104322960@student.swin.edu.au">Click here</a>
                </dd>
            </dl>
        </section>

        <section class="services">
            <h2>Our services</h2>
        </section>
        <section id="serviceIndex">
            <h3>Overview</h3>
            <ul>
                <li>Timely resolution of network issues</li>
                <li>Assistance in setting up a home network</li>
                <li>Help with managing your network and related devices</li>
                <li>Helpful meetings with experienced staff and outgoing customer service</li>
            </ul>
            
                <h3>We go to you!</h3>
            <p>And we ensure in your own home/work environment that your network is online and secure.<br>
            Got security threats? Or devices to install?<br>
            No problem! With our services, we can 100% guarantee that your network will be operating and safe.</p>
         </section>
              <!-- when the page is over 1460px wide, this is floated to the right, when it is under, it re-aligns to the left underneath the above section -->
            <aside id="paidService">
                <h3>Our paid services include:</h3>
                <p>Basic installation (we install what you provide)</p>
                <ul>
                    <li>$100 call out fee, going by $20 an hour</li>
                    <li>Note that an extra fee of $200 will apply if we are tasked to install and connect over 12 devices</li>
                </ul>
           
                <p>Premium installation (we install what we provide)</p>
                <ul>
                    <li>$100 call out fee, $750 equipment cost, $30 an hour</li>
                    <li>Installing 6 devices including a top-of-the-range router, switch, server and wireless access point</li>
                </ul>
          
                <p>Secure service (we inspect your network)</p>
                <ul>
                    <li>$100 call out fee, $250 equipment cost, $30 an hour</li>
                    <li>Reviewing all devices of your system and making secure improvements to ensure your security is up to standard</li>
                </ul>
            </aside>
           
        <br><br><br>
        <article id="awardIndex">
            <p>Due to our consistent and outstanding performance in caring for our network society, we have won the 2023 Victorian award for Most Skilled and Helpful Small Business</p>
            <p>Thank you for all the recent support! We hope to continue to be a major help and assistance in our community.</p>
        </article>
<br>
        
        <div class="topOfPage"><a href="#topI">CLICK HERE TO RETURN TO TOP OF PAGE</a></div>
    </div>
    <footer>
        <!-- here is the code for setting up the footer, in wide view, the link footer is between the leftfooter and rightfooter, 
            but when in a smaller view, linkfooter re-aligns beneath the other footer classes -->
        <section class="leftfooter">
            <p>COPYRIGHT &copy; 2023 SwinNet Pty Ltd</p>
            <p>All rights reserved</p><br><br><br>
        </section>
        <section class="rightfooter">
            <p>CONTACT:</p>
            <p>Available 9AM - 5PM Weekdays</p>
            <p>04 0404 0404</p>
            <p>123 Swinburne Street</p><br>
        </section>
        <section class="linkfooter">
            <h3>PROJECT CREATED BY:</h3>
            <p>
                <a href="mailto:104554365@student.swin.edu.au">Emily Hocking</a><br>
                <a href="mailto:104540555@student.swin.edu.au">Tessa Mordue</a><br>
                <a href="mailto:104022163@student.swin.edu.au">Finbarr Brennan</a><br>
                <a href="mailto:104188984@student.swin.edu.au">Nisha Purumandla</a><br>
                <a href="mailto:104322960@student.swin.edu.au">Keshav Arora</a><br><br>
            </p>
        </section>
    </footer>

</body>
</html>
