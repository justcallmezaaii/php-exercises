<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tasks</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Cairo Play', sans-serif;
            background-color: #1a1a1a;
            color: #e5e7eb;
        }
        .mono {
            font-family: 'Share Tech Mono', monospace;
        }
    </style>
</head>
<body class="min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12 text-center">
            <h1 class="text-4xl font-bold mb-2">PHP Tasks</h1>
            <p class="text-gray-400">Select a task to execute</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="introduction.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">1. Introduce Yourself</h2>
                <p class="text-gray-400">Basic variable usage</p>
            </a>

            <a href="math.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">2. Simple Math</h2>
                <p class="text-gray-400">Basic arithmetic operations</p>
            </a>

            <a href="area-peri.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">3. Rectangle Calculations</h2>
                <p class="text-gray-400">Area and perimeter</p>
            </a>

            <a href="temperature.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">4. Temperature Converter</h2>
                <p class="text-gray-400">Celsius to Fahrenheit</p>
            </a>

            <a href="swap.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">5. Swapping Variables</h2>
                <p class="text-gray-400">Using temporary variable</p>
            </a>

            <a href="salary.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">6. Salary Calculator</h2>
                <p class="text-gray-400">Net salary calculation</p>
            </a>

            <a href="bmi.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">7. BMI Calculator</h2>
                <p class="text-gray-400">Body Mass Index</p>
            </a>

            <a href="string.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">8. String Manipulation</h2>
                <p class="text-gray-400">Text processing</p>
            </a>

            <a href="bank.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">9. Bank Account</h2>
                <p class="text-gray-400">Balance simulation</p>
            </a>

            <a href="grades.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">10. Grading System</h2>
                <p class="text-gray-400">Score evaluation</p>
            </a>

            <a href="currency.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">11. Currency Converter</h2>
                <p class="text-gray-400">PHP to other currencies</p>
            </a>

            <a href="travel.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">12. Travel Cost</h2>
                <p class="text-gray-400">Fuel cost estimation</p>
            </a>
        </div>
    </div>
</body>
</html>
