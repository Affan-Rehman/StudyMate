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
                    <a class="nav-link" href="{{url('/blogs')}}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/faq')}}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About Us</a>
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
                <!-- we load teacher and teacher's photo is hardcoded into app, since the images we've put is
                    7, we can only set 7 images for all teachers, if it exceeds 7, it is assigned a random image -->
                @if (count($teams) > 0)
                @php($i = 1)
                @foreach ($teams as $team )
                @php($i++)
                @php($j = $i)
                @if ($i > 7)
                @php($j = rand(1, 7)) {{-- Assign a random number between 1 and 7 to $j --}}
                @endif
                <td>
                    <img src="{{url('frontend/images/tea' .$j. '.jpg')}}" alt="Teacher {{$i}}">
                </td>
                <td>
                    <h3>{{$team['name']}}</h3>
                </td>
                <td>
                    <h3>{{$team['course']}}</h3>
                </td>
            </tr>
            @endforeach
            @else
            <p>No team found.</p>
            @endif
        </table>
    </main>
</body>

</html>