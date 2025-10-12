<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
	<link href="styles.css" rel="stylesheet"> 

</head>
<body class="min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">String Manipulation</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <?php
                $sentence = "Hi. I’m Lynn from Las Vegas. Mowdels. Were hiring new promohtional mowdels to work en Las Vegas, Yuwezay. Are you etin to tweynty one yirs old? Do you have gewd english iskillz? A plesing fersonality and desar for an exciting new life. Ep so, dees offurtunity mee bee for you. If dis sounds intereseting, please emel us so we can errends a personal enterview. Tengs.";
                
                echo "<div class='space-y-4'>";
                echo "<p class='text-lg'>Original: $sentence</p>";
                echo "<p class='text-lg'>Character count: " . strlen($sentence) . "</p>";
                echo "<p class='text-lg'>Word count: " . str_word_count($sentence) . "</p>";
                echo "<p class='text-lg'>Uppercase: " . strtoupper($sentence) . "</p>";
                echo "<p class='text-lg'>Lowercase: " . strtolower($sentence) . "</p>";
                echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>
