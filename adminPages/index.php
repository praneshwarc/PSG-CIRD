<!DOCTYPE html>
<html>
<title>PSG College of Technology</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/jquery-3.3.1.js"></script>
    
    <?php
    $file = file_get_contents('../content/intro.txt');
    
    ?>
<script>
    function beginEdit(element){
        $(element).next().show();
        $(element).next().next().hide();
        var x = $(element).next().next().html();
        $(element).next().html(x);
        $(element).html("Save");
        $(element).attr("onclick","endEdit(this)");
    }
    
    function endEdit(element){ 
        var x;
        console.log($(element).next().html());
        $.ajax({
    type: "POST",
    url: 'functions.php',
    dataType: 'json',
    data: {text: "$(element).next().html()"},
    success: function (result) {
                  x = result.text;
            }
});
        console.log(x);
        $(element).next().next().html(x);
        $(element).next().hide();
        $(element).next().next().show();
        $(element).html("Edit");
        $(element).attr("onclick","beginEdit(this)");        
    }
</script>
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="index.html"><img class="topLogo" src="../images/psglogo.png" align="middle"/><b> PSG CIRD</b></a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="projects.html" class="w3-bar-item w3-button">Project</a>
        <a href="industries.html" class="w3-bar-item w3-button">Industries</a>
        <a href="services.html" class="w3-bar-item w3-button">Services</a>
        <a href="facilities.html" class="w3-bar-item w3-button">Facilities</a>
      </div>
    </div>
  </div>

  <div class="div-height">
  <ul class="nav3">
     <li class="nav3" onmouseover="style.color='#4375aa'" onmouseout="style.color='black'"><a href="#about">About Us</a></li>
     <li class="nav3" onmouseover="style.color='#4375aa'" onmouseout="style.color='black'"><a href="#event">Events</a></li>
     <li class="nav3" onmouseover="style.color='#4375aa'" onmouseout="style.color='black'"><a href="#contact">Contact</a></li>
  </ul>
</div>

  <div class="row">
    <center>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="../images/SlideShow/slideshow1.jpg" style="width:100%;height:550px;" class="w3-animate-right w3-round-xxlarge">
        </div>

        <div class="mySlides fade">
          <img src="../images/SlideShow/slideshow2.jpg" style="width:100%;height:550px;" class="w3-animate-right w3-round-xxlarge">
        </div>

        <div class="mySlides fade">
          <img src="../images/SlideShow/slideshow3.jpg" style="width:100%;height:550px;" class="w3-animate-right w3-round-xxlarge">
        </div>

        <div class="mySlides fade">
          <img src="../images/SlideShow/slideshow4.jpg" style="width:100%;height:550px;" class="w3-animate-right w3-round-xxlarge">
        </div>
      </div>
      <br>
    </center>
  </div>
  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
  }
  </script>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">
    <a name="about"/>
    <!-- About Section -->
    <div class="w3-container w3-padding-32">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About Us!</h3> 
        <button class="editButton" onclick="beginEdit(this);">Edit</button>
        <textarea class="intro" name="intro" style="display:none">I had work</textarea>
      <p><?php 
            echo $file;  
          ?>
      </p>
    </div>

    <!-- Event Section -->
    <a name="event"/>
    <div class="w3-container w3-padding-32">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Events</h3>
        <table class="w3-table w3-striped">
          <tr>
            <th>Date</th>
            <th>Event</th>
          </tr>
          <tr>
            <td>12/05/18</td>
            <td>New Event1</td>
          </tr>
          <tr>
            <td>24/06/18</td>
            <td>New Event2</td>
          </tr>
          <tr>
            <td>05/09/18</td>
            <td>New Event3</td>
          </tr>
        </table>
        <br>
        <p><a href="events.html" class="w3-bar-item w3-button">Show all Events</a></p>
    </div>

    <!-- Contact Section -->
    <a name="contact"/>
    <div class="w3-container w3-padding-32" >
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    </div>
    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="../images/Staff/DeanIRD.jpg" alt="Dean" class="contactImg">
        <h3>Dr. A. Kandaswamy</h3>
        <p class="w3-opacity">Dean IR&D</p>
        <p> Center for Industrial Research and development.<br>
            PSG College of Technology</p>
        <p><h6>Phone: 1234567890</h6>
        <h6>Mail: name@mail.com</h6></p>
        <p><a href="mailto:someone@example.com?Subject=From%20Our%20Page"><button class="w3-button w3-light-grey w3-block">Send Mail</button></a></p>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="../images/Staff/ConsultingEngineer.png" alt="Engineer" class="contactImg">
        <h3>Er. A. Sampath Kumar</h3>
        <p class="w3-opacity"> Consulting Engineer & Energy Auditor</p>
        <p> Center for Industrial Research and development.<br>
            PSG College of Technology</p>
        <p><h6>Phone: 9442519336</h6>
        <h6>Mail: ask@ird.psgtech.ac.in</h6></p>
        <p><a href="mailto:someone@example.com?Subject=From%20Our%20Page"><button class="w3-button w3-light-grey w3-block">Send Mail</button></a></p>
      </div>
    </div>

    <!-- End page content -->
  </div>
  <!-- Footer -->
  <footer class="footer">
    <p>Designed and Developed by: <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-red">&emsp;Adarsh</a></p>
  </footer>

</body>
</html>
