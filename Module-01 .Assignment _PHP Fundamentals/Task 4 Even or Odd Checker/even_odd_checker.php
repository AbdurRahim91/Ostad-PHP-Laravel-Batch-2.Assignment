<!-- Task 4: Even or Odd Checker
Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd. -->
<?php
$result="";
    if(isset($_POST['check'])){
        $number = $_POST['number'];

        // Check if the number is even or odd
        if ($number % 2 == 0) {
            $result="<p>Result: $number is an even number.</p>";
        } else {
            $result="<p>Result: $number is an odd number.</p>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 4: Even or Odd Checker</title>
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
                    <h3 class="text-center">Task 4: Even or Odd Checker</h3>


                    <form method="post" action="">
                    <div class="form-group">
                        <label for="number">Enter a Number:</label>
                        <input class="form-control" type="number" name="number" id="number" required>
                    </div>   
                       
                        <br>
                        <input class="btn btn-success" type="submit" name="check" value="Check Even or Odd">
                    </form><br>
                    <h3 class="text-center bg-white" id="result"><?php echo $result; ?></h3>
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
