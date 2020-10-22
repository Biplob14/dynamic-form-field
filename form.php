<!-- 
    -dynamic field 
    -same fields cannot be added more than once
    -used bootstrap, jquery and php
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2 class="text-center mt-5 text-secondary">Select your field</h2> <br><br>
        <div class="col-12 row">
            <div class="form-group col-10">
                <form>
                    <select id="fieldSelect" class="form-control">
                        <option value="name">Name</option>
                        <option value="email">Email</option>
                        <option value="password">Password</option>
                        <option value="gender">Gender</option>
                        <option value="expert_in">Expert In</option>
                        <option value="language">Language</option>
                    </select>
                </form>
            </div>
            <button type="button" id="btn1" onclick="fieldName()" class="btn btn-primary col-2">Add Field</button> <br><br>
        </div>
        <hr class="p-2">

            <div>
                <form action="output.php" method="post">
                    <p id="appendItem"></p>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
    </div>

    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script>
        // variables to revoke duplicate field
        var Nofname = 0;
        var Nofmail = 0;
        var Nofpass = 0;
        var Nofgender = 0;
        var Nofexpert = 0;
        var Noflanguage = 0
        var Nofna
        function fieldName() {
        var field = document.getElementById("fieldSelect").value;
        console.log(field);
     

        if(field == "name" && Nofname < 1){
            // console.log("entered");
            
            $("#appendItem").append('<h3 class="text-left">Provide Your Name: </h3><br> <input type="text" name="text" class="form-control" placeholder="Type your name"><br>');
            Nofname++;
            
        }
        else if(field == "email" && Nofmail < 1){
            $("#appendItem").append('<h3 class="text-left">Provide Your Email: </h3><br> <input type="email" name="email" value="email" class="form-control" placeholder="Type your email"><br>');
            Nofmail++;
        }
        else if(field == "password" && Nofpass < 1){
            $("#appendItem").append('<h3 class="text-left">Provide Desired Password: </h3><br> <input type="password" name="password" class="form-control" placeholder="Type your password"><br>');
            Nofpass++;
        }
        else if(field == "gender" && Nofgender < 1){
            var gender = '<h3 class="text-left">Select gender: </h3><br> <input type="radio" name="gender" value="Male"> <b>Male</b><br>';
            gender += '<input type="radio" name="gender" value="Female"> <b>Female</b><br>';
            gender += '<input type="radio" name="gender" value="Other"> <b>Other</b><br>';
            $("#appendItem").append(gender);
            Nofgender++;
        }
        else if(field == "expert_in" && Nofexpert < 1){
            var expert = '<h3 class="text-left">You are expert in: </h3><br><input type="checkbox" id="html" name="expert[]" value="HTML"> <label for="html"> HTML</label><br>';
            expert += '<input type="checkbox" id="css" name="expert[]" value="CSS"><label for="css"> &nbsp;CSS</label><br>';
            expert += '<input type="checkbox" id="php" name="expert[]" value="PHP"><label for="php"> &nbsp;PHP</label><br>';
            $("#appendItem").append(expert);
            var interest = '<label for="interest"><h3 class="text-left">Choose Your interest:</h3><br> </label>';
            interest +='<select name="interest">';
            interest += '<option value="HTML"> HTML</option>';
            interest += '<option value="CSS"> CSS</option>';
            interest += '<option value="Javascript"> Javascript</option>';
            interest += '<option value="Typescript"> Typescript</option>';
            interest += '</select><br>';
            $("#appendItem").append(interest);
            Nofexpert++;
        }
        else if(field == "language" && Noflanguage < 1){
            var language = '<label for="language"><h3>Choose Your Language: &nbsp;</h3></label>';
            language +='<select class="form-control" name="language">';
            language += '<option value="Bangla">Bangla</option>';
            language += '<option value="English">English</option>';
            language += '<option value="Hindi">Hindi</option>';
            language +='</select><br>';
            $("#appendItem").append(language);
            Noflanguage++;
        }
        else {
            window.alert("You already selected the item");
        }
    }
    </script>
</body>
</html>