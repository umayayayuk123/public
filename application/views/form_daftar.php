<html>
<head>
<meta charset="utf-8">
<title>POS - Point Of Sale</title>
<link href="<?php echo base_url().'assets/css/' ?>login_style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script>
	function myFunction()
		{
			alert("Pendaftaran Akun Berhasil");
		}
</script>
</head>
 
<body  >
	<div class="main">
		<div class="user">
			
		</div>
		<div class="login">
			<div class="inset">
					<?php 
						$alert_login = $this->session->flashdata('error_login');
						if ($alert_login!=="") {
					?>

					<div style="color:red;padding:10px 10px 10px 10px;font-family:arial;">
						<center>
							<?php echo $alert_login; ?>
						</center>
					</div>
					<br>
					<?php } ?>
					<?php echo form_open('auth/login'); ?>
			        
			         <div>
						<span><label>Username</label></span>
						<span><input type="text" name="username" placeholder="Masukkan Username" class="textbox" id="active"></span>
					 </div>
					 <div>
						<span><label>Password</label></span>
					    <span><input type="password" name="password" placeholder="Masukkan Password" class="password"></span>
					 </div>
					<div class="sign">
						<div class="submit">
						  <input type="submit" name="submit" onclick="myFunction()" value="LOGIN" >
						</div>
						<div class="submit">
						  <input type="submit" name="submit" onclick="myFunction()" value="DAFTAR" >
						</div>
						<span class="forget-pass">
							<a href="#">Forgot Password?</a>
						</span>
							<div class="clear"> </div>
					</div>
					</form>
				</div>
			</div>
		
		</div>
		 
   					<div class="copy-right">
						<p>Aplikasi : Cashier POS-Codeigniter</p> 
					</div>
				
	 
</body>
</html>