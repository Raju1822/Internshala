<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Profile</title>
    <!-- GOOGLE FONT & MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bookedcar.css">
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
                    <li><a href="<?php echo base_url(); ?>index.php/cars">Available Cars to Rent</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/cars/addcar">Add New Cars</a></li>
                    <li id="active"><a href="<?php echo base_url(); ?>index.php/cars/bookedcar">Booked Cars</a></li>
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
    <div class="flex-container">
        <table class="striped">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Vehicle Id</th>
                    <th>Vehicle Model</th>
                    <th>Vehicle Number</th>
                    <th>Seating Capacity</th>
                    <th>Rent Per Day</th>
                    <th>Number of Days</th>
                    <th>Start Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($detail as $cnt) :
                ?>
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td><?php echo $detail[$i]['id']; ?></td>
                        <td><?php echo $detail[$i]['vehicle_model']; ?></td>
                        <td><?php echo $detail[$i]['vehicle_number']; ?></td>
                        <td><?php echo $detail[$i]['seating_cap']; ?></td>
                        <td><?php echo $detail[$i]['rent_pd']; ?></td>
                        <td><?php echo $detail[$i]['day']; ?></td>
                        <td><?php echo $detail[$i]['start_date']; ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
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