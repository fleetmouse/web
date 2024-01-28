<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Awesome Courses for Kids!</title>
    <link rel="stylesheet" href="course.css">
</head>

<body>
    <section class="courses">
        <article class="course">
            <h2>Lego Master Builders </h2>
            <p>Create awesome robots using Legos and make them move with code!</p>
            <div class="enrollment-info">
                <span class="enrolled">25 Students Enrolled</span>
                <span class="remaining">5 Places Left</span>
                <form action="enroll.php" method="post">
                    <input type="hidden" name="clubName" value="Lego Master Builders"> <button
                        type="submit">Enroll</button>
                </form>
            </div>
        </article>
        <article class="course">
            <h2>Website Wizards ✨</h2>
            <p>Build your own colorful websites with fun pictures and games!</p>
            <div class="enrollment-info">
                <span class="enrolled">18 Students Enrolled</span>
                <span class="remaining">12 Places Left</span>
                <form action="enroll.php" method="post">
                    <input type="hidden" name="clubName" value="Website Wizards">
                    <button type="submit">Enroll</button>
                </form>
            </div>
        </article>
        <article class="course">
            <h2>Python Puzzle Solvers </h2>
            <p>Use Python to solve cool puzzles and create amazing stories!</p>
            <div class="enrollment-info">
                <span class="enrolled">30 Students Enrolled</span>
                <span class="remaining">0 Places Left</span>
                <form action="enroll.php" method="post">
                    <input type="hidden" name="clubName" value="Python Puzzle Solvers">
                    <button type="submit">Enroll</button>
                </form>
            </div>
        </article>
        <article class="course">
            <h2>Design Your Dream World</h2>
            <p>Learn to draw, paint, and create amazing digital art!</p>
            <div class="enrollment-info">
                <span class="enrolled">15 Students Enrolled</span>
                <span class="remaining">15 Places Left</span>
                <form action="enroll.php" method="post">
                    <input type="hidden" name="clubName" value="Design Your Dream World">
                    <button type="submit">Enroll</button>
                </form>
            </div>
        </article>
    </section>
    <script src="enroll.js"></script>
</body>

</html>