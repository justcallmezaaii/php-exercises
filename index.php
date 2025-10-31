<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tasks</title>
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
            width: 28vw;
            height: 40vh;
            z-index: -1;
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
        <header class="mb-12 text-center">
            <h1 class="text-4xl font-bold mb-2">PHP Tasks</h1>
            <p class="text-gray-400">ZAIREN V. LAPID | CIT17 - WEB INFORMATION SYSTEM</p>
            <p class="text-gray-400">Select a task to execute</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="introduction.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
            <div class="relative w-8 h-8 overflow-hidden">
                <svg viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 7V17C3.5 18.1046 4.39543 19 5.5 19H19.5C20.6046 19 21.5 18.1046 21.5 17V7C21.5 5.89543 20.6046 5 19.5 5H5.5C4.39543 5 3.5 5.89543 3.5 7Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15.5 10H18.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15.5 13H18.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5 10C11.5 11.1046 10.6046 12 9.5 12C8.39543 12 7.5 11.1046 7.5 10C7.5 8.89543 8.39543 8 9.5 8C10.0304 8 10.5391 8.21071 10.9142 8.58579C11.2893 8.96086 11.5 9.46957 11.5 10Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M5.5 16C8.283 12.863 11.552 13.849 13.5 16" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                
            </div>
            <h2 class="text-xl font-semibold mb-2">Introduce Yourself</h2>
                <p class="text-gray-400">Basic variable usage</p>
            </a>

            <a href="math.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
            <div class="relative w-8 h-8 overflow-hidden">
                <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2,1C1.4,1,1,1.4,1,2v13h14V1H2z M11,9H9v2c0,0.6-0.4,1-1,1s-1-0.4-1-1V9H5C4.4,9,4,8.6,4,8s0.4-1,1-1h2V5c0-0.6,0.4-1,1-1 s1,0.4,1,1v2h2c0.6,0,1,0.4,1,1S11.6,9,11,9z"></path> <path d="M1,17v13c0,0.6,0.4,1,1,1h13V17H1z M10.8,25.4c0.4,0.4,0.4,1,0,1.4c-0.2,0.2-0.5,0.3-0.7,0.3S9.6,27,9.4,26.8L8,25.4 l-1.4,1.4c-0.2,0.2-0.5,0.3-0.7,0.3S5.4,27,5.2,26.8c-0.4-0.4-0.4-1,0-1.4L6.6,24l-1.4-1.4c-0.4-0.4-0.4-1,0-1.4 c0.4-0.4,1-0.4,1.4,0L8,22.6l1.4-1.4c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L9.4,24L10.8,25.4z"></path> <path d="M30,1H17v14h14V2C31,1.4,30.6,1,30,1z M27,9h-6c-0.6,0-1-0.4-1-1s0.4-1,1-1h6c0.6,0,1,0.4,1,1S27.6,9,27,9z"></path> <path d="M17,17v14h13c0.6,0,1-0.4,1-1V17H17z M27,27h-6c-0.6,0-1-0.4-1-1s0.4-1,1-1h6c0.6,0,1,0.4,1,1S27.6,27,27,27z M27,23h-6 c-0.6,0-1-0.4-1-1s0.4-1,1-1h6c0.6,0,1,0.4,1,1S27.6,23,27,23z"></path> </g></svg>
                
            </div>
                <h2 class="text-xl font-semibold mb-2">Simple Math</h2>
                <p class="text-gray-400">Basic arithmetic operations</p>
            </a>

            <a href="area-peri.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg fill="#ffffff" viewBox="-2.4 -2.4 28.80 28.80" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7,8 L3,8 L3,20.2928932 L7,16.2928932 L7,8 Z M8,7 L16.2928932,7 L20.2928932,3 L8,3 L8,7 Z M17,7.70710678 L17,16 L21,16 L21,3.70710678 L17,7.70710678 Z M16,17 L7.70710678,17 L3.70710678,21 L16,21 L16,17 Z M21.8535534,16.8535534 L16.8535534,21.8535534 C16.7630712,21.9440356 16.6380712,22 16.5,22 L2.5,22 C2.22385763,22 2,21.7761424 2,21.5 L2,7.5 C2,7.36192881 2.05596441,7.23692881 2.14644661,7.14644661 L7.14644661,2.14644661 C7.23692881,2.05596441 7.36192881,2 7.5,2 L21.5,2 C21.7761424,2 22,2.22385763 22,2.5 L22,16.5 C22,16.6380712 21.9440356,16.7630712 21.8535534,16.8535534 Z M20.2928932,17 L17,17 L17,20.2928932 L20.2928932,17 L20.2928932,17 Z M7,3.70710678 L3.70710678,7 L7,7 L7,3.70710678 Z M8,8 L8,16 L16,16 L16,8 L8,8 Z"></path> </g></svg>
                </div>
                <h2 class="text-xl font-semibold mb-2">Shape Calculator</h2>
                <p class="text-gray-400">Area and perimeter</p>
            </a>

            <a href="temperature.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.4973 4.99998L15.4636 7.06466C15.5732 7.29392 15.628 7.40855 15.7144 7.4792C15.7905 7.54144 15.8833 7.57986 15.9811 7.58966C16.0921 7.60079 16.2119 7.5585 16.4516 7.47391L18.0774 6.90001C18.582 6.72187 18.8344 6.6328 19 6.69055C19.144 6.74078 19.2573 6.85401 19.3075 6.99805C19.3653 7.16369 19.2762 7.41602 19.098 7.92068L18.5241 9.54646C18.4395 9.7861 18.3973 9.90591 18.4084 10.017C18.4182 10.1148 18.4566 10.2075 18.5188 10.2836C18.5895 10.37 18.7041 10.4248 18.9334 10.5345L20.4888 11.2783C20.9716 11.5092 21.213 11.6246 21.2893 11.7826C21.3556 11.9199 21.3556 12.0801 21.2893 12.2174C21.213 12.3754 20.9716 12.4908 20.4888 12.7217L18.9334 13.4655C18.7041 13.5751 18.5895 13.63 18.5188 13.7164C18.4566 13.7925 18.4182 13.8852 18.4084 13.983C18.3973 14.0941 18.4395 14.2139 18.5241 14.4535L19.098 16.0793C19.2762 16.584 19.3653 16.8363 19.3075 17.0019C19.2573 17.146 19.144 17.2592 19 17.3094C18.8344 17.3672 18.582 17.2781 18.0774 17.1L16.0171 16.3727C15.9268 16.3408 15.8816 16.3249 15.8351 16.3178C15.794 16.3114 15.7521 16.3103 15.7107 16.3144C15.6639 16.3189 15.6179 16.3324 15.526 16.3594L14.9973 16.5142M13.998 14C14.362 14 14.7033 13.9028 14.9973 13.7329C15.5955 13.3872 15.998 12.7406 15.998 12C15.998 11.2594 15.5955 10.6128 14.9973 10.2671C14.7033 10.0972 14.362 10 13.998 10M6.99805 15.9998C7.55033 15.9998 7.99805 16.4475 7.99805 16.9998C7.99805 17.5521 7.55033 17.9998 6.99805 17.9998C6.44576 17.9998 5.99805 17.5521 5.99805 16.9998C5.99805 16.4475 6.44576 15.9998 6.99805 15.9998ZM6.99805 15.9998L6.99098 10.5M6.99805 16.9998L6.99098 17.0069M2.99805 16.9998C2.99805 19.209 4.78891 20.9998 6.99805 20.9998C9.20719 20.9998 10.998 19.209 10.998 16.9998C10.998 15.9854 10.6204 15.0591 9.99805 14.354V6C9.99805 4.34315 8.6549 3 6.99805 3C5.34119 3 3.99805 4.34315 3.99805 6V14.354C3.37568 15.0591 2.99805 15.9854 2.99805 16.9998Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            </div>
                <h2 class="text-xl font-semibold mb-2">Temperature Converter</h2>
                <p class="text-gray-400">Celsius to Fahrenheit</p>
            </a>

            <a href="swap.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 22.75H7C6.59 22.75 6.25 22.41 6.25 22C6.25 21.59 6.59 21.25 7 21.25H17C17.41 21.25 17.75 21.59 17.75 22C17.75 22.41 17.41 22.75 17 22.75Z" fill="#f1f4f8"></path> <path opacity="0.4" d="M18 19H6C3.79 19 2 17.21 2 15V6C2 3.79 3.79 2 6 2H18C20.21 2 22 3.79 22 6V15C22 17.21 20.21 19 18 19Z" fill="#f1f4f8"></path> <path d="M17.2601 9.07007H13.5801C13.1701 9.07007 12.8301 8.73007 12.8301 8.32007C12.8301 7.91007 13.1701 7.57007 13.5801 7.57007H17.2601C17.6701 7.57007 18.0101 7.91007 18.0101 8.32007C18.0101 8.73007 17.6801 9.07007 17.2601 9.07007Z" fill="#f1f4f8"></path> <path d="M10 9.32007C9.45 9.32007 9 8.87007 9 8.32007C9 7.77007 9.44 7.32007 10 7.32007C10.55 7.32007 11 7.77007 11 8.32007C11 8.87007 10.56 9.32007 10 9.32007Z" fill="#f1f4f8"></path> <path d="M6.84961 9.32007C6.29961 9.32007 5.84961 8.87007 5.84961 8.32007C5.84961 7.77007 6.28961 7.32007 6.84961 7.32007H6.8596C7.4096 7.32007 7.8596 7.77007 7.8596 8.32007C7.8596 8.87007 7.39961 9.32007 6.84961 9.32007Z" fill="#f1f4f8"></path> <path d="M17.2602 14.8599H6.75023C6.34023 14.8599 5.99023 14.5199 5.99023 14.1099C5.99023 13.6999 6.32022 13.3599 6.73022 13.3599H17.2602C17.6702 13.3599 18.0102 13.6999 18.0102 14.1099C18.0102 14.5199 17.6802 14.8599 17.2602 14.8599Z" fill="#f1f4f8"></path> </g></svg>
            </div>
                <h2 class="text-xl font-semibold mb-2">Swapping Variables</h2>
                <p class="text-gray-400">Using temporary variable</p>
            </a>

            <a href="salary.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 19H6.2C5.0799 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V8.5M9 9.5V8.5M9 9.5H11.0001M9 9.5C7.88279 9.49998 7.00244 9.62616 7.0001 10.8325C6.99834 11.7328 7.00009 12 9.00009 12C11.0001 12 11.0001 12.2055 11.0001 13.1667C11.0001 13.889 11 14.5 9 14.5M9 15.5V14.5M9 14.5L7.0001 14.5M14 10H17M14 20L16.025 19.595C16.2015 19.5597 16.2898 19.542 16.3721 19.5097C16.4452 19.4811 16.5147 19.4439 16.579 19.399C16.6516 19.3484 16.7152 19.2848 16.8426 19.1574L21 15C21.5523 14.4477 21.5523 13.5523 21 13C20.4477 12.4477 19.5523 12.4477 19 13L14.8426 17.1574C14.7152 17.2848 14.6516 17.3484 14.601 17.421C14.5561 17.4853 14.5189 17.5548 14.4903 17.6279C14.458 17.7102 14.4403 17.7985 14.405 17.975L14 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                
                </div>
                <h2 class="text-xl font-semibold mb-2">Salary Calculator</h2>
                <p class="text-gray-400">Net salary calculation</p>
            </a>

            <a href="bmi.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;stroke:#ffffff;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} </style> <circle class="st0" cx="16" cy="9" r="6"></circle> <path class="st0" d="M22,9h4c1.1,0,2,0.9,2,2v16c0,1.1-0.9,2-2,2H6c-1.1,0-2-0.9-2-2V11c0-1.1,0.9-2,2-2h4"></path> <line class="st0" x1="16" y1="29" x2="16" y2="15"></line> <path class="st0" d="M16.7,9.7c-0.4,0.4-1,0.4-1.4,0c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,2.8-1.4,2.8-1.4S17.1,9.3,16.7,9.7z"></path> </g></svg>
                </div>
                <h2 class="text-xl font-semibold mb-2">BMI Calculator</h2>
                <p class="text-gray-400">Body Mass Index</p>
            </a>

            <a href="string.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M3.17157 18.8284C4.34315 20 6.22876 20 10 20L15.75 19.9944C18.3859 19.9668 19.8541 19.8028 20.8284 18.8285C22 17.6569 22 15.7713 22 12C22 8.22879 22 6.34317 20.8284 5.1716C19.8541 4.19727 18.3738 4.02762 15.7379 4H10C6.22876 4 4.34315 4 3.17157 5.17157C2 6.34315 2 8.22876 2 12C2 15.7712 2 17.6569 3.17157 18.8284Z" fill="#fafafa"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M15 1.25C15.4142 1.25 15.75 1.58579 15.75 2V4.00559V19.9944V22C15.75 22.4142 15.4142 22.75 15 22.75C14.5858 22.75 14.25 22.4142 14.25 22V2C14.25 1.58579 14.5858 1.25 15 1.25Z" fill="#fafafa"></path> <path d="M6.81782 7.78733C7.11779 7.74992 7.48429 7.74996 7.88383 7.75H10.1162C10.5157 7.74996 10.8822 7.74992 11.1822 7.78733C11.5109 7.82833 11.8612 7.9242 12.1624 8.19187C12.2138 8.23753 12.2625 8.28618 12.3081 8.33756C12.5758 8.63878 12.6717 8.98915 12.7127 9.31782C12.7501 9.61779 12.7501 9.98428 12.75 10.3838L12.75 10.425C12.75 10.8392 12.4142 11.175 12 11.175C11.5858 11.175 11.25 10.8392 11.25 10.425C11.25 9.97047 11.2486 9.69931 11.2242 9.50348C11.1998 9.30765 10.9965 9.2758 10.9965 9.2758C10.8007 9.25137 10.5295 9.25001 10.075 9.25001H9.75001V14.75H11C11.4142 14.75 11.75 15.0858 11.75 15.5C11.75 15.9142 11.4142 16.25 11 16.25H7.00001C6.58579 16.25 6.25001 15.9142 6.25001 15.5C6.25001 15.0858 6.58579 14.75 7.00001 14.75H8.25001V9.25001H7.925C7.47047 9.25001 7.19931 9.25137 7.00348 9.2758C7.00348 9.2758 6.80023 9.30765 6.7758 9.50348C6.75137 9.69931 6.75001 9.97047 6.75001 10.425C6.75001 10.8392 6.41422 11.175 6.00001 11.175C5.58579 11.175 5.25001 10.8392 5.25001 10.425L5.25 10.3838C5.24996 9.98428 5.24992 9.61779 5.28733 9.31782C5.32833 8.98915 5.4242 8.63878 5.69187 8.33756C5.73753 8.28618 5.78618 8.23753 5.83756 8.19187C6.13878 7.9242 6.48915 7.82833 6.81782 7.78733Z" fill="#fafafa"></path> </g></svg>
                </div>
                <h2 class="text-xl font-semibold mb-2">String Manipulation</h2>
                <p class="text-gray-400">Text processing</p>
            </a>

            <a href="bank.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg fill="#ffffff" viewBox="0 0 60 60" id="Capa_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M48,14c-1.276,0-2.469,0.349-3.5,0.947C43.469,14.349,42.276,14,41,14c-3.859,0-7,3.14-7,7s3.141,7,7,7 c1.276,0,2.469-0.349,3.5-0.947C45.531,27.651,46.724,28,48,28c3.859,0,7-3.14,7-7S51.859,14,48,14z M46,21 c0,1.394-0.576,2.654-1.5,3.562C43.576,23.654,43,22.394,43,21s0.576-2.654,1.5-3.562C45.424,18.346,46,19.606,46,21z M36,21 c0-2.757,2.243-5,5-5c0.631,0,1.23,0.13,1.787,0.345C41.68,17.583,41,19.212,41,21s0.68,3.417,1.787,4.655 C42.23,25.87,41.631,26,41,26C38.243,26,36,23.757,36,21z M48,26c-0.631,0-1.23-0.13-1.787-0.345C47.32,24.417,48,22.788,48,21 s-0.68-3.417-1.787-4.655C46.77,16.13,47.369,16,48,16c2.757,0,5,2.243,5,5S50.757,26,48,26z"></path> <path d="M55.783,8H4.217C1.892,8,0,9.892,0,12.217v35.566C0,50.108,1.892,52,4.217,52h51.566C58.108,52,60,50.108,60,47.783V12.217 C60,9.892,58.108,8,55.783,8z M58,47.783C58,49.005,57.006,50,55.783,50H4.217C2.994,50,2,49.005,2,47.783V12.217 C2,10.995,2.994,10,4.217,10h51.566C57.006,10,58,10.995,58,12.217V47.783z"></path> <path d="M6,18h9c0.553,0,1-0.448,1-1s-0.447-1-1-1H6c-0.553,0-1,0.448-1,1S5.447,18,6,18z"></path> <path d="M28,16h-9c-0.553,0-1,0.448-1,1s0.447,1,1,1h9c0.553,0,1-0.448,1-1S28.553,16,28,16z"></path> <path d="M6,23h1c0.553,0,1-0.448,1-1s-0.447-1-1-1H6c-0.553,0-1,0.448-1,1S5.447,23,6,23z"></path> <path d="M11,21c-0.553,0-1,0.448-1,1s0.447,1,1,1h2c0.553,0,1-0.448,1-1s-0.447-1-1-1H11z"></path> <path d="M19,22c0-0.552-0.447-1-1-1h-1c-0.553,0-1,0.448-1,1s0.447,1,1,1h1C18.553,23,19,22.552,19,22z"></path> <path d="M24,23c0.553,0,1-0.448,1-1s-0.447-1-1-1h-2c-0.553,0-1,0.448-1,1s0.447,1,1,1H24z"></path> <path d="M27.3,21.29C27.109,21.48,27,21.73,27,22s0.109,0.52,0.29,0.71C27.479,22.89,27.74,23,28,23s0.52-0.11,0.71-0.29 C28.89,22.52,29,22.26,29,22c0-0.26-0.11-0.52-0.29-0.7C28.34,20.92,27.66,20.92,27.3,21.29z"></path> <path d="M5,45h11v-8H5V45z M7,39h7v4H7V39z"></path> <path d="M18,45h11v-8H18V45z M20,39h7v4h-7V39z"></path> <path d="M31,45h11v-8H31V45z M33,39h7v4h-7V39z"></path> <path d="M44,45h11v-8H44V45z M46,39h7v4h-7V39z"></path> </g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </g></svg>
                </div>
                <h2 class="text-xl font-semibold mb-2">Bank Account</h2>
                <p class="text-gray-400">Balance simulation</p>
            </a>

            <a href="grade.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg viewBox="0 0 76 76" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" enable-background="new 0 0 76.00 76.00" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#ffffff" fill-opacity="1" stroke-width="0.2" stroke-linejoin="round" d="M 47.4578,53.8333L 39.4751,53.8333L 37.3851,47.3311L 25.4184,47.3311L 23.3502,53.8333L 15.4111,53.8333L 27.2327,21.3222L 35.9047,21.3222L 47.4578,53.8333 Z M 35.433,40.8289L 32.0223,30.0523C 31.7562,29.2347 31.5723,28.2599 31.4707,27.1278L 31.2893,27.1278C 31.2312,28.0809 31.0401,29.0243 30.716,29.958L 27.2399,40.8289L 35.433,40.8289 Z M 46.3125,34.8333L 52.25,34.8333L 52.25,28.8958L 58.5833,28.8958L 58.5833,34.8333L 64.5208,34.8333L 64.5208,41.1667L 58.5833,41.1667L 58.5833,47.1042L 52.25,47.1042L 52.25,41.1667L 46.3125,41.1667L 46.3125,34.8333 Z "></path> </g></svg>
                </div>
                <h2 class="text-xl font-semibold mb-2">Grading System</h2>
                <p class="text-gray-400">Score evaluation</p>
            </a>

            <a href="currency.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M384 384m-320 0a320 320 0 1 0 640 0 320 320 0 1 0-640 0Z" fill="#ffffff"></path><path d="M433.066667 341.333333v36.266667h-81.066667v29.866667h81.066667v36.266666h-81.066667c0 12.8 2.133333 25.6 6.4 34.133334 4.266667 8.533333 8.533333 17.066667 14.933333 21.333333 6.4 6.4 14.933333 8.533333 23.466667 12.8 8.533333 2.133333 19.2 4.266667 29.866667 4.266667 8.533333 0 14.933333 0 23.466666-2.133334 8.533333-2.133333 14.933333-2.133333 21.333334-6.4l8.533333 57.6c-8.533333 2.133333-19.2 4.266667-29.866667 4.266667-10.666667 2.133333-21.333333 2.133333-32 2.133333-19.2 0-38.4-2.133333-55.466666-8.533333-17.066667-4.266667-32-12.8-42.666667-23.466667-12.8-10.666667-21.333333-23.466667-29.866667-40.533333-6.4-14.933333-10.666667-34.133333-10.666666-55.466667h-40.533334v-36.266666h40.533334v-29.866667h-40.533334V341.333333h40.533334c2.133333-21.333333 6.4-38.4 12.8-55.466666 8.533333-14.933333 17.066667-29.866667 29.866666-40.533334 12.8-10.666667 27.733333-19.2 44.8-23.466666 17.066667-6.4 36.266667-8.533333 55.466667-8.533334 8.533333 0 19.2 0 27.733333 2.133334s19.2 2.133333 27.733334 6.4l-8.533334 57.6c-6.4-2.133333-12.8-4.266667-21.333333-6.4-8.533333-2.133333-14.933333-2.133333-23.466667-2.133334-10.666667 0-21.333333 2.133333-29.866666 4.266667-8.533333 2.133333-17.066667 6.4-21.333334 12.8-6.4 6.4-10.666667 12.8-14.933333 21.333333s-6.4 19.2-6.4 32h81.066667z" fill="#aaaaa7"></path><path d="M640 640m-320 0a320 320 0 1 0 640 0 320 320 0 1 0-640 0Z" fill="#ebefeb"></path><path d="M605.866667 576c2.133333 4.266667 4.266667 8.533333 8.533333 12.8 4.266667 4.266667 8.533333 8.533333 14.933333 10.666667 6.4 4.266667 14.933333 6.4 23.466667 10.666666 14.933333 6.4 29.866667 12.8 42.666667 19.2 12.8 6.4 23.466667 14.933333 32 23.466667 8.533333 8.533333 17.066667 19.2 21.333333 29.866667 4.266667 10.666667 8.533333 25.6 8.533333 40.533333s-2.133333 27.733333-6.4 38.4c-4.266667 10.666667-10.666667 21.333333-19.2 29.866667s-19.2 14.933333-29.866666 19.2c-12.8 4.266667-25.6 8.533333-38.4 10.666666v46.933334h-38.4v-46.933334c-12.8-2.133333-25.6-4.266667-38.4-8.533333s-23.466667-10.666667-32-21.333333c-10.666667-8.533333-17.066667-21.333333-23.466667-34.133334-6.4-12.8-8.533333-29.866667-8.533333-49.066666h70.4c0 10.666667 2.133333 21.333333 4.266666 27.733333 2.133333 8.533333 6.4 12.8 12.8 19.2 4.266667 4.266667 10.666667 8.533333 17.066667 10.666667 6.4 2.133333 12.8 2.133333 19.2 2.133333 8.533333 0 14.933333 0 19.2-2.133333 6.4-2.133333 10.666667-4.266667 14.933333-8.533334 4.266667-4.266667 6.4-8.533333 8.533334-12.8 2.133333-4.266667 2.133333-10.666667 2.133333-17.066666 0-6.4 0-12.8-2.133333-17.066667-2.133333-4.266667-4.266667-10.666667-8.533334-14.933333s-8.533333-8.533333-14.933333-10.666667c-6.4-4.266667-14.933333-6.4-23.466667-10.666667-14.933333-6.4-29.866667-12.8-42.666666-19.2-12.8-6.4-23.466667-14.933333-32-23.466666-8.533333-8.533333-17.066667-19.2-21.333334-29.866667-4.266667-10.666667-8.533333-25.6-8.533333-40.533333 0-12.8 2.133333-25.6 6.4-36.266667 4.266667-10.666667 10.666667-21.333333 19.2-29.866667 8.533333-8.533333 19.2-14.933333 29.866667-21.333333 10.666667-4.266667 25.6-8.533333 38.4-10.666667v-51.2h38.4v51.2c12.8 2.133333 25.6 6.4 38.4 12.8 10.666667 6.4 21.333333 12.8 27.733333 23.466667 8.533333 8.533333 14.933333 21.333333 19.2 34.133333 4.266667 12.8 6.4 27.733333 6.4 42.666667h-70.4c0-19.2-4.266667-34.133333-12.8-42.666667-8.533333-8.533333-19.2-14.933333-32-14.933333-6.4 0-12.8 2.133333-19.2 4.266667-4.266667 2.133333-8.533333 4.266667-12.8 8.533333-4.266667 4.266667-6.4 8.533333-6.4 12.8-2.133333 4.266667-2.133333 10.666667-2.133333 17.066667-2.133333 4.266667 0 10.666667 0 14.933333z" fill="#FFFFFF"></path></g></svg>
                </div>
                <h2 class="text-xl font-semibold mb-2">Currency Converter</h2>
                <p class="text-gray-400">PHP to other currencies</p>
            </a>

            <a href="travel.php" class="bg-gray-800 hover:bg-gray-700 transition p-6 rounded-lg shadow-md">
                <div class="relative w-8 h-8 overflow-hidden">
                    <svg fill="#ffffff" viewBox="0 0 512 512" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="travel-heart-suitcase-love-valentine"> <path d="M405.92,168c-8.576,0-14.691,0-21.92,0v-16c0-13.234-10.766-24-24-24v-24c0-17.673-14.327-32-32-32H184 c-17.673,0-32,14.327-32,32v24c-13.234,0-24,10.766-24,24v16c-7.229,0-13.344,0-21.92,0C87.28,168,72,183.28,72,202.08v203.84 c0,18.8,15.28,34.08,34.08,34.08c78.796,0-83.345,0,299.84,0c18.8,0,34.08-15.28,34.08-34.08V202.08 C440,183.28,424.72,168,405.92,168z M384,204h-24v-20h24V204z M360,276h24v140h-24V276z M352,260c-4.4,0-8-3.6-8-8v-24 c0-4.4,3.6-8,8-8c8.637,0,31.262,0,40,0c4.4,0,8,3.6,8,8v24c0,4.4-3.6,8-8,8C383.363,260,360.738,260,352,260z M184,112 c0-4.418,3.582-8,8-8h128c4.418,0,8,3.582,8,8v16c-13.234,0-24,10.766-24,24v16h-96v-16c0-13.234-10.766-24-24-24V112z M128,276h24 v148h-24V276z M120,260c-4.4,0-8-3.6-8-8v-24c0-4.4,3.6-8,8-8c8.637,0,31.262,0,40,0c4.4,0,8,3.6,8,8v24c0,4.4-3.6,8-8,8 C151.258,260,128.631,260,120,260z M152,204h-24v-20h24V204z M144,168v-16c0-4.484,3.516-8,8-8h32c4.41,0,8,3.586,8,8v16 C125.647,168,172.733,168,144,168z M301.76,313.6l-32.48,32.88c-7.36,7.44-19.2,7.44-26.56,0l-32.48-32.88 c-11.84-11.92-13.92-31.2-3.6-44.56c12.4-16.16,35.52-17.28,49.36-3.28c13.84-14,36.96-12.88,49.36,3.28 C315.68,282.4,313.6,301.68,301.76,313.6z M320,152c0-4.484,3.516-8,8-8h32c4.41,0,8,3.586,8,8v16c-28.711,0,18.314,0-48,0V152z"></path> </g> <g id="Layer_1"></g> </g></svg>
                </div>
                <h2 class="text-xl font-semibold mb-2">Travel Cost</h2>
                <p class="text-gray-400">Fuel cost estimation</p>
            </a>
        </div>
    </div>
        <model-viewer class="floating-3d"
        src="./assets/my_computer/scene.gltf"
        alt="3D Object"
        auto-rotate
        rotation-per-second="40deg"
        shadow-intensity="1"
        disable-zoom>
    </model-viewer>
</body>
</html>
