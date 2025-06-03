<head>
    <meta charset="UTF-8">
    <title>Desain Grafis</title>
    <link rel="website icon" type="png" href="album/ftk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body {
        background: #102131;
        color: #fff;
        font-family: sans-serif;
        overflow: hidden;
    }

    #container {
        position: absolute;
        width: 200px;
        height: 200px;
        margin: auto;
        transform: rotate(45deg);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    #loadingText {
        position: absolute;
        width: 100%;
        text-align: center;
        top: 75%;
        font-size: 20px;
        font-weight: bold;
    }
</style>

<canvas id="container" width="200" height="200"></canvas>
<div id="loadingText">Loading... 0%</div>

<script>
    var points = [],
        velocity2 = 5,
        canvas = document.getElementById('container'),
        context = canvas.getContext('2d'),
        radius = 5,
        boundaryX = 200,
        boundaryY = 200,
        numberOfPoints = 30,
        loadingProgress = 0,
        loadingText = document.getElementById('loadingText');

    init();

    function init() {
        for (var i = 0; i < numberOfPoints; i++) {
            createPoint();
        }

        for (var i = 0, l = points.length; i < l; i++) {
            points[i].buddy = i == 0 ? points[points.length - 1] : points[i - 1];
        }

        animate();
        updateLoading(); // Start loading progress
    }

    function createPoint() {
        var point = {}, vx2, vy2;
        point.x = Math.random() * boundaryX;
        point.y = Math.random() * boundaryY;
        point.vx = (Math.floor(Math.random()) * 2 - 1) * Math.random();
        vx2 = Math.pow(point.vx, 2);
        vy2 = velocity2 - vx2;
        point.vy = Math.sqrt(vy2) * (Math.random() * 2 - 1);
        points.push(point);
    }

    function resetVelocity(point, axis, dir) {
        var vx2, vy2;
        if (axis == 'x') {
            point.vx = dir * Math.random();
            vx2 = Math.pow(point.vx, 2);
            vy2 = velocity2 - vx2;
            point.vy = Math.sqrt(vy2) * (Math.random() * 2 - 1);
        } else {
            point.vy = dir * Math.random();
            vy2 = Math.pow(point.vy, 2);
            vx2 = velocity2 - vy2;
            point.vx = Math.sqrt(vx2) * (Math.random() * 2 - 1);
        }
    }

    function drawCircle(x, y) {
        context.beginPath();
        context.arc(x, y, radius, 0, 2 * Math.PI, false);
        context.fillStyle = '#97badc';
        context.fill();
    }

    function drawLine(x1, y1, x2, y2) {
        context.beginPath();
        context.moveTo(x1, y1);
        context.lineTo(x2, y2);
        context.strokeStyle = '#8ab2d8';
        context.stroke();
    }

    function draw() {
        for (var i = 0, l = points.length; i < l; i++) {
            var point = points[i];
            point.x += point.vx;
            point.y += point.vy;
            drawCircle(point.x, point.y);
            drawLine(point.x, point.y, point.buddy.x, point.buddy.y);

            if (point.x < radius) {
                resetVelocity(point, 'x', 1);
            } else if (point.x > boundaryX - radius) {
                resetVelocity(point, 'x', -1);
            } else if (point.y < radius) {
                resetVelocity(point, 'y', 1);
            } else if (point.y > boundaryY - radius) {
                resetVelocity(point, 'y', -1);
            }
        }
    }

    function animate() {
        context.clearRect(0, 0, 200, 200);
        draw();
        requestAnimationFrame(animate);
    }

    function updateLoading() {
        let interval = setInterval(() => {
            if (loadingProgress >= 100) {
                clearInterval(interval);
                loadingText.innerText = "Loading... 100%";
                // Redirect to home.blade.php (assumed to be handled via route in Laravel)
                window.location.href = "{{ route('home') }}";
            } else {
                loadingProgress += 1;
                loadingText.innerText = `Loading... ${loadingProgress}%`;
            }
        }, 40); // 40ms × 100 = 4 seconds total loading
    }
</script>
