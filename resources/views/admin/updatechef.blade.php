<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
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
        <div style="margin: auto; width: 70%">
            <div>
                <form class="form-horizontal" action="{{ url('/updatefoodchef', $data->id) }}"
                    enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="ssn" class="col-sm-3 text-end control-label col-form-label">Chef
                                Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ssn" value="{{ $data->name }}"
                                    name="name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-end control-label col-form-label">Speciality</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname"
                                    value="{{ $data->speciality }}" name="speciality" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="imageO" class="col-sm-3 text-end control-label col-form-label">Old
                                Image</label>
                            <div class="col-sm-9">
                                <img height="200" width="200" src="/chefimage/{{ $data->image }}" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 text-end control-label col-form-label">New
                                Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" />
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.adminscripts')
</body>

</html>
