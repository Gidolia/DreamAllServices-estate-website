<?php 
include "config.php";
top_structure('Property Requests Lists', 0, 'warning', 'Success', 'done');
sidebar();
header_bar();?>

  
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Property Requests Lists</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Property Requests Lists</h2>
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
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                        <th>Property Detail</th>
                        <th>Date/Time</th>
                        <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                                $au=1;
                                $e="SELECT * FROM `contact` WHERE `p_id`!='0' ORDER BY `c_id` DESC";
                                $d=$con->query($e);
                                $au="0";
                                while($R=$d->fetch_assoc()){ 
                                $f="SELECT * FROM `property` WHERE `p_id`='$R[p_id]'";
                                $sg=$con->query($f);
                                while($s=$sg->fetch_assoc()){
                            ?>
                                    <tr>
                                <td>
                                    <?php echo ++$au;?>
                                </td>        
                                <td>
                                   <?php echo $R[name];?>
                                </td>
                                <td>
                                  <?php echo $R[email];?>
                                </td>
                                <td>
                                  <?php echo $R[mobile];?>
                                </td>
                                <td>
                                  <?php echo $R[message];?>
                                </td>
                                <td>
                                  <a href="propertyDetail.php?id=<?php echo $s[p_id]?>"><img src="images/<?php echo $s[p_image];?>" style="height:100px;width:100px;"></a>
                                </td>
                                <td>
                                  <?php echo $R[date]."/".$R[time];?>
                                </td>
                                <td>
                                  <a href="delete_requests.php?id=<?php echo $R[p_id]?>"><button class="btn btn-danger">Delete</button></a>
                                </td>
                                 
                                </tr>
                                <?php      
                                    } 
                                }
                                ?>
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