            <div id="addCourseModal" class="modal fade">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Residents</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-12">

                                    <div class="form-group" >
                                        <label class="control-label">Profile:</label>
                                        <input name="txt_image" class="form-control input-sm" type="file" />
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" >Name:</label><br>
                                        <div class="col-sm-4">
                                            <input name="txt_lname" class="form-control input-sm" type="text" placeholder="Lastname"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_fname" class="form-control input-sm col-sm-4" type="text" placeholder="Firstname"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_mname" class="form-control input-sm col-sm-4" type="text" placeholder="Middlename"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Birthdate:</label>
                                        <input name="txt_bdate" class="form-control input-sm input-size" type="date" placeholder="Birthdate"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Age:</label>
                                        <input name="txt_age" class="form-control input-sm input-size" type="number" placeholder="Age"/>
                                    </div> 


                                    <div class="form-group">
                                        <label class="control-label">Barangay:</label>
                                        <input name="txt_brgy" class="form-control input-sm input-size" type="text" placeholder="Barangay"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Civil Status:</label>
                                        <input name="txt_cstatus" class="form-control input-sm input-size" type="text" placeholder="Civil Status"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Religion:</label>
                                        <input name="txt_religion" class="form-control input-sm input-size" type="text" placeholder="Religion"/>
                                    </div>

                                </div>

                                <div class="col-md-6 col-sm-12">
                                    
                                    <div class="form-group">
                                        <label class="control-label">Educational Attainment:</label>
                                        <select name="ddl_eattain" class="form-control input-sm input-size">
                                            <option selected="" disabled="">-Select Educational Attainment-</option>
                                            <option>No Schooling completed</option>
                                            <option>Elementary</option>
                                            <option>High School Undergrad</option>
                                            <option>High School Graduate</option>
                                            <option>College Undergrad</option>
                                            <option>Vocational</option>
                                            <option>Bachelor’s Degree</option>
                                            <option>Master’s Degree</option>
                                            <option>Doctorate Degree</option>
                                        </select>
                                    </div>

                                    <div class="form-group">     
                                        <label class="control-label">Gender:</label>
                                        <select name="ddl_gender" class="form-control input-sm">
                                            <option selected="" disabled="">-Select Gender-</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Birthplace:</label>
                                        <input name="txt_bplace" class="form-control input-sm" type="text" placeholder="Birthplace"/>
                                    </div> 

                                    <div class="form-group">
                                        <label class="control-label">Total Household Member:</label>
                                        <input name="txt_householdmem" class="form-control input-sm" type="number" min="1" placeholder="Total Household Member"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Occupation:</label>
                                        <input name="txt_occp" class="form-control input-sm" type="text" placeholder="Occupation"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Nationality:</label>
                                        <input name="txt_national" class="form-control input-sm" type="text" placeholder="Nationality"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Former Address:</label>
                                        <input name="txt_faddress" class="form-control input-sm" type="text" placeholder="Former Address"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-success btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-warning btn-sm" name="btn_add" id="btn_add" value="Add Resident"/>
                    </div>
                </div>
              </div>
              </form>
            </div>

<script type="text/javascript">
    $(document).ready(function() {
 
        var timeOut = null; 
 
        var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; 
 
        
        $('#username').keyup(function(e){
 
            
            switch(e.keyCode)
            {
                
                // case 9:   
                // case 13:  
                // case 16:  
                // case 17:  
                // case 18:  
                // case 19:  
                // case 20:  
                // case 27:  
                // case 33:  
                // case 34:   
                // case 35:  
                // case 36:   
                // case 37:  
                // case 38:   
                // case 39:  
                // case 40:   
                // case 45:  
              
                //     return;
            }
            if (timeOut != null)
                clearTimeout(timeOut);
            timeOut = setTimeout(is_available, 500); 
            $('#user_msg').html(loading_html); 
        });
  });
</script>