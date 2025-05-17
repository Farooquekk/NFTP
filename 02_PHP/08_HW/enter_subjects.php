

<?php
$num_subjects = isset($_GET['num_subjects']) ? intval($_GET['num_subjects']) : 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Marks</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: lightgoldenrodyellow;
            font-family: Impact;
            font-size: 25px;
            background-color: black;
        }
        .container {
            background-color: lightblue;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        input, button {
            margin: 10px;
            padding: 10px;
            font-size: 18px;
        }
        button {
            background-color: black;
            color: white;
            border-radius: 5px;
        }
        button:hover {
            background-color: wheat;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Subject Names and Marks</h2>
        <form action="server_2.php" method="post">
            <input type="hidden" name="num_subjects" value="<?php echo $num_subjects; ?>">
            <?php for ($i = 0; $i < $num_subjects; $i++): ?>
                <div>
                    <input type="text" name="subject_names[]" placeholder="Subject Name" required>
                    <input type="number" name="marks[]" placeholder="Marks" required min="0" max="100">
                </div>
            <?php endfor; ?>
            <button type="submit">Generate</button>
        </form>
    </div>
</body>
</html>