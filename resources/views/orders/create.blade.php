<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freecourse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9e3b5dfe4e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <a href="{{ url('/') }}" class="btn btn-warning float-end" style="margin-right: 36rem;"><i
                class="fa-solid fa-circle-left"></i> Back</a>
        <h3 class="mt-5 fw-bold">Beli Course</h3>
        <div class="row mt-5">
            <div class="col-md-6">

                <form action="{{ route('orders.store') }}" method="post">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="course_id">Course</label>
                        <select name="course_id" id="course_id"
                            class="form-control @error('course_id') is-invalid @enderror">
                            <option></option>
                            @foreach ($course as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="users_id">Customer</label>
                        <select name="users_id" id="users_id"
                            class="form-control @error('users_id') is-invalid @enderror">
                            <option></option>
                            @foreach ($user as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('users_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="instructor_id">Instructor</label>
                        <select name="instructor_id" id="instructor_id"
                            class="form-control @error('instructor_id') is-invalid @enderror">
                            <option></option>
                            @foreach ($instructor as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('instructor_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
