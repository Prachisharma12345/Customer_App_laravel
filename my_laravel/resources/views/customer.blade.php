<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


    <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="container">
            <h1 class="text-center">Registration </h1>
        <x-input type="text" name="name"  label="Please enter your name"/> {{--:demo="$demo" --}}
        <x-input type="email" name="email" label="Please enter your email"/>
        <x-input type="password" name="password" label="Password"/>
        <x-input type="password" name="cpassword" label="Confirm Password"/>
        <x-input type="text" name="country" label="Enter your country name"/>
        <x-input type="text" name="state" label="Enter your state name"/>
        {{-- <label for="">Gender:</label>
        <x-input type="radio" name="M" id="1" value="M" />
        <x-input type="radio" name="F" id="2" value="F"  />
        <x-input type="radio" name="O" id="3" value="O" /> --}}
        <x-input type="date" name="dob" label="Enter your Date of Birth"/>
        <button class="btn btn-primary">Submit</button>
        </div>
    </form>

  </body>
</html>
