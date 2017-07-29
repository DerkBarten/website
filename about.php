<?php

  include("header.php");
  include("preloader.php");
?>

<body>

  <div id="main">
    <div class="container">
      <div class="row">
    <?php
      include("aboutme_sidebar.php");
    ?>

                 <!-- About Me (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">


                            <div class="sub-title">
                           		<h2>About Me</h2>
                                <a href="contact.php"><i class="icon-envelope"></i></a>
                             </div>


                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">


                                <!-- My Intro Start -->
                                <div class="post-title margin-bottom-30">
                                    <h1>Hi, I am <span class="main-color">Derk</span></h1>

                                    <ul class="knowledge">
                                      <li class="bg-color-6">Machine Learning</li>
                                      <li class="bg-color-1">Programming</li>
                                      <li class="bg-color-4">Reverse Engineering</li>
                                      <li class="bg-color-5">Network Security</li>
                                     </ul>

                                   </div>
                                    <p>
                                      I'm a third-year bachelor student at the University of Amsterdam studying Artificial Intelligence. I enjoy learning about the ways in which
                                      seemingly impossible tasks can be solved using Machine Learning techniques. Artificial Intelligence is an incredibly active and fast
                                      growing field of study which I love being a small part of. Research in Artificial Intelligence yields amazing applications which improve our
                                      everyday lives.
                                    </p>
                                    <p>
                                      Besides Machine Learning, I love working with computers and learning about how they operate. I like playing around with Raspberry Pi's and
                                      using them in practice to automate things around the house, while at the same time learning a lot of new stuff about computers. Furthermore,
                                      I like to peek into the workings of little programs by disassembling and trying to figure out what each part does. These little puzzles
                                      help a lot in understanding the way a computer interprets human written code. Lastly, I am quite interested in software and network security.
                                      I am especially fascinated by the clever ways people manage to exploit obscure vulnerabilities in programs and, perhaps, even more fascinated
                                      by the people who manage to withhold such attackers.
                                    </p>


                                  <!-- My Service Start -->
                                  <div class="post-title">
                                    <h1>My <span class="main-color">Experiences</span></h1>
                                   </div>

                                  <div class="list list-style-2 margin-top-30">
                                    <ul>
                                      <li>Programming (C, Python, C#, Java, etc)</li>
                                      <li>Web Development (PHP, HTML)</li>
                                      <li>Unix/Linux Environment</li>
                                      <li>Machine Learning</li>
                                      <li>Reverse Engineering Basics</li>
                                      <li>Networks and Network Security Basics</li>
                                      <li>Proficient English Skills</li>
                                     </ul>
                                   </div>
                                   <!-- My Service End -->

                                </div>

                                  <div class="col-md-12 text-center">
                                    <a href="contact.php" data-toggle="tooltip" data-placement="top" title="Visit contact page to get in touch" class="load-more-button">Contact</a>
                                   </div>

                             </div>

                         </div>
                         </div>


                  <?php include('footer.php') ?>

                  </div>
                  <!-- About Me (Right Sidebar) End -->
            </div>
         </div>
      </div>





    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
   </body>
 </html>
