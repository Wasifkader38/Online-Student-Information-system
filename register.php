<html>
    <head>
        <title> Registration</title>
        <link rel="shortcut icon" href="favicon2.ico" />
        <style>
                h1 {text-align: center;
                    font-family: "Times New Roman", Times, serif;
                    color: azure;
                }
            
                body{
                background: linear-gradient(rgba(0,0,0,0),rgba(200,200,200,.9)),url(backk.jpg);
                  background-size:cover;
                background-position: center;
                
            }
        </style>
        
        <link rel="stylesheet" type="text/css" href="stylee.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    </head>
<body>
<div class="container">

        
        <div class="col-md-6 login-right" >
            <h2>Register Here</h2>
            <form action="registration.php" method="post">
                <div class="form-group" >
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required> 
                     </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="Email" class="form-control" required> 
                     </div>
                 <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" required> 
                     </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required> 
                     </div>
                <button type="submit" class="btn btn-primary"> Register </button>
                
            </form>
            </div>
        </div>
    
</div>
</div>
    
    
</body>

</html>