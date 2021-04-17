<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UI Dashboard Website</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="datetimepicker/jquery.datetimepicker.css"/>
  <link rel="stylesheet" type="text/css" href="UI%20Dashbord/fontawesome-free-5.8.1-web/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="UI%20Dashbord/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="UI%20Dashbord/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="UI%20Dashbord/css/style.css" rel="stylesheet">

  
</head>

<body>

    
<!-- The sidebar -->
  
  <!-- navigation menu ----------------------------------------------------------------------------------->
   <div class="py-2" style="background-colour:green">
    <nav class="navbar col-md-12 navbar-expand-sm navbar-dark bg-dark">
     
        <button class="navbar-toggler " data-toggle="collapse" data-target="#menu"> 
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
            
            
             <li class="nav-item">
            <a href="dashboard_storeman.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i> Home</a>
          </li>
            
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <li class="nav-item">
            <a href="" class="nav-link"><h1>UNIT INVENTORY</h1></a>
          </li>
            
        
        </ul>
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
       </div>
  <!-- navigation menu ends here -->
    

    
<!--delete pop up form-->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="delete.php" method="POST">
        
      <div class="modal-body">
             <div class="form-group">
            
                <input type="hidden" class="form-control" name="delete_id" id="delete_id" >
                <h4>Do you want to delete this item?</h4>
               
            </div>
         
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="submit" name="deletedata" class="btn btn-danger">YES</button>
      </div>
    </form>
      </div>
    </div>
  </div>
    
<!--edit pop up form------------------------------------------------------------------------------------------------------------------------------>
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <?php
    
    $con=mysqli_connect("localhost","root","","inventory_mgt_sys");
    
    $sql=mysqli_query($con,"select * from accounts where username='".$_SESSION["username"]."'");
    while($row=mysqli_fetch_array($sql)){
        $role=$row['role'];
    }
    if ($role=="master"){ ?>
      
        <form action="update.php" method="POST">
        
        
      <div class="modal-body">
           
        
            <div class="form-group">
                <label>S.No.</label>
                <input type="number" class="form-control" name="sno" id="sno">
               
            </div>
            <div class="form-group">
            
                <input type="hidden" class="form-control" name="update_id" id="update_id" >
               
            </div>
            <div class="form-group">
                <label>Item Nomenclature</label>
                <input type="text" class="form-control" name="nomenclature" id="name">
          </div>
           <div class="form-group">
                <label>Item Classification</label>
                <input type="text" class="form-control" name="classification" id="cl">
          </div>
           <div class="form-group">
                <label>A/U</label>
                <input type="text" class="form-control" name="auth_unit" id="au">
          </div>
           <div class="form-group">
                <label>Qty</label>
                <input type="text" class="form-control" name="qty" id="qty">
          </div>
           <div class="form-group">
                <label>Grant</label>
                    <select class="form-control" name="grnt" id="grant">
                    <option>ACSFP</option>
                    <option>ORD</option>
                    <option>SWSG</option>
                     <option>ACG</option>
                     <option>TTIE</option>
                     <option>IT</option>
                     <option>LPSS</option>
                     <option>IT STY</option>
                     <option>ETG</option>
                     <option>AMENITY</option>
                     <option>TAG</option>
                     <option>CTS </option>
                     <option>CSD QD</option>
                     <option>REGTL</option>
                     <option>ATG</option>
                     <option>Offr Mess</option>
                     <option>JCO Mess</option>
                    <option>LOAN</option>
                    
               </select>
          </div>
           <div class="form-group">
                <label>QLP No.</label>
                <input type="text" class="form-control" name="qlpno" id="qlp">
          </div>
           <div class="form-group">
                <label>Cost</label>
                <input type="number" class="form-control" name="cost" id="cost">
          </div>
           <div class="form-group">
                <label>Supply Order No.</label>
                <input type="text" class="form-control" name="suporder" id="supord">
          </div>
           <div class="form-group">
                <label>Supply Date</label>
                <input type="text" class="form-control" name="sup_date" id="filter-date">
          </div>
           <div class="form-group">
                <label>Vendor details</label>
                <input type="text" class="form-control" name="vendor_details" id="vend">
          </div>
           <div class="form-group">
                <label>Vendor Contact</label>
                <input type="text" class="form-control" name="vendor_contact" id="vendcont">
          </div>
           <div class="form-group">
                <label>QIV No.</label>
                <input type="text" class="form-control" name="qivno" id="qiv">
          </div>
           <div class="form-group">
                <label>RV No.</label>
                <input type="text" class="form-control" name="rv" id="rv">
          </div>
           <div class="form-group">
                <label>Issued to Coy</label>
                <select class="form-control" name="coy" id="coy">
                    <option>ADM</option>
                    <option>SC</option>
                    <option>MC</option>
               </select>
          </div>
           <div class="form-group">
                <label>Issued to Store</label>
                 <select class="form-control" name="store" id="store">
                    <option>MC CQ</option>
                    <option>Radio</option>
                    <option>Air sp</option>
                     <option>EFS</option>
                     <option>TECH</option>
                     <option>LINE</option>
                     <option>IT</option>
                     <option>Adm CQ</option>
                     <option>SC CQ</option>
                     <option>TM</option>
                     <option>MT</option>
                     <option>Ration </option>
                     <option>Sports</option>
                     <option>LRW</option>
                     <option>RHQ</option>
                     <option>Offr Mess</option>
                     <option>JCO Mess</option>
                     <option>RP</option>
               </select>
          </div>
          
          <div class="form-group">
                <label>On loan (Outside unit)</label>
                <input type="text" class="form-control" name="loan" id="loan">
          </div>
          <div class="form-group">
                <label>Internal distribution</label>
                <input type="text" class="form-control" name="int_distr" id="distr">
          </div>
          
          
           <div class="form-group">
                <label>Warranty Upto</label>
                <input type="text" class="form-control" name="warranty" id="search-from-date">
          </div>
          <div class="form-group">
                <label>AMC Upto</label>
                <input type="text" class="form-control" name="amc" id="search-to-date">
          </div>
          <div class="form-group">
                <label>Shelf life(years)</label>
                <input type="number" class="form-control" name="esl" id="esl">
          </div>
          <div class="form-group">
                <label>Status</label>
                   <select class="form-control" name="status" id="sta">
                    <option>svc</option>
                    <option>unsv</option>
                    <option>ber</option>
               </select>
          </div>
          <div class="form-group">
                <label>Remarks</label>
                <input type="text" class="form-control" name="remarks" id="rema">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">Update changes</button>
      </div>
      </div>
    </form>
     <?php  } else{ ?>
        <form action="update.php" method="POST">
        
        
      <div class="modal-body">
             <div class="form-group">
            
                <input type="hidden" class="form-control" name="id" id="update_id" >
               
            </div>
         <div class="form-group">
                <label>Internal distribution</label>
                <input type="text" class="form-control" name="int_distr" id="distr">
          </div>
          <div class="form-group">
                <label>Status</label>
                   <select class="form-control" name="status" id="sta">
                    <option>svc</option>
                    <option>unsv</option>
                    <option>ber</option>
               </select>
          </div>
          <div class="form-group">
                <label>Remarks</label>
                <input type="text" class="form-control" name="remarks" id="rema">
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">Update changes</button>
      </div>
      </div>
    </form>
        <?php } ?>
    </div>
  </div>
</div>
<!-- Add data ------------------------------------------------------------------------------------------------------Modal -->
    
    
<div class="modal fade" id="insertdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="insert.php" method="POST">
        
      <div class="modal-body">
           
        
            <div class="form-group">
                <label>S.No.</label>
                <input type="number" class="form-control" name="sno" id="S.No.">
               
            </div>
           <div class="form-group">
            
                <input type="hidden" class="form-control" name="id" id="id" >
               
            </div>
            <div class="form-group">
                <label>Item Nomenclature</label>
                <input type="text" class="form-control" name="nomenclature" id="Item_Nomenclature">
          </div>
           <div class="form-group">
                <label>Item Classification</label>
                <input type="text" class="form-control" name="classification" id="Item_Classification">
          </div>
           <div class="form-group">
                <label>A/U</label>
                <input type="text" class="form-control" name="auth_unit" id="AU">
          </div>
           <div class="form-group">
                <label>Qty</label>
                <input type="text" class="form-control" name="qty" id="Qty">
          </div>
          
           <div class="form-group">
                <label>Cost</label>
                <input type="number" class="form-control" name="cost" id="Cost">
          </div>
           <div class="form-group">
                <label>Supply Order No.</label>
                <input type="text" class="form-control" name="suporder" id="sup_ord">
          </div>
           <div class="form-group">
                <label>Supply Date</label>
                <input type="text" class="form-control" name="sup_date" id="filter-date">
          </div>
           <div class="form-group">
                <label>Vendor details</label>
                <input type="text" class="form-control" name="vendor_details" id="vend_det">
          </div>
           <div class="form-group">
                <label>Vendor Contact</label>
                <input type="text" class="form-control" name="vendor_contact" id="vend_cont">
          </div>
          
          <div class="form-group">
                <label>Remarks</label>
                <input type="text" class="form-control" name="remarks" id="rema">
          </div> 
           
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="savedata" class="btn btn-primary">Save changes</button>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>
<!--#############################################################################################################################-->  
 
     
  <!--#############################################################################################################################-->     
    
    <?php
    
    $con=mysqli_connect("localhost","root","","inventory_mgt_sys");
    
    $sql=mysqli_query($con,"select * from accounts where username='".$_SESSION["username"]."'");
    while($row=mysqli_fetch_array($sql)){
        $role=$row['role'];
    }
    if ($role=="master"){ ?>
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
    <div class="container">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#insertdata">Add data</button></h3>
    </div>
        
    <div class="container col-sm-9" style="margin-top: 20px">
         <div class="row">
            <div class="col-md-8">
                <table class="table sticky table-bordered table-striped table-hover mytable">
                    <thead class="table-dark">
                        <tr>
                            
                            <td>Id</td>
                            <td>Item Nomenclature</td>
                            <td>Item classification</td>
                            <td>A/U</td>
                            <td>Qty</td>
                   
                            <td>Cost</td>
                  
                            <td>Supply date</td>
               
                            <td>RV No.</td>
                  
                            <td>Remarks</td>

                            <td>Edit</td>
                            <td>Delete</td>
       
                        </tr>
                    </thead>
                    <tbody>
                        
                             <?php
                                $con=  mysqli_connect("localhost", "root", "", "inventory_mgt_sys");
                        
                                if(!$con)
                               {
                                   die('not connected');
                               }
                                $con=  mysqli_query($con, "select * from all_stores");
                        
                               ?>
                                <div>
                                    
                                <?php

                                     while($row=  mysqli_fetch_array($con))
                        
                                     {
                                         ?>
                                    <tr>
                                         
                             
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['nomenclature']; ?></td>
                                         <td><?php echo $row['classification']; ?></td>
                                         <td><?php echo $row['auth_unit']; ?></td>
                                         <td><?php echo $row['qty']; ?></td>
                                 
                                         <td><?php echo $row['cost']; ?></td>
                                    
                                         <td><?php echo $row['sup_date']; ?></td>
                                       
                                         <td><?php echo $row['rv']; ?></td>
                      
                                         <td><?php echo $row['remarks']; ?></td>
                                         
                                        <td><button type="button" class="btn btn-success editbtn">Edit</button></td>
                                        <td><button type="button" class="btn btn-danger deletebtn ">Delete</button></td>
                                        
      
                                    </tr>
                
              <?php
                                     }
        ?>
                                 
                        </div>
                        </tbody>
                        <tfoot>
                            <tr>
                              
                            
                                 <th>Id</th>
                            <th>Item Nomenclature</th>
                            <th>Item classification</th>
                            <th>A/U</th>
                            <th>Qty</th>
                           
                            <th>Cost</th>
                        
                            <th>Supply date</th>
                      
                        
                            <th>RV No.</th>
          
                            <th>Remarks</th>
                            
                            </tr>
                    
                        </tfoot>
                
                
                
                </table>
            </div>
            </div>
        </div>
       
       
      <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript" src="datetimepicker/build/jquery.datetimepicker.full.js"></script>
    <script>
            /*jslint browser:true*/
            /*global jQuery, document*/

            jQuery(document).ready(function () {
                'use strict';

                jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
            });
        </script>
    <script>
        $('.mytable').DataTable({
            "pageLength": -1,
            paging:true,
            fixedHeader: true,
            initComplete: function() {
                this.api().columns().every(function(){
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on( 'change',function(){
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            
                            column
                                .search( val ? '^'+val+'$' : '',true,false)
                                .draw();
                        });
                    column.data().unique().sort().each(function( d,j){
                        select.append( '<option value ="'+d+'">'+d+'</option>')
                    });
                });
            }
    
            });
            
    
    </script>
        
    <script>
        $(document).ready(function(){
            $('.editbtn').on('click',function(){
                
                $('#editmodal').modal('show');
                
                    $tr=$(this).closest('tr');
                
                    var data =$tr.children("td").map(function(){
                        return $(this).text();
                    }).get();
                    console.log(data);
                    
           
                   
                        $('#update_id').val(data[1]);
                    $('#name').val(data[2]);
                  $('#cl').val(data[3]);
                  $('#au').val(data[4]);
                  $('#qty').val(data[5]);
                  $('#grant').val(data[6]);
                  $('#qlp').val(data[7]);
                  $('#cost').val(data[8]);
                  $('#supord').val(data[9]);
                  $('#filter-date').val(data[10]);
                  $('#vend').val(data[11]);
                $('#vendcont').val(data[12]);
                $('#qiv').val(data[13]);
                $('#rv').val(data[14]);
                $('#coy').val(data[15]);
                $('#store').val(data[16]);
                 $('#loan').val(data[17]);
                $('#distr').val(data[18]);
                $('#search-from-date').val(data[19]);
                $('#search-to-date').val(data[20]);
                $('#esl').val(data[21]);
                $('#sta').val(data[22]);
                $('#rema').val(data[23]);
                

            });
            
        });
</script>
    
<script>
        $(document).ready(function(){
            
            $('.deletebtn').on('click',function(){
                
                $('#deletemodal').modal('show');
                
                    $tr=$(this).closest('tr');
                
                    var data =$tr.children("td").map(function(){
                        return $(this).text();
                    }).get();
                    console.log(data);
                    
                    $('#delete_id').val(data[1]);
                    
            });
            
        });
</script>
    

    <!----------------------------------------------------------------------------------------------------------------------------------------------->
        
    
    <?php 
    } else{ ?>
    
    
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
      <div class="container">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
    </div>
    
    
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered table-striped table-hover mytable">
                    <thead class="table-dark">
                        <tr>
                            
                       
                            <td>Item Nomenclature</td>
                            <td>Item classification</td>
                            <td>A/U</td>
                            <td>Qty</td>
                            <td>Grant</td>
                            <td>QLP No.</td>
                            <td>Cost</td>
                            <td>Supply Order</td>
                            <td>Supply date</td>
                            <td>Vendor details</td>
                            <td>Vendor contact</td>
                            <td>QIV No.</td>
                            <td>RV No.</td>
                            <td>Issued to Coy</td>
                            <td>Issued to store</td>
                            <td>On loan(Outside unit)</td>
                             <td>Internal distr</td>
                            <td>Warranty Upto</td>
                            <td>AMC Upto</td>
                            <td>Shelf life</td>
                             <td>Status</td>
                            <td>Remarks</td>

                            
       
                        </tr>
                    </thead>
                    <tbody>
                        
                             <?php
                                $con=  mysqli_connect("localhost", "root", "", "inventory_mgt_sys");
                        
                                if(!$con)
                               {
                                   die('not connected');
                               }
                                $con=  mysqli_query($con, "select * from all_stores");
                        
                               ?>
                                <div>
                                    
                                <?php

                                     while($row=  mysqli_fetch_array($con))
                        
                                     {
                                         ?>
                                    <tr>
                                        
                                      
                                        <td><?php echo $row['nomenclature']; ?></td>
                                         <td><?php echo $row['classification']; ?></td>
                                         <td><?php echo $row['auth_unit']; ?></td>
                                         <td><?php echo $row['qty']; ?></td>
                                         <td><?php echo $row['grnt']; ?></td>
                                         <td><?php echo $row['qlpno']; ?></td>
                                         <td><?php echo $row['cost']; ?></td>
                                         <td><?php echo $row['suporder']; ?></td>
                                         <td><?php echo $row['sup_date']; ?></td>
                                         <td><?php echo $row['vendor_details']; ?></td>
                                         <td><?php echo $row['vendor_contact']; ?></td>
                                         <td><?php echo $row['qivno']; ?></td>
                                         <td><?php echo $row['rv']; ?></td>
                                         <td><?php echo $row['coy']; ?></td>
                                         <td><?php echo $row['store']; ?></td>
                                         <td><?php echo $row['loan']; ?></td>
                                         <td><?php echo $row['int_distr']; ?></td>
                                         <td><?php echo $row['warranty']; ?></td>
                                         <td><?php echo $row['amc']; ?></td>
                                         <td><?php echo $row['esl']; ?></td>
                                         <td><?php echo $row['status']; ?></td>
                                         <td><?php echo $row['remarks']; ?></td>
                                         
                                    
      
                                    </tr>
                <?php
                                     }
        ?>
              
              
                                 
                        </div>
                        </tbody>
                        <tfoot>
                            <tr>
                                
                         
                            <th>Item Nomenclature</th>
                            <th>Item classification</th>
                            <th>A/U</th>
                            <th>Qty</th>
                            <th>Grant</th>
                            <th>QLP No.</th>
                            <th>Cost</th>
                            <th>Supply Order</th>
                            <th>Supply date</th>
                            <th>Vendor details</th>
                            <th>Vendor contact</th>
                            <th>QIV No.</th>
                            <th>RV No.</th>
                            <th>Issued to Coy</th>
                            <th>Issued to store</th>
                            <td>On loan(Outside unit)</td>
                             <td>Internal distr</td>
                            <th>Warranty Upto</th>
                            <th>AMC Upto</th>
                            <th>Shelf life</th>
                             <th>Status</th>
                            <th>Remarks</th>
                            
                            </tr>
                    
                        </tfoot>
                
                
                
                </table>
            </div>
             </div>
    </div>
         
       
    
    <script src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript" src="datetimepicker/build/jquery.datetimepicker.full.js"></script>
    <script>
            /*jslint browser:true*/
            /*global jQuery, document*/

            jQuery(document).ready(function () {
                'use strict';

                jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
            });
        </script>
    <script>
        $('.mytable').DataTable({
            "pageLength": -1,
            paging:true,
            initComplete: function() {
                this.api().columns().every(function(){
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on( 'change',function(){
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            
                            column
                                .search( val ? '^'+val+'$' : '',true,false)
                                .draw();
                        });
                    column.data().unique().sort().each(function( d,j){
                        select.append( '<option value ="'+d+'">'+d+'</option>')
                    });
                });
            }
    
            });
            
    
    </script>

  
    <?php   } ?>    
     
    
</body>
</html>




























