<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Login</title>
  </head>
  <body>
    <!-- admin login form-->
    <div class="container">
      <div class="row">
        <div class="col-md-3">  </div>
        <div class="col-md-6">

          @if(Session::has('error-msg'))
            <p class="text-danger">{{ Session::get('error-msg') }}</p>
          @endif

          <form class="mt-5" action="{{ url('admin-login') }}" method="post">
            @csrf

            <div class="mb-3">
              <label for=" " class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
              @error('email')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="mb-3">
              <label for=" " class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
              @error('password')
                <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-success mt-3" value="Admin Login">
            </div>

          </form>

        </div>
      </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
