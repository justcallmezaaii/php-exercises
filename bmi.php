<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
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
            <h1 class="text-3xl font-bold mb-2">BMI Calculator</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="POST" class="space-y-4">
                <div>
                    <label class="block mb-1 text-sm font-semibold">Weight (kg):</label>
                    <input type="number" name="weight" step="0.1" required class="w-full p-2 rounded bg-gray-700 text-white" placeholder="Enter your weight">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-semibold">Height (m):</label>
                    <input type="number" name="height" step="0.01" required class="w-full p-2 rounded bg-gray-700 text-white" placeholder="Enter your height in meters">
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded text-white font-semibold">Calculate BMI</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $weight = $_POST["weight"];
                    $height = $_POST["height"];

                    if ($height > 0) {
                        $bmi = $weight / ($height * $height);
                        $bmiFormatted = number_format($bmi, 2);

                        if ($bmi < 18.5) {
                            $status = "Underweight";
                            $color = "text-yellow-400";
                        } elseif ($bmi < 25) {
                            $status = "Normal weight";
                            $color = "text-green-400";
                        } elseif ($bmi < 30) {
                            $status = "Overweight";
                            $color = "text-orange-400";
                        } else {
                            $status = "Obese";
                            $color = "text-red-400";
                        }

                        echo "<div class='mt-8 space-y-2'>";
                        echo "<p class='text-lg'>Weight: {$weight} kg</p>";
                        echo "<p class='text-lg'>Height: {$height} m</p>";
                        echo "<p class='text-lg font-semibold text-blue-400'>BMI: {$bmiFormatted}</p>";
                        echo "<p class='text-lg font-semibold {$color}'>Status: {$status}</p>";
                        echo "</div>";
                    } else {
                        echo "<p class='mt-6 text-red-400'>Please enter a valid height greater than 0.</p>";
                    }
                }
            ?>
        </div>
    </div>
        <model-viewer class="floating-3d"
        src="./assets/digital_weight_scale/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        orientation="0deg 45deg 0deg"
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
