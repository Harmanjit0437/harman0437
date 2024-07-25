<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Indian Restaurants</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="styles.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll('.tab');
            const contents = document.querySelectorAll('.content');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));

                    tab.classList.add('active');
                    contents[index].classList.add('active');
                });
            });

            const orderButtons = document.querySelectorAll('.order-button');

            orderButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    const li = e.target.closest('li');
                    const timeSpan = li.querySelector('.timer');
                    const time = parseInt(e.target.dataset.time);
                    startTimer(time, timeSpan);
                });
            });

            function startTimer(duration, display) {
                let timer = duration, minutes, seconds;
                const interval = setInterval(() => {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = `Time remaining: ${minutes}:${seconds}`;

                    if (--timer < 0) {
                        clearInterval(interval);
                        display.textContent = "Order ready!";
                    }
                }, 1000);
            }
        });
    </script>
</head>
<body>
    <header>
        <h1>Discover Indian Restaurants</h1>
        <p>Embark on your culinary adventure now and discover the best Indian restaurants near you, indulging in new flavors, authentic reviews, and memorable dining experiences.</p>
        <div class="nav">
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>
    </header>

    <div class="tabs">
        <a href="traditional.html" class="tab">Traditional</a>
        <a href="contemporary.html" class="tab">Contemporary</a>
        <a href="vegetarian.html" class="tab">Vegetarian</a>
        <a href="non-vegetarian.html" class="tab">Non-Vegetarian</a>
    </div>

    <div class="review-section">
        <h2>Our Reviews</h2>
        <div class="reviews">
            <div class="review">
                <p><strong>John Doe:</strong> Great food, loved the atmosphere!</p>
            </div>
            <div class="review">
                <p><strong>Jane Smith:</strong> The samosas are to die for!</p>
            </div>
        </div>
    </div>
</body>
</html>
