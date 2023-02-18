<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
      <link rel="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
</head>
    <?php   if($this->session->userdata('user_id')){ ?> 
       <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
    <a class="navbar-brand" href="#" style="font-weight:bold;">USER PANEL</a>
   
  
      <!--  <li class="nav-item">
          <a class="nav-link active" href="#">Login
          </a>
        </li>-->
       
          <a href="<?= base_url('users/logout'); ?>" class="btn btn-danger">Logout</a>
        
        <?php  } ?>
        </div>
    </div>
    </div>
  </div>
</nav>