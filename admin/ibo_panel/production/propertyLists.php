<?php 
include "config.php";
top_structure('Property List', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>

  
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Property List</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Property Lists</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="card-box table-responsive"> 
                     <table id="datatable-buttons" class="table table-striped jambo_table" >
                      <thead>
                        <tr class="headings">
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Price</th>
                        <th>Area</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                                $au=1;
                                $e="SELECT * FROM `property`  ORDER BY `p_id` DESC";
                                $d=$con->query($e);
                                $au="0";
                                while($R=$d->fetch_assoc()){ 
                            ?>
                                    <tr>
                                <td>
                                    <?php echo ++$au;?>
                                </td>        
                                <td>
                                   <?php echo $R[p_name];?>
                                </td>
                                <td>
                                  <a href="propertyDetail.php?id=<?php echo $R[p_id]?>"><img src="images/<?php echo $R[p_image];?>" style="height:100px;width:100px;"></a>
                                </td>
                                <td>
                                  <?php echo $R[p_address];?>,<?php echo $R[p_city];?>,<?php echo $R[p_state];?>,<?php echo $R[p_country];?>
                                </td>
                                <td>
                                  <?php echo $R[p_price];?>
                                </td>
                                 <td>
                                  <?php echo $R[p_area];?>
                                </td>
                                
                                <td>
                                  <a href="delete_property.php?id=<?php echo $R[p_id]?>"><button class="btn btn-danger">Delete</button></a>
                                </td>
                                 
                                </tr>
                                <?php      
                                } ?>
                      </tbody>
                    </table>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php 
bottom_structure('ToyMyBoy');

?>