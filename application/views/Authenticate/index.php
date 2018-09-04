<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome English Conversation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>vendors/bootstrap/dist/css/bootstrap.min.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<style>
			body { 
  				-webkit-background-size: cover;
				-moz-background-size: cover;
  				-o-background-size: cover;
  				background-size: cover;
			}

			.panel-default {
				opacity: 0.9;
				margin-top:30px;
			}

			.form-group.last { 
				margin-bottom:0px; 
			}
		</style>
	</head>
    <body>
        <nav class="navbar fixed-top navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>" style="font-size: 13px;"></span>EnglishConversation</a>
                </div>
                <ul class="nav navbar-nav" style="font-size: 13px;">
                    <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-book"></span> History</a></li>
                    <li><a href="<?php echo base_url(); ?>Translate"><span class="glyphicon glyphicon-import"></span> Translate</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-dashboard"></span> Vocabulary <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="#"><span class="glyphicon glyphicon-picture"></span> Vocabulary Picture</a></li> -->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-headphones"></span> Listening <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Grammar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-education"></span> Test Exam <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly"></span> Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-ice-lolly-tasted"></span> High Beginner</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lamp"></span> Low Intermediae</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-bishop"></span> Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-tent"></span> High Intermediate</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-baby-formula"></span> Low Advanced</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-grain"></span> Advanced</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-globe"></span> Surfing Web</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-retweet"></span> Q&A</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['success'])) { ?>
                        <li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php } else { ?>
                        <li class="active"><a href="<?php echo base_url(); ?>Authenticate"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                </ul>
            </div>
		</nav>

		<div class="container">
    		<div class="row">
        		<div class="col-sm-7 col-sm-offset-2">
            		<div class="panel-body">
                    	<form class="form-horizontal" role="form" action="" method="POST">
							<div class="form-group">
								<h1>Login Form</h1>
                            </div>
                            <?php if(isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
                            <?php } ?>
                            <?php echo validation_errors('<div class="alert alert-danger">', '</div>') ?>
                    		<div class="form-group">
                        		<label for="label_email" class="col-sm-3 control-label">Email</label>
                        		<div class="col-sm-9">
                            		<input class="form-control" name="email" id="email" placeholder="Email">
                        		</div>
                    		</div>
                    		<div class="form-group">
                        		<label for="label_password" class="col-sm-3 control-label">Password</label>
                        		<div class="col-sm-9">
                            		<input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        		</div>
                    		</div>
                    		<div class="form-group">
                        		<div class="col-sm-offset-3 col-sm-7">
                            		<button class="btn btn-primary" name="signin">Sign in</button>
                                	<button type="reset" class="btn btn-default">Reset</button>
                        		</div>
							</div>
							<div class="form-group last">
								<div class="col-sm-7 control-label">Not Registred?
									<a href="<?php echo base_url(); ?>Registration">Register here</a>
								</div>
							</div>
                    	</form>
                	</div>
        		</div>
   			</div>
		</div>
	</body>
</html>