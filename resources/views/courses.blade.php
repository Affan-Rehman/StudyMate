<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Education Platform</title>
    <link rel="stylesheet" href="{{url('frontend/css/coursesstyle.css')}}">
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .team-table tr:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <h1>Meet Our Team</h1>
    </header>
    <main>
        <table class="team-table">
            <tr>
                <th>
                    <h2 style="color: white;">Subject</h2>
                </th>
                <th>
                    <h2 style="color: white;">Description</h2>
                </th>
                <th>
                    <h2 style="color: white;">Teacher</h2>
                </th>
            </tr>
            <tr>
                <td>
                    <h3>Mathematics</h3>
                </td>
                <td>
                    <p>Mathematics is the study of numbers, quantities, and shapes. Our Mathematics subject focuses on
                        teaching various mathematical concepts, including algebra, calculus, and geometry. It's designed
                        to help students build a strong foundation in mathematics and problem-solving skills.</p>
                </td>
                <td>
                    <img src="{{url('frontend/images/tea1.jpg')}}" alt="John Smith">
                    <div class="dropdown-content">
                        <a href="https://www.sparknotes.com/math/" target="_blank">Link1</a>
                        <a href="https://www.mathlearningcenter.org/curriculum/free" target="_blank">Link2</a>
                        <a href="https://www.edutoday.in/2013/08/useful-teaching-learning-materials-tlm.html"
                            target="_blank">Link3</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Physics</h3>
                </td>
                <td>
                    <p>Physics is the study of matter, energy, and the fundamental forces of nature. Our Physics subject
                        provides a comprehensive understanding of various physical phenomena, from classical mechanics
                        to modern quantum physics. Students will explore the laws that govern the universe.</p>
                </td>
                <td>
                    <img src="{{url('frontend/images/tea2.jpg')}}" alt="James Johnson">
                    <div class="dropdown-content">
                        <a href="https://www.khanacademy.org/" target="_blank">Link1</a>
                        <a href="https://ocw.mit.edu/index.htm" target="_blank">Link2</a>
                        <a href="https://www.physicsclassroom.com/" target="_blank">Link3</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Chemistry</h3>
                </td>
                <td>
                    <p>Chemistry is the science of matter and its transformations. Our Chemistry subject covers topics
                        such as chemical reactions, the periodic table, and molecular structures. Students will gain a
                        deep understanding of chemical processes and their real-world applications.</p>
                </td>
                <td>
                    <img src="{{url('frontend/images/tea3.jpg')}}" alt="David Lee">
                    <div class="dropdown-content">
                        <a href="https://www.khanacademy.org/science/chemistry" target="_blank">Link1</a>
                        <a href="https://ocw.mit.edu/search/?d=Chemistry&s=department_course_numbers.sort_coursenum"
                            target="_blank">Link2</a>
                        <a href="https://www.coursera.org/courses?query=chemistry" target="_blank">Link3</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>History</h3>
                </td>
                <td>
                    <p>History is the study of the past, where students explore the events and developments that have
                        shaped the world. Our History subject covers various historical periods and important figures.
                        Students will gain insights into the cultures and societies of different eras.</p>
                </td>
                <td>
                    <img src="{{url('frontend/images/tea4.jpg')}}" alt="Linda Davis">
                    <div class="dropdown-content">
                        <a href="https://www.history.com/" target="_blank">Link1</a>
                        <a href="https://www.bbc.co.uk/programmes/genres/factual/history" target="_blank">Link2</a>
                        <a href="https://www.worldhistoryatlas.com/" target="_blank">Link3</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Literature</h3>
                </td>
                <td>
                    <p>Literature explores the world of written and spoken expression. Our Literature subject delves
                        into classic and modern works of fiction, poetry, and drama. Students will analyze and
                        appreciate the power of language and storytelling.</p>
                </td>
                <td>
                    <img src="{{url('frontend/images/tea5.jpg')}}" alt="Robert Wilson">
                    <div class="dropdown-content">
                        <a href="https://www.poetryfoundation.org/" target="_blank">Link1</a>
                        <a href="https://openstax.org/subjects/literature" target="_blank">Link2</a>
                        <a href="https://www.sparknotes.com/" target="_blank">Link3</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Art</h3>
                </td>
                <td>
                    <p>Art is a form of creative expression. Our Art subject encourages students to explore their
                        artistic talents through drawing, painting, and other visual arts. They will learn about
                        different artistic styles and techniques.</p>
                </td>
                <td>
                    <img src="{{url('frontend/images/tea6.jpg')}}" alt="Susan Brown">
                    <div class="dropdown-content">
                        <a href="https://artsandculture.google.com/" target="_blank">Link1</a>
                        <a href="https://www.moma.org/" target="_blank">Link2</a>
                        <a href="https://www.tate.org.uk/" target="_blank">Link3</a>
                    </div>
                </td>
            </tr>
        </table>
        <a class="btn" href="{{url('/')}}">Back to Home</a>
    </main>
</body>
<script>
    // JavaScript to handle dropdown behavior
    document.addEventListener('DOMContentLoaded', function () {
        var dropdowns = document.querySelectorAll('.dropdown-content');

        dropdowns.forEach(function (dropdown) {
            dropdown.parentElement.addEventListener('click', function (e) {
                dropdown.style.display = (dropdown.style.display === 'block') ? 'none' :
                    'block';
                e.stopPropagation();
            });
        });

        document.addEventListener('click', function () {
            dropdowns.forEach(function (dropdown) {
                dropdown.style.display = 'none';
            });
        });
    });
</script>

</html>