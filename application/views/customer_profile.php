<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>

    <!-- GOOGLE FONT & MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css"> 

</head>


<body>
 <!-- nav bar -->
 <section>
   <nav>
        <div id="navbar-brand">
            <a>Customer Profile</a>
        </div>

        <div id="navbar-links">
            <div id="mobile-btn">
                <button onclick="reveal_menu()">
                    <span id="btn" class="material-icons">menu</span>
                </button>
            </div>

            <ul id="list" class="hidden">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li id="active"><a href="#">Available Cars to Rent</a></li>
                <li>
                        <a href="<?php echo base_url();?>index.php/welcome/logout">Logout</a>
                </li>
            </ul>


            <ul id="bottom_list" class="hidden">
            </ul>

        </div>
    </nav>
</section>

<div>
    <h2><hr></h2>
</div>


<script>
        var t=setTimeout("document.getElementById('myMsg').style.display='none';",8000);
    </script>
   <div>
    <p style="color:green; text-align:center;margin:10px;" id="myMsg"><?php echo $this->session->flashdata('registered'); ?></p>
   </div>


<div class="flex-container">

<?php  
$i=0;
foreach($detail as $deta) :

    if($i % 3 == 0) {
        echo '</div><div class="flex-container"><br>';
    }
?>
 
     
        <div class="card">
        <div class="container2">
        <p class="car"> Car : <?php echo $detail[$i]['id'] ?> </p>
            <table>
            <tr>  
                <td> Vehicle model</td>
                <td>:</td>
                <td><?php echo $detail[$i]['vehicle_model'] ?></td>
            
            </tr>
            <tr>  
                <td>Vehicle number</td>
                <td>:</td>
                <td><?php echo $detail[$i]['vehicle_number'] ?></td>
            
            </tr>
            <tr>  
                <td>Seating capacity</td>
                <td>:</td>
                <td><?php echo $detail[$i]['seating_cap'] ?></td>
            
            </tr>
            <tr>  
                <td>Rent per day</td>
                <td>:</td>
                <td><?php echo $detail[$i]['rent_pd'] ?></td>
            
            </tr>
    <form action="<?php echo base_url();?>index.php/cars/rent" method="post">
            <tr>
                <td> Rent for</td>
                <td>:</td>
                <td>
                <label for="cars"></label>
                    <select id="cars" name="day">
                        <option>Enter day</option>
                        <option value="1">1 Day</option>
                        <option value="2">2 Days</option>
                        <option value="3">3 Days</option>
                        <option value="4">4 Days</option>
                        <option value="5">5 Days</option>
                        <option value="6">6 Days</option>
                        <option value="7">7 Days</option>
                        <option value="8">8 Days</option>
                        <option value="9">9 Days</option>
                        <option value="10">10 Days</option>
                    </select>
                </td>
            </tr>
            </table>
        <h4>
            
                <input type="hidden" name="carid" value="<?php echo $detail[$i]['id'] ?>">
                <input type="hidden" name="model" value="<?php echo $detail[$i]['vehicle_model'] ?>">
                <input type="hidden" name="num" value="<?php echo $detail[$i]['vehicle_number'] ?>">
                <input type="hidden" name="seat" value="<?php echo $detail[$i]['seating_cap'] ?>">
                <input type="hidden" name="rentpd" value="<?php echo $detail[$i]['rent_pd'] ?>">
                <button type="submit">Rent Car</button>
            </form>
        <h4>
        </div>
    
    </div>
    


    <?php
     $i=$i + 1;
     endforeach;
    ?>   

</div>




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


</body>