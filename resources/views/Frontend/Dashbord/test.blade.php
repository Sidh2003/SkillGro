<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Test | SkillGro</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">

    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        body {
            background: #f8f9fa;
            font-family: 'Inter', sans-serif;
            counter-reset: q;
            padding-top: 90px;
            /* to make room for sticky progress */
        }

        .test-container {
            background: #fff;
            border-radius: 20px;
            padding: 40px 25px;
            max-width: 900px;
            margin: 20px auto 60px auto;
            box-shadow: 0px 12px 35px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .test-container {
                padding: 25px 15px;
                margin: 20px 10px;
            }

            video {
                width: 100%;
                height: auto;
            }
        }

        /* TITLE */
        .title {
            font-size: 34px;
            font-weight: 800;
            color: #1E1E2D;
            text-align: center;
            position: relative;
            padding-bottom: 10px;
        }

        .title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #4B3CFB, #9B5DE5);
            margin: 8px auto 0;
            border-radius: 2px;
        }

        /* TIMER */
        .timer-badge {
            background: #4B3CFB;
            color: #fff;
            padding: 10px 25px;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 600;
            display: inline-block;
            transition: transform 0.3s;
        }

        .timer-badge.urgent {
            animation: pulse 1s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        /* CAMERA */
        #cameraFeed {
            border-radius: 15px;
            border: 2px solid #4B3CFB;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
        }

        .camera-status {
            width: 12px;
            height: 12px;
            background: red;
            border-radius: 50%;
            display: inline-block;
            margin-left: 8px;
        }

        /* WARNING BOX */
        #warningBox {
            display: none;
            background: #ffe1e1;
            border-left: 5px solid red;
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: 600;
            color: #b30000;
            margin-top: 15px;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.5s ease;
        }

        #warningBox.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* QUESTIONS */
        .question-block {
            background: #f9f9ff;
            border: 1px solid #ececff;
            padding: 22px 25px;
            margin-bottom: 18px;
            border-radius: 12px;
            transition: transform 0.2s, box-shadow 0.3s;
            position: relative;
        }

        .question-block:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        .question-block label strong::before {
            content: counter(q) ". ";
            counter-increment: q;
            font-weight: bold;
            color: #4B3CFB;
            margin-right: 6px;
        }

        /* BUTTON */
        .btn-submit {
            background: linear-gradient(90deg, #4B3CFB, #9B5DE5);
            color: #fff;
            padding: 14px 32px;
            border-radius: 50px;
            border: none;
            font-size: 18px;
            font-weight: 700;
            transition: transform 0.2s, box-shadow 0.3s;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* PROGRESS BAR */
        .progress-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            padding: 10px 15px;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .progress-bar {
            background: #e0e0e0;
            width: 70%;
            height: 20px;
            border-radius: 10px;
            overflow: hidden;
            margin-right: 10px;
        }

        .progress-bar-inner {
            background: linear-gradient(90deg, #4B3CFB, #9B5DE5);
            width: 0%;
            height: 100%;
            border-radius: 10px;
            transition: width 0.3s;
        }

        .progress-text {
            font-weight: 600;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- PROGRESS BAR -->
    <div class="progress-container">
        <div class="progress-bar">
            <div class="progress-bar-inner" id="progressInner"></div>
        </div>
        <div class="progress-text" id="progressText">0/10 Answered</div>
        <div class="timer-badge" id="timerBox">Time Left: 30:00</div>
    </div>

    <div class="test-container">

        <h2 class="title mb-3">Weekly Skill Test</h2>

        <!-- Camera -->
        <p class="mt-4 mb-1 fw-bold">
            AI Camera Monitoring Enabled
            <span class="camera-status" id="cameraStatus"></span>
        </p>
        <video id="cameraFeed" autoplay playsinline muted width="360" height="260"></video>
        <div id="warningBox"></div>

        <hr class="my-4">

        <!-- TEST FORM -->
        <form id="testForm">

            <!-- 10 SOFTWARE DEV QUESTIONS -->
            <div class="question-block">
                <label><strong>What does HTML stand for?</strong></label><br>
                <input type="radio" name="q1" value="A"> Hyper Text Markup Language<br>
                <input type="radio" name="q1" value="B"> High Tech Machine Language<br>
                <input type="radio" name="q1" value="C"> Hyperlink Text Main Logic<br>
            </div>

            <div class="question-block">
                <label><strong>Which HTTP method is typically used to submit form data?</strong></label><br>
                <input type="radio" name="q2" value="A"> GET<br>
                <input type="radio" name="q2" value="B"> POST<br>
                <input type="radio" name="q2" value="C"> PUT<br>
            </div>

            <div class="question-block">
                <label><strong>Laravel is written in which language?</strong></label><br>
                <input type="radio" name="q3" value="A"> Java<br>
                <input type="radio" name="q3" value="B"> Python<br>
                <input type="radio" name="q3" value="C"> PHP<br>
            </div>

            <div class="question-block">
                <label><strong>Which tag is used to link an external CSS file?</strong></label><br>
                <input type="radio" name="q4" value="A"> &lt;style&gt;<br>
                <input type="radio" name="q4" value="B"> &lt;link&gt;<br>
                <input type="radio" name="q4" value="C"> &lt;css&gt;<br>
            </div>

            <div class="question-block">
                <label><strong>What is the purpose of Git?</strong></label><br>
                <input type="radio" name="q5" value="A"> Version control<br>
                <input type="radio" name="q5" value="B"> Image editing<br>
                <input type="radio" name="q5" value="C"> Hosting websites<br>
            </div>

            <div class="question-block">
                <label><strong>MySQL is an example of?</strong></label><br>
                <input type="radio" name="q6" value="A"> NoSQL Database<br>
                <input type="radio" name="q6" value="B"> Relational Database<br>
                <input type="radio" name="q6" value="C"> File System<br>
            </div>

            <div class="question-block">
                <label><strong>Which JavaScript function prints content in console?</strong></label><br>
                <input type="radio" name="q7" value="A"> print()<br>
                <input type="radio" name="q7" value="B"> log()<br>
                <input type="radio" name="q7" value="C"> console.log()<br>
            </div>

            <div class="question-block">
                <label><strong>CSS stands for?</strong></label><br>
                <input type="radio" name="q8" value="A"> Cascading Style Sheets<br>
                <input type="radio" name="q8" value="B"> Creative Style System<br>
                <input type="radio" name="q8" value="C"> Custom Sheet Styles<br>
            </div>

            <div class="question-block">
                <label><strong>Which of these is a JavaScript framework?</strong></label><br>
                <input type="radio" name="q9" value="A"> React<br>
                <input type="radio" name="q9" value="B"> Laravel<br>
                <input type="radio" name="q9" value="C"> Django<br>
            </div>

            <div class="question-block">
                <label><strong>What does API stand for?</strong></label><br>
                <input type="radio" name="q10" value="A"> Application Programming Interface<br>
                <input type="radio" name="q10" value="B"> Advanced Program Instruction<br>
                <input type="radio" name="q10" value="C"> Applied Programming Integration<br>
            </div>

            <button type="submit" class="btn-submit mt-3">Submit Test</button>
        </form>

    </div>

    <script>
        /* TIMER */
        let timeLeft = 30 * 60;
        const timerBox = document.getElementById('timerBox');

        function startTimer() {
            setInterval(() => {
                let min = Math.floor(timeLeft / 60);
                let sec = timeLeft % 60;

                timerBox.textContent = `Time Left: ${min}:${sec < 10 ? '0' + sec : sec}`;

                if (timeLeft <= 300) timerBox.classList.add("urgent"); // last 5 min pulse
                if (timeLeft <= 0) autoSubmitTest("Your time is over!");
                timeLeft--;
            }, 1000);
        }

        /* CAMERA + MOVEMENT DETECTION */
        let warnings = 0;
        let lastFrame = null;
        let cooldown = false;

        async function startCamera() {
            try {
                const video = document.getElementById("cameraFeed");
                const stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                video.srcObject = stream;

                document.getElementById("cameraStatus").style.background = "green";

                video.onloadedmetadata = () => monitorMovement(video);

            } catch (err) {
                document.getElementById("cameraStatus").style.background = "red";
                swal("Camera Error", "Please allow camera access!", "error");
            }
        }

        function monitorMovement(video) {
            const canvas = document.createElement("canvas");
            const ctx = canvas.getContext("2d");

            setInterval(() => {
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                ctx.drawImage(video, 0, 0);

                let current = ctx.getImageData(0, 0, canvas.width, canvas.height);

                if (lastFrame) {
                    let movePixels = 0;
                    for (let i = 0; i < current.data.length; i += 4) {
                        const diff =
                            Math.abs(current.data[i] - lastFrame.data[i]) +
                            Math.abs(current.data[i + 1] - lastFrame.data[i + 1]) +
                            Math.abs(current.data[i + 2] - lastFrame.data[i + 2]);
                        if (diff > 60) movePixels++;
                    }
                    if (movePixels > 35000) handleWarning();
                }
                lastFrame = current;
            }, 900);
        }

        function handleWarning() {
            if (cooldown) return;
            cooldown = true;
            setTimeout(() => cooldown = false, 2500);

            warnings++;

            const warnBox = document.getElementById("warningBox");
            warnBox.classList.add("show");
            warnBox.innerHTML =
                warnings < 3 ?
                `⚠ Warning ${warnings}: Please avoid unnecessary movement!` :
                "🚨 Final Warning! Auto-submitting test...";

            setTimeout(() => warnBox.classList.remove("show"), 3000);

            if (warnings >= 3) {
                setTimeout(() => autoSubmitTest("Too many movements detected."), 1500);
            }
        }

        function autoSubmitTest(message) {
            swal("Test Submitted", message, "success").then(() => {
                window.location.href = "/weekly_test";
            });
        }

        /* QUESTION PROGRESS */
        const totalQuestions = 10;
        const progressInner = document.getElementById("progressInner");
        const progressText = document.getElementById("progressText");

        function updateProgress() {
            let answered = 0;
            for (let i = 1; i <= totalQuestions; i++) {
                if (document.querySelector(`input[name=q${i}]:checked`)) answered++;
            }
            let percent = (answered / totalQuestions) * 100;
            progressInner.style.width = percent + "%";
            progressText.textContent = `${answered}/${totalQuestions} Answered`;
        }

        for (let i = 1; i <= totalQuestions; i++) {
            document.querySelectorAll(`input[name=q${i}]`).forEach(input => {
                input.addEventListener("change", updateProgress);
            });
        }

        document.getElementById("testForm").addEventListener("submit", function(e) {
            e.preventDefault();
            autoSubmitTest("Your test was submitted successfully!");
        });

        startCamera();
        startTimer();
    </script>

</body>

</html>
