<?php 

include 'header.php'; 

include 'navigation.php';

?>
  
  <!-- +++++ Projects Section +++++ -->
  
    <!-- +++++++++++++++++ Projects Section +++++++++++++++++++++++ -->
  
  <div class="container pt">
    <div class="row mt">
      <div class="col-lg-6 col-lg-offset-3 centered">
        <h2><strong>Illustration Work</strong></h2>
        <hr>
      
      </div>

    <div id="columns">

      <figure>
      <img id="myImg" src="assets/img/portfolio/me.jpg" class="portfolio-image">
      <figcaption>Self Portrait, 2015, Gouache on Paper</figcaption>
      </figure>

      <figure>
      <a href="http://www.elle.com/culture/career-politics/interviews/a30869/the-lenny-interview-michele-roberts/" target="_blank"><img src="assets/img/portfolio/roberts.jpg" class="portfolio-image"></a>
      <figcaption>Portrait of Michele Roberts for Lenny Letter, 2015, Gouache on Paper</figcaption>
      </figure>

      <figure>
      <img id="myImg2" src="assets/img/portfolio/cherryblossomlady.jpg" class="portfolio-image">
      <figcaption>Cherry Blossom, 2015, Gouache on Paper</figcaption>
      </figure>

      <figure>
      <img id="myImg3" src="assets/img/portfolio/pink.jpg" class="portfolio-image">
      <figcaption>Butterflies, 2015, Gouache on Paper</figcaption>
      </figure>

      <figure>
      <img id="myImg4" src="assets/img/portfolio/smile.jpg" class="portfolio-image">
      <figcaption>We Can Smile, 2015, Gouache on Paper</figcaption>
      </figure>
      
      <figure>
      <img id="myImg5" src="assets/img/portfolio/ink.jpg" class="portfolio-image">
      <figcaption>A Bird Flew Past, 2016, ink on Paper</figcaption>
      </figure>
      
      
      
      </div> <!-- end of columns div -->       
    </div><!-- /row -->
  </div><!-- /container -->
  
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="modalImage">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<?php 

include 'footer.php';

?>