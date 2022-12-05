 <!-- About-->
 <?php
      $connection = mysqli_connect("localhost","root","","add");
      $query= "SELECT * from about  ";
      $query_run = mysqli_query($connection,$query);
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {    
                ?>
        <section class="page-section" id="about">
            
            <?php
            }
          }
            else
            {
            echo"";
            }
          ?>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Featured Products</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="" src="sofa-2.jpg" alt="..." />
                            <h4>Brown Sofa With Pillows</h4>
                            <p class="text-muted">$60.00</p>
                            <a href =""class="btn btn-success">see product</a>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="" src="sofa-1.jpg" alt="..." />
                            <h4>Comfortable Pink Sofa</h4>
                            <p class="text-muted">$50.00</p>
                            <a href =""class="btn btn-success">see product</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="" src="sofa-3.jpg" alt="..." />
                            <h4>Stylish Red Chair</h4>
                            <p class="text-muted">+$90.00</p>
                            <a href =""class="btn btn-success">see product</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">We have got an Amazing and Experienced team that constantly tries to work for the welfare of farmers of our country.</p><p class="large text-muted">Come and be a part of our community.</p></div>
                </div> -->
            </div>
        </section>
        <!-- Clients-->
        <script>
            function validateForm(){
                let x =document.forms["myform"]["name"].value;
                if (x==""){
                    alert("Name must be filled");
                    return false;
                }
                let y =document.forms["myform"]["email"].value;
                if (y==""){
                    alert("Email must be filled");
                    return false;
                }
                let z =document.forms["myform"]["phone"].value;
                if (z==""){
                    alert("Phone no must be filled");
                    return false;
                }
                let m =document.forms["myform"]["message"].value;
                if (m==""){
                    alert("message no must be filled");
                    return false;
                }
            }
            </script>
            </section>
  <div>
        <h1 class="text-center">Contact us</h1>

        <div class="w-50 m-auto">
          <form action="code.php" method="Post" id="contactForm" name="myform">
            <div class="form-group">
              <label> name</label>
              <input type="text" name="name" autocomplete="off" class="form-control">

            </div>

        <!-- </div> -->
        <!-- <div class="w-50 m-auto"> -->
          <!-- <form action="userinfo.php" method="post"> -->
            <div class="form-group">
              <label>email-id</label>
              <input type="text" name="email" autocomplete="off" class="form-control">

            </div>
            <!-- <div class="w-50 m-auto"> -->
          <!-- <form action="userinfo.php" method="post"> -->
            <div class="form-group">
              <label> mobile</label>
              <input type="text" name="phone" autocomplete="off" class="form-control">

            </div>
             <!-- <div class="w-50 m-auto"> -->
          <!-- <form action="userinfo.php" method="post">   -->
            <div class="form-group">
              <label>message</label>
              <textarea class ="form-control" name="message"  >

              </textarea>
            
            </div>
          <button type ="submit" name="submitButton" class="btn btn-success">submit</button>
          </form>

        </div>
</section>
        <!-- Contact-->
        <footer>
  <p class="p-3 bg-dark text-white text-center">Sofa House   Copyright 2022 All Right Reserved</p>
</footer>
        
        <!-- Footer-->
        <!-- <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-dark-start">Sofa House   Copyright 2022 All Right Reserved</div>
                    
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>  -->

        <!-- <footer>
  <p class="p-3 bg-dark text-white text-center">Sofa House   Copyright 2022 All Right Reserved</p>
        </footer> -->
                
    </body>
</html>
