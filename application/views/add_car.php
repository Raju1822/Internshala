<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Add Car</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_register.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
<div class="signup-form">
    <form action="<?php echo base_url(); ?>index.php/cars/Newcar" method="post">
        <h3> Add New Car </h3>
        <h2></h2>

        <div class="form-group">
            <input type="text" class="form-control" name="carModel" placeholder="Enter Vehicle Model" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="carNumber" placeholder="Enter Vehicle Number" required="required">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="seat" placeholder="Enter Seating Capacity" required="required">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="rent" placeholder="Enter Rent Per Day" required="required">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Submit Details</button>
        </div>
        <div class="">
            <a href="<?php echo base_url(); ?>index.php/cars">Cancel</a>
        </div>
    </form>

</div>