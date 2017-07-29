<?php
  include("header.php");
  include("preloader.php");
?>

<body>
  <div id="main">
    <div class="container">
      <div class="row">
        <?php include('aboutme_sidebar.php') ?>
        <!-- Blog Post (Right Sidebar) Start -->
        <div class="col-md-9">
          <div class="col-md-12 page-body">
            <div class="row">
            <div class="sub-title">
           		<h2>My Blog</h2>
                <a href="contact.php"><i class="icon-envelope"></i></a>
             </div>
            <div class="col-md-12 content-page">
              <?php include('post.php') ?>
              <div class="col-md-12 text-center">
               <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
               <div id="post-end-message"></div>
              </div>
            </div>
          </div>
        </div>
        <?php include('footer.php') ?>
      </div>
      <!-- Blog Post (Right Sidebar) End -->
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
