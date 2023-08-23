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

        <div class="table-responsive" style="margin: auto; width:70%">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr style="background-color: white">
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            @if ($data->usertype == '0')
                                <td><a href="{{ url('/deleteuser', $data->id) }}" class="btn btn-danger">Delete</a></td>
                            @else
                                <td><a class="btn btn-success">Not Allowed</a></td>
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    @include('admin.adminscripts')
</body>

</html>
