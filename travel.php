<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Cost Estimator</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
	<link href="styles.css" rel="stylesheet"> 

</head>
<body class="min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Travel Cost Estimator</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <?php
                $distance = 350; // km
                $fuel_consumption = 12; // km per liter
                $fuel_price = 55; // per liter
                
                $liters_needed = $distance / $fuel_consumption;
                $total_cost = $liters_needed * $fuel_price;
                
                echo "<div class='space-y-4'>";
                echo "<p class='text-lg'>Distance: $distance km</p>";
                echo "<p class='text-lg'>Fuel Consumption: $fuel_consumption km/L</p>";
                echo "<p class='text-lg'>Fuel Price: $fuel_price per liter</p>";
                echo "<p class='text-lg'>Fuel Needed: " . number_format($liters_needed, 2) . " L</p>";
                echo "<p class='text-lg font-semibold text-blue-400'>Total Cost: " . number_format($total_cost, 2) . "</p>";
                echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>
