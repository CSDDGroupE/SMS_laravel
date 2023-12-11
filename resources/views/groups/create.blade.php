<!doctype html>
<html lang="en">

<head>
    <title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" > 
    
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Group</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('groups.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Group Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Group</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <center>  Not a member?<a href="/groups/join" class="nav-item nav-link">Join a group</a></center>
</body>
</html>