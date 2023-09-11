<!DOCTYPE html>
<html>
<head>
    <title>Task 1: Personal Information Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container bg-info">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div>
                    <div class="text-center"> 
                        <img src="https://cdn.ostad.app/public/upload/2022-11-27T06-52-05.802Z-logo%20ostad.png" alt="Centered Image" class="img-fluid">
                    </div>
                    <h3 class="text-center">PHP & Laravel Batch 2- Assignment (Module-01)</h3>
                    <h3 class="text-center">Task 1: Personal Information Page</h3>
                    <div style="margin: 20px; padding: 10px; background-color: white;">
                    <?php
                    // Define variables with the provided personal information
                    $name = "Abdur Rahim";
                    $age = 35;
                    $education = "MSc, Rajshahi University";
                    $district = "Rajshahi";
                    $country = "Bangladesh";
                    $goal = "I'll become a PHP and Laravel Expert.";
                    $thanked="----Thank You----";
                    

                    // Display the personal information
                    echo "<p><b>Name:</b> $name</p>";
                    echo "<p><b>Age:</b> $age years</p>";
                    echo "<p><b>Education:</b> $education</p>";
                    echo "<p><b>District:</b> $district</p>";
                    echo "<p><b>Country:</b> $country</p>";
                    echo "<p><b>Goal:</b> $goal</p>";
                    echo "<p class='text-center'>$thanked</p>";
                    
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

