<?php  include 'header.php'; ?>

<!DOCTYPE html>
<html><head>
    <title>Add user</title>

</head>
<style>
    *{
        padding: 0%;
        margin: 0%;
    }
    #aduser{
        animation:trans1 0.99s;
    }
    #span1:hover{
     background-color: white;
     color:#0c7af0;
    }
    @keyframes trans1{
        from{
            opacity:0;
            transform:rotateX(-10deg);
        }
        to{
            opacity:1;
            transform:rotateX(0);
        }
    }
    </style>

<body class="img-fluid" style="background-image:url(<?= base_url('assets/image/background4.jpg')?>);background-repeat:no-repeat;position:center;background-size:cover;">
<div class="container" style="margin-top:2vh;">
<div class="row">

    <div class="col-6 offset-3" style="box-shadow:3px 3px 3px 3px #0c7af0;border-radius:18px;padding-bottom:2vh">
<?php echo form_open('admin/add_user'); ?>
<div class="form-group">
     <?php if($success = $this->session->flashdata('user_added')): ?>
    
        <div class="alert alert-success">
        <?= $success; ?>
        
    </div>
    
    <?php endif; ?>
     <?php if($error = $this->session->flashdata('user_error')): ?>
    
        <div class="alert alert-danger">
        <?= $error; ?>
        
    </div>
    
    <?php endif; ?>
    </div>
   
       <h2 class="text-center" id="aduser" style="font-weight:bold;text-shadow: 1px 2px black;color:#0c7af0;"><br><span id="span1" style="background-color:#0c7af0;padding:1vh 2vw;color:white;border-radius:18px">Add User</span></h2>
       
   
  
     <div class="form-group">
         <?php echo form_error('fname'); ?>
        <label for="fname" class="mt-4" style="color:#0c7af0;font-weight:bold">Full Name:</label>
        <?php echo form_input(['class'=>'form-control', 'name'=>'fname','value'=>set_value('fname')]); ?>
    
     </div>
    
     <div class="form-group">
         <?php echo form_error('email'); ?>
        <label for="email" style="color:#0c7af0;font-weight:bold">Email:</label>
        <?php echo form_input(['class'=>'form-control', 'name'=>'email','value'=>set_value('email')]); ?>
    
     </div>
   
  <!--  <div class="form-group">
  <label for="sub" style="color:#0c7af0;font-weight:bold">Select Subscription:</label>
  <select class="form-control" id="sub" name="sub">
    <option>Basic</option>
    <option>Premium</option>
  </select>

    </div>-->
   
<div class="form-group">
     <?php echo form_error('password'); ?>
    <label for="Username" style="color:#0c7af0;font-weight:bold">Password:</label>
    <?php echo form_password(['class'=>'form-control', 'name'=>'password', 'type'=>'password','value'=>set_value('password')]); ?>
   
   </div>
    <?php echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit', 'value'=>'Submit']);?>

     

    </div>
    </div>
     </div>
  
<?php

echo form_close(); ?>

<?php include 'footer.php'; ?>
</body>
</html>