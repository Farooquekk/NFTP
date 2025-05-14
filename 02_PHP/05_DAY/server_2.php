<?php
// Ensure required data is available
if (!isset($_POST['subject_names']) || !isset($_POST['marks'])) {
    die("Invalid Access. Please enter data first.");
}

$subject_names = $_POST['subject_names'];
$marks = $_POST['marks'];
$num_subjects = count($subject_names);


$total_marks = array_sum($marks);
$percentage = $num_subjects > 0 ? round($total_marks / $num_subjects, 2) : 0;

;
function getGrade($mark) {
    if ($mark >= 90) return "A+";
    if ($mark >= 80) return "A";
    if ($mark >= 70) return "B";
    if ($mark >= 60) return "C";
    if ($mark >= 50) return "D";
    return "F"; // Fail
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        body{
            width: 100vw;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: lightgoldenrodyellow;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-weight: bold;
            font-size: 25px; 
        }
        .container{
            width: 50%;
            height:auto;
            text-align: center;
            background-color: lightblue;
            border-radius: 10px;
            padding: 20px;
            letter-spacing: 2px;
            word-spacing: 12px;
        }
        .container table{
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .container table th, .container table td{
            border: 1px solid black;
            padding: 5px;
        }
        .container table th{
            background-color: black;
            color: white;
        }
        .container table tr:nth-child(even){
            background-color: lightgoldenrodyellow;
        }
        .container table tr:nth-child(odd){
            background-color: lightpink;
        }
        
        .container h4{
            margin: 10px 0;
        }
        .container button{
            width: 100px;
            height: 50px;
            border: 2px;
            background-color:  black;
            color: white;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
            margin: 6px;
            padding: 8px;
            cursor: pointer;
        }
        .container button:hover{
            background-color: wheat;
            color:black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Generated Marksheet</h2>
        <table>
            <tr>
                <th>Subject</th>
                <th>Marks</th>
                <th>Grade</th>
            </tr>
            <?php foreach ($subject_names as $index => $subject): ?>
                <tr>
                    <td><?php echo ($subject); ?></td>
                    <td><?php echo ($marks[$index]); ?></td>
                    <td><?php echo getGrade($marks[$index]); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        
        <h4>Total Marks: <?php echo $total_marks; ?></h4>
        <h4>Percentage: <?php echo $percentage; ?>%</h4>
        <h4>Overall Grade: <?php echo getGrade($percentage); ?></h4>

        <form action="server.php" method="get">
            <input type="hidden" name="num_subjects" value="<?php echo $num_subjects; ?>">
            <button type="submit">Edit Marks</button>
        </form>

        <a href="HW.php"><button>Edit Subjects</button></a>
        <!-- /* <form action="download_pdf.php" method="post">
            <input type="hidden" name="subject_names" value="<?php (($subject_names)); ?>">
            <input type="hidden" name="marks" value="<?php echo(($marks)); ?>">
            <input type="hidden" name="total_marks" value="<?php echo $total_marks; ?>">
            <input type="hidden" name="percentage" value="<?php echo $percentage; ?>">
            <!-- <button type="submit">Download Marksheet (PDF)</button> -->
        </form> */ -->
    </div>
</body>
</html>
