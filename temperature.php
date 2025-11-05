<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
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
            <h1 class="text-3xl font-bold mb-2">Temperature Converter</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="post" class="space-y-4">
                <div>
                    <label class="block mb-2">Enter Temperature:</label>
                    <input type="number" name="temperature" step="any" required
                        class="w-full p-2 rounded bg-gray-700 text-white"
                        value="<?php echo isset($_POST['temperature']) ? htmlspecialchars($_POST['temperature']) : ''; ?>">
                </div>

                <div>
                    <label class="block mb-2">Select Input Unit:</label>
                    <select name="unit" class="w-full p-2 rounded bg-gray-700 text-white">
                        <option value="celsius" <?php if(isset($_POST['unit']) && $_POST['unit']=='celsius') echo 'selected'; ?>>Celsius (°C)</option>
                        <option value="fahrenheit" <?php if(isset($_POST['unit']) && $_POST['unit']=='fahrenheit') echo 'selected'; ?>>Fahrenheit (°F)</option>
                        <option value="kelvin" <?php if(isset($_POST['unit']) && $_POST['unit']=='kelvin') echo 'selected'; ?>>Kelvin (K)</option>
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white px-4 py-2 rounded">
                    Convert
                </button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $temp = isset($_POST['temperature']) ? (float)$_POST['temperature'] : 0;
                $unit = $_POST['unit'] ?? 'celsius';

                // Initialize variables
                $celsius = $fahrenheit = $kelvin = 0;

                switch ($unit) {
                    case 'celsius':
                        $celsius = $temp;
                        $fahrenheit = ($temp * 9/5) + 32;
                        $kelvin = $temp + 273.15;
                        break;
                    case 'fahrenheit':
                        $fahrenheit = $temp;
                        $celsius = ($temp - 32) * 5/9;
                        $kelvin = $celsius + 273.15;
                        break;
                    case 'kelvin':
                        $kelvin = $temp;
                        $celsius = $temp - 273.15;
                        $fahrenheit = ($celsius * 9/5) + 32;
                        break;
                }

                echo "<div class='mt-6 space-y-2'>";
                echo "<p class='text-lg'>Input Temperature: " . number_format($temp, 2) . " " . ucfirst($unit) . "</p>";
                echo "<p class='text-lg'>Celsius: " . number_format($celsius, 2) . " °C</p>";
                echo "<p class='text-lg'>Fahrenheit: " . number_format($fahrenheit, 2) . " °F</p>";
                echo "<p class='text-lg'>Kelvin: " . number_format($kelvin, 2) . " K</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <model-viewer class="floating-3d"
        src="./assets/thermometer/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        orientation="0deg 45deg 0deg"
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
