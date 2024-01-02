<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyMate</title>
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
                    <a class="nav-link" href="{{url('/blogs')}}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About Us</a>
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
                    <!-- we load courses and each course's photo is hardcoded into app, since the images we've put is
                    7, we can only set 7 images for all courses, if it exceeds 7, it is assigned a random image -->
                    @if (count($courses) > 0)
                    @php($i = 0)
                    @foreach ($courses as $course)
                    @php($i++)
                    @php($j = $i)
                    @if ($i > 7)
                    @php($j = rand(1, 7)) {{-- Assign a random number between 1 and 7 to $j --}}
                    @endif
                    <tr>
                        <td>{{$course['course']}}</td>
                        <td>
                            {{$course['description']}}
                        </td>
                        <td>
                            <img src="{{url('frontend/images/tea'.$j.'.jpg')}}">
                        </td>
                        <td>
                            <ul>
                                <li><a href="{{$course['link']}}" target="_blank">{{$course['linkd']}}</a></li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <p>No courses found.</p>
                    @endif

                </tbody>
            </table>
        </div>
    </main>

    <!-- Bootstrap JS and jQuery (required for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>



</body>

</html>