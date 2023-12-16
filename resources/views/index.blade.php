<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Platform</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/css/styles.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">StudyMate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#yt">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#location">Find Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container mt-4">
        <section class="catalog mt-5" id="home">
            <h2 class="mb-3">Our Courses</h2>
            <p>Browse through our catalog of courses for reading material</p>
            <a class="btn btn-primary" href="{{url('/courses')}}">View All Courses</a>
        </section>

        <section class="faq mt-5" id="faq">
            <h2 class="mb-3">FAQ</h2>
            <p>Have questions? Check out our frequently asked questions for answers.</p>
            <a class="btn btn-primary" href="{{url('/faq')}}">FAQ</a>
        </section>

        <section class="team mt-5" id="team">
            <h2 class="mb-3">Our Team</h2>
            <p>Meet the dedicated individuals behind the Education Platform.</p>
            <a class="btn btn-primary" href="{{url('/team')}}">Meet the Team</a>
        </section>

        <section class="team mt-5" id="about">
            <h2 class="mb-3">About Us</h2>
            <p>A page explaining who we are and our mission.</p>
            <a class="btn btn-primary" href="{{url('/about')}}">About Us</a>
        </section>
    </main>

    <div class="container" id="yt">
        <div class="row">
            <div class="col-md-8">
                <div class="video-009p">
                    <figure>
                        <iframe width="754" height="480" src="https://www.youtube.com/embed/6dQXtSfN54k" frameborder="0"
                            allowfullscreen></iframe>
                    </figure>

                </div>

            </div>

            <div class="col-md-4">
                <div class="video-info08">
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"> <img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>

                        </div>
                        <div class="thum002-details">
                            <a href="https://www.youtube.com/embed/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"><img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>
                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"><img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>


                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"> <img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>


                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"> <img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>


                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"> <img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>
                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"> <img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>
                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"> <img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>
                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k">Video xyz</a>

                        </div>
                    </div>
                    <br>
                    <div class="combo007">
                        <div class="thumnil001">
                            <a href="#"> <img src="{{url('frontend/images/youtube.png')}}" alt="image"></a>
                        </div>
                        <div class="thum002-details">
                            <a href="https://youtu.be/6dQXtSfN54k" target="_blank">Video xyz</a>

                        </div>
                    </div>

                </div>


            </div>

        </div>


    </div>

    <!--location-->
    <section class="googlemap003" id="location">
        <div class="container">
            <div class="row">
                <div class="mapshow004">

                    <figure>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.436275002665!2d72.9904261!3d33.6424888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df9675aaaaaaab%3A0xc5180922c44eb86b!2sNational%20University%20of%20Sciences%20%26%20Technology%20%28NUST%29!5e0!3m2!1sen!2sbd!4v1505965878201"
                            width="1150" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </figure>

                </div>
            </div>
        </div>

        </div>

    </section>
    <!--contact us-->
    <section class="contact mt-5" id="contact">
        <h2 class="mb-3">Contact Us</h2>
        <p>If you have any inquiries or need assistance, feel free to reach out to us. We're here to help!</p>
        <div class="row">
            <div class="col-md-6">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <p>Address: SEECS, NUST, Islamabad</p>
                <p>Email: affanrehman1278@gmail.com</p>
                <p>Phone: +1234567890</p>
                <button class="btn btn-primary" onclick="makeCall()">Call Us</button>
            </div>
        </div>
    </section>

    <script>
        // Function to initiate the phone call
        function makeCall() {
            window.location.href = 'tel:+1234567890';
        }

        // Function to handle form submission
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault();

            var email = 'affanrehman1278@gmail.com';
            var subject = 'Inquiry from ' + document.getElementById('name').value;
            var body = 'Email: ' + document.getElementById('email').value + '\n\nMessage:\n' + document.getElementById('message').value;

            var mailtoLink = 'mailto:' + email + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);

            window.location.href = mailtoLink;
        });
    </script>

    <footer class="mt-5">
        <p class="text-center">&copy; 2023 Education Platform</p>
    </footer>

    <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // JavaScript for smooth scrolling
        $(document).ready(function () {
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();

                var targetId = $(this).attr('href');

                $('html, body').animate({
                    scrollTop: $(targetId).offset().top
                }, 1000);
            });
        });
    </script>
</body>

</html>