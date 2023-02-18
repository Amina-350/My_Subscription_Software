<?php include 'header.php'; ?>
<!DOCTYPE html>
<html><head>
    <title>All User</title>

</head>
<style>
    *{
        padding: 0%;
        margin: 0%;
    }
    .container{
        animation:trans2 0.99s;
    }
    
    @keyframes trans2{
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
<div class="container" style="margin-top:20px;border-radius:30px;box-shadow: 3px 3px 3px 3px #0c7af0;">
      <div class="row">
   <div class="col-md-12">
       <h1 class="text-center mb-4" style="font-weight:bold;text-shadow: 1px 2px black;color:#0c7af0">All Users</h1>
   </div>
</div>
    <?php if($success = $this->session->flashdata('flash_message')): ?>
    <div class="row">
        <div class="col-md-12">
        <div class="alert alert-success">
        <?= $success; ?>
        </div>
        </div>
    </div>
    
    <?php endif; ?>
<table class="table" id="mytable">
  <thead style="background-color: #0c7af0;">
    <tr>
      <th scope="col" style="color:white;font-weight:bold;">NO:</th>
      <th scope="col" style="color:white;font-weight:bold;">full name</th>
      <th scope="col" style="color:white;font-weight:bold;">email</th>
      <th scope="col" style="color:white;font-weight:bold;">Action</th>
    </tr>
  </thead>
    <tbody>
        <?php $count=1; ?>
        <?php foreach ($users as $row)
    { ?>
    <tr>
      <td> <?php echo $count++; ?></td>  
    <td> <?php echo $row['fname']; ?></td>
    <td> <?php echo $row['email']; ?></td>
        <td><a class="btn btn-primary" href="edit_user?id=<?=$row['user_id']; ?>" >Edit</a>
            <a class="btn btn-danger ml-1" href="deluser?id=<?=$row['user_id']; ?>" >Delete</a>
        </td>
    </tr>
        <?php } ?>
    </tbody>
    </table>
</div>
</body>
</html>