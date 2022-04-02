<head>
    <title>SMS</title>
    <?php include 'header.php'  ?>
</head>
<body>
<?php include '_navbar.php'  ?>
<?php include 'configs/db_config.php'  ?>
    <div class="container">
        
        <h3 class="mb-3">Employee Salary Report</h3>
        
        <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Employee</th>
                <th>Employee Id</th>
                <th>Payslip</th>
            </tr>
            </thead>
            <tbody>
            <?php 
                $sql = "SELECT * FROM Employee_Information INNER JOIN Employee_accounts ON Employee_Information.employee_id=Employee_accounts.employee_id order by  Employee_Information.first_name;  ";
                $result = $conn->query($sql);


                $color1 = array("A", "B", "C", "D", "E");
                $color2 = array("F", "G", "H", "I", "J");
                $color3 = array("K", "L", "M", "N", "O");
                $color4 = array("P", "Q", "R", "S", "T");
                $color5 = array("U", "V", "W", "X", "Y" , "Z");

                // Month
                $month_num = date("m");
                $year = date("Y");
                 



                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {  
                        
                        $letter=strtoupper(substr($row["first_name"],0,1));
                        

                        
                        if (in_array($letter, $color1)){
                            $color="btn-secondary";
                        }
                        elseif(in_array($letter, $color2)){
                            $color="btn-primary";
                        }
                        elseif(in_array($letter, $color3)){
                            $color="btn-danger";
                        }
                        elseif(in_array($letter, $color4)){
                            $color="btn-warning";
                        }
                        elseif(in_array($letter, $color5)){
                            $color="btn-info";
                        }


                        
                        ?>
                    <!-- $row["employee_id"] -->

                       
                    <tr>
                        <td>
                            <h4><?php echo $row["first_name"].' '.$row["last_name"] ?></h4> 
                        </td>
                        <td class=""><?php echo $row["employee_id"] ?></td>
                        
                        
                       
                        <td> <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#myModal<?php echo $row["employee_id"]; ?>">Payslip</button></td>
                    </tr>
                    
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal<?php echo $row["employee_id"]; ?>">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            
                            <h4 class="modal-title text-right">
                                &nbsp;Salary Report  for Month of <span class="text-danger"><?php echo date("F", mktime(0, 0, 0, $month_num, 10)); ?></span>
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                            
                                <div class="container">
                                
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <div class="text-center">
                                                <button type="button" class="btn btn-xl text-center bg-warning rounded-circle "><h1>DB</h1></button>
                                            </div>
                                            <small>
                                            <ul style="list-style-type:none;">
                                                <li>DOOBLE INC,</li>
                                                <li>295,HKS LAYOUT,</li>
                                                <li>BANGALORE</li>
                                            </ul>
                                            </small>
                                        </div>
                                        <div class="float-right mt-4">
                                            <h5>Payslip #<?php echo rand(100,999) ?></h5>
                                            <small>Salary Month: <?php echo date("F", mktime(0, 0, 0, $month_num, 10));?>
                                                <?php echo ",".$year;?>
                                            </small>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="clearfix">
                                        <div class="float-left">
                                            <div class="container">
                                            <h5 class="text-center"><?php echo $row["first_name"].' '.$row["last_name"] ?></h5>
                                            <small class="text-center mt-2">Employee Id: <span><?php echo $row["employee_id"] ?></span> </small><br>
                                            <small class="text-center mt-2">Department: <span><?php echo $row["department"] ?></span> </small>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <div class="conatiner text-left">
                                            <small>
                                                <ul style="list-style-type:none;">
                                                    <li> <strong> Bank : </strong> <?php echo $row["bank_name"] ?> </li>
                                                    <li> <strong>Ac.No : </strong> <?php echo $row["bank_acc_no"] ?> </li>
                                                    <li> <strong>PF.No : </strong> <?php echo $row["pf_acc_no"] ?> </li>
                                                </ul>
                                            </small>

                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="container">
                                            <ul class="list-group">
                                                    <li class="list-group-item active">Earnings :</li>
                                                    <li class="list-group-item">Basic Salary <span class="float-right">₹ <?php echo floor($row["salary"] * 0.40 ); ?></span></li>
                                                    <li class="list-group-item">H.R.A <span class="float-right">₹ <?php echo floor($row["salary"] * 0.30 ); ?></span></li>
                                                    <li class="list-group-item">Conveyance <span class="float-right">₹ <?php echo floor($row["salary"] * 0.10 ); ?></span></li>
                                                    <li class="list-group-item">Medical Allowance <span class="float-right">₹ <?php echo floor($row["salary"] * 0.10 ); ?></span></li>
                                                    <li class="list-group-item">Other Allowance <span class="float-right">₹ <?php echo floor($row["salary"] * 0.10 ); ?></span></li>
                                                    <li class="list-group-item"><b>Total Earnings </b><span class="float-right"><b>₹ <?php echo $row["salary"] ?></b></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="container mt-3">
                                                <small>
                                                    <ul class="list-group">
                                                        <li class="list-group-item bg-danger text-white">Deductions :</li>
                                                        <li class="list-group-item">EPF(self) <span class="float-right">₹ <?php echo floor($row["salary"] * 0.12 ); ?></span></li>
                                                        <li class="list-group-item">EPF(org) <span class="float-right">₹ <?php echo floor($row["salary"] * 0.083 ); ?></span></li>
                                                        <li class="list-group-item">EPS <span class="float-right">₹ <?php echo floor($row["salary"] * 0.0367 ); ?></span></li>
                                                        <li class="list-group-item">PT <span class="float-right">₹ <?php echo floor($row["salary"] * 0.005 ); ?></span></li>
                                                        <li class="list-group-item"><b>Total Deductions </b><span class="float-right"><b>₹ <?php echo floor($row["salary"] * 0.2447 ); ?></b></span></li>
                                                    </ul>
                                                </small>
                                            </div>
                                            <div class="container mt-4">
                                                <h3>Net Salary : ₹ <?php echo floor(($row["salary"])-($row["salary"] * 0.2447 )); ?> </h3>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Download</button>
                                
                            </div>
                            
                        </div>
                        </div>
                    </div>


                   <?php }
                } else {
                    echo "0 results";
                }
        
            ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>