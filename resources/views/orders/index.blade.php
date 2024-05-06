<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freecourse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9e3b5dfe4e.js" crossorigin="anonymous"></script>
</head>

<body class="container-fluid">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-9">
                <a class="btn btn-warning float-end mb-4" href="{{ url('/') }}"><i
                        class="fa-solid fa-circle-left"></i>
                    Back</a>
                <p class="fw-bold h4">Data Orders</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Instructor</th>
                            <th scope="col" style="width:15%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($orders as $item)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td scope="row">
                                    @if ($item->course_id == 1)
                                        Web Design
                                    @elseif ($item->course_id == 2)
                                        Wordpress
                                    @else
                                        Development
                                    @endif
                                </td>
                                <td scope="row">
                                    <?php $user = App\Models\User::find($item->users_id); ?>
                                    {{ $user->name ?? '' }}
                                </td>
                                <td scope="row">
                                    @if ($item->instructor_id === 1)
                                        Muhammad Syahri
                                    @elseif ($item->instructor_id === 2)
                                        Bambang Prayoga
                                    @else
                                        Imran Aldiansyah
                                    @endif
                                </td>
                                <td scope="row">
                                    <a href="{{ route('orders.edit', $item->id) }}"><button type="button"
                                            class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button></a>
                                    <a href="{{ route('orders.destroy', $item->id) }}"
                                        onclick="return confirm('Yakin ingin menghapus data?')"><button type="button"
                                            class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
