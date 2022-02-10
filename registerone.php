<?php include('process.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stylefive.css">
</head>
<body>
    
    <form action="registerone.php" class="form-me" method="POST">
    <div class="container">
        <h1 class="title">Registration Page</h1>
        <div class="row">
            <div class="form-field col-lg-6">
             <input type="text" class="input-text form-control"  name="name">
             <label for="name" class="label">Name</label>
            </div>

            <div class="form-field col-lg-6">
                <input type="email" class="input-text form-control"  name="email">
                <label for="email" class="label">Email</label>
            </div>

           <div class="form-field col-lg-6">
                <input type="password" class="input-text form-control"  name="password">
                <label for="password" class="label">Password</label>
           </div>

            <div class="form-field col-lg-6">
                <input type="text" class="input-text form-control"  name="university">
                <label for="university" class="label">university</label>
            </div>

            <div class="form-field col-lg-6">
                <input type="text" class="input-text form-control"  name="departement">
                <label for="Departement" class="label">Departement</label>
            </div>

            <div class="form-field col-lg-12">
                <input type="submit" class="submit-btn form-control" name="sub-btn" value="submit">
     
             </div>
        </div>
    </div>
</form>
</body>
</html>