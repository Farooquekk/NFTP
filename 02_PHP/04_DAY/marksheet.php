<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic PHP Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: auto;
            padding: 20px;
            background-color:rgb(54, 49, 49);
            text-align: center;
            height: 100vh;
            
        }
        .container {
            width: 30%;
            height: 70%;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px gray;
            border-radius: 10px;
            text-align: center;
            margin-top: 160px;
            
        }
        input, button {
            padding: 10px;
            margin: 10px;
            width: 70%;
            border-radius: 10px;
            color: black;
            font: bold;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        .result {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Dynamic Grade Calculator</h2>

    <!-- Step 1: Get Number of Subjects -->
    <?php if (!isset($_POST['num_subjects']) && !isset($_POST['marks'])): ?>
        <form method="POST">
            <label>Enter Number of Subjects:</label>
            <input type="number" name="num_subjects" required min="1">
            <button type="submit">Next</button>
        </form>

    <!-- Step 2: Generate Input Fields Dynamically -->
    <?php elseif (isset($_POST['num_subjects']) && !isset($_POST['marks'])): ?>
        <?php $num_subjects = (int)$_POST['num_subjects']; ?>
        <form method="POST">
            <input type="hidden" name="num_subjects" value="<?= $num_subjects ?>">
            <?php for ($i = 1; $i <= $num_subjects; $i++): ?>
                <label>Enter Marks for Subject <?= $i ?>:</label>
                <input type="number" name="marks[]" required min="0" max="100">
            <?php endfor; ?>
            <button type="submit">Calculate</button>
        </form>

    <!-- Step 3: Calculate Percentage & Grade -->
    <?php elseif (isset($_POST['marks'])): ?>
        <?php 
            $marks = $_POST['marks'];
            $total_marks = array_sum($marks);
            $num_subjects = count($marks);
            $percentage = $total_marks / $num_subjects;
            
            // Assign Grade
            if ($percentage >= 90) $grade = 'A+';
            elseif ($percentage >= 80) $grade = 'A';
            elseif ($percentage >= 70) $grade = 'B';
            elseif ($percentage >= 60) $grade = 'C';
            elseif ($percentage >= 50) $grade = 'D';
            else $grade = 'F';
        ?>

        <h3>Result</h3>
        <table>
            <tr><th>Total Marks</th><td><?= $total_marks ?></td></tr>
            <tr><th>Percentage</th><td><?= number_format($percentage, 2) ?>%</td></tr>
            <tr><th>Grade</th><td><?= $grade ?></td></tr>
        </table>

        <br>
        <a href="index.php"><button>Calculate Again</button></a>
    <?php endif; ?>
</div>

</body>
</html>
