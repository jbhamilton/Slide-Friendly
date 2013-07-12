<?php
$depen = <<<CODE
        <!-- slide-friendly dependincies -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="slide-friendly.js"></script>
        <link rel="stylesheet" href="slide-friendly-css.css" type="text/css" media="screen"> 

CODE;

?>


<html>

<head>
    <title>Slide-Friendly, A JQuery responsive design image and content slider</title>


    <!-- slide-friendly dependincies -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="slide-friendly.js"></script>
    <link rel="stylesheet" href="slide-friendly-css.css" type="text/css" media="screen"> 

    <link rel="stylesheet" href="css.css" type="text/css" media="screen"> 


</head>

<div id="pretty-wrap">

    <div id="header" class="">

        <h1>Slide Friendly</h1>
        <div class="text-wrap">
            <span class="text-box">
                An Easy To Use Slider Gallery thats flexable, lightweight, and supports all types of media
            </span>
        </div>
    </div>




<div id="slide-friendly">
    <div id="slide-container">

        <ul>
            <li>SF</li>
            <li>IFRAME</li>
            <li>FLEXABLE</li>
            <li>RESPONSIVE</li>
            <li>RE-DESIGN</li>
            <li>SEO</li>
        </ul>

        <div class="slide-wrap">

            <div class="title">Slide Friendly</div>

            <img src="images/1.jpg" alt=""/>

            <div class="slide-body">
                So easy to use you will wonder why you weren't friends earlier
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">You Can Even Embed IFrames !!!</div>

            <iframe src="http://player.vimeo.com/video/60102539" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

            <div class="slide-body">
                Provide your users with a rich interactive media slider with Slide Friendly
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">Retain Excellent Quality Across Your Images, No Matter The Size!</div>

            <img src="images/2.jpg" alt=""/>

            <div class="slide-body">
                Slide Friendly is flexable so you don't have to worry about what you stuff into it looking bad.
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">Responsive Design with Mobile Devices In Mind First</div>

            <img src="images/3.jpg" alt=""/>

            <div class="slide-body">
            We know that your mobile vistors love preferential treatment and we know that using sites that are responsive in their design are the most rewarding <strong> to build </strong> and use.
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">Re-Design Slide Friendly With Ease</div>

            <img src="images/4.png" alt=""/>

            <div class="slide-body">
                Redesigning Slide Friendly is as simple as changing the style sheet to the colors you see fit.
                </br>
                Add any sort of dynamic content you desire below the sliding picture and suddenly you have multiple pages of beautiful content, and don't worry about the size of the content we got your back on fluid sizing
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">SEO Friendly Design</div>

            <img src="images/4.png" alt=""/>

            <div class="slide-body">
                Slide Friendly Knows the importance of organic search traffic and doesn't perform any black magic to accomplish it's simple task, and thats sliding! 
            </div>
        </div>

    </div><!--end slide-container-->
</div><!--end slide-friendly -->

<div class="text-wrap">
    <p>To Get started with Slide Friendly</p>
    <ul id="slide-how-to">
        <li>
            <p>Get the Dependencies</p>
            <p><a href="http://www.github.com/jbhamilton/slide-friendly">Download the dependencies from github</a></p>
            <pre><code>
                git clone http://github.com/jbhamilton/Slide-Friendly.git
            </code></pre>
            <pre><code>
                <?php echo htmlentities($depen); ?>
            </code></pre>
            <p>Or just copy and paste the JavaScript, CSS, and HTML</p>
        </li>
        <li>
            <p>Include the Slide Friendly Base HTML Markup</p>
            <p>Change the first Unordered-list text to correspond with each slide (The number of list items in the first ul should match the number of slides!)</p> 
            <p>Change the path to the images you wish to include, or the iframe element you want embeded</p>
            <p>Change the caption(or body) of each slide</p>
        </li>
        <li>
            <p>Change The Styling How You See Fit</p>
            <p>The style sheet is divided into two sections, the top deals only with the color scheme which is the only thing you will need to edit</p>
        </li>
        <li>
            <p>Sit Back And Enjoy Some Time With Your New Friend</p>
        </li>
    </ul>

</div>

<div id="gut">
    <h2>Super simple html structure, no javascript knowledge needed!</h2>
    <pre><code>

<?php 
$code = <<<CODE

<div id="slide-friendly">
    <div id="slide-container">

        <ul>
            <li>SF</li>
            <li>IFRAME</li>
            <li>FLEXABLE</li>
            <li>RESPONSIVE</li>
            <li>RE-DESIGN</li>
            <li>SEO</li>
        </ul>

        <div class="slide-wrap">

            <div class="title">Slide Friendly</div>

            <img src="images/1.jpg" alt=""/>

            <div class="slide-body">
                So easy to use you will wonder why you weren't friends earlier
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">You Can Even Embed IFrames !!!</div>

            <iframe src="http://player.vimeo.com/video/60102539" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

            <div class="slide-body">
                Provide your users with a rich interactive media slider with Slide Friendly
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">Retain Excellent Quality Across Your Images, No Matter The Size!</div>

            <img src="images/2.jpg" alt=""/>

            <div class="slide-body">
                Slide Friendly is flexable so you don't have to worry about what you stuff into it looking bad.
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">Responsive Design with Mobile Devices In Mind First</div>

            <img src="images/3.jpg" alt=""/>

            <div class="slide-body">
            We know that your mobile vistors love preferential treatment and we know that using sites that are 
            responsive in their design are the most rewarding <strong> to build </strong> and use.
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">Re-Design Slide Friendly With Ease</div>

            <img src="images/4.png" alt=""/>

            <div class="slide-body">
                Redesigning Slide Friendly is as simple as changing the style sheet to the colors you see fit.
                </br>
                Add any sort of dynamic content you desire below the sliding picture and suddenly you have multiple pages of beautiful content,
                 and don't worry about the size of the content we got your back on fluid sizing
            </div>
        </div>

        <div class="slide-wrap">

            <div class="title">SEO Friendly Design</div>

            <img src="images/5.png" alt=""/>

            <div class="slide-body">
                Slide Friendly Knows the importance of organic search traffic and doesn't perform 
                any black magic to accomplish it's simple task, and thats sliding! 
            </div>
        </div>

    </div><!--end slide-container-->
</div><!--end slide-friendly -->
CODE;

echo htmlentities($code);
?>

    </code></pre>

    <h3>Easily Re-Styled Using CSS With A Tiny Foot Print</h3>

    <pre><code>
<?php echo htmlentities(file_get_contents('slide-friendly-css.css')); ?>
    </code></pre>

    <h4>Super Easy To Hook Into Pre-Exsisting Sites Due To Small Size</h4>

    <pre><code>
<?php
echo htmlentities($depen);
?>
    </code></pre>

    <h5>Clean JavaScript/JQuery code makes for easy retro-fitting</h5>

    <pre><code>
    
    <?php
        echo htmlentities(file_get_contents('slide-friendly.js'));
    ?>

    </code></pre>

</div>

</div>
</body>
</html>


