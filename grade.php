<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Cairo Play', sans-serif;
            background-color: #1a1a1a;
            color: #e5e7eb;
        }
        .mono {
            font-family: 'Share Tech Mono', monospace;
        }
    </style>
</head>
<body class="min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Grading System</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <?php
                $math = 85;
                $english = 92;
                $science = 78;
                $average = ($math + $english + $science) / 3;
                
                $grade = '';
                if ($average >= 90) {
                    $grade = 'A';
                } elseif ($average >= 80) {
                    $grade = 'B';
                } elseif ($average >= 70) {
                    $grade = 'C';
                } elseif ($average >= 60) {
                    $grade = 'D';
                } else {
                    $grade = 'F';
                }
                
                echo "<div class='space-y-4'>";
                echo "<p class='text-lg'>Math: $math</p>";
                echo "<p class='text-lg'>English: $english</p>";
                echo "<p class='text-lg'>Science: $science</p>";
                echo "<p class='text-lg'>Average: " . number_format($average, 2) . "</p>";
                echo "<p class='text-lg font-semibold text-blue-400'>Grade: $grade</p>";
                echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>
