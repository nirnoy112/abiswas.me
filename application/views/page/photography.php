<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 2px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 10px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 30px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 80%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: transparent;
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 50px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 40px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img {
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}

img.hover {
  -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
  filter: grayscale(0%);
}

img.hover-shadow {
  transition: 0.3s;
  -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -webkit-filter: grayscale(0%); /* Safari 6.0 - 9.0 */
  filter: grayscale(0%);
}
</style>
<div style="min-height: 430px;" class="lo-container">


	<h3 style="text-align: center;">MY PHOTOGRAPHY</h3>
	<br><br>
	<div class="row">

		<?php

			$photographyDirectory = FCPATH . 'resource/photography/';
			if(is_dir($photographyDirectory)) {

				if($directoryHandler = opendir($photographyDirectory)) {

					$imageCounter = 0;

			    	while(($phptographyFile = readdir($directoryHandler)) != false) {

			    	if($phptographyFile != '.' && $phptographyFile != '..') {

			    		$imageCounter = $imageCounter + 1;

		?>

		<div class="column">
	    	<img src="<?php echo base_url('resource/photography/' . $phptographyFile); ?>" style="width:100%; height: 150px;" onclick="openModal();currentSlide(<?php echo $imageCounter; ?>)" class="hover-shadow cursor">
	  	</div>

	  	<?php

			    	}

            if($imageCounter % 4 == 0) {

              echo '<br>';
            }

			    }

				$numberOfImage = $imageCounter;

			    closedir($directoryHandler);

			  }

			}

		?>

	</div>

	<div id="myModal" class="modal">
	  <span class="close cursor" onclick="closeModal()">&times;</span>
	  <div class="modal-content">

	    <?php

			$photographyDirectory = FCPATH . 'resource/photography/';
			if(is_dir($photographyDirectory)) {

				if($directoryHandler = opendir($photographyDirectory)) {

					$imageCounter = 0;

			    	while(($phptographyFile = readdir($directoryHandler)) != false) {

			    	if($phptographyFile != '.' && $phptographyFile != '..') {

			    		$imageCounter = $imageCounter + 1;

		?>

		<div class="mySlides">
	      <div class="numbertext"><?php echo $imageCounter . '/' . $numberOfImage; ?></div>
	      <img src="<?php echo base_url('resource/photography/' . $phptographyFile); ?>" style="width:100%; height: 550px; filter: grayscale(0%);">
	    </div>

	  	<?php

			    	}

			    }

			    closedir($directoryHandler);

			  }

			}

		?>
	    
	    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	    <a class="next" onclick="plusSlides(1)">&#10095;</a>

	    <div class="caption-container">
	      <p id="caption"></p>
	    </div>

	    <?php

			/*$photographyDirectory = FCPATH . 'resource/photography/';
			if(is_dir($photographyDirectory)) {

				if($directoryHandler = opendir($photographyDirectory)) {

					$imageCounter = 0;

			    	while(($phptographyFile = readdir($directoryHandler)) != false) {

			    	if($phptographyFile != '.' && $phptographyFile != '..') {

			    		$imageCounter = $imageCounter + 1;

		?>

		<div class="column">
	    	<img class="demo cursor" src="<?php echo base_url('resource/photography/' . $phptographyFile); ?>" style="width:100%; height: 85px; filter: grayscale(0%);" onclick="currentSlide(<?php echo $imageCounter; ?>)">
	  </div>

	  	<?php

			    	}

			    }

			    closedir($directoryHandler);

			  }

			}*/

		?>

	  </div>
	</div>
	
</div>
<br>
<br>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>