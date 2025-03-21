<?php
    echo "<h2>Form Submitted Successfully!!</h2>";

    session_start();

    $firstName=$_POST['firstName'];
    // echo $firstName;
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $education=$_POST['education'];
    $course=$_POST['course'];
    $birthDate=$_POST['birthDate'];
    $mobileNumber=$_POST['mobileNumber'];
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="formSubmit.css">
    <title>Form Data</title>
    <div class="d-flex">
        <div class="sidebar">
            <h1><span class="fa fa-bars" </span>  Dashboard</h1>
            <br>
            <br>
            <button class="accordion"><span class="fa fa-angle-down"></span>Educational Course</button>
                <div class="panel">
                    <p>BCA</p>
                    <p>BCS</p>
                    <p>BBA</p>
                </div>
                
            <button class="accordion"><span class="fa fa-angle-down"></span>Additional Course</button>
                <div class="panel">
                    <p>Web Development</p>
                    <p>Application Development</p>
                    <p>Java</p>
                </div>
        </div>
        <div>
            <h1>Course Registration Data</h1>
            <table border="1" class="Table" style="border-collapse:collapse">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Education</th>
                        <th>Course</th>
                        <th>Birthdate</th>
                        <th>Mobile No.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $firstName; ?> </td>
                        <td> <?php echo $lastName; ?> </td>
                        <td> <?php echo $email; ?> </td>
                        <td> <?php echo $education; ?> </td>
                        <td> <?php echo $course; ?> </td>
                        <td> <?php echo $birthDate; ?> </td>
                        <td> <?php echo $mobileNumber; ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <script src="formSubmit.js"></script>
