<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/custom.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container top_margin">
            <h3>Add New Equipment</h3>
            <?php $attributes = array('class' => 'form-horizontal'); echo form_open("product/add_equipment", $attributes); ?>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Equipment Id</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="equip_id" name="equip_id" placeholder="Enter Equipment Id" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Equipment Serial No.</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="equip_sn" name="equip_sn" placeholder="Enter Equipment Serial No." required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Product Group</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_group" name="product_group" placeholder="Enter Product Group" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Remark</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="remark" name="remark" placeholder="Enter Remark" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Status</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label><input type="radio" name="status" value ="Active">Active</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="status" value ="Fault">Fault</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">State</label>
                <div class="col-sm-10">
                <select class="form-control" id="state" name="state">
                    <option>Satisfactory</option>
                    <option>Unsatisfactory</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Add</button>
                </div>
                <div class="col-sm-offset-2 col-sm-10">
                    <p><a href="<?php echo base_url(); ?>welcome" class="btn btn-default">Back</a></p>
                </div>
            </div>
            <?php echo form_close(); ?> 
            <?php echo $this->session->flashdata('message');?>
            
        </div>
    </div>
</div>
</body>
</html>