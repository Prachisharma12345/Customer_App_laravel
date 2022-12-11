<!doctype html>
<html lang="en">
  <head>
   @stack('title')

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container">
          <a class="navbar-brand text-white" href="#">
        @if (session()->has('username'))
        {{session()->get('username')}}
        @else
        Guest
        @endif

        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent d-flex justify-content-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item">
                <a class="nav-link text-white active " aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/register')}}">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{url('/customer')}}">Customer</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>

      <div class="container">
        {{--  <a href="{{url('/')}}">English</a>
        <a href="{{url('/hi')}}">Hindi</a>
        <a href="{{url('/guj')}}">Gujarati</a>
        <a href="{{url('/rus')}}">Russian</a>  --}}
        <h1 class="text-center mt-5">@lang('lang.welcome')</h1>
      </div>

