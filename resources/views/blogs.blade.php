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

    <div class="card-body">
        @if (count($blogs) > 0)
        @foreach ($blogs as $blog)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $blog['name'] }}</h5>
                <p class="card-text">{{ $blog['content'] }}</p>
                <p class="card-text"><small class="text-muted">Created: {{
                        $blog['updated_at'] }}</small></p>
            </div>
        </div>
        @endforeach
        @else
        <p>No blogs found.</p>
        @endif
    </div>
</body>

</html>