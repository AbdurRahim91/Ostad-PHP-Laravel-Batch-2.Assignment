<?php
// Task 3: Grade Calculator
// Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
?>
<?php
// Task 2: Temperature Converter
// Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.

?>
<?php
$average="";
$letterGrade = '';

if(isset($_POST['calculate'])){
    $score1 = $_POST['score1'];
    $score2 = $_POST['score2'];
    $score3 = $_POST['score3'];


        // Calculate the average
        $avg = ($score1 + $score2 + $score3) / 3;
        $average = number_format($avg , 2); // Format to two decimal places

    if ($average >= 90) {
        $letterGrade = 'A';
    } elseif ($average >= 80) {
        $letterGrade = 'B';
    } elseif ($average >= 70) {
        $letterGrade = 'C';
    } elseif ($average >= 60) {
        $letterGrade = 'D';
    } else {
        $letterGrade = 'F';
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Task 3: Grade Calculator</title>
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
                    <h3 class="text-center">Task 3: Grade Calculator</h3>
                    <!-- class="form-control" -->
                    <form method="post" action="">
                    <div class="form-group">
                        <label for="score1">Test Score 1:</label>
                        <input class="form-control" type="number" name="score1" id="score1" required max="100">
                    </div>
                    <div class="form-group">
                        <label for="score2">Test Score 2:</label>
                        <input class="form-control" type="number" name="score2" id="score2" required max="100">
                    </div>   
                    <div class="form-group">
                        <label for="score3">Test Score 3:</label>
                        <input class="form-control" type="number" name="score3" id="score3" required max="100">
                    </div>   
                       
                        <br>
                        <input class="btn btn-success" type="submit" name="calculate" value="Calculate">
                    </form><br>
                    <h5 class="bg-danger text-white text-center">Hints: A= 90-100, B=80-89, C=70-79, D= 60-99, F= less than 60 </h5>
                    <!-- Display the results -->
                    <h3 class="text-center bg-white" id="result">
                        Average Score : <?php echo $average; ?><br>
                        Letter Grade  :<?php echo $letterGrade; ?> 
                    </h3>
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
