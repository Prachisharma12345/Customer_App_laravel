@include('layouts.header');
<!doctype html>
<html lang="en">
  <head>
    <title>Customer Trash</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="{{route('customer.create')}}">
        <button type="submit" class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <a href="{{url('customer')}}">
            <button type="submit" class="btn btn-primary d-inline-block m-2 float-right">Customer View</button>
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
                    <a href="{{route('customer.force-delete',['id'=>$customer->customer_id])}}"><button class="btn btn-danger">Force Delete</button></a>
                </td>
                <td>
                    <a href="{{route('customer.restore',['id'=>$customer->customer_id])}}"><button class="btn btn-primary">Restore</button></a>
                </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
