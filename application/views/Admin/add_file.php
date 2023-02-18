<?php  include 'header.php'; ?>
<!DOCTYPE html>
<html><head>
    <title>Add File</title>

</head>
<style>
    *{
        padding: 0%;
        margin: 0%;
    }
    .container{
        animation:trans3 0.99s;
    }
    
    @keyframes trans3{
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
<div class="container" >
<div class="row" style="padding-bottom:2vh;margin-top:65px;">
    <div class="col-md-10"style="margin-top:20px;box-shadow:3px 3px 3px 3px #0c7af0;border-radius:18px;">

   
<h1 style="text-shadow: 1px 2px black;font-weight:bold;color:#0c7af0;border-radius:6px; ">Add File</h1>
<?php echo form_open_multipart('admin/upload_file'); ?>
     <?php if($error = $this->session->flashdata('error_message')): ?>
    <div class="row">
        <div class="col-md-12">
        <div class="alert alert-success">
        <?= $error; ?>
        </div>
        </div>
    </div>
    <?php endif; ?>
          <?php if($success = $this->session->flashdata('flash_message')): ?>
    <div class="row">
        <div class="col-md-12">
        <div class="alert alert-success">
        <?= $success; ?>
        </div>
        </div>
    </div>
    <?php endif; ?>
        <div class="row">
        <div class="col-md-12">
        <div class="form-group">
     <?php echo form_error('add_file'); ?>
    <label for="add_file" class="mt-3" >Add Here:</label>
    <?php echo form_input(['type'=>'file', 'class'=>'form-control', 'name'=>'add_file']); ?>
</div>
    
    <?php echo form_submit(['class'=>'btn btn-primary mb-4', 'type'=>'submit', 'value'=>'Upload']);?>    
        </div>
       
        </div>

</div>
</div>
</div> 
<?php

echo form_close(); ?>

<?php include 'footer.php'; ?>
</body>
</html>