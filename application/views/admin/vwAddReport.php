<style type="text/css">
  
  .error{
  color:red;
 
}
</style>
  <!-- BEGIN HEADER -->
  <?php
  $this->load->view('admin/vwHeader');
  
  $page_id=$this->uri->segment(4);
  ?>
  <!-- END HEADER -->
  <!-- BEGIN CONTAINER -->
  <div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
  <?php
  $this->load->view('admin/vwSidebar');
  ?>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
               <p>Here will be a configuration form</p>
            </div>
         </div>
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <!--<div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                    
                     </div>
                  </div>-->
                  <!-- END BEGIN STYLE CUSTOMIZER -->   
                  <h3 class="page-title">
                     Add Crime Type
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="<?php echo base_url()?>admin/dashboard">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="<?php echo base_url()?>admin/crimes">Manage Crime Type</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">Add Crime Type</a></li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Add Crime Type</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                      
            <form name="frmpage" class="form-horizontal" action="<?php echo base_url()?>admin/report/update_report/add" method="post" style="margin:0; padding:0" enctype="multipart/form-data">


             
               <div class="control-group">
                <label class="control-label">Crime Name</label>         
                <div class="controls">

                <select class="span6 "   name = "crime_name" >
                                       <option value="none">Select Crime Type</option>
                                       <?php foreach($crime_types as $crime_type) { ?>
                                       <option value="<?php echo $crime_type->type_id;?>" ><?php  echo $crime_type->crime_name;?></option>
                                       <?php } ?>
                     </select>
                <!-- <input type="text" class="span6 m-wrap" name="crime_name" id="crime_name" value="" />-->
                 <?php echo form_error("crime_name")?>
                </div>
                
               </div>             
              
              
                 
                   <div class="control-group">
                        <label class="control-label">Crime Date</label>         
                        <div class="controls">
                         <input type="text" class="span6 m-wrap" name="crime_date" id="crime_date" value="" />
                         <?php echo form_error("crime_date")?>
                        </div>
                        
                       </div>
               
                     <div class="control-group">
                       <label class="control-label">Crime Time</label>             
                       <div class="controls">
                         <input type="text" class="span6 m-wrap" name="crime_time" id="crime_time" value="" autocomplete="off" />
                         <?php echo form_error("crime_time")?>
                      </div>
                     </div>

                      <div class="control-group">
                       <label class="control-label">Crime Location</label>             
                       <div class="controls">

                        <textarea class="span12  m-wrap" name="crime_location" rows="6" id="crime_location"  ></textarea>
                      
                     </div>
                     </div>

                     <div class="control-group">
                       <label class="control-label">Crime Description</label>             
                       <div class="controls">

                        <textarea class="span12  m-wrap" name="description" rows="6" id="description" ></textarea>
                      
                     </div>
                     </div>

                     <!--<div class="control-group">
                       <label class="control-label">Crime Video</label>             
                       <div class="controls">
                         <div class="fileupload-new thumbnail" style="width: 320px; height: 240px;">
                            <video width="320" height="240" controls="controls" autoplay="autoplay"> <source src="" type="video/mp4">  <object data="" width="320" height="240"> <embed width="320" height="240" src=""> </object>
                            </video>
                        </div>
                       
                      
                      </div>
                     </div>-->

                   
                     <div class="control-group">
                       <label class="control-label">Crime Pics</label>             
                       <div class="controls">


                        <input type="file" name="crimeimages[]" class="default" id="crimeimages" multiple/>
                      
                      </div>
                     </div>
                     

                      <div class="control-group">
                       <label class="control-label">Latitude</label>             
                       <div class="controls">
                         <input type="text" class="span6 m-wrap" name="latitude" id="latitude" value="" />
                         <?php echo form_error("latitude")?>
                      </div>
                     </div>


                    <div class="control-group">
                       <label class="control-label">Longitude</label>             
                       <div class="controls">
                         <input type="text" class="span6 m-wrap" name="longitude" id="longitude" value="" />
                         <?php echo form_error("longitude")?>
                      
                     </div>
                     </div>
               
               <div class="form-actions" style="padding-left:10px">
                <button type="submit" class="btn blue">Submit</button>
                <button type="button" class="btn" id="cancel" onClick="location.href='<?php echo base_url();?>admin/crimes/'">Cancel</button>
               </div>

            </form>
                        <!-- END FORM-->
                     </div>
                  </div>
                  <!-- END EXTRAS PORTLET-->
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE CONTAINER-->    
    </div>
    <!-- END PAGE -->
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN FOOTER -->

  <?php
  $this->load->view('admin/vwFooter');
  ?>

  <!-- END FOOTER --> 


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>  <!-- END FOOTER --> 
<script type="text/javascript">

 $( function() {
     $( "#crime_date" ).datepicker();
    $("#crime_time").timepicker({ 'timeFormat': 'H:i:s' });
    
    $("form[name='frmpage']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
     
     crime_name: {
     select: true
    },

      latitude: "required",
      longitude: "required",
      
    },


    // Specify validation error messages
    messages: {
      
      latitude: "Please enter your Latitude",
      longitude: "Please enter your Longitude",
     
    },
    errorElement : 'span',
    errorLabelContainer: '.error'
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
   
  });

    jQuery.validator.addMethod(
      "select",
      function(value, element) {      
        if (element.value == "none")
        {
          return false;
        }
        else return true;
      },
      "Please select an option."
    ); 
    
  } );

 


  </script>