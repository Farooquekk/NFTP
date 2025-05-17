<?php
session_start();


function getGrade($mark) {
    if ($mark >= 90) return "A+";
    if ($mark >= 80) return "A";
    if ($mark >= 70) return "B";
    if ($mark >= 60) return "C";
    if ($mark >= 50) return "D";
    return "F";
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['subject_names']) && isset($_POST['marks'])) {
        $subject_names = $_POST['subject_names'];
        $marks = $_POST['marks'];
        $num_subjects = count($subject_names);

        $total_marks = array_sum($marks);
        $percentage = $num_subjects > 0 ? round($total_marks / $num_subjects, 2) : 0;

        // Saving the  data into session
        $_SESSION['subject_names'] = $subject_names;
        $_SESSION['marks'] = $marks;

        // Initialize editable fields if not set
        if (!isset($_SESSION['editable'])) {
            $_SESSION['editable'] = [];
        }

        // Toggle edit index
        if (isset($_POST['toggle_index'])) {
            $i = intval($_POST['toggle_index']);
            if (in_array($i, $_SESSION['editable'])) {
                $_SESSION['editable'] = array_diff($_SESSION['editable'], [$i]);
            } else {
                $_SESSION['editable'][] = $i;
            }
        }

        // Clear editable fields after saving
        if (isset($_POST['save_changes'])) {
            $_SESSION['editable'] = []; // Make all fields read-only after save
        }
    } else {
        die("No data received. Please go back and fill the form.");
    }
} else {
    // On initial GET request, check if session already has data
    if (isset($_SESSION['subject_names']) && isset($_SESSION['marks'])) {
        $subject_names = $_SESSION['subject_names'];
        $marks = $_SESSION['marks'];
    } else {
        die("Invalid access. Please submit the form first.");
    }

    $num_subjects = count($subject_names);
    $total_marks = array_sum($marks);
    $percentage = $num_subjects > 0 ? round($total_marks / $num_subjects, 2) : 0;

    if (!isset($_SESSION['editable'])) {
        $_SESSION['editable'] = [];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marksheet</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: lightgoldenrodyellow;
            font-family: Impact;
            font-size: 25px;
            padding: 30px;
            background-color: black;
        }
        .container {
            background-color: lightblue;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        th {
            background-color: black;
            color: white;
        }
        input[readonly] {
            background: transparent;
            border: none;
            text-align: center;
        }
        input[type=text], input[type=number] {
            text-align: center;
        }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            background: black;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background: wheat;
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Generated Marksheet</h2>
    <form action="" method="post">
        <table>
            <tr>
                <th>Edit</th>
                <th>Subject</th>
                <th>Marks</th>
                <th>Grade</th>
            </tr>
            <?php foreach ($subject_names as $index => $subject): ?>
                <tr>
                    <td>
                        <button type="submit" name="toggle_index" value="<?php echo $index; ?>">Edit</button>
                    </td>
                    <td>
                        <input type="text" name="subject_names[]" value="<?php echo htmlspecialchars($subject); ?>" 
                               <?php echo in_array($index, $_SESSION['editable']) ? '' : 'readonly'; ?>>
                    </td>
                    <td>
                        <input type="number" name="marks[]" value="<?php echo $marks[$index]; ?>" 
                               <?php echo in_array($index, $_SESSION['editable']) ? '' : 'readonly'; ?>>
                    </td>
                    <td><?php echo getGrade($marks[$index]); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h4>Total Marks: <?php echo $total_marks; ?></h4>
        <h4>Percentage: <?php echo $percentage; ?>%</h4>
        <h4>Overall Grade: <?php echo getGrade($percentage); ?></h4>

        <button type="submit" name="save_changes">Save Changes</button>
    </form>
</div>
</body>
</html>
