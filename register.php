<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

            <div class="form-group">
                <label> Username </label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-dark">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-dark">Admin Profile 
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button>
    </h6>
  </div>

  <div class="card-body">

    <?php
      if(isset($_SESSION['sucesss']) && $_SESSION['sucesss']!='')
        {
        echo '<h2>'.$_SESSION['sucesss'].'</h2>';
        unset($_SESSION['sucesss']);
        }

      
      if(isset($_SESSION['status']) && $_SESSION['status']!='')
        {
        echo '<h2 class="bg-info>'.$_SESSION['status'].'<h2>';
        unset($_SESSION['status']);
        }
      ?>
    <div class="table-responsive">
      <?php
      $connection = mysqli_connect("localhost","root","","add");

      $query= "SELECT * from register";
      $query_run = mysqli_query($connection,$query);
      ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>UserType</th>
            <th>EDIT </th>
            <th>DELETE </th>
            
          </tr>
        </thead>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {    
             ?>
          <tr>
          <td><?php echo $row['id'];?></td>
          <td><?php echo $row['username'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['usertype'];?></td>
          <td>
          <a href="register_edit.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-success">EDIT</button></a>
          </td>
          <td>
          <a href="delete.php?id=<?php echo $row['id']?>"><button  type="button" class="btn btn-danger">Delete</button></a>
          </td>
          </tr>
          <?php
            }
          }
            else
            {
            echo"record not found";
            }
          ?>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>