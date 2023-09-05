<!doctype html>
<html lang="en">


<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bb8472cc7b.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1>welcome</h1>
    <div class="p-5 table-responsive">
        <table class="table table-bordered table-striped">
            
            <thead class="bg-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                    style="width: 45px; height: 45px" class="rounded-circle" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{ $alumno->id }}</p>

                                </div>

                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="fw-normal mb-1">{{ $alumno->nombre }}</p>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1">{{ $alumno->apellido }}</p>
                        </td>

                        <td>{{ $alumno->email }}</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    <!-- Bootstrap JavaScript Libraries -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
