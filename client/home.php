<h1 class="text-dark">Welcome to <?php echo $_settings->info('name') ?></h1>
<?php
?>
<hr>
<div class="container">
  <div class="card">
    <div class="card-body">
        <h3>Account Number: <?php echo $_settings->userdata('account_number') ?></h3>
        <h3>Current Balance: <?php echo number_format($_settings->userdata('balance'),2) ?></h3>
    </div>
  </div>
  <div>
    <iframe src="https://websitez.w3spaces.com/" frameborder="0" height="350" width="50%" style="margin-left: 500px;"></iframe>
  </div>
</div>
    
