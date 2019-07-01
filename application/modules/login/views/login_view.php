<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body {
		color: #4e4e4e;
		background: #e2e2e2;
		font-family: 'Roboto', sans-serif;
	}
	.form-control {
        font-size: 16px;
		background: #f2f2f2;
		box-shadow: none !important;
		border-color: transparent;
	}
	.form-control:focus {
		border-color: #d3d3d3;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 380px;
		margin: 0 auto;
	}
	.login-form h2 {		
        margin: 0;
		padding: 30px 0;
        font-size: 34px;
    }
	.login-form .avatar {
		margin: 0 auto 30px;
        width: 180px;
	}
	.login-form .avatar img {
		width: 100%;
	}
    .login-form form {
		color: #7a7a7a;
		border-radius: 4px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;		
    }	
    .login-form .btn {
        font-weight: bold;
		background: #ef3b3a;
		border: none;
		margin-bottom: 20px;
    }
	.login-form .btn:hover, .login-form .btn:focus {
		background: #ed2121;
        outline: none !important;
	}
	.login-form a {
		color: #ef3b3a;
	}	
	.login-form form a {
		color: #ef3b3a;
	}
	.login-form a:hover, .login-form form a:hover {
		text-decoration: underline;
	}
	.hint-text {
		color: #999;
		text-align: center;
	}
	.form-footer {
    	padding-bottom: 15px;
		text-align: center;
    }
    .login-btn{
        border: 1px solid #333!important;
        color: #333!important;
        background-color:#fff!important;
    
    }
    .login-btn:hover {
    background: #272727!important;
    color: #fff !important;
    }
</style>
</head>
<body>
<div class="login-form">
	<h2 class="text-center"></h2>
         <p class="login-box-msg">
            <?php echo validation_errors();  ?>
            
        </p>
         <?php echo form_open(base_url().'login/adminLogin');  ?>
		<div class="avatar">
			<img src="<?= base_url() ?>assets/img/surfaces-logo.png" alt="A-Clas">
		</div>           
        <div class="form-group">
        	<input type="email" class="form-control input-lg" name="email" placeholder="Username" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Sign in</button>
        </div>
		
    </form>
    
</div>
</body>
</html>                            