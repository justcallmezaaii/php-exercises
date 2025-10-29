<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
	<link href="styles.css" rel="stylesheet"> 
</head>
<body class="min-h-screen p-8 bg-gray-900 text-white">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Bank Account Simulation</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="post" class="space-y-4">
                <div>
                    <label for="balance" class="block mb-2">Initial Balance:</label>
                    <input type="number" id="balance" name="balance" step="any" class="p-2 rounded text-black w-full" 
                        value="<?php echo isset($_POST['balance']) ? htmlspecialchars($_POST['balance']) : ''; ?>" required>
                </div>

                <div>
                    <label for="deposit" class="block mb-2">Deposit Amount:</label>
                    <input type="number" id="deposit" name="deposit" step="any" class="p-2 rounded text-black w-full" 
                        value="<?php echo isset($_POST['deposit']) ? htmlspecialchars($_POST['deposit']) : ''; ?>" required>
                </div>

                <div>
                    <label for="withdraw" class="block mb-2">Withdraw Amount:</label>
                    <input type="number" id="withdraw" name="withdraw" step="any" class="p-2 rounded text-black w-full" 
                        value="<?php echo isset($_POST['withdraw']) ? htmlspecialchars($_POST['withdraw']) : ''; ?>" required>
                </div>

                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    Calculate Balance
                </button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                    // Safely get inputs and validate
                    $balance = isset($_POST['balance']) ? floatval($_POST['balance']) : 0;
                    $deposit = isset($_POST['deposit']) ? floatval($_POST['deposit']) : 0;
                    $withdraw = isset($_POST['withdraw']) ? floatval($_POST['withdraw']) : 0;

                    if ($balance < 0 || $deposit < 0 || $withdraw < 0) {
                        echo "<p class='text-red-400 mt-6'>All amounts must be positive numbers.</p>";
                    } else {
                        $newBalance = $balance + $deposit - $withdraw;

                        echo "<div class='space-y-4 mt-6'>";
                        echo "<p class='text-lg'>Initial Balance: <span class='text-yellow-300 font-semibold'>₱" . number_format($balance, 2) . "</span></p>";
                        echo "<p class='text-lg'>Deposit: <span class='text-green-300 font-semibold'>+₱" . number_format($deposit, 2) . "</span></p>";
                        echo "<p class='text-lg'>Withdraw: <span class='text-red-300 font-semibold'>-₱" . number_format($withdraw, 2) . "</span></p>";

                        if ($newBalance < 0) {
                            echo "<p class='text-red-400 font-semibold'>Warning: Insufficient balance. Account is overdrawn!</p>";
                        }

                        echo "<p class='text-lg font-semibold text-blue-400'>Final Balance: ₱" . number_format($newBalance, 2) . "</p>";
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
