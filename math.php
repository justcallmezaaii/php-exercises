<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="styles.css" rel="stylesheet">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
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
<body class="min-h-screen bg-gray-900 p-8 text-white">
    <div class="max-w-4xl mx-auto relative z-20">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Simple Math</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="post" class="space-y-4">
                <div>
                    <label class="block mb-2">First Number:</label>
                    <input type="number" name="a" step="any" required class="w-full p-2 rounded bg-gray-700 text-white"
                           value="<?php echo isset($_POST['a']) ? htmlspecialchars($_POST['a']) : ''; ?>">
                </div>
                <div>
                    <label class="block mb-2">Second Number:</label>
                    <input type="number" name="b" step="any" required class="w-full p-2 rounded bg-gray-700 text-white"
                           value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : ''; ?>">
                </div>
                <div>
                    <label class="block mb-2">Choose Operation:</label>
                    <select name="operation" class="w-full p-2 rounded bg-gray-700 text-white">
                        <option value="add" <?php if (isset($_POST['operation']) && $_POST['operation'] === 'add') echo 'selected'; ?>>Addition (+)</option>
                        <option value="subtract" <?php if (isset($_POST['operation']) && $_POST['operation'] === 'subtract') echo 'selected'; ?>>Subtraction (−)</option>
                        <option value="multiply" <?php if (isset($_POST['operation']) && $_POST['operation'] === 'multiply') echo 'selected'; ?>>Multiplication (×)</option>
                        <option value="divide" <?php if (isset($_POST['operation']) && $_POST['operation'] === 'divide') echo 'selected'; ?>>Division (÷)</option>
                    </select>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white px-4 py-2 rounded">Calculate</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $a = isset($_POST['a']) && is_numeric($_POST['a']) ? (float) $_POST['a'] : null;
                $b = isset($_POST['b']) && is_numeric($_POST['b']) ? (float) $_POST['b'] : null;
                $operation = $_POST['operation'] ?? '';

                if ($a === null || $b === null) {
                    echo "<div class='mt-6'><p class='text-red-400'>Please enter valid numeric values for both numbers.</p></div>";
                } else {
                    $result = null;
                    $symbol = '';

                    switch ($operation) {
                        case "add": $result = $a + $b; $symbol = "+"; break;
                        case "subtract": $result = $a - $b; $symbol = "−"; break;
                        case "multiply": $result = $a * $b; $symbol = "×"; break;
                        case "divide":
                            $symbol = "÷";
                            $result = ($b == 0) ? "Cannot divide by zero" : $a / $b;
                            break;
                        default:
                            $result = "Please select a valid operation.";
                    }

                    echo "<div class='mt-6 space-y-2'>";
                    if (is_numeric($result)) {
                        $display = (floor($result) == $result) ? number_format($result, 0) : rtrim(sprintf('%.4f', $result), '0.');
                        echo "<p class='text-lg'>Numbers: " . htmlspecialchars((string)$a) . " $symbol " . htmlspecialchars((string)$b) . "</p>";
                        echo "<p class='text-lg font-semibold text-blue-400'>Result: {$display}</p>";
                    } else {
                        echo "<p class='text-lg'>Numbers: " . htmlspecialchars((string)$a) . " {$symbol} " . htmlspecialchars((string)$b) . "</p>";
                        echo "<p class='text-lg font-semibold text-blue-400'>{$result}</p>";
                    }
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>

    <model-viewer class="floating-3d"
        src="./assets/casio_classwiz_calculator/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        orientation="0deg 45deg 0deg"
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
