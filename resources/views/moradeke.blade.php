<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moradeke My Rodo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }

        @keyframes fadeInOut {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }

        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }

        .animated-image {
            animation: bounce 2s infinite, fadeInOut 4s infinite;
        }

        #play-button {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 1rem 2rem;
            background-color: #4CAF50;
            color: white;
            font-size: 1.5rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-blue-100 via-purple-100 to-pink-100 flex items-center justify-center min-h-screen">
    <div class="bg-gradient-to-r from-blue-100 rounded-xl shadow-xl p-8 max-w-4xl mx-auto flex items-center fade-in">
        <div class="w-1/2">
            <img src="moradeke.jpg" alt="Person" class="rounded-xl shadow-md transform transition duration-500 hover:scale-105 animated-image">
        </div>
        <div class="w-1/2 pl-8">
            <h1 class="text-2xl font-bold mb-4 text-gray-800">Wishing you all the success on your first day at the bank, darling!</h1>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Remember, this is just the beginning of many amazing achievements. Believe in yourself as much as I believe in you.
            </p>
            <p class="text-right font-semibold text-gray-800"> - Marcus</p>
        </div>
    </div>
    <audio id="background-audio" loop hidden>
        <source src="rodo.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <button id="play-button">Play Music</button>

    <script>
        window.addEventListener('load', function() {
            const audio = document.getElementById('background-audio');
            const playButton = document.getElementById('play-button');

            playButton.style.display = 'block';

            playButton.addEventListener('click', function() {
                audio.play().then(() => {
                    playButton.style.display = 'none';
                }).catch(error => {
                    console.log('Autoplay was prevented:', error);
                });
            });
        });
    </script>
</body>

</html>