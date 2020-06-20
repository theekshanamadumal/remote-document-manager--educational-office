<!DOCTYPE html>
<html lang="en">
	<head>
		<title>pre-retirement leave</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
	<?php include_once("inc/head.php"); ?>
    <?php include_once("inc/ArticalHead.php"); ?>
		<div class="container-fluid text-left">
	     	<div class="row content">
	        	<div class="col-sm-1 sidenav"></div>
	        	<div class="col-sm-11 sidenav">
					<h3>විශ්‍රාම පූර්ව නිවාඩු</h3>
					<div>
						<h4 class="bg-primary" style="width: 700px;">සම්පූර්ණ කල යුතු මූලික ලේඛන</h4>
				        <ol>
				        	<li style="width: 600px;">ඉල්ලීමේ ලිපිය ( විදුහල්පතිගේ නිර්දේශය සහිතව) පිටපත් 3</li>
				        	<li style="width: 600px;">පසුගිය වර්ෂවල ඉතිරි නිවාඩු පිළිබද විස්තරය (බී ආකෘතිය මගින්)</li>
				        </ol>
					</div>
					<div>
						<h4 class="bg-primary" style="width: 700px;">අදාල අංශය</h4>
						<ul>
							<li style="width: 600px;">ගුරු ආයතන ශඛාව / සාමාන්‍ය පාලන ශාඛාව</li>
						</ul>
					</div>
					<div>
				        <h4 class="bg-primary" style="width: 700px;">සේවාව ලබාදීමට ගතවන කාලය</h4>
				        <ul>
				        	<li style="width: 600px;">දින 03</li>
				        </ul>
				    </div>
				    <div>
	 					<form method="post">
              				<input type="submit" name="Request" class="button" value="Request" />
            			</form>
			            <?php
			              global $variable;
			              $variable = 3;
			              include_once('inc/request.php');
            			?>
				    </div>
				</div>
			</div>
		</div>
	</body>
	<?php include_once('inc/foot.php'); ?>
</html>