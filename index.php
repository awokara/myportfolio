<?php include 'head.php';
?>
<body class="bg-black">
  <div class="container-fluid">
    <div class="text-white fixed-top bg-black">
       <nav class="navbar navbar-expand-lg navbar-light bg-black text-white">
            <a class="navbar-brand  text-white font-weight-bold thom" href="index.php">THOMP<span class="text-primary">SON</span></a>

            <div class="ml-auto">
              <a class="text-white bg-primary p-2 down text-decoration-none res" href="resume.pdf"  download>Download Resume</a>
            </div>
        </nav>
    </div>
  </div> 

    <section>
        <div style="height: 90px;"> </div>
        <div class=" border1">
            <img src="./img/web1.jpg" class="img-fluid ml-4 my-4" width="70px" height="70px"  alt="">
        </div>
        <div class="text-center text-white mt-3">
            <h4>Awokara Thompson</h4>
            <p>Front End Developer / Back End Developer</p>
            <div class="d-flex icon">
                <p><i class="bi bi-bootstrap-fill text-primary"></i></p>
                <i class="bi bi-piggy-bank-fill text-warning"></i>
                <p><i class="bi bi-instagram text-primary"></i></p>
                <p><i class="bi bi-github text-danger"></i></p>  
                <p><i class="bi bi-award-fill text-warning"></i></p> 
                <p>Next.</p>
            </div>
            <div class="mt-2">
                <small>I design and Build websites that meet the requirement of our users, passionate about solving interesting problems and turning ideas into  real life  product is my calling.</small>
            </div>
            <div class="mt-5 text-center d-flex learnmore">
                <a href="about.php" class="btn btn-primary res">Let's Talk <span><i class="bi bi-send-fill icon"></i></span></a>
                <div class="mt-2 icon">
                  <!-- <i class="bi bi-instagram p-2 icon2"></i> -->
                  <i class="bi bi-whatsapp p-2 icon2"></i>
                  <i class="bi bi-envelope-fill p-2 icon2"></i>
              </div>
            
        </div>
    </section>

    <div style="height: 10px;">

    </div>

    
  <div class="d-flex  list-none popup" id="mobile">
    <!-- <div class="fixed-bottom"> -->
    <div id="dsno" style="display:none;">
      <ul id="dsno" class="d-flex">
      <li class="nav-item active insta1" >
        <b><a class="nav-link text-white" href="https://instagram.com/thompson_codess?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram text-muted iconf"></i></a></b>
     </li>

     <li class="nav-item active insta1">
      <b><a class="nav-link text-white" href="contact.php"> <i class="bi bi-whatsapp text-primary iconf"></i></a></b>
    </li>

    <li class="nav-item active insta1">
      <b><a class="nav-link text-white" href="https://github.com/awokara"> <i class="bi bi-github text-danger iconf"></i></a></b>
    </li>

    <li class="nav-item active insta1">
      <b><a class="nav-link text-white" href="#"> <i class="bi bi-linkedin text-warning iconf"></i></a></b>
    </li>
  </ul>
  </div>
  </div>

    <div class="mt-5 bg-black bordstyle" id="navbarNavDropdown">
      <ul class=" list-none d-flex thom">
        <li class="nav-item active text-white">
          <b><a class="nav-link text-white" href="index.php"><i class="bi bi-house-fill text-primary iconf"></i><span class="sr-only">(current)</span></a></b>
        </li>
        <li class="nav-item active">
          <b><a class="nav-link text-white" href="about.php"><i class="bi bi-person-fill text-muted iconf"></i></a></b>
        </li>
        <li class="nav-item active">
          <b><a class="nav-link text-white" href="course.php"><i class="bi bi-chevron-expand text-danger iconf"></i></a></b>
        </li>

        <li class="nav-item active">
          <b><a class="nav-link text-white" href="contact.php"><i class="bi bi-envelope-fill text-warning iconf"></i></a></b>
        </li>        
        <div class=" ml-2 more" style="border:1px solid rgba(255, 255, 255, 0.519); border-top: 0; border-bottom: 0; border-right: 0;">
        <li class="nav-item active">
          <b>
            <!-- <a class="nav-link text-white" href="contact.php"> -->
            <span   onclick={handle()} style="border: none; outline: none;">

              <i class="bi bi-menu-button-wide text-primary bg-black ml-3 iconf" style=" font-size: 20px;"></i>
            </span>
          <!-- </a> -->
        </b>
        </li>
      </div>
    <!-- </div> -->
        
        <div class="d-flex list-none">
          <!-- <div class="insta"> -->
          <li class="nav-item active insta">
            <b><a class="nav-link text-white" href="https://instagram.com/thompson_codess?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram text-muted iconf"></i></a></b>
          </li>
      
          <li class="nav-item active insta">
            <b><a class="nav-link text-white" href="contact.php"> <i class="bi bi-whatsapp text-primary iconf"></i></a></b>
          </li>
      
          <li class="nav-item active insta">
            <b><a class="nav-link text-white" href="https://github.com/awokara"> <i class="bi bi-github text-danger iconf"></i></a></b>
          </li>
      
          <li class="nav-item active insta">
            <b><a class="nav-link text-white" href="#"> <i class="bi bi-linkedin text-warning iconf"></i></a></b>
          </li>
        <!-- </div> -->
        </div>
      
    </ul>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" ></script>
   
        
    <script>
      // function handle(){

      //   var x = 5;
      //   alert(x)
      // }
      // const mobileVar = document.getElementById("mobile")
    const handle = ()=>{
      var name = $("#dsno")
      // alert(mobile)
      // mobileVar.style.color= "red";
      // mobileVar.classList.add("check")
      // mobileVar.classList.contains.remove("check")
      // mobileVar.classList.toggle("check")
      name.toggle()
      // mobileVar.classList.toggle("check",false)

    }
    </script>
</body>
</html>