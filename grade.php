<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
	    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <link href="styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logo1.ico">

    <style>
        model-viewer.floating-3d {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 45vw;
            height: 45vh;
            z-index: 10;
            pointer-events: none;
            mix-blend-mode: screen;
            opacity: 0.5;      
        }

        @keyframes fadeIn {
            from { 
                opacity: 0; 
                transform: translateY(20px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        model-viewer.floating-3d {
            animation: fadeIn 1.5s ease-in-out;    
        }

        @keyframes fadeIn {
            from { 
                opacity: 0; 
                transform: translateY(20px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        model-viewer.floating-3d {
            animation: fadeIn 1.5s ease-in-out;
        }
    </style> 
</head>
<body class="min-h-screen bg-gray-900 p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Grading System</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="POST" class="space-y-4">
                <div>
                    <label class="block mb-1 text-sm font-semibold">Math Grade:</label>
                    <input type="number" name="math" min="0" max="100" required class="w-full p-2 rounded bg-gray-700 text-white" placeholder="Enter Math grade">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-semibold">English Grade:</label>
                    <input type="number" name="english" min="0" max="100" required class="w-full p-2 rounded bg-gray-700 text-white" placeholder="Enter English grade">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-semibold">Science Grade:</label>
                    <input type="number" name="science" min="0" max="100" required class="w-full p-2 rounded bg-gray-700 text-white" placeholder="Enter Science grade">
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded text-white font-semibold">Calculate</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $math = $_POST["math"];
                    $english = $_POST["english"];
                    $science = $_POST["science"];
                    $average = ($math + $english + $science) / 3;

                    if ($average >= 90) {
                        $grade = 'A';
                        $color = 'text-green-400';
                        $message = 'Excellent work!';
                    } elseif ($average >= 80) {
                        $grade = 'B';
                        $color = 'text-blue-400';
                        $message = 'Great job!';
                    } elseif ($average >= 70) {
                        $grade = 'C';
                        $color = 'text-yellow-400';
                        $message = 'Good effort!';
                    } elseif ($average >= 60) {
                        $grade = 'D';
                        $color = 'text-orange-400';
                        $message = 'Needs improvement!';
                    } else {
                        $grade = 'F';
                        $color = 'text-red-500';
                        $message = 'Better luck next time!';
                    }

                    echo "<div class='mt-8 space-y-2'>";
                    echo "<p class='text-lg'>Math: " . number_format($math, 0) . "</p>";
                    echo "<p class='text-lg'>English: " . number_format($english, 0) . "</p>";
                    echo "<p class='text-lg'>Science: " . number_format($science, 0) . "</p>";
                    echo "<p class='text-lg'>Average: " . number_format($average, 2) . "</p>";
                    echo "<p class='text-lg font-semibold {$color}'>Grade: {$grade}</p>";
                    echo "<p class='italic text-gray-300'>{$message}</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
        <model-viewer class="floating-3d"
        src="./assets/paper_tablet/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
