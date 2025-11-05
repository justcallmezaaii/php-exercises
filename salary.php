<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculator</title>
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

<body class="min-h-screen p-8 bg-gray-900 ">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Salary Calculator</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="post" class="space-y-4">
                <div>
                    <label class="block mb-2">Basic Salary:</label>
                    <input type="number" name="basic_salary" step="any" required
                        class="w-full p-2 rounded bg-gray-700 text-white"
                        value="<?php echo isset($_POST['basic_salary']) ? htmlspecialchars($_POST['basic_salary']) : ''; ?>">
                </div>

                <div>
                    <label class="block mb-2">Allowance:</label>
                    <input type="number" name="allowance" step="any" required
                        class="w-full p-2 rounded bg-gray-700 text-white"
                        value="<?php echo isset($_POST['allowance']) ? htmlspecialchars($_POST['allowance']) : ''; ?>">
                </div>

                <div>
                    <label class="block mb-2">Deduction:</label>
                    <input type="number" name="deduction" step="any" required
                        class="w-full p-2 rounded bg-gray-700 text-white"
                        value="<?php echo isset($_POST['deduction']) ? htmlspecialchars($_POST['deduction']) : ''; ?>">
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white px-4 py-2 rounded">
                    Calculate
                </button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $basic_salary = isset($_POST['basic_salary']) ? (float)$_POST['basic_salary'] : 0;
                $allowance = isset($_POST['allowance']) ? (float)$_POST['allowance'] : 0;
                $deduction = isset($_POST['deduction']) ? (float)$_POST['deduction'] : 0;

                $net_salary = $basic_salary + $allowance - $deduction;

                echo "<div class='mt-6 space-y-2'>";
                echo "<p class='text-lg'>Basic Salary: ₱" . number_format($basic_salary, 2) . "</p>";
                echo "<p class='text-lg'>Allowance: ₱" . number_format($allowance, 2) . "</p>";
                echo "<p class='text-lg'>Deduction: ₱" . number_format($deduction, 2) . "</p>";
                echo "<p class='text-lg font-semibold text-blue-400'>Net Salary: ₱" . number_format($net_salary, 2) . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
        <model-viewer class="floating-3d"
        src="./assets/old_wallet/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        orientation="0deg 45deg 0deg"
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
