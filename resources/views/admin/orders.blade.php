<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container">
            <h1>Customer Orders</h1>

            <form action="{{ url('/search') }}" method="get">
                @csrf
                <input type="text" name="search" style="color: black">
                <input type="submit" value="Search" class="btn btn-success">
            </form>
            <div class="table-responsive" style="margin: auto; width:70%">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Foodname</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr style="background-color: white">
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->address }}</td>
                                <td>{{ $data->foodname }}</td>
                                <td>{{ $data->price }}$</td>
                                <td>{{ $data->quantity }}</td>
                                <td>{{ $data->price * $data->quantity }}$</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.adminscripts')
</body>

</html>
