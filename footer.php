<section style="position: relative;" class="mt-5 ">
        <div class="fixed-bottom">
        <div class="d-flex  list-none popup1" id="mobile">
        <div id="dsno" style="display:none; background: rgba(0, 0, 0, 0.66);" class="seicon">
          <ul id="dsno" class="d-flex">
          <li class="nav-item active insta1" >
            <b><a class="nav-link text-white" href="https://instagram.com/thompson_codess?igshid=YmMyMTA2M2Y="><i class="bi bi-instagram text-white iconf"></i></a></b>
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
      
    
      <div style="height: 10  0px;"></div>
        <div class="fixed-bottom bg-black bordstyle" id="navbarNavDropdown">
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
          <div class="d-flex list-none" style="position:sticky; top: 0;">
            <div class="bg-black">
            <!-- <div class="insta"> -->
              <div class="d-flex">
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
          </div>
        </ul>
      </div>
    </div>
    </div>
        </section>
          
    
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" ></script>
        <script src="style.js"></script>

        <script>
        const handle = ()=>{
          var name = $("#dsno")
          name.toggle()   
        }
        </script>