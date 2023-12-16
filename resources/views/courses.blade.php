<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Education Platform</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/coursesstyle.css')}}">

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
                    <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/team')}}">Team</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <main>
        <header>
            <h1>Courses</h1>
        </header>

        <div class="container mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Material</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- Mathematics -->
                    <tr>
                        <td>Mathematics</td>
                        <td>
                            Mathematics is the study of numbers, quantities, and shapes. Our Mathematics subject focuses
                            on teaching various mathematical concepts, including algebra, calculus, and geometry. It's
                            designed to help students build a strong foundation in mathematics and problem-solving
                            skills.
                        </td>
                        <td>
                            <img src="{{url('frontend/images/tea1.jpg')}}" alt="John Smith">
                        </td>
                        <td>
                            <ul>
                                <li><a href="https://www.sparknotes.com/math/" target="_blank">SparkNotes</a></li>
                                <li><a href="https://www.mathlearningcenter.org/curriculum/free" target="_blank">Math
                                        Learning Center</a></li>
                                <li><a href="https://www.edutoday.in/2013/08/useful-teaching-learning-materials-tlm.html"
                                        target="_blank">EduToday</a></li>
                            </ul>
                        </td>
                    </tr>

                    <!-- Physics -->
                    <tr>
                        <td>Physics</td>
                        <td>
                            Physics is the study of matter, energy, and the fundamental forces of nature. Our Physics
                            subject provides a comprehensive understanding of various physical phenomena, from classical
                            mechanics to modern quantum physics. Students will explore the laws that govern the
                            universe.
                        </td>
                        <td>
                            <img src="{{url('frontend/images/tea2.jpg')}}" alt="James Johnson">
                        </td>
                        <td>
                            <ul>
                                <li><a href="https://www.khanacademy.org/" target="_blank">Khan Academy</a></li>
                                <li><a href="https://ocw.mit.edu/index.htm" target="_blank">MIT OpenCourseWare</a></li>
                                <li><a href="https://www.physicsclassroom.com/" target="_blank">Physics Classroom</a>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <!-- Chemistry -->
                    <tr>
                        <td>Chemistry</td>
                        <td>
                            Chemistry is the science of matter and its transformations. Our Chemistry subject covers
                            topics such as chemical reactions, the periodic table, and molecular structures. Students
                            will gain a deep understanding of chemical processes and their real-world applications.
                        </td>
                        <td>
                            <img src="{{url('frontend/images/tea3.jpg')}}" alt="David Lee">
                        </td>
                        <td>
                            <ul>
                                <li><a href="https://www.khanacademy.org/science/chemistry" target="_blank">Khan
                                        Academy</a></li>
                                <li><a href="https://ocw.mit.edu/search/?d=Chemistry&s=department_course_numbers.sort_coursenum"
                                        target="_blank">MIT OpenCourseWare</a></li>
                                <li><a href="https://www.coursera.org/courses?query=chemistry" target="_blank">Coursera
                                        - Chemistry</a></li>
                            </ul>
                        </td>
                    </tr>

                    <!-- History -->
                    <tr>
                        <td>History</td>
                        <td>
                            History is the study of the past, where students explore the events and developments that
                            have shaped the world. Our History subject covers various historical periods and important
                            figures. Students will gain insights into the cultures and societies of different eras.
                        </td>
                        <td>
                            <img src="{{url('frontend/images/tea4.jpg')}}" alt="Linda Davis">
                        </td>
                        <td>
                            <ul>
                                <li><a href="https://www.history.com/" target="_blank">History Channel</a></li>
                                <li><a href="https://www.bbc.co.uk/programmes/genres/factual/history"
                                        target="_blank">BBC History</a></li>
                                <li><a href="https://www.worldhistoryatlas.com/" target="_blank">World History Atlas</a>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <!-- Literature -->
                    <tr>
                        <td>Literature</td>
                        <td>
                            Literature explores the world of written and spoken expression. Our Literature subject
                            delves into classic and modern works of fiction, poetry, and drama. Students will analyze
                            and appreciate the power of language and storytelling.
                        </td>
                        <td>
                            <img src="{{url('frontend/images/tea5.jpg')}}" alt="Robert Wilson">
                        </td>
                        <td>
                            <ul>
                                <li><a href="https://www.poetryfoundation.org/" target="_blank">Poetry Foundation</a>
                                </li>
                                <li><a href="https://openstax.org/subjects/literature" target="_blank">OpenStax -
                                        Literature</a></li>
                                <li><a href="https://www.sparknotes.com/" target="_blank">SparkNotes</a></li>
                            </ul>
                        </td>
                    </tr>

                    <!-- Art -->
                    <tr>
                        <td>Art</td>
                        <td>
                            Art is a form of creative expression. Our Art subject encourages students to explore their
                            artistic talents through drawing, painting, and other visual arts. They will learn about
                            different artistic styles and techniques.
                        </td>
                        <td>
                            <img src="{{url('frontend/images/tea6.jpg')}}" alt="Susan Brown">
                        </td>
                        <td>
                            <ul>
                                <li><a href="https://artsandculture.google.com/" target="_blank">Google Arts &
                                        Culture</a></li>
                                <li><a href="https://www.moma.org/" target="_blank">Museum of Modern Art</a></li>
                                <li><a href="https://www.tate.org.uk/" target="_blank">Tate - Art</a></li>
                            </ul>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>

    <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>



</body>

</html>