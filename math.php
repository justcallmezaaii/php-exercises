<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
	<link href="styles.css" rel="stylesheet"> 

</head>
<body class="min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Simple Math</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <?php
                $a = 95874;
                $b = 7869;
                
                echo "<div class='space-y-4'>";
                echo "<p class='text-lg'>Numbers: $a and $b</p>";
                echo "<p class='text-lg'>Sum: " . ($a + $b) . "</p>";
                echo "<p class='text-lg'>Difference: " . ($a - $b) . "</p>";
                echo "<p class='text-lg'>Product: " . ($a * $b) . "</p>";
                echo "<p class='text-lg'>Quotient: " . ($a / $b) . "</p>";
                echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>
