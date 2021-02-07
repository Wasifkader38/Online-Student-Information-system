<html>
    <head>
        <title>User Login</title>
        <link rel="shortcut icon" href="favicon2.ico" />
        <style>
                h1 {text-align: center;
                    font-family: "Times New Roman", Times, serif;
                    color: azure;
                }
        </style>
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Course</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
        
        
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    </head>
<body>
    <?php include('header.php');?>
<div class="container">
   
    <div class="login-box ">
    <div class="row">
        <div class="col-md-6 login-left" >
            <h2>Login Here</h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required> 
                     </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required> 
                     </div>
                <button type="submit" class="btn btn-primary"> Login </button>
                
            </form>
        </div>
        
        
    </div>
    
</div>
</div>
    
    
</body>

</html>