<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soham Thummar | AI • ML • IoT Engineer</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
</head>
<body>
<div id="mouse-glow"></div>
<script>
const glow = document.getElementById("mouse-glow");

let mouseX = 0, mouseY = 0;
let glowX = 0, glowY = 0;

window.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
});

function animateGlow(){
    glowX += (mouseX - glowX) * 0.18;
    glowY += (mouseY - glowY) * 0.18;

    glow.style.left = glowX + "px";
    glow.style.top = glowY + "px";

    requestAnimationFrame(animateGlow);
}

animateGlow();
</script>

<?php include "includes/nav.php"; ?>

<div id="main">

    <!-- HERO -->
    <section id="page">
        <div id="loop">
            <h1><b>AI</b> • ML • IOT <b><i>ENGINEER</i></b> <span>BUILDING</span> INTELLIGENT <span><i>EDGE SYSTEMS</i></span></h1>
            <h1><b>AI</b> • ML • IOT <b><i>ENGINEER</i></b> <span>BUILDING</span> INTELLIGENT <span><i>EDGE SYSTEMS</i></span></h1>
            <h1><b>AI</b> • ML • IOT <b><i>ENGINEER</i></b> <span>BUILDING</span> INTELLIGENT <span><i>EDGE SYSTEMS</i></span></h1>
        </div>

        <h3>
            Computer Engineering student focused on <b>AI, Machine Learning, and IoT</b>,
            deploying real-world ML models on <b>ESP32</b>, <b>ESP32-CAM</b>, and
            <b>Raspberry Pi</b> for intelligent edge computing.
        </h3>

        <h4><br><br>SCROLL TO EXPLORE ↓</h4>

        <canvas></canvas>
    </section>

    <!-- ABOUT -->
    <section id="page1">
        <div id="right-text">
            <h3>ABOUT ME</h3>
            <h1>
                TURNING<br>
                IDEAS INTO<br>
                INTELLIGENT SYSTEMS
            </h1>
        </div>

        <div id="left-text">
            <h1>
                AI • ML<br>
                IOT & EMBEDDED<br>
                EDGE AI
            </h1>
            <h3>
                I design, train, and deploy machine learning models
                on resource-constrained hardware — combining
                <b>software intelligence</b> with
                <b>real-world embedded systems</b>.
            </h3>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="page2">
        <div id="text1">
            <h3>TECHNICAL SKILLS</h3>
            <h1>
                PYTHON<br>
                C / C++<br>
                MICROPYTHON
            </h1>
        </div>

        <div id="text2">
            <p>
                <b>AI & ML</b><br>
                TensorFlow, Keras, OpenCV, NumPy, Pandas, Scikit-learn
                <br><br>

                <b>Embedded & IoT</b><br>
                ESP32, ESP32-CAM, Raspberry Pi, Sensors, Camera Modules
                <br><br>

                <b>Domains</b><br>
                Edge AI, Computer Vision, Automation, Smart Systems
            </p>
        </div>
    </section>

</div>

<?php include "includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
<script src="script.js"></script>

</body>
</html>
