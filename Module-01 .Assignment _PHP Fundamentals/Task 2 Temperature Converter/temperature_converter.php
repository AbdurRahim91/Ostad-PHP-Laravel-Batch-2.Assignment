<?php
// Task 2: Temperature Converter
// Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.

?>
<?php
$resultText = ""; // Initialize the variable to store the result

if (isset($_POST['convert'])) {
    $temperature = $_POST['temperature'];
    $conversion_type = $_POST['conversion_type'];

    if ($conversion_type == 'c_to_f') {
        $converted_temperature = ($temperature * 9 / 5) + 32;
        $resultText = "$temperature °C = $converted_temperature °F.";
    } elseif ($conversion_type == 'f_to_c') {
        $converted_temperature = ($temperature - 32) * 5 / 9;
        $resultText = "$temperature °F = $converted_temperature °C.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
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
                    <h3 class="text-center">Task 2: Temperature Converter</h3>


                    <form method="post" action="">
                    <div class="form-group">
                        <label for="temperature">Enter Temperature:</label>
                        <input class="form-control" type="number" name="temperature" id="temperature" required>
                    </div>
                    <div class="form-group">
                        <label for="conversion_type">Select Conversion:</label>
                            <select class="form-control" name="conversion_type" id="conversion_type">
                                <option>Please select conversion</option>
                                <option value="c_to_f">Celsius to Fahrenheit</option>
                                <option value="f_to_c">Fahrenheit to Celsius</option>
                            </select>
                    </div>    
                       
                        <br>
                        <input class="btn btn-success" type="submit" name="convert" value="Convert">
                    </form>
                    <h3 class="text-center" id="result">Result: <span class="bg-white"><?php echo $resultText; ?></span> </h3>
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
