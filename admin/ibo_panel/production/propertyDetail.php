<?php 
include "config.php";
top_structure('property Detail', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();
?>

  
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Property Detail</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Property Detail</h2>
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
                <?php
                $hg="SELECT * FROM `property` WHERE `p_id`='$_GET[id]'";
                $v=$con->query($hg);
                $val=$v->fetch_assoc();
                ?>    
                
                     <table id="datatable-buttons" class="table table-striped jambo_table" >
                      <!--<thead>-->
                        <tr>
                            <td>Property Name</td>
                            <td><?php echo $val[p_name];?></td>
                        </tr>
                        <tr>
                            <td>Property Image</td>
                            <td><img src="images/<?php echo $val[p_image];?>"  style="height:300px;width:60%;"></td>
                        </tr>
                        <tr>
                            <td>Property Address</td>
                            <td><?php echo $val[p_address];?> , <?php echo $val[p_city] ;?> , <?php echo $val[p_state];?> , <?php echo $val[p_country];?></td>
                        </tr>
                        <tr>
                            <td>Property Price</td>
                            <td><?php echo $val[p_price];?></td>
                        </tr>
                        <tr>
                            <td>Property Area</td>
                            <td><?php echo $val[p_area];?></td>
                        </tr>
                        <tr>
                            <td>Property Description</td>
                            <td><?php echo $val[p_description];?></td>
                        </tr>
                      <!--</thead>-->
                      
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