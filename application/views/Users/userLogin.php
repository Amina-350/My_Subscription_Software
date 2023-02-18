<?php  include 'header.php'; ?>
<!DOCTYPE html>
<html>
    <head>
         <title>User login</title>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body class="img-fluid" style="background-image:url(<?= base_url('assets/image/background3.jpg')?>);background-repeat:no-repeat;position:center;background-size:cover;">
<div class="container" style="background-color:white;margin-top:12vh;border-radius:8px;box-shadow:5px 5px 3px #0c7af0">
    <div class="row">
   <div class="col-md-6" style="padding-bottom:10vh;padding-top:6vh">
       
       <h3 class="text-center mt-5 p-2" style="text-shadow: 1px 2px black;font-weight:bold;color:white;background-color: #0c7af0;border-radius:6px;">LOGIN</h3>


<?php echo form_open('users/login'); ?>
      <?php if($error = $this->session->flashdata('login_error')): ?>
    
        <div class="alert alert-danger">
        <?= $error; ?>
        
    </div>
    
    <?php endif; ?>
     <?php if($error = $this->session->flashdata('error')): ?>
    
        
        <div class="alert alert-danger">
        <?= $error; ?>
        
    </div>
    
    <?php endif; ?>

     <div class="form-group">
         <?php echo form_error('email'); ?>
        <label for="Email" style="color:#0c7af0;font-size:18px;font-weight:bold;">Email:</label>
        <?php echo form_input(['class'=>'form-control', 'name'=>'email','value'=>set_value('username')]); ?>
   
</div>
  
<div class="form-group">
     <?php echo form_error('password'); ?>
    <label for="Username" style="color:#0c7af0;font-size:18px;font-weight:bold;">Password:</label>
    <?php echo form_password(['class'=>'form-control', 'name'=>'password', 'type'=>'password','value'=>set_value('password')]); ?>
   
</div>
<a href="/"><button  type="submit" value="Submit" class="w3-button w3-blue w3-border w3-border-white w3-round-large" style="float:right;">Submit</button></a>
    </div>
    <div class="col-md-6">
        <img class="img-fluid" src="<?= base_url('assets/image/1.jpg')?>">
    </div>
</div>
</div> 
  
<?php

echo form_close(); ?>

<?php include 'footer.php'; ?>
 
    </body>
</html>