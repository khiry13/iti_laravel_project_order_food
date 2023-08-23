<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.admincss')

    <style>
        input {
            color: white !important;
            font-weight: bold !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div style="display: flex; flex-direction: column; margin: auto; width: 70%">
            <div>
                <form class="form-horizontal" action="{{ url('/uploadchef') }}" enctype="multipart/form-data"
                    method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="ssn" class="col-sm-3 text-end control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ssn" placeholder="Write name here"
                                    name="name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-end control-label col-form-label">Speciality</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Speciality Here"
                                    name="speciality" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 text-end control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" placeholder="Image here"
                                    name="image" />
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Sepciality</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr style="background-color: white">
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->speciality }}</td>
                                <td><img src="/chefimage/{{ $data->image }}" alt=""
                                        style="width: 150px; height: 150px;"></td>
                                <td><a href="{{ url('/deletechef', $data->id) }}" class="btn btn-danger">Delete</a>
                                    <a href="{{ url('/updatechef', $data->id) }}" class="btn btn-success">Update</a>
                                </td>
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
