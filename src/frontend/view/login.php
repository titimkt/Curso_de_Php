<!DOCTYPE html>
<html lang="pt-br">

<head>
   <title>Login</title>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="author" content="Thiago Sacchett">
   <meta name="description" content="Site de testes para o curso de PHP da Infoserv.">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200;400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../assets/styles.css">
   <script src="../js/scripts.js"></script>
</head>

<body>

   <div class="container-home">
      <div class="d-flex justify-content-center h-100">
         <div class="form-login">
            <div class="fs-4 form-login-header">
               Acesse sua conta!
            </div>
            <div class="form-login-body">
               <form>
                  <div class="form-floating mb-3">
                     <input type="email" class="form-control" placeholder="E-mail" required>
                     <label for="floatingInput">Informe o seu e-mail aqui</label>
                  </div>
                  <div class="form-floating mb-3">
                     <input type="password" class="form-control" placeholder="Senha" required>
                     <label for="floatingPassword">Informe a sua senha aqui</label>
                  </div>
                  <div class="form-login-body-conected">
                     <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                     <label class="form-check-label" for="flexCheckChecked">
                        Permanecer conectado
                     </label>
                  </div>
                  <div>
                     <input class="btn form-login-body-button" value="Acessar conta" type="submit">
                  </div>
               </form>
            </div>
            <div class="text-center form-login-fotter">
               Ainda não possui uma conta? <a href="#">Crie agora!</a>
               <br />
               <a href="#">Esqueceu a sua senha?</a>
            </div>
         </div>
      </div>
   </div>

</body>

</html>