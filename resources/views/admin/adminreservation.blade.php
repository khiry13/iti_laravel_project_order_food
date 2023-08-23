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
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr style="background-color: white">
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->time }}</td>
                            <td>{{ $data->message }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    @include('admin.adminscripts')
</body>

</html>
