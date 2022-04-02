  <head>
    <title>Employee information</title>
    <?php include 'header.php'  ?>
  </head>
  <body>
    <?php include '_navbar.php'  ?>
    <div class="container">
    <form name="form" id="addemply" action="save_employee_information.php" method="post">
    <h3>Add the Employee Information</h3>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group text-monospace">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" name="fname" required>
              </div>
              <div class="form-group text-monospace">
                <label for="empid">Employee Id:</label>
                <input type="text" class="form-control" name="empid" required>
              </div>
              <div class="form-group text-monospace">
                <label for="age">Age:</label>
                <input type="text" class="form-control" name="age" required>
              </div>
              <div class="form-group text-monospace">
                <label for="dept">Department:</label>
                <input type="text" class="form-control" name="dept" required>
              </div>
              <div class="form-group text-monospace">
                <label for="cno">Contact No:</label>
                <input type="text" class="form-control" name="cno" required>
              </div>
              <div class="form-group text-monospace">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" required>
              </div>
            </div>


            <div class="col-sm-6">
              <div class="form-group text-monospace">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" name="lname" required>
              </div>
              <div class="form-group text-monospace">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="sel1">
                    <option>Male</option>
                    <option>Female</option>
                </select>
              </div>
              <div class="form-group text-monospace">
                <label for="wexp">Work Experience:</label>
                <input type="text" class="form-control" name="wexp" required>
              </div>
              <div class="form-group text-monospace">
                <label for="esalary">Employee Salary:</label>
                <input type="text" class="form-control" name="esalary" required>
              </div>
              <div class="form-group text-monospace">
                <label for="e_address">Employee Address:</label>
                <input type="text" class="form-control" name="e_address" required>
              </div>
              <div class="form-group text-monospace">
                <label for="country">Country:</label>
                <select class="form-control" name="country" id="sel2">
                    <option>INDIA</option>
                    <option>UNITED STATES</option>
                    <option>CANADA</option>
                </select>
              </div>


            </div>
          </div>
    
        <div class="float-right mt-3">
          <button class="btn btn-danger" onclick="reset()" >Reset</button>
          <input class="btn btn-success" type="submit" name="submit" value="Save">
        </div>
      
      
        </div>
      </div>

    
    </form>
    </div>

  <script>
    function reset(){
      document.getElementById("addemply").reset();
    }
  </script>

</body>

