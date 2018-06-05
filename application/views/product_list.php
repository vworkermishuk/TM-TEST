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
            <h3>EQUIPMENT LIST</h3>
            <table id="mytable" class="table">
            <thead>
                <tr>
                    <th><strong>Equip Id</strong></th>
                    <th><strong>Emquipment Serial No</strong></th>
                    <th><strong>Product Group</strong></th>
                    <th><strong>Product Name</strong></th>
                    <th><strong>Status</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($all_products as $all_products):?>
                <tr>
                    <td><a href="<?php echo base_url() ?>/product/item_details/<?php echo $all_products->equip_id ?>" ><?php echo $all_products->equip_id; ?></a></td>
                    <td><?php echo $all_products->equip_sn; ?></td>
                    <td><?php echo $all_products->product_group; ?></td>
                    <td><?php echo $all_products->product_name; ?></td>
                    <td><?php echo $all_products->status; ?></td>
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New Equipment</button>
<p><a href="<?php echo base_url(); ?>user" class="btn btn-lg">Back</a></p>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
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
            </div>
            <?php echo form_close(); ?> 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
</body>
</html>