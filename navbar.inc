


<?php

echo '<div class="navbar">
        <div class="initial">
            <a class="link" href=enhancements.html><span>Enhancements</span></a>
            <a class="link" href=about.html><span>About Us</span></a>
            <a class="link active" href=apply.html><span>Apply Now</span></a>
            <a class="link" href=jobs.html><span>Job Opportunities</span></a>
            <a class="link" href=index.html><span>Homepage</span></a>
            <a href="index.html">
                <img id="logo" src="styles/images/logo.png" alt="SwinNet logo featuring a cloud icon overlayed with connected nodes. It links to the homepage." title="SwinNet logo" />
            </a>
        </div>

    <!-- below is code for the navigation bar, specifically when the screen size is below 1460px, 
        it results in the navigation bar compressing to form a burger menu dropdown -->
        <div class="drop">
            <button class="buttonDrop"></button>
            <div class="dropContent">
                <a class="link" href=index.html><span>Homepage</span></a>
                <a class="link" href=jobs.html><span>Job Opportunities</span></a>
                <a class="link active" href=apply.html><span>Apply Now</span></a>
                <a class="link" href=about.html><span>About Us</span></a>
                <a class="link" href=enhancements.html><span>Enhancements</span></a>
            </div>
        </div>
    </div> ';
	
?>
