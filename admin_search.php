<?php
                    include("connection.php");	

                    // SQL query to select data from database
                if(ISSET($_POST['search'])){
                $x=$_POST['searchvcid'];
                $y=$_POST['searchdate'];
                $z=$_POST['searchmode'];
                $sql = "SELECT * FROM vc_details where VC_Id='$x' or VC_Date='$y' or VC_Mode='$z' ";
                $result = $conn->query($sql);
                $sno=1;
                while($rows = $result -> fetch_assoc()) {
                ?>


            <div class="col-lg-12 input_field_sections"> S.NO. <?php echo($sno) ?></div>
            <div class="col-lg-12">
                    <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-6 input_field_sections">
                                        <h5>VC-Mode:</h5>
                                        <input type="text" class="form-control" value="<?php echo $rows['VC_Mode'];?>" />                                    
                                    </div>
                                    <div class="col-lg-3 input_field_sections">
                                        <h5>VCID/Access Code:</h5>
                                            <input type="text" class="form-control" value="<?php echo $rows['VC_Id'];?>" />
                                    </div>
                                    <div class="col-lg-3 input_field_sections">
                                        <h5>VC Start Time:</h5>
                                            <input type="text" class="form-control" value="<?php echo $rows['VC_STime'];?>" />
                                    </div>
                                
                                    <div class="col-lg-12 input_field_sections">
                                        <h5>Description:</h5>
                                            <textarea class="form-control" rows="2" name="comment" required><?php echo $rows['Description'];?></textarea>
                                    </div>
                                    <div class="col-lg-12 input_field_sections">
                                        <h5>Additional VC Links:</h5>
                                            <textarea class="form-control" rows="3" name="comment" required><?php echo $rows['CRemarks'];?></textarea>
                                    </div>
                                    <div class="col-lg-6 input_field_sections">
                                        <h5>Contact Person's Name:</h5>
                                            <input type="text" class="form-control" value="<?php echo $rows['CName'];?>"/>
                                    </div>

                                    <div class="col-lg-6 input_field_sections">
                                        <h5>Contact Person's Number:</h5>
                                            <input type="tel" id="cphone" name="phone" value="<?php echo $rows['CNumber'];?>">
                                    </div>

                                </div>  <!-- row end-->                  
                            </div>  <!-- card block end-->
                    </div>  <!-- card end-->
            </div>  <!-- card -lg -12 end-->

            <?php
                $sno++;
            }
            }
            ?>