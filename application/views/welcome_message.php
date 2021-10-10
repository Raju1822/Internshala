<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Agency</title>

    <!-- GOOGLE FONT & MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css"> 

</head>


<body>
 <!-- nav bar -->
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
                <li id="active"><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>index.php/Cars">Available Cars to Rent</a></li>
            </ul>


            <ul id="bottom_list" class="hidden">
            </ul>

        </div>
    </nav>

<!--  login form -->
    <script>
        var t=setTimeout("document.getElementById('myMsg').style.display='none';",8000);
    </script>
   <div>
    <p style="color:green; text-align:center;margin:10px;" id="myMsg"><?php echo $this->session->flashdata('registered'); ?></p>
   </div>

	<div class="wrapper">
	<div class="container">
    <div class="col-left">
      <div class="login-text">
		  <h2>Register Here</h2>
	      <a class="btn" href="<?php echo base_url();?>index.php/welcome/register1">Customer</a>
		  <br>
          <a class="btn" href="<?php echo base_url();?>index.php/welcome/register2">Car Rental Agency</a>
      </div>
	  
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>
        <form action="<?php echo base_url();?>index.php/Welcome/login" method="post">
          <p>
            <input type="text" name="username" placeholder="Email" required>
          </p>
          <p>
            <input type="password" name="password" placeholder="Password" required>
          </p>
          <p>
            <input class="btn" type="submit" value="Sing In" />
          </p>
          <p>
            <a href="">Forget password?</a>
            <a href="">Create an account.</a>
          </p>
        </form>
      </div>
    </div>
  </div>
 
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