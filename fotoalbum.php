<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Slideshow Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h2 style="text-align:center">Cat Slideshow Gallery</h2>
    
    <div class="container">

        
    <div class="caption-Cont">
        <p id="caption"></p>
    </div>

  <div class="slide" data-src="cat1.jpg">
    <div class="position">1 / 9</div>
    <img src="assets/images/cat1.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat2.jpg">
    <div class="position">2 / 9</div>
    <img src="assets/images/cat2.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat3.jpg">
    <div class="position">3 / 9</div>
    <img src="assets/images/cat3.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat4.jpg">
    <div class="position">4 / 9</div>
    <img src="assets/images/cat4.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat5.jpg">
    <div class="position">5 / 9</div>
    <img src="assets/images/cat5.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat6.jpg">
    <div class="position">6 / 9</div>
    <img src="assets/images/cat6.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat7.jpg">
    <div class="position">7 / 9</div>
    <img src="assets/images/cat7.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat8.jpg">
    <div class="position">8 / 9</div>
    <img src="assets/images/cat8.jpg" style="width:50%">
  </div>

  <div class="slide" data-src="cat9.jpg">
    <div class="position">9 / 9</div>
    <img src="assets/images/cat9.jpg" style="width:50%">
  </div>
 

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

<script src="script.js"></script>
</body>
</html>
