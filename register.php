<?php
include("connection.php");
?>

<head>
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script>
        function checkvalue(name){
    if(name=='others')
    {
    document.getElementById('oboard').style.display="block";
    }
    else 
    {
    document.getElementById('oboard').style.display="none";
    }
  }

    </script>
</head>

<body>
    <div class="container">
        <div class="regis">
            <h2 class="heading2">REGISTRATION FORM</h2>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Name<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                    <input type="date" class="form-control" name="dob" required>
                </div>
                <div class="form-group ">
                    <label for="board">Sex<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                    <select name="sex" class="form-control" onchange="checkvalue(this.value)" required>
                        <option value="null">Choose...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control" name="oboard" id="oboard" style="display:none;">
                </div>
                <div class="form-group">
                    <label for="hedu">Highest Education<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                    <input type="text" class="form-control" id="hedu" name="hedu" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phno">Phone No<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                        <input type="text" class="form-control" id="phno" name="phno" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mail">Email Id<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                        <input type="email" class="form-control" placeholder="Enter Email Id" name="mail" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                        <input type="text" class="form-control" id="inputCity" name="city" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">State<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                        <input type="text" class="form-control" id="inputCity" name="state" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="habus">How did you heard about us<small style="color:red; font-weight:bold; font-size:20px;">*</small></label>
                    <input type="text" class="form-control" name="habus" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
                </div>
            </form>
        </div>
    </div>

<?php
    
if(isset($_POST['submit']))
{
$name= $_POST['name'];
$dob= $_POST['dob'];
$city= $_POST['city'];
$state= $_POST['state'];
$phno= $_POST['phno'];
$sex= $_POST['sex'];
$oboard= $_POST['oboard'];
$email= $_POST['mail'];
$habus= $_POST['habus'];
$hedu= $_POST['hedu'];
        
$query = " INSERT INTO register(name,dob,sex,others,highestedu,phone,email,city,state,knowus) VALUES('$name','$dob','$sex','$oboard','$hedu','$phno','$email','$city','$state','$habus')";
    
$data= mysqli_query($conn,$query);

}
?>
</body>
