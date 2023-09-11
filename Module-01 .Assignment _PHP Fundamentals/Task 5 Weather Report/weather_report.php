<?php
    $result="";
    if(isset($_POST['check'])){
        $temperature = $_POST['temperature'];

        if ($temperature <= 0) {
            $result="<p>It's freezing!</p>";
        } elseif ($temperature <= 15) {
            $result= "<p>It's cool.</p>";
        } else {
            $result= "<p>It's warm.</p>";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 5: Weather Report</title>
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
                    <h3 class="text-center">Task 5: Weather Report</h3>


                    <form method="post" action="">
                    <div class="form-group">
                        <label for="temperature">Enter Temperature:</label>
                        <input class="form-control" type="number" name="temperature" id="temperature" placeholder="Please Enter Temperature" required>
                    </div>  
                       <p class="text-center bg-warning">[Freezing=0 or less than 0; Cool<=15; Otherwise, Warm]</p>
    
                        <input type="submit" class="btn btn-success" name="check" value="Check Weather Report">
                    </form><br>
                    <h3 class="text-center bg-white" id="result"><?php echo $result; ?></h3>
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
