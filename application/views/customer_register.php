<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Bootstrap Simple Registration Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style_register.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

</head>
<body>
   
<nav>
        <div id="navbar-brand">
            <a>Car Rental Agency</a>
        </div>

        <div id="navbar-links">
            <div id="mobile-btn">
                <button onclick="reveal_menu()">
                    <span id="btn" class="material-icons">menu</span>
                </button>
            </div>

            <ul id="list" class="hidden">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="#">Available Cars</a></li>
            </ul>


            <ul id="bottom_list" class="hidden">
            </ul>

        </div>
    </nav>
    

<div class="signup-form">
    <form action="<?php echo base_url();?>index.php/Register/customer" method="post">
    <h3> Customer Registration </h3>   
    <h2></h2>
   
    <!-- Main -->
    <div>
    <p style="color:red; text-align:center;margin:10px;" id="myMsg"><?php echo $this->session->flashdata('registered'); ?></p>
   </div>


        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
    </form>
	
</div>
</body>



<script>
	function reveal_menu() {
    var brand = document.getElementById("navbar-brand");
    var button = document.getElementById("btn");
    var list = document.getElementById("list");
    var bottom_list = document.getElementById("bottom_list");

    list.classList.toggle("shown");
    bottom_list.classList.toggle("shown");

    if (list.classList.contains("shown")) {
        button.innerHTML = "close";
        button.style.color = "black";
        brand.style.color = "black";
    }
    else {
        button.innerHTML = "menu";
        button.style.color = "black";
        brand.style.color = "black";
    }
}
</script>
</html>