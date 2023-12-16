<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyMate</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/faqstyle.css')}}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('/')}}">StudyMate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="{{url('/team')}}">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <h1>Student FAQs</h1>
    </header>
    <main>
        <div class="half">

            <div class="tab">
                <input type="checkbox" id="tab-one">
                <label for="tab-one">1. I am willing to join Studymate but I can’t come on weekdays. What should I
                    do?</label>
                <div class="tab-content">
                    <p>If you can't attend classes on weekdays, you can explore our weekend class options. Studymate
                        offers flexible schedules to accommodate your needs. You can join our weekend classes for the
                        same course and receive the same quality education.</p>
                </div>
            </div>

            <div class="tab">
                <input type="checkbox" id="tab-two">
                <label for="tab-two">2. What if I want to attend classes in other tuition centers as well along with
                    Studymate?</label>
                <div class="tab-content">
                    <p>Studymate encourages your academic growth. If you wish to attend classes at other tuition centers
                        along with Studymate, you are free to do so. We believe in empowering our students with choices
                        and opportunities for a well-rounded education.</p>
                </div>
            </div>

            <div class="tab">
                <input type="checkbox" id="tab-three">
                <label for="tab-three">3. How is Studymate better than Home Tuition?</label>
                <div class="tab-content">
                    <p>Studymate offers a structured learning environment with experienced educators and a curriculum
                        designed to help students excel. Unlike home tuition, Studymate provides a focused and
                        interactive classroom experience, personalized attention, and a chance to learn with peers,
                        fostering holistic development and academic success.</p>
                </div>
            </div>

            <div class="tab">
                <input type="checkbox" id="tab-four">
                <label for="tab-four">4. Which classes does Studymate teach and which board?</label>
                <div class="tab-content">
                    <p>Studymate offers a wide range of classes from primary to higher secondary levels. We cater to
                        various educational boards, including CBSE, ICSE, and state boards. Our comprehensive course
                        offerings cover subjects such as Mathematics, Science, English, and more.</p>
                </div>
            </div>

            <div class="tab">
                <input type="checkbox" id="tab-five">
                <label for="tab-five">5. How will Studymate help clear my doubts other than the regular classes?</label>
                <div class="tab-content">
                    <p>Studymate provides additional doubt-clearing sessions where you can ask questions and seek
                        assistance from our educators. Additionally, we offer study materials, practice tests, and
                        online resources to enhance your learning and address your doubts outside of regular classes.
                    </p>
                </div>
            </div>

            <div class="tab">
                <input type="checkbox" id="tab-six">
                <label for="tab-six">6. Will I have to get my own books to the center?</label>
                <div class="tab-content">
                    <p>Yes, you will need to bring your textbooks to the center. Studymate follows a curriculum that is
                        aligned with your school's syllabus. Having your textbooks will help you engage more effectively
                        during the classes and the doubt-clearing sessions.</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>