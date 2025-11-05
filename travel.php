<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Cost Estimator</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <link href="styles.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/logo1.ico">

    <style>
        model-viewer.floating-3d {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 40vw;
            height: 70vh;
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
<body class="min-h-screen bg-gray-900 text-white p-8 font-['Cairo_Play']">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Travel Cost Estimator</h1>
            <a href="index.php" class="text-blue-300 hover:text-blue-200 transition">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="distance" class="block mb-2 text-lg font-semibold text-blue-300">Distance (km):</label>
                        <input type="number" step="0.01" id="distance" name="distance" required 
                               class="w-full p-3 rounded-lg bg-gray-900 border border-gray-700 text-white focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-30"
                               value="<?php echo isset($_POST['distance']) ? htmlspecialchars($_POST['distance']) : ''; ?>">
                    </div>
                    <div>
                        <label for="fuel_consumption" class="block mb-2 text-lg font-semibold text-blue-300">Fuel Consumption (km/L):</label>
                        <input type="number" step="0.01" id="fuel_consumption" name="fuel_consumption" required 
                               class="w-full p-3 rounded-lg bg-gray-900 border border-gray-700 text-white focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-30"
                               value="<?php echo isset($_POST['fuel_consumption']) ? htmlspecialchars($_POST['fuel_consumption']) : ''; ?>">
                    </div>
                    <div>
                        <label for="fuel_price" class="block mb-2 text-lg font-semibold text-blue-300">Fuel Price (₱/L):</label>
                        <input type="number" step="0.01" id="fuel_price" name="fuel_price" required 
                               class="w-full p-3 rounded-lg bg-gray-900 border border-gray-700 text-white focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-30"
                               value="<?php echo isset($_POST['fuel_price']) ? htmlspecialchars($_POST['fuel_price']) : ''; ?>">
                    </div>
                </div>

                <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-400 rounded-lg font-semibold transition">Calculate</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    $distance = $_POST["distance"];
                    $fuel_consumption = $_POST["fuel_consumption"];
                    $fuel_price = $_POST["fuel_price"];

                    $liters_needed = $distance / $fuel_consumption;
                    $total_cost = $liters_needed * $fuel_price;

                    echo "<div class='mt-8 space-y-4 border-t border-gray-700 pt-6'>";
                    echo "<p class='text-lg'>Distance: " . number_format($distance, 2) . " km</p>";
                    echo "<p class='text-lg'>Fuel Consumption: " . number_format($fuel_consumption, 2) . " km/L</p>";
                    echo "<p class='text-lg'>Fuel Price: ₱" . number_format($fuel_price, 2) . " per liter</p>";
                    echo "<p class='text-lg'>Fuel Needed: " . number_format($liters_needed, 2) . " L</p>";
                    echo "<p class='text-lg font-semibold text-blue-400'>Total Cost: ₱" . number_format($total_cost, 2) . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
        <model-viewer class="floating-3d"
        src="./assets/animated_paper_plane__blockbench/scene.gltf"
        alt="3D Object"
        autoplay
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
    <script>
        const modelViewer = document.querySelector('model-viewer');
            modelViewer.addEventListener('load', () => {
                 modelViewer.animation.timeScale = 0.5; 
                }
            );
    </script>
</body>
</html>
