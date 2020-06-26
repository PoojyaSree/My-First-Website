<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css" type="text/css">

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container-fluid"><br><br><br><br>
			<div class="row">
                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 1</h4>
								</div>
							
								<div class="thumbnail">
                                                                    <img src="img/mob1.png" alt="Redmi  Note8" width="200" height="30">
                                        <div class="caption">
											<p>REDMI NOTE 8   |   Price-Rs.14,989/-<br>Processor-Qualcomm® Snapdragon™ 665,6GB RAM,128GB Internal memory,Battery-4000mAh high-capacity battery</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 2</h4>
								</div>
							
								<div class="thumbnail">
                                                                    <img src="img/mob2.jpg" alt="Asus Zenfone Max" width="188" height="30">
                                        <div class="caption">
											<p>ASUS ZENFONE MAX   |   Price-Rs.2,799/-<br>Processor-Qualcomm Snapdragon 410,RAM-2GB,Internal storage-16GB,Expandable storage-Yes</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 3</h4>
								</div>
							
								<div class="thumbnail">
                                                                    <img src="img/mob3.jpg" alt="Samsung galaxy M30" width="200" height="50">
                                        <div class="caption">
											<p>SAMSUNG GALAXY M30  |  Price-Rs.12,999/-<br>Processor-1.6GHz octa-core,4GB RAM,64GB Internal memory,Battery-Li-Po 5000 mAh battery</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
					
				<div class="container-fluid">
					<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 4</h4>
								</div>
							
								<div class="thumbnail">
                                                                    <img src="img/mob4.jpg" alt="OPPO" width="190" height="30">
                                        <div class="caption">
											<p>OPPO   |   Price-Rs.14,600/-<br>Processor-MediaTek Helio P22 (MT6762),2GB RAM,32GB Internal memory,Expandable storage-Yes</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 5</h4>
								</div>
							
								<div class="thumbnail">
                                                                    <img src="img/mob5.jpg" alt="Vivo Y53" width="107" height="30">
                                        <div class="caption">
											<p>VIVO Y53 |  Price-Rs.8,490/-<br>Processor-Qualcomm Snapdragon 425,RAM-2GB,Internal storage-16GB,Expandable storage-Yes</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 6</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/mob6.jpg" alt="Realme X50 5G" width="150" height="50">
                                        <div class="caption">
											<p>REALME X50 5G | Price-Rs.18,999/-<br>Processor-Octa core 2.4 GHz, Single core,8GB RAM,128GB Internal memory,Battery-4200 mAh</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
						
                    </div>
				</div>
                
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
