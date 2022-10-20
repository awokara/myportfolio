<?php
if(isset($_POST['btnSave'])){
  include 'contact-process.php';
}
?>

<?php
include 'head.php';
include 'header.php';
?>
    <body class="bg-black text-white">
    <section class="container mt-5">
        <div class="mt-2 text-white text-center">
            <h4>Have a project in mind?</h4>
            <small></small><hr>
    
            <form action="contact.php" method="post">
                <div class="container row my-4">
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" value="<?php echo isset ($fname)? $fname: ''?>" placeholder="Enter your Name">
                            <small class="text-danger"><?php echo isset ($fError)? $fError: ''?></small>
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="phone" value="<?php echo isset ($phone)? $phone: ''?>" placeholder="Enter your phone number" class="form-control">
                          <small class="text-danger"><?php echo isset ($pError)? $pError: ''?></small>
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo isset ($email)? $email: ''?>" placeholder="Enter your email" class="form-control">
                            <small class="text-danger"><?php echo isset($eError)? $eError: ''?></small>
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="text" id="" class="form-control" cols="30" rows="6"></textarea>
                        </div>
                    </div>

                    

                    <!-- <button type="submit" name="btnSave">Submit</button> -->
                    <!-- <p id="demo1" class="ml-4"></p> -->
                    <div class="col-md-12">
                      <div class="form-group">
                        <button type="submit" name="btnSave" onclick="myFunction()" class="text-white bg-primary" style="width: 300px; height:50px; border: none;">Submit here</button>
                      </div>
                    </div> 
                </div>
            </form>
        </div>
      </section>
      <div style="height: 50px;"></div> 

      <?php
      include 'footer.php';
      ?>
</body>
</html>