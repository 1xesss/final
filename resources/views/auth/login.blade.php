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
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #29cf00;"> 
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center">
                        <img src="{{asset("assets/sena.png")}}"
                          style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1">Login</h4>
                      </div>
      
                      <form action="{{route("login")}}" method="post">
                      @csrf
                        
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Correo</label>
                          <input type="email" name="email" id="form2Example11" class="form-control"
                            placeholder="Phone number or email address" />
                          
                        </div>
      
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                          <input type="password" name="password" id="form2Example22" class="form-control" />
                        
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="senabutton" type="submit">Ingresar</button>
                          
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          
                          <a href="{{route("register")}}" class="btn btn-outline-danger">Crea una</a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Somos mas que una entidad</h4>
                      <p class="small mb-0">El SENA, un taller de sueños donde la educación se convierte en la chispa que enciende las carreras. Como un mago del conocimiento, transforma aprendices en maestros de sus destinos, convirtiendo el plomo de la ignorancia en el oro de las habilidades. 
                        Es un rincón de magia educativa donde los sueños se convierten en realidad laboral.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>