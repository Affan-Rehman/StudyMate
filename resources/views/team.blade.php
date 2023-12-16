<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyMate</title>
    <link rel="stylesheet" href="{{url('frontend/css/teamstyle.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                    <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <h1>Meet Our Team</h1>
    </header>
    <main>
        <table class="team-table">
            <tr>
                <th>
                    <h2 style="color: white;">Our Team</h2>
                </th>
                <th>
                    <h2 style="color: white;">Name</h2>
                </th>
                <th>
                    <h2 style="color: white;">Course</h2>
                </th>
            </tr>
            <tr>
                <td>
                    <img src="{{url('frontend/images/tea1.jpg')}}" alt="Teacher 1">
                </td>
                <td>
                    <h3>John Smith</h3>
                </td>
                <td>
                    <h3>Mathematics</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{url('frontend/images/tea2.jpg')}}" alt="Teacher 2">
                </td>
                <td>
                    <h3>James Johnson</h3>
                </td>
                <td>
                    <h3>Physics</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{url('frontend/images/tea3.jpg')}}" alt="Teacher 3">
                </td>
                <td>
                    <h3>David Lee</h3>
                </td>
                <td>
                    <h3>Chemistry</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{url('frontend/images/tea4.jpg')}}" alt="Teacher 4">
                </td>
                <td>
                    <h3>Linda Davis</h3>
                </td>
                <td>
                    <h3>History</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{url('frontend/images/tea5.jpg')}}" alt="Teacher 5">
                </td>
                <td>
                    <h3>Robert Wilson</h3>
                </td>
                <td>
                    <h3>Literature</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{url('frontend/images/tea6.jpg')}}" alt="Teacher 6">
                </td>
                <td>
                    <h3>Susan Brown</h3>
                </td>
                <td>
                    <h3>Art</h3>
                </td>
            </tr>
        </table>
    </main>
</body>

</html>