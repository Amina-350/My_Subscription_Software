<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.1.96/css/materialdesignicons.min.css" integrity="sha512-NaaXI5f4rdmlThv3ZAVS44U9yNWJaUYWzPhvlg5SC7nMRvQYV9suauRK3gVbxh7qjE33ApTPD+hkOW78VSHyeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/6.6.6/css/flag-icons.min.css" integrity="sha512-uvXdJud8WaOlQFjlz9B15Yy2Au/bMAvz79F7Xa6OakCl2jvQPdHD0hb3dEqZRdSwG4/sknePXlE7GiarwA/9Wg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  html{
    overflow-x:hidden;
  }
  body{
    overflow-x:hidden;
  }
  .header{
   padding:0 48px 0 48px;
  /* height:100px;*/
   display: flex;
   justify-content: space-between;
   align-items: center;
   background-color:#0c7af0;

  }
  .header{
    position:relative;
  }
 header .logo{
    font-size:30px;
  }
 .navbar-list{
  display:flex;
  gap:2vw;
  font-size:20px;
  font-weight: bold;
  list-style: none;
  
 } 

 .navbar-link:link,
 .navbar-link:visited{
  display: inline-block;
  text-transform: uppercase;
  text-decoration: none;
  font-weight:500;
  color:blue;
  transition: all 0.3s;
 }
 .navbar-link:hover,
 .navbar-link:active{
  color:red;
 }
 .mobile-nav-icon{
  width:4vw;
  height: 4vh;
  color:black;
 }
 
 .mobile-navbar-btn{
  display: none;
  background:transparent;
  cursor:pointer;
 }
 .mobile-nav-icon[name="close-outline"]{
   display:none;

 }

 

 /* ===============
    responsive code 
    ===============
 */

 /* 980px */
 @media(max-width:980px)
 {
  .mobile-navbar-btn{
    display:block;
    z-index:999;
  
  }
 header .logo{
    font-size:30px;
  }
  .navbar{
    /* display: none; */
    width:100%;
/*    height: 100vh;*/
    background-color:#0c7af0;
    position:absolute;
   top:0;
   left:0; 
   display:flex;
   justify-content: center;
   align-items: center;
   /* to get the transition */
   transform: translateX(100%);
   transition: all 0.5s linear;
   opacity:0;
   visibility: hidden;
   pointer-events: none;

  }
  .navbar-list{
    flex-direction:column;
    align-items: center;
  }
  .active .navbar{
    transform: translateX(0);
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    z-index: 2;
  }
  .active .mobile-navbar-btn .mobile-nav-icon[name="close-outline"]{
    display:block;
  }
  
  .active .mobile-navbar-btn .mobile-nav-icon[name="menu-outline"]{
    display:none;
  }
 }
#hel:hover{
  
  transition:all 0.55s ease-in-out;
  text-decoration-line: underline;
  text-decoration-color:red ;
  text-decoration-style:2px solid;
  text-underline-offset:10px;
   
}
  </style>

    <body>
      
      <!-- ===============
           Body start here
           =============== -->


<div class="container-fluid" style="padding: 0;margin:0%">
  <div class="row">
    <div class="col-md-12">

    <?php if($this->session->userdata('admin_id')) {?> 
<header class="header" >
  <ul class="logo"><li style="list-style:none;"><a href="<?= base_url('admin/welcome'); ?>" class="navbar-brand" style="font-weight:bold;color:white;">ADMIN PANEL</a></li></ul>
<nav class="navbar py-0">
   <ul class="navbar-list">
 
    <li>
    <a class="nav-link active" href="add_user" style="color:white"><span id="hel">Add User</span>
          </a>
    </li>
    <li>
    <a class="nav-link active" href="all_user" style="color:white" class="myd"><span id="hel">All User
         </span> </a>
    </li>
    <a class="nav-link active" href="add_file" style="color:white"><span id="hel">Add files</span>
          </a>
          <li><a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger" style="font-weight:bold;margin-top:1vh">Logout </a> </li>
          <?php } ?>
   </ul>
 </nav>
 
<div class="mobile-navbar-btn">
  <ion-icon name="menu-outline" class="mobile-nav-icon" style="color:white;font-weight:bold;"></ion-icon>
  <ion-icon name="close-outline" class="mobile-nav-icon" style="color:white;font-weight:bold;">></ion-icon>
  
</div>
 </header>
 </div>
  </div>
</div>
<!-- =====================
      Javascript code here
     ===================== -->
<script>

    const mobile_nav=document.querySelector(".mobile-navbar-btn");
    const nav_header=document.querySelector(".header");
    const toggleNavbar = () => {
    nav_header.classList.toggle("active");
    };
    mobile_nav.addEventListener("click",() => toggleNavbar());
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    </html>