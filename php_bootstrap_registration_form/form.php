<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <title>Registration Form</title>
  </head>
  <body>
    <div class="bg_img_overlay">
        <div class="form">
            <form action="formSubmit.php" method="POST" class="row g-3" >
                <div><h2 style="text-align:center;font-weight:bolder">Registration Form</h2></div>
                <div class="col-md-6">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" name="firstName" id="validationCustom01" placeholder="Enter Your Name" required>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" class="form-control" name="lastName" id="validationCustom02" placeholder="Enter Your Surname" required>
                </div>
                <div class="col-md-6">
                   <label for="exampleFormControlInput1" class="form-label">Email</label>
                   <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter Your Email">
                </div>
                <div class="col-md-4">
                    <label for="exampleFormControlInput1" class="form-label">Gender</label>
                    <div class="d-flex justify-content-evenly">
                    <div class="mt-2 form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" name="female" for="flexRadioDefault1">Female</label>
                    </div>
                    <div class="mt-2 form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" name="male" for="flexRadioDefault2">Male</label>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput2" class="form-label">Education</label>
                    <select name="education" class="form-select">
                        <option selected>Select</option>
                        <option value="1">BCA</option>
                        <option value="2">BCS</option>
                        <option value="3">B.tech</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="exampleFormControlInput3" class="form-label">Interested In</label>
                    <select name="course" class="form-select">
                        <option selected>Select Course</option>
                        <option value="1">Web Development</option>
                        <option value="2">Application Development</option>
                        <option value="3">Java</option>
                    </select>
                </div>
                <!-- <div class="col-md-6 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="exampleInputPassword2">
                </div>
                <div> -->
                <div class="col-md-6 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" name="birthDate">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputPassword2" class="form-label">Mobile No.</label>
                    <input type="number" class="form-control" name="mobileNumber" >
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="exampleInputPassword2">
                </div>
                <div>

                    <button type="submit" class="btn btn-outline-light">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>