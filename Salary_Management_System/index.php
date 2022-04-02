
<head>
    <title>SMS</title>
    <?php include 'header.php'  ?>
</head>

<body>
<html>  
<section class="vh-100" style="background-image:url('Stonks.jpg');background-size: 100%;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Admin Login</h3>
            <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <div class="form-outline mb-4">
              <input type="text" id="user" name="user" class="form-control form-control-lg" />
              <label class="form-label" for="user">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="pass" class="form-control form-control-lg" name="pass" />
              <label class="form-label" for="pass">Password</label>
            </div>

           
            <button class="btn btn-primary btn-lg btn-block" type="submit" id="btn" value="login" >Login</button>
</form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>
</html>  
