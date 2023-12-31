<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyMate</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/about.css')}}">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('/')}}">StudyMate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/courses')}}">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/blogs')}}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/team')}}">Team</a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <main>
        <header>
            <h1>About us</h1>
        </header>

        <section id="aboutcoachingcenter002">
            <div class="container">
                <div class="row m-3">
                    <div class="col-md-12">
                        <div class="details469">
                            <div class="row" style="display: flex; justify-content: space-evenly; align-items: center;">
                                <figure style="margin-right: 20px; text-align: center;" class="image-container">
                                    <a href="https://www.linkedin.com/in/affan-rehman-22b262219/" style="text-decoration: none;" target="_blank">
                                        <img src="{{url('frontend/images/affan.jpeg')}}" alt="affan photo" style="width: 200px; height: 200px; border-radius: 10px;">
                                    </a>
                                </figure>
                                <figure style="text-align: center;" class="image-container">
                                    <a href="https://www.linkedin.com/in/hasan-fakhar-26581822a/" style="text-decoration: none;" target="_blank">
                                        <img src="{{url('frontend/images/hasan.jpeg')}}" alt="hasan photo" style="width: 200px; height: 200px; border-radius: 10px;">
                                    </a>
                                </figure>
                            </div>
                            <div class="row" style="display: flex; justify-content: space-evenly; align-items: center;">
                                <p style="text-align: center; font-weight: bold; margin-top: 10px;">Affan Rehman</p>
                                <p style="text-align: center; font-weight: bold; margin-top: 10px;">Hasan Fakhar</p>
                            </div>
                        </div>


                        <div class="deatils456-info">
                            <h3>Empowering Minds Through Exceptional Learning Opportunities</h3>
                            <p>Two passionate and dedicated students from the prestigious National University of
                                Sciences & Technology (NUST) have joined forces to create this comprehensive
                                website. Our primary goal is to empower and support individuals in their academic
                                endeavors. This platform is crafted to serve as a collaborative hub, making learning
                                more accessible, engaging, and beneficial for everyone. Join us on this educational
                                odyssey, where we strive to enhance study experiences and conquer academic
                                challenges collectively.</p>

                        </div>
                        <div class="deatils456-info">
                            <h3>Elevating Your Child's Learning Experience for Success</h3>
                            <p>
                                Our initiative, StudyMate, thrives on a unique educational philosophy crafted to
                                elevate learning experiences for students. We pride ourselves on fostering an
                                environment that encourages innovative teaching methods, fostering creativity, and
                                nurturing individual growth. Our distinguished faculty, comprising seasoned
                                professionals, is dedicated to imparting knowledge and instilling a passion for
                                learning. With state-of-the-art facilities and optimized class sizes, we prioritize
                                personalized attention, ensuring each student's needs are met effectively. Our
                                commitment extends beyond academic excellence; we provide comprehensive support,
                                including guidance for holistic development and career readiness. We are devoted to
                                empowering students to excel, and our success lies in their accomplishments and
                                unwavering satisfaction. As we stride ahead, our vision is to expand horizons,
                                continuously evolve, and consistently deliver top-notch education for our students.
                            </p>

                        </div>
                        <div class="deatils456-info">
                            <h3>Fostering Empowerment via Quality Education</h3>
                            <p>StudyMate Corporation stands tall as a multifaceted conglomerate, channeling
                                innovation and
                                expertise across various sectors. Known for its dynamic presence in technology,
                                finance, and sustainable solutions, StudyMate envisions transforming global
                                landscapes by
                                integrating cutting-edge technology with ethical business practices. Within the
                                education sphere, StudyMate has pioneered diverse projects, including an online
                                collaborative learning platform, mentorship programs for young entrepreneurs, and
                                community-based educational initiatives. This progressive entity drives its mission
                                of advancing societal well-being through innovative educational solutions and
                                sustainable development strategies.</p>

                        </div>
                    </div>
                </div>


            </div>
            </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>



</body>

</html>