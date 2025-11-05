<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
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
            width: 65vw;
            height: 65vh;
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
            <h1 class="text-3xl font-bold mb-2">Currency Converter</h1>
            
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="POST" class="space-y-4">
                <div>
                    <label class="block mb-1 text-sm font-semibold">PHP Amount:</label>
                    <input type="number" name="php_amount" step="0.01" required class="w-full p-2 rounded bg-gray-700 text-white" placeholder="Enter amount in PHP">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-semibold">Convert to:</label>
                    <select name="currency" required class="w-full p-2 rounded bg-gray-700 text-white">
                        <option value="USD">US Dollar (USD)</option>
                        <option value="EUR">Euro (EUR)</option>
                        <option value="JPY">Japanese Yen (JPY)</option>
                    </select>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded text-white font-semibold">Convert</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $php_amount = $_POST["php_amount"];
                    $currency = $_POST["currency"];

                    $usd_rate = 0.017;
                    $eur_rate = 0.015;
                    $jpy_rate = 2.60;

                    switch ($currency) {
                        case "USD":
                            $converted = $php_amount * $usd_rate;
                            $symbol = "$";
                            break;
                        case "EUR":
                            $converted = $php_amount * $eur_rate;
                            $symbol = "€";
                            break;
                        case "JPY":
                            $converted = $php_amount * $jpy_rate;
                            $symbol = "¥";
                            break;
                        default:
                            $converted = 0;
                            $symbol = "";
                    }

                    echo "<div class='mt-8 space-y-2'>";
                    echo "<p class='text-lg'>PHP Amount: ₱" . number_format($php_amount, 2) . "</p>";
                    echo "<p class='text-lg font-semibold text-blue-400'>Converted to {$currency}: {$symbol}" . number_format($converted, 2) . "</p>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
        <model-viewer class="floating-3d"
        src="./assets/graph/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
