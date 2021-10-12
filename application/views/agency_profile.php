<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Profile</title>
    <!-- GOOGLE FONT & MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
</head>

<body>
    <!-- nav bar -->
    <section>
        <nav>
            <div id="navbar-brand">
                <a>Car Agency </a>
            </div>
            <div id="navbar-links">
                <div id="mobile-btn">
                    <button onclick="reveal_menu()">
                        <span id="btn" class="material-icons">menu</span>
                    </button>
                </div>
                <ul id="list" class="hidden">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li id="active"><a href="#">Available Cars to Rent</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/cars/addcar">Add New Cars</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/cars/bookedcar">Booked Cars</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/welcome/logout">Logout</a></li>
                </ul>
                <ul id="bottom_list" class="hidden">
                </ul>
            </div>
        </nav>
    </section>
    <div>
        <h2>
            <hr>
        </h2>
    </div>
    <script>
        var t = setTimeout("document.getElementById('myMsg').style.display='none';", 8000);
    </script>
    <div>
        <p style="color:green; text-align:center;margin:10px;" id="myMsg"><?php echo $this->session->flashdata('registered'); ?></p>
    </div>
    <div class="flex-container">
        <?php
        $i = 0;
        foreach ($detail as $deta) :
            if ($i % 3 == 0) {
                echo '</div><div class="flex-container"><br>';
            }
        ?>
            <div class="card">
                <div class="container2">
                    <p class="car"> Car : <?php echo $detail[$i]['id'] ?> </p>
                    <hr>
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
                    </table>
                    <h4>
                        <button><a href="<?php echo site_url('index.php/cars/editcar') . '/' . $detail[$i]['id']; ?>">Edit Details</a></button>
                        <h4>
                </div>
            </div>
        <?php
            $i = $i + 1;
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
            } else {
                button.innerHTML = "menu";
                button.style.color = "black";
                brand.style.color = "black";
            }
        }
    </script>
</body>