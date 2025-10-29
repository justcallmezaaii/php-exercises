<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Shape Calculator (safe)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="styles.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen p-8 bg-gray-900 text-white">
    <div class="max-w-3xl mx-auto">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold">Shape Calculator</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <?php
            // Safely read the posted shape (or empty string if not set)
            $shape = $_POST['shape'] ?? '';

            // Helper: read a numeric POST value or null
            function post_num($key) {
                if (!isset($_POST[$key]) || $_POST[$key] === '') return null;
                // filter and convert to float; returns null if not numeric
                if (!is_numeric($_POST[$key])) return null;
                return floatval($_POST[$key]);
            }

            // preserve entered values
            $length = post_num('length');
            $width  = post_num('width');
            $side   = post_num('side');
            $radius = post_num('radius');
            $base   = post_num('base');
            $height = post_num('height');

            // If you want the inputs to appear immediately after selection without JS,
            // allow form to POST when shape is chosen — keep that behavior.
            ?>

            <form method="post" class="space-y-6">
                <div>
                    <label for="shape" class="block mb-2 text-lg font-semibold">Choose a shape:</label>
                    <select name="shape" id="shape" class="p-2 rounded text-black w-full" onchange="this.form.submit()">
                        <option value="">-- Select --</option>
                        <option value="rectangle" <?php if ($shape === 'rectangle') echo 'selected'; ?>>Rectangle</option>
                        <option value="square"    <?php if ($shape === 'square') echo 'selected'; ?>>Square</option>
                        <option value="circle"    <?php if ($shape === 'circle') echo 'selected'; ?>>Circle</option>
                        <option value="triangle"  <?php if ($shape === 'triangle') echo 'selected'; ?>>Triangle</option>
                    </select>
                </div>

                <div id="inputs" class="space-y-4">
                    <?php if ($shape === 'rectangle'): ?>
                        <label class="block">
                            Length:
                            <input type="number" name="length" step="any" class="p-2 rounded text-black w-full" value="<?php echo $length ?? ''; ?>" required>
                        </label>
                        <label class="block">
                            Width:
                            <input type="number" name="width" step="any" class="p-2 rounded text-black w-full" value="<?php echo $width ?? ''; ?>" required>
                        </label>

                    <?php elseif ($shape === 'square'): ?>
                        <label class="block">
                            Side:
                            <input type="number" name="side" step="any" class="p-2 rounded text-black w-full" value="<?php echo $side ?? ''; ?>" required>
                        </label>

                    <?php elseif ($shape === 'circle'): ?>
                        <label class="block">
                            Radius:
                            <input type="number" name="radius" step="any" class="p-2 rounded text-black w-full" value="<?php echo $radius ?? ''; ?>" required>
                        </label>

                    <?php elseif ($shape === 'triangle'): ?>
                        <label class="block">
                            Base:
                            <input type="number" name="base" step="any" class="p-2 rounded text-black w-full" value="<?php echo $base ?? ''; ?>" required>
                        </label>
                        <label class="block">
                            Height:
                            <input type="number" name="height" step="any" class="p-2 rounded text-black w-full" value="<?php echo $height ?? ''; ?>" required>
                        </label>
                    <?php else: ?>
                        <p class="text-gray-300">Select a shape to show its inputs.</p>
                    <?php endif; ?>
                </div>

                <div class="flex gap-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Calculate</button>
                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="bg-gray-600 hover:bg-gray-500 text-white px-4 py-2 rounded">Reset</a>
                </div>
            </form>

            <?php
            // Perform calculations only when form is submitted and "Calculate" clicked.
            // We check for POST and that a specific shape is selected.
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && $shape !== ''):
                echo "<div class='mt-8 space-y-4'>";
                echo "<h2 class='text-2xl font-semibold capitalize'>{$shape} results</h2>";

                // Validate positive numbers & compute safely
                switch ($shape) {
                    case 'rectangle':
                        if ($length === null || $width === null) {
                            echo "<p class='text-red-400'>Please enter valid numbers for length and width.</p>";
                        } elseif ($length <= 0 || $width <= 0) {
                            echo "<p class='text-red-400'>Numbers must be positive.</p>";
                        } else {
                            $area = $length * $width;
                            $perimeter = 2 * ($length + $width);
                            echo '<svg class="w-32 h-32 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="100" height="60" fill="none" stroke="white" stroke-width="3"/>
                                  </svg>';
                            echo "<p>Area = {$length} × {$width} = <span class='text-green-300 font-semibold'>{$area}</span></p>";
                            echo "<p>Perimeter = 2({$length} + {$width}) = <span class='text-yellow-300 font-semibold'>{$perimeter}</span></p>";
                        }
                        break;

                    case 'square':
                        if ($side === null) {
                            echo "<p class='text-red-400'>Please enter a valid number for the side.</p>";
                        } elseif ($side <= 0) {
                            echo "<p class='text-red-400'>Side must be positive.</p>";
                        } else {
                            $area = $side * $side;
                            $perimeter = 4 * $side;
                            echo '<svg class="w-32 h-32 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="80" height="80" fill="none" stroke="white" stroke-width="3"/>
                                  </svg>';
                            echo "<p>Area = side² = <span class='text-green-300 font-semibold'>{$area}</span></p>";
                            echo "<p>Perimeter = 4 × side = <span class='text-yellow-300 font-semibold'>{$perimeter}</span></p>";
                        }
                        break;

                    case 'circle':
                        if ($radius === null) {
                            echo "<p class='text-red-400'>Please enter a valid number for the radius.</p>";
                        } elseif ($radius <= 0) {
                            echo "<p class='text-red-400'>Radius must be positive.</p>";
                        } else {
                            $area = pi() * pow($radius, 2);
                            $circumference = 2 * pi() * $radius;
                            echo '<svg class="w-32 h-32 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="50" r="40" fill="none" stroke="white" stroke-width="3"/>
                                  </svg>';
                            echo "<p>Area = πr² = <span class='text-green-300 font-semibold'>" . round($area, 4) . "</span></p>";
                            echo "<p>Circumference = 2πr = <span class='text-yellow-300 font-semibold'>" . round($circumference, 4) . "</span></p>";
                        }
                        break;

                    case 'triangle':
                        if ($base === null || $height === null) {
                            echo "<p class='text-red-400'>Please enter valid numbers for base and height.</p>";
                        } elseif ($base <= 0 || $height <= 0) {
                            echo "<p class='text-red-400'>Numbers must be positive.</p>";
                        } else {
                            $area = 0.5 * $base * $height;
                            echo '<svg class="w-32 h-32 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg">
                                    <polygon points="10,90 90,90 50,20" fill="none" stroke="white" stroke-width="3"/>
                                  </svg>';
                            echo "<p>Area = ½ × base × height = <span class='text-green-300 font-semibold'>{$area}</span></p>";
                            echo "<p class='text-gray-400'>Perimeter requires side lengths (not calculated here).</p>";
                        }
                        break;

                    default:
                        echo "<p class='text-red-400'>Unknown shape selected.</p>";
                }

                echo "</div>";
            endif;
            ?>
        </div>
    </div>
</body>
</html>
