
<!doctype html>
<html lang="en" >
  <head>

    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark" >

    <form action="{{$url}}" method="POST" class=" mt-5 m-4 bg-light mx-auto w-75">
        @csrf

        <div class="container" >
            <h1 class="text-center text-primary pt-2">{{$title}}</h1>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Name:</label>
                    <input type="text" name="name" class="form-control"  value="{{isset($customer)?$customer->name:""}}" />
                </div>

                <div class="form-group col-md-6">
                    <label for="">Email:</label>
                    <input type="text" name="email" class="form-control" value="{{isset($customer)?$customer->email:""}}" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Password:</label>
                    <input type="password" name="password" class="form-control"  />
                </div>
               <div class="form-group col-md-6">
                <label for="">Confirm Password:</label>
                <input type="password" class="form-control" name="password_confirmation" />
            </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">State:</label>
                        <input type="text" name="state" class="form-control" value="{{isset($customer)?$customer->state:""}}"  />
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Country:</label>
                        <input type="text" name="country" class="form-control" value="{{isset($customer)?$customer->country:""}}" />
                    </div>
                </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="">Address:</label>
                    <textarea  name="address" rows="3" cols="6" class="form-control">{{isset($customer)?$customer->address:""}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Gender:</label>
                    <br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="M" {{isset($customer)&&$customer->gender=="M"?"checked":""}} />
                        <label class="form-check-label" for="Male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="F" {{isset($customer)&&$customer->gender=="F"?"checked":""}} />
                        <label class="form-check-label" for="Female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="O" {{isset($customer)&&$customer->gender=="O"?"checked":""}} />
                        <label class="form-check-label" for="other">Other</label>
                    </div>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Date:</label>
                        <input class="form-control" type="date" name="dob"  value="{{isset($customer)?$customer->dob:""}}" />
                    </div>

            </div>

            <button type="submit" class="btn btn-lg btn-primary w-100 my-3">Submit</button>

          </div>

    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
