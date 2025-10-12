<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce Yourself</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Cairo Play', sans-serif;
            background-color: #1a1a1a;
            color:rgb(229, 231, 235);
        }
        .mono {
            font-family: 'Share Tech Mono', monospace;
        }
   
    </style>
</head>
<body class="min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Introduce Yourself</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <?php
                $name = "Zairen Lapid";
                $studentID="23-8510-248";
                $course="Web Information System";
                $section="3K- Group A";
                $subject_load=array ("CIT5", "CIT6", "CIT17","CC17","SOCSCI103N", "CC6");
                $age = 20;
                $favoriteColor = "black";
                
                echo '<div class="avatar float-left mr-4">
                <img src="./assets/zai2.png">
                </div>';
                echo "<p class='text-lg center'>Hi, I am $name, I am $age years old, and my favorite color is $favoriteColor. I made this project for my class, $subject_load[2]: $course.";
            
            ?>
        </div>
    </div>
</body>
</html>
