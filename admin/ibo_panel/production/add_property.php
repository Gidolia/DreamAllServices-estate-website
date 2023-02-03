<?php 
include "config.php";
top_structure('Add Property', 0, 'warning', 'Success', 'done');    
sidebar();
header_bar();?>
<!--Page Content-->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script>
<!--Page Content-->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Property</h3>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h3>Add New Property</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post">
                        
                     
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Property Name <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="p_name"  class="form-control ">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Property Image<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="file" name="p_img" required="required" class="form-control ">
                        </div>
                      </div>
                     
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="p_add" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">City<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="p_city" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">State<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="p_state" required="required" class="form-control ">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Country <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="p_country" required="required" class="form-control ">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Price  <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="p_price"  class="form-control ">
                          
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Area  <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 ">
                          <input type="text" name="p_area" required="required" class="form-control ">
                          
                        </div>
                      </div>
               
                      <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description <span class="required">*</span>
                        </label>
                        
                        <div class="col-md-8 col-sm-8 ">
    <div class="x_panel">
		<div class="x_title">
			<h2>Add Long Description<small><small></h2>
			<ul class="nav navbar-right panel_toolbox">
				<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
				</li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				</li>
				<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
					</ul>
				<div class="clearfix"></div>
			</div>
		<div class="x_content">
	<div class="item form-group">
    <div class="col-md-12 col-sm-12">
    	<textarea id="mytextarea" name="p_desc"><?php echo $fe['long_description']?></textarea>
    </div>
</div>
    <script>
    ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
    console.error( error );
                } );
    </script>								
							
						</div>
					</div>
				</div>
                      </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" name="ad_property" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
            </form>
    <?php
   
    ?>
            
            </div>
            </div>
            </div>
            </div>
            
          </div>
        </div>
  
<!--Page Content-->
<?php 
bottom_structure('DreamAllServices');
if(isset($_POST['ad_property'])){
        
        $mk="SELECT MAX(p_id) AS max_id FROM `property` ";
        $x=$con->query($mk);
        $fe=$x->fetch_assoc();
       
        if (file_exists("pro1" .$fe['max_id'].".jpg"))
        {
        unlink("pro1" .$fe['max_id'].".jpg");
          echo $fe['max_id'].".jpg" . " already exists. ";
        }
        if(move_uploaded_file($_FILES["p_img"]["tmp_name"], "images/pro1".$fe['max_id'].".jpg"))
    {
        
            $img1="pro1" .$fe['max_id'].".jpg";
            
            $hg="INSERT INTO `property`(`p_id`, `p_name`, `p_address`, `p_state`, `p_city`, `p_country`, `p_price`, `p_image`, `p_area`, `p_description`, `date`, `time`) VALUES ('','$_POST[p_name]','$_POST[p_add]','$_POST[p_state]','$_POST[p_city]','$_POST[p_country]','$_POST[p_price]','$img1','$_POST[p_area]','$_POST[p_desc]','$date','$time')";
    
            if($con->query($hg)==TRUE)
            {
                echo "<script>
                       location.href='add_property.php?m=as';</script>";
            }
            else{ 
                echo "<script>
                      location.href='add_property.php?m=af';</script>";
            }
              
            }else{ 
            echo "<script>
    location.href='add_property.php?m=asi';</script>";
                
            }
    }
    
?>