<!DOCTYPE html>
<html>
  <head>
    <title>Robita Sembiring - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/admin/assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>
    <div class="container" style="padding-top: 5%">
        <div class="col-md-4 col-md-offset-4" style="border: 3px">
          <form class="form-signin-heading text-center text-info" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <img src="<?php echo base_url().'assets/img/Robita.png'?>" alt="Robita Sembiring" width="50%" height= "50%"/>
            <br><br><br>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus><br>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
          </form>
        </div>
    </div> 
    <!-- jQuery-->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Bootsrap -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
<br><p style="text-align: center;margin-top: 15px;margin-bottom: 15px align="right"">
<font color="black">Copyright 2018 &copy; FlashcomID</p></font>
</html>