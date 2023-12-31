<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row">

            <div class="col-md-8 mx-auto">
                <form style='text-align: center' method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                <div class="card">

                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <a href="{{ url('admin/addblog') }}" class="btn btn-primary mb-3">Add Blog</a>
                        @if (count($blogs) > 0)
                        @foreach ($blogs as $blog)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">{{ $blog['name'] }}</h5>
                                        <p class="card-text">{{ $blog['content'] }}</p>
                                        <p class="card-text"><small class="text-muted">Created: {{ $blog['updated_at'] }}</small></p>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.delete.blog', ['id' => $blog->id]) }}" class="text-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @else
                        <p>No blogs found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>