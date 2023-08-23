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
                <form class="form-horizontal" action="{{ url('/uploadfood') }}" enctype="multipart/form-data"
                    method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="ssn" class="col-sm-3 text-end control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ssn"
                                    placeholder="Write a title here" name="title" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-end control-label col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Price here"
                                    name="price" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 text-end control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" placeholder="Image here"
                                    name="image" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                class="col-sm-3 text-end control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email"
                                    placeholder="write a description here" name="description" />
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
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr style="background-color: white">
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->price }}</td>
                                <td>{{ $data->description }}</td>
                                <td><img src="/foodimage/{{ $data->image }}" alt=""
                                        style="width: 150px; height: 150px;"></td>
                                <td><a href="{{ url('deletemenu', $data->id) }}" class="btn btn-danger">Delete</a>
                                    <a href="{{ url('updateview', $data->id) }}" class="btn btn-success">Update</a>
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
