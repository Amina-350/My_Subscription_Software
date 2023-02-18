<?php  include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Edit User</title>
</head>

<body class="img-fluid" style="background-image:url(<?= base_url('assets/image/background4.jpg')?>);background-repeat:no-repeat;position:center;background-size:cover;">
<div class="container" style="margin-top:2vh;">
<div class="row">
<div class="col-6 offset-3 mt-5" style="box-shadow:3px 3px 3px 3px #0c7af0;border-radius:18px;padding-bottom:2vh;">

<?php echo form_open('admin/update_user'); ?>
    <?php echo form_hidden('id', $user->user_id); ?>
<div class="form-group">
     <?php if($success = $this->session->flashdata('user_added')): ?>
   
        <div class="alert alert-success">
        <?= $success; ?>
      
    </div>
    
    <?php endif; ?>
    </div>
 
       <h3 class="text-center" id="aduser" style="font-weight:bold;text-shadow: 1px 2px black;color:#0c7af0;"><br><span id="span1" style="background-color:#0c7af0;padding:1vh 2vw;color:white;border-radius:18px">Edit User</h3>
  
 <!-- <?php   echo "<pre>";
            print_r($user); 
 
    echo $user->fname;?>-->
   
     <div class="form-group">
         <?php echo form_error('fname'); ?>
        <label for="fname" class="mt-4" style="color:#0c7af0;font-weight:bold">Full Name:</label>
        <?php echo form_input(['class'=>'form-control', 'name'=>'fname','value'=>set_value('fname', $user->fname)]); ?>
   
</div>

     <div class="form-group">
         <?php echo form_error('email'); ?>
        <label for="email" style="color:#0c7af0;font-weight:bold">Email:</label>
        <?php echo form_input(['class'=>'form-control', 'name'=>'email','value'=>set_value('email', $user->email)]); ?>
    
</div>
    
  <!--  <div class="form-group">
  <label for="sub" style="color:#0c7af0;font-weight:bold">Select Subscription:</label>
    <?php    $options = array(
        'Basic'=> 'Basic',
        'Premium'=> 'Premium',
    );
echo form_dropdown('sub', $options, '$user->subscription ', ['class'=>'form-control','value'=>set_value('sub', $user->subscription)]); ?>

</div>-->

<!--<div class="form-group">
     <?php echo form_error('password'); ?>
    <label for="Username">Password:</label>
    <?php echo form_password(['class'=>'form-control', 'name'=>'password', 'type'=>'password','value'=>set_value('password', $user->password)]); ?>
   
</div>-->
    <?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit', 'value'=>'submit']);?>
 
     
</div>
</div>
</div>
<?php

echo form_close(); ?>

<?php include 'footer.php'; ?>
</body>
</html>