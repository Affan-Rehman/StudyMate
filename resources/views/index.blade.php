<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Platform</title>
    <link rel="stylesheet" href="{{url('frontend/css/styles.css')}}">
</head>

<body>
    <header>
        <h1>Welcome to StudyMate</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#team">Meet the Team</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="catalog" id="home">
            <h2>Our Subjects</h2>
            <p>Browse through our catalog of subjects for reading material</p>
            <a class="btn" href="{{url('/courses')}}">View All Subjects</a>
        </section>

        <section class="faq" id="faq">
            <h2>FAQ</h2>
            <p>Have questions? Check out our frequently asked questions for answers.</p>
            <a class="btn" href="{{url('/faq')}}">FAQ</a>
        </section>

        <section class="team" id="team">
            <h2>Our Team</h2>
            <p>Meet the dedicated individuals behind the Education Platform.</p>
            <a class="btn" href="{{url('/team')}}">Meet the Team</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Education Platform</p>
    </footer>

    <script>
        // JavaScript for smooth scrolling
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>