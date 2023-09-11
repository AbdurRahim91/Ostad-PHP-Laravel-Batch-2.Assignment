<!-- Task 6: Comparison Tool
Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result. -->
<?php
    $result="";
    if(isset($_POST['compare'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;

        $result="
        <p>The first number is: $number1</p>
        <p>The second number is: $number2</p>
        <p class='bg-danger text-white'>Now, The larger number is: $largerNumber</p>
        ";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 6: Comparison Tool</title>
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
                    <h3 class="text-center">Task 6: Comparison Tool</h3>
                    <h5 class="text-center">(Finding Larger Number by using ternary operator)</h5>


                    <form method="post" action="">
                    <div class="form-group">
                        <label for="number1">Enter the first number:</label>
                        <input class="form-control" type="number" name="number1" id="number1" required>
                    </div>   
                    <div class="form-group">
                        <label for="number2">Enter the second number:</label>
                        <input class="form-control" type="number" name="number2" id="number2" required>
                    </div> 
                       
                        <br>
                        <input type="submit" name="compare" value="Compare">
                    </form><br>
                    <h3 class="text-center bg-white" id="result"><?php echo $result; ?></h3>
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
