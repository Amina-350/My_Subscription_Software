<?php  include 'header.php'; ?>
<!DOCTYPE html>
<html>
    <head>
         <title>Admin login</title>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<style>
      #admin:hover{
          font: 22px;
                 }
   
 </style>
<body class="img-fluid" style="background-image: url('https://media.istockphoto.com/id/1185747322/photo/blue-mesh-gradient-blurred-motion-abstract-background.jpg?b=1&s=170667a&w=0&k=20&c=ZgOce44toJoYCmxltqaYFxBFLUdYlyPRaHT4Layv5uU=');background-repeat:no-repeat;position:center;background-size:cover;overflow:hidden;box-sizing:border-box">
    
<div class="container" style="background-color:white;margin-top:13vh;border-radius:8px;box-shadow: 5px 5px 3px 3px #0c7af0">
    <div class="row">
    <div class="col-md-6" style="padding-bottom:10vh;padding-top:6vh">
       
    <h3 id="admin" class="text-center mt-5 p-2" style="text-shadow: 1px 2px black;font-weight:bold;color:white;background-color: #0c7af0;border-radius:6px;">ADMIN LOGIN</h3>
    
     <?php echo form_open('admin/login'); ?>
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

     <div class="form-group pt-3">
         <?php echo form_error('username'); ?>
        <label for="username" style="color:#0c7af0;font-size:20px;">Username:</label>
        <?php echo form_input(['class'=>'form-control', 'name'=>'username','value'=>set_value('username')]); ?>
   
    </div>
    
   <div class="form-group pb-1">
     <?php echo form_error('password'); ?>
    <label for="Username" style="color:#0c7af0;font-size:20px;">Password:</label>
    <?php echo form_password(['class'=>'form-control', 'name'=>'password', 'type'=>'password','value'=>set_value('password')]); ?>
   
   </div>
   <a href="/"><button  type="submit" value="Submit" class="w3-button w3-blue w3-border w3-border-white w3-round-large" style="float:right;">Submit</button></a>
    
     
   </div>
  <div class="col-md-6">
    <img class="img-fluid" src="https://img.freepik.com/free-vector/office-workers-taking-notes_74855-5545.jpg">
  </div>
</div>
</div>


 
<?php

echo form_close(); ?>

<?php include 'footer.php'; ?>
</body></html>