<head>
    <title>Employee information</title>
    <?php include 'header.php'  ?>
  </head>
  <body>
    <?php include '_navbar.php'  ?>
    <div class="container">
    <form name="form" id="addemply" action="save_department.php" method="post">
    <h3>Add the Department Details</h3>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group text-monospace">
                <label for="empid">Employee Id:</label>
                <input type="text" class="form-control" name="empid" required>
              </div>
              <div class="form-group text-monospace">
                <label for="dep">Department:</label>
                <input type="text" class="form-control" name="dep" required>
              </div>
            </div>


            <div class="col-sm-6">
              <div class="form-group text-monospace">
                <label for="role">Role:</label>
                <select class="form-control" name="role">
                    <option>Employee</option>
                    <option>Manager</option>
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

