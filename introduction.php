<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce Yourself</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@400;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="styles.css" rel="stylesheet">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <link rel="icon" type="image/x-icon" href="./assets/logo1.ico">

</head>
<body class="min-h-screen bg-gray-900 p-8 text-white font-['Cairo_Play']">
    <div class="max-w-4xl mx-auto">
        <header class="mb-12">
            <h1 class="text-3xl font-bold mb-2">Introduce Yourself</h1>
            <a href="index.php" class="text-blue-400 hover:text-blue-300">← Back to tasks</a>
        </header>

        <div class="bg-gray-800 p-6 rounded-lg shadow-md">
            <form method="post" class="space-y-4 mb-8">
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block mb-1 text-sm text-gray-300">Full Name</label>
                        <input type="text" name="name" class="w-full p-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm text-gray-300">Student ID</label>
                        <input type="text" name="studentID" class="w-full p-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm text-gray-300">Age</label>
                        <input type="number" name="age" class="w-full p-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm text-gray-300">Favorite Color</label>
                        <input type="text" name="favoriteColor" class="w-full p-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm text-gray-300">Course</label>
                        <input type="text" name="course" class="w-full p-2 rounded bg-gray-700 text-white" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-sm text-gray-300">Section</label>
                        <input type="text" name="section" class="w-full p-2 rounded bg-gray-700 text-white" required>
                    </div>
                </div>
                <div>
                    <label class="block mb-1 text-sm text-gray-300">Subjects (comma-separated)</label>
                    <input type="text" name="subject_load" placeholder="e.g. CIT5, CIT6, CIT17" class="w-full p-2 rounded bg-gray-700 text-white" required>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white px-4 py-2 rounded-lg font-semibold transition">Submit</button>
            </form>

            <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php
                    $name = htmlspecialchars($_POST["name"]);
                    $studentID = htmlspecialchars($_POST["studentID"]);
                    $age = htmlspecialchars($_POST["age"]);
                    $favoriteColor = htmlspecialchars($_POST["favoriteColor"]);
                    $course = htmlspecialchars($_POST["course"]);
                    $section = htmlspecialchars($_POST["section"]);
                    $subject_load = explode(",", $_POST["subject_load"]);
                ?>
                <div class="mt-8 border-t border-gray-700 pt-6 flex items-center space-x-6">
                    <model-viewer 
                        src="./assets/japanese_chibi_anime_girl_character_kung_fu/scene.gltf" 
                        alt="3D Avatar Placeholder" 
                        camera-controls
                        rotation-per-second="50deg"
                        auto-rotate 
                        shadow-intensity="1"
                        class="w-40 h-40 rounded-xl bg-gray-700">
                    </model-viewer>

                    <div>
                        <p class="text-lg leading-relaxed">
                            Hi, I am <span class="font-bold text-amber-300"><?= $name ?></span> (<?= $studentID ?>).  
                            I am <?= $age ?> years old, and my favorite color is 
                            <span class="font-semibold text-amber-200"><?= $favoriteColor ?></span>.<br><br>
                            I study <span class="font-semibold"><?= $course ?></span> - <?= $section ?>.<br>
                            My current subjects are:
                        </p>
                        <ul class="list-disc ml-6 mt-2 text-blue-300">
                            <?php foreach ($subject_load as $subject): ?>
                                <li><?= trim($subject) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>