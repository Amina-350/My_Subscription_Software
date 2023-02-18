<?php include 'header.php'; ?>
 <?php if(!$this->session->userdata('admin_id')) { return redirect('admin/login'); }?>

<div class="container mt-5">
    <div class="row">
    <div class="col-md-12"> 
         <h1 style="text-shadow: 1px 2px black;font-weight:bold;color:#0c7af0;">Welcome Admin!</h1>
    </div>
    </div>
</div>
<div class="container" style="margin-top:7vh;">
 <!--   <div class="row">
        <div class="col-md-12">
            <div class="maind" style="display:flex">
                <div class="subd" style="background-color:aliceblue;box-shadow:3px 3px 3px 3px #0c7af0;border-radius:18px;padding-bottom:2vh;">
          <center>     <i style="padding-top:2vh;font-size:25px;color:#0c7af0" class="fa-solid fa-users"></i></center> 
                <h3 style="padding-top:1vh;padding-left:1vw;padding-right:1vw;padding-bottom:1vh;">Total Users</h3>
              <center> <h3 style="padding-bottom:1vh;color:red;">1050+</h3></center> 
                </div>
                <div class="subd" style="background-color:aliceblue;box-shadow:3px 3px 3px 3px #0c7af0;border-radius:18px;padding-bottom:2vh;margin-left:2vw;">
          <center>     <i style="padding-top:2vh;font-size:25px;color:#0c7af0" class="fa-solid fa-file"></i></center> 
          
                <h3 style="padding-top:1vh;padding-left:2vw;padding-right:1vw;padding-bottom:1vh;">Total files</h3>
              <center> <h3 style="padding-bottom:1vh;color:red;">1000+</h3></center> 
                </div>
                
              
            </div>
        </div>
    </div>-->
    
            <div class="row">
              <div class="col-md-12">
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card" style="    border-radius: 30px;box-shadow: 3px 4px #0c7af0;">
                          <div class="card-body text-center">
                              <center>     <i style="padding-top:2vh;font-size:25px;color:#0c7af0" class="fa-solid fa-users"></i></center> 
                            <h5 class="mt-2 text-dark font-weight-normal" style="font-family:math; font-size:30px;">Total Users</h5>
                            <h2 class=" mt-3 text-dark font-weight-bold">932</h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card" style="    border-radius: 30px;box-shadow: 3px 4px #0c7af0;">
                          <div class="card-body text-center">
                                                             <center>     <i style="padding-top:2vh;font-size:25px;color:#0c7af0" class="fa-solid fa-file"></i></center>

                            <h5 class="mt-2 text-dark font-weight-normal" style="font-family:math; font-size:25px;">Paid Users</h5>
                              <h2 class="mt-3 text-dark font-weight-bold">756</h2>
                          </div>
                        </div>
                      </div>
     
                </div>
              </div>
            </div>
</div>