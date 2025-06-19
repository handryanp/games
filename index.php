<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portal Games</title>
    <link rel="icon" type="image/png" href="./logo.png" sizes="64x64"/>
    <link rel="apple-touch-icon" href="./logo.png" sizes="180x180"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f2f6;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }

        h1 {
            color: #2c3e50;
        }

        .link-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .link-card {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s ease;
            width: 200px;
        }

        .link-card:hover {
            transform: translateY(-5px);
        }

        .link-card a {
            text-decoration: none;
            color: #0984e3;
            font-weight: bold;
            font-size: 16px;
        }

        .link-card a:hover {
            color: #0652DD;
        }
    </style>
</head>
<body>
    <h1>Games Tersedia</h1>
    <div class="link-container">
        <div class="link-card">
            <a href="./stress_ball/" target="_blank">Stress Ball</a>
        </div>
        <div class="link-card">
            <a href="./solar_system/" target="_blank">3D Solar System</a>
        </div>
        <div class="link-card">
            <a href="./tower_blocks/" target="_blank">Tower Blocks</a>
        </div>
        <div class="link-card">
            <a href="./particle_sphere/" target="_blank">Particle Sphere and Orbits</a>
        </div>
        <div class="link-card">
            <a href="./three/" target="_blank">Interactive Three Particle Morph</a>
        </div>
        <div class="link-card">
            <a href="./04-Breakout-Game/" target="_blank">Breakout</a>
        </div>
        <div class="link-card">
            <a href="./02-Archery-Game/" target="_blank">Archery</a>
        </div>
        <div class="link-card">
            <a href="./05-Minesweeper-Game/" target="_blank">Minesweeper</a>
        </div>
        <div class="link-card">
            <a href="./07-Ping-Pong-Game/" target="_blank">Ping-Pong</a>
        </div>
        <div class="link-card">
            <a href="./09-Tilting-Maze-Game/" target="_blank">Tilting Maze</a>
        </div>
        <div class="link-card">
            <a href="./10-Memory-Card-Game/" target="_blank">Memory Card</a>
        </div>
        <div class="link-card">
            <a href="./13-Tic-Tac-Toe/" target="_blank">Tic Tac Toe</a>
        </div>
        <div class="link-card">
            <a href="./14-Snake-Game/" target="_blank">Snake Games</a>
        </div>
        <div class="link-card">
            <a href="./17-Typing-Game/" target="_blank">Speed Typing</a>
        </div>
        <div class="link-card">
            <a href="./18-Hangman-Game/" target="_blank">Hangman</a>
        </div>
        <div class="link-card">
            <a href="./20-Crossy-Road-Game/" target="_blank">Crossy Road</a>
        </div>
    </div>
</body>
</html>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.9.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.9.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDs-L6e83I7S3hTNmmgiZDCEFVxTG4_52M",
    authDomain: "purbafams-e8bb5.firebaseapp.com",
    databaseURL: "https://purbafams-e8bb5-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "purbafams-e8bb5",
    storageBucket: "purbafams-e8bb5.firebasestorage.app",
    messagingSenderId: "398524681008",
    appId: "1:398524681008:web:ca169e6ad3a5b26d94d6f5",
    measurementId: "G-E15GPB0Q0C"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>