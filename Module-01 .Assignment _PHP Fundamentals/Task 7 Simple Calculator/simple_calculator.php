<!-- Task 7: Simple Calculator
Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. 
Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation. -->
<?php  

$result ="";
$error="";
$error2="";
if(isset($_POST['calculate'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = 0;

    // Perform the selected operation
    switch ($operation) {
        case 'addition':
            $result = $number1 + $number2;
            break;
        case 'subtraction':
            $result = $number1 - $number2;
            break;
        case 'multiplication':
            $result = $number1 * $number2;
            break;
        case 'division':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "<p class='bg-danger'>Cannot divide by zero.</p>";
                break; // Exit the switch statement when division by zero occurs
            }
            break;
        default:
            $result = "<p class='bg-danger'>Invalid operation.</p>";
            break;
    }

    // Display the result only if it's not an error message
    if (!strstr($result, 'Cannot divide by zero') && !strstr($result, 'Invalid operation')) {
        $result ="<p>Result: $result</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 7: Simple Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <h3 class="text-center">Task 7: Simple Calculator</h3>
                    <h5 class="text-center">(addition, subtraction, multiplication, division)</h5>


                    <form method="post" action="">
                    <div class="form-group">
                        <label for="number1">Enter the first number:</label>
                        <input class="form-control" type="number" name="number1" id="number1" required>
                    </div>
                    <div class="form-group">
                        <label for="number2">Enter the second number:</label>
                        <input class="form-control" type="number" name="number2" id="number2" required>
                    </div>
                    <div class="form-group">
                    <label for="operation">Select an operation:</label>
                            <select class="form-control" name="operation" id="operation" required>
                                <option>Please Select an operation:</option>
                                <option value="addition">Addition (+)</option>
                                <option value="subtraction">Subtraction (-)</option>
                                <option value="multiplication">Multiplication (*)</option>
                                <option value="division">Division (/)</option>
                            </select>
                    </div>    

                        <br><br>
                        <input type="submit" name="calculate" value="Calculate"><br>
                    </form><br>
                    <h3 class="text-center bg-white" id="result"><?php echo $result ?> </h3>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>