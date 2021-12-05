
            <div id="addCourseModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:400px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Officials</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Positions:</label>
                                    <select name="ddl_pos" class="form-control input-sm">
                                        <option selected="" disabled=""> Select Positions  </option>
                                        <option value="Barangay Chairwoman">Barangay Chairwoman</option>
                                        <option value="Kagawad(Human Rights, Peace & Order)">Barangay Kagawad(Human Rights, Peace & Order)
                                        </option>
                                        <option value="Kagawad(Environmental Protection)">Barangay Kagawad(Environmental Protection)
                                        </option>
                                        <option value="Kagawad(Bids & Awards)">Barangay Kagawad(Bids & Awards)</option>
                                        <option value="Kagawad(Sports)">Barangay Kagawad(Sports)</option>
                                        <option value="Kagawad(Public Works Livelihood)">Barangay Kagawad(Public Works Livelihood)
                                        </option>
                                        <option value="Kagawad(Education)">Barangay Kagawad(Education)</option>
                                        <option value="Kagawad(Health)">Barangay Kagawad(Health)</option>
                                        <option value="Barangay Treasurer">Barangay Treasurer</option>
                                        <option value="Barangay Secretary">Barangay Secretary</option>
                                        <option value="SK Chairman">SK Chairman</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input name="txt_cname" class="form-control input-sm" type="text" placeholder="Lastname, Firstname Middlename"/>
                                </div>
                                <div class="form-group">
                                    <label>Contact #:</label>
                                    <input name="txt_contact" class="form-control input-sm" type="number" placeholder="Contact #"/>
                                </div>
                                <div class="form-group">
                                    <label>Address:</label>
                                    <input name="txt_address" class="form-control input-sm" type="text" placeholder="Address"/>
                                </div>
                                <div class="form-group">
                                    <label>Start Term:</label>
                                    <input id="txt_sterm" name="txt_sterm" class="form-control input-sm" type="date" placeholder="Start Term"/>
                                </div>
                                <div class="form-group">
                                    <label>End Term:</label>
                                    <input name="txt_eterm" class="form-control input-sm" type="date" placeholder="End Term"/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-success" value="Cancel"/>
                        <input type="submit" class="btn btn-warning" value="Add Officials"/>
                    </div>
                </div>
              </div>
              </form>
            </div>


<script type="text/javascript">
    // $(document).ready(function(){
    //     $('input[name="txt_sterm"]').change(function(){
    //         var startterm = document.getElementById("txt_sterm").value;
    //         console.log(startterm);
    //          document.getElementsByName("txt_eterm")[0].setAttribute('min', startterm);
    //     });
    // });


</script>