<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Edit Car Details</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style_register.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
<div class="signup-form">
    <form action="<?php echo base_url(); ?>index.php/cars/updatecar" method="post">
        <h3> Edit Car Details</h3>
        <h2></h2>
        <div class="form-group">
            <input type="hidden" name="carid" value="<?php echo $detail['id'] ?>">
            <input type="text" class="form-control" name="carModel" value="<?php echo $detail['vehicle_model'] ?>" placeholder="Enter Vehicle Model" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="carNumber" value="<?php echo $detail['vehicle_number'] ?>" placeholder="Enter Vehicle Number" required="required">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="seat" value="<?php echo $detail['seating_cap'] ?>" placeholder="Enter Seating Capacity" required="required">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="rent" value="<?php echo $detail['rent_pd'] ?>" placeholder="Enter Rent Per Day" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Submit Details</button>
        </div>
        <div class="">
            <a href="<?php echo base_url(); ?>index.php/cars">Cancel</a>
        </div>
    </form>
</div>