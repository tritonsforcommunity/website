<?php include 'header.php';?>

<!-- Fixed nav bar top by adtile -->
 <ul class="topnav">
  <li class="menu-item active"><a href="http://tritonsforcommunity.ucsd.edu/" data-scroll>Home</a></li>
  <li class="menu-item"><a href="#about" data-scroll>About our projects</a></li>
  <li class="menu-item"><a href="#name" data-scroll>Projects by name</a></li>

<!--
  <li class="menu-item"><a href="#major" data-scroll>Projects by major</a></li>
  <li class="menu-item"><a href="#skill" data-scroll>Projects by skills</a></li>
  <li class="menu-item"><a href="#aoi" data-scroll>Projects by area of interest</a></li>
-->
  <li class="menu-item"><a href="#contact" data-scroll>Contact</a></li>
 </ul>

 <script src="adtile-JS/fastclick.js"></script>
 <script src="adtile-JS/scroll.js"></script>
 <script src="adtile-JS/fixed-responsive-nav.js"></script>

<!-- about projects  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="about">
<div class="section regular">
 <div class="container">
  <h1 class="section-heading">About our projects</h1>
  <p>Contribute to the community while learning valuable experiences as you do so! No prior experience required. <!-- We provide a list of projects that students may choose to work on, and we always welcome new project ideas. Students may choose to work on a project by his or her major, skill set, or area of interest; alone or in a team - -->Tritons for Community will provide students the resources they need to make these projects a success. 
  </p>
 </div>
</div> 
<!-- end of about –––––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- projects by name  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="name">
<div class="section regular">
 <div class="container">
  <h1 class="section-heading">Projects</h1>
  <a href="#1" data-scroll>#GirlsLivesMatter</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp
  <a href="#2" data-scroll>Red Cup</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp
  <a href="#3" data-scroll>Connect to Community</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp
  <a href="#4" data-scroll>Green Streets</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp
  <a href="#5" data-scroll>Life Start</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp
  <a href="#6" data-scroll>Petition for a Difference</a>
  <a href="#7" data-scroll></a>
 </div>
</div> 
<!-- end of by name -->
 
<!-- PROJECT DESCRIPTIONS  ––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php include '_projects/1.php';?> <!-- #Girl lives matter -->
<?php include '_projects/2.php';?> <!-- Red Cup  -->
<?php include '_projects/3.php';?> <!-- Connect to Community -->
<?php include '_projects/4.php';?> <!-- Green Streets -->
<?php include '_projects/5.php';?> <!-- Life Start -->
<?php include '_projects/6.php';?> <!-- Petition for a Difference -->
<!-- –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<?php include 'contact.php';?>
<?php include 'footer.php';?>
