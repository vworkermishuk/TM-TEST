<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container top_margin">
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Equipment Id</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required="" value="<?php //echo $items[0]["id"];?>">
                </div>
                <label class="control-label col-sm-2" for="name">Equipment Serial No</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required="" value="<?php //echo $items[0]["id"];?>">
                </div>
                <label class="control-label col-sm-2" for="name">Product Group</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required="" value="<?php //echo $items[0]["id"];?>">
                </div>
                <label class="control-label col-sm-2" for="name">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required="" value="<?php //echo $items[0]["id"];?>">
                </div>
                <label class="control-label col-sm-2" for="name">Remark</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required="" value="<?php //echo $items[0]["id"];?>">
                </div>
                <label class="control-label col-sm-2" for="name">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" required="" value="<?php //echo $items[0]["id"];?>">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php var_dump($items);?>