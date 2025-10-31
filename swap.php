<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Variables</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <link href="styles.css" rel="stylesheet"> 
    <style>
        model-viewer.floating-3d {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 60vw;
            height: 50vh;
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
            <h1 class="text-3xl font-bold mb-2">Swapping Variables</h1>
            <a href="index.php" class="text-blue-300 hover:text-blue-200 transition">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="a" class="block mb-2 text-lg font-semibold text-blue-300">Value of A:</label>
                        <input type="number" id="a" name="a" required class="w-full p-3 rounded-lg bg-gray-900 border border-gray-700 text-white focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-30" value="<?php echo isset($_POST['a']) ? htmlspecialchars($_POST['a']) : ''; ?>">
                    </div>
                    <div>
                        <label for="b" class="block mb-2 text-lg font-semibold text-blue-300">Value of B:</label>
                        <input type="number" id="b" name="b" required class="w-full p-3 rounded-lg bg-gray-900 border border-gray-700 text-white focus:border-blue-400 focus:ring focus:ring-blue-400 focus:ring-opacity-30" value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : ''; ?>">
                    </div>
                </div>
                <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-400 rounded-lg font-semibold transition">Swap</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["a"]) && isset($_POST["b"])) {
                    $a = $_POST["a"];
                    $b = $_POST["b"];
                    $beforeA = $a;
                    $beforeB = $b;

                    // Swap logic
                    $temp = $a;
                    $a = $b;
                    $b = $temp;

                    echo "<div class='mt-8 space-y-4 border-t border-gray-700 pt-6'>";
                    echo "<p class='text-lg'><strong>Before swap:</strong> a = $beforeA, b = $beforeB</p>";
                    echo "<p class='text-lg'><strong>After swap:</strong> a = $a, b = $b</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
        <model-viewer class="floating-3d"
        src="./assets/keyboard/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        orientation="0deg 45deg 0deg"
        autoplay
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
