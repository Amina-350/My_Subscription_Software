<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>User Dashboard</title>
  <link href=""/>
</head>
<body style="background-image:url(<?= base_url('assets/image/background5.jpg')?>);background-repeat:no-repeat;position:center;background-size:cover;">

<div class="container" style="margin-top:20px;">
<div class="row">
   <div class="col-md-12" style="margin-top:20px;background-color:aliceblue;border-radius:30px;box-shadow: 3px 3px 3px 3px #0c7af0;">
       <h3 class="text-center" style="font-weight:bold;text-shadow:1px 2px white;color:#0c7af0">All Files</h3>
<table class="table">
  <thead style="margin-top: 6vh;">
    <tr style="background-color:#0c7af0;color:white;font-size:20px;">
      <th scope="col" class="text-center">#</th>
      <th scope="col" class="text-center">File</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
    <tbody>
        <?php foreach ($files as $row)
    { ?>
       
    <tr>
    <td class="text-center"> <?php echo  '1' ;?></td>
    <td class="text-center"> <?php echo $row['file_name']; ?></td>
    <td align="center">
					<a class="btn btn-primary btn-xs"
						href="<?php echo site_url('users/download_file/');?>">
						<i class="entypo-download"></i> <?php echo 'download';?>
					</a>
				</td>
    </tr>
      <?php } ?>
    </tbody>
</table>
<!-- =====================
     Add footer query here
     =====================
     -->
<div class="lastd" id="#mytable"></div>
</div>
</div>
</div>


<!-- <?php echo site_url(); ?> -->

<?php include 'footer.php'; ?>

</body>
</html>