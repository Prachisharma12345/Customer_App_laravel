@include('layouts.header');
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
    <div class="container">
        <form action="" class="col-9">
            <div class="form-group">
              <input type="search" name="search" id="search" class="form-control" placeholder="Search by name or email" value="{{$search}}">
              </div>
              <button class="btn btn-primary">Search</button>
              <a href="{{url('/customer')}}">
                <button class="btn btn-primary" type="button">Reset</button>
              </a>

        </form>
        <a href="{{route('customer.create')}}">
        <button type="submit" class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <a href="{{url('customer/trash')}}">
        <button type="submit" class="btn btn-danger d-inline-block m-2 float-right">Move to Trash</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer )
                <tr>
                    <td >{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>@if($customer->gender=='M')
                        Male
                        @elseif($customer->gender=='F')
                        Female
                        @else
                        Other
                    @endif</td>
                    {{-- <td>{{get_formatted_date($customer->dob,"d-M-Y")}}</td> --}}
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->state}}</td>
                    <td>{{$customer->country}}</td>
                    <td>@if($customer->status==1)
                    <a href="">
                        <span class="badge badge-success">Active</span>
                    </a>


                        @else
                        <a href="">
                            <span class="badge badge-danger">Active</span>
                        </a>


                    @endif
                </td>
                <td>
                    {{-- url method --}}
                    {{-- <a href="{{url('/customer/delete/')}}/{{$customer->customer_id}}"><button class="btn btn-danger">Delete</button></a> --}}
                    <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}">
                        <button class="btn btn-danger">Trash</button>
                    </a>
                </td>
                <td>
                    <a href="{{route('customer.edit',['id'=>$customer->customer_id])}}"><button class="btn btn-primary">Edit</button></a>
                </td>
                </tr>
                @endforeach


            </tbody>
        </table>
        <div class="row">
            {{$customers->links('pagination::bootstrap-4')}}
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
