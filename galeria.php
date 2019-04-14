<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <!-- Meta Tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- Meu Css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/medias.css">

      <!-- Title -->
      <title>Geplant, planeje a sua vida!</title>

  </head>

  <body>
 <header>
        <nav class="navbar navbar-light bg-light"> <!-- Inicio navbar com logo e campo de busca. -->
            <div class="container">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3"> <!-- Inicio Col -->
                    <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" style="width: 250px; height: 120px;"></a>
                </div> <!-- Fim col -->
                
                <div class="col-md-2 col-lg-4">
                  
                </div>

              <div class="col-12 col-sm-12 col-md-6 col-lg-5"> <!-- Inicio col -->
                    <form class="form-inline form-group"> <!-- Inicio Form -->
                         <input id="input-busca" class="form-control mr-sm-2" type="search" placeholder="Buscar um móvel." aria-label="Search">
                         <button id="botao-buscar" class="btn btn-outline-transparent my-2 my-sm-0 text-light" onClick="window.open('galeria.php')" style="background-color: #6e431e;">Buscar</button>
                     </form> <!-- Fim Form -->

              </div>
            </div>
  

        </nav> <!-- Fim navbar com logo de busca e campo de pesquisa. -->


        <nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Navbar com o menu -->

            <div class="container">
               <!-- BOTÃO HAMBURGUER -->  
               <button class="hamburguer navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- FIM BOTÃO HAMBURGUER -->


          <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                 <ul class="navbar-nav mr-auto ml-auto"> <!-- Inicio UL -->
                      <li class="nav-item">
                          <a class="nav-link" href="index.php"><img class="img-fluid" src="img/icon-inicio.png">&nbsp;Inicio <span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item">
                      </li>

                      <!-- Inicio do menu dropdown -->
                      <li class="nav-item dropdown active"> 
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="img/icon-nossosMoveis.png">&nbsp;Nossos móveis</a>
                
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="p-2 dropdown-item active" href="galeria.php"><img class="img-fluid" src="img/icon-galeriaDeFotos.png">&nbsp;Galeria de fotos</a>


                         <div class="dropdown-divider"></div> <!-- Linha de divisão menu dropdown -->
                                <a class="dropdown-item" href="galeriaDeMdf.php"><img class="img-fluid" src="img/icon-mdf.png">&nbsp;Galeria de mdf</a>
                         </div>

                      </li> <!-- FIM ITEM DO MENU COM DROPDOWN -->

                      <li class="nav-item">
                               <a class="nav-link" href="faleConosco.php"><img class="img-fluid" src="img/icon-faleConosco.png">&nbsp;Fale conosco</a>
                      </li>
                 </ul> <!-- Fim UL -->
             </div>
          </div>
        </nav> <!-- FIM NAVBAR COM O MENU -->
    </header>

  <section>
    <div class="container mb-5">

        <div class="page-header mb-5 mt-5 ">
            <h1>Galeria de Fotos&nbsp;<img src="img/icons-galeriaDeFotos.png"></h1>
        </div>

        <div class="row">

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel1.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>


            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel2.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel3.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel4.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

        </div> <!-- FIM ROW -->

        <div class="row">

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel5.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel6.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel7.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel8.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

        </div> <!-- FIM ROW -->

        <div class="row">

            <div class="mb-5 col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel9.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel10.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="col-md-3" style="cursor: pointer;">
                <div class="fotos card p-2" width="18rem;">
                    <img class="card-img-top" src="img/moveis/movel11.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="col-md-3">
                <div class="fotos card p-2" width="18rem;" style="cursor: pointer;">
                    <img class="card-img-top" src="img/moveis/movel12.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

        </div> <!-- FIM ROW -->


        <div class="row">

            <div class="col-md-3">
                <div class="fotos card p-2" width="18rem;" style="cursor: pointer;">
                    <img class="card-img-top" src="img/moveis/movel13.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="col-md-3">
                <div class="fotos card p-2" width="18rem;" style="cursor: pointer;">
                    <img class="card-img-top" src="img/moveis/movel14.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="col-md-3">
                <div class="fotos card p-2" width="18rem;" style="cursor: pointer;">
                    <img class="card-img-top" src="img/moveis/movel15.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

            <div class="col-md-3">
                <div class="fotos card p-2" width="18rem;" style="cursor: pointer;">
                    <img class="card-img-top" src="img/moveis/movel16.jpg" alt="Card image cap" style="width: 100%; height: 100%;">
                </div>
            </div>

        </div> <!-- FIM ROW -->        

    </div> <!-- FIM CONTAINER -->

  </section>

  <footer class="bg-light">
      <div class="container">
       <div class="row">
        <div class="mt-2 mr-auto col-12 col-sm-12 col-md-4 col-lg-4" id="redes-sociais">
            <h3 class="text-success">Redes Sociais</h3>
            <a href="https://www.facebook.com/">
               <img class="img-fluid" src="img/facebook.png"> 
            </a>

            <a href="https://www.instagram.com/">
                <img class="img-fluid" src="img/instagram.png"> 
            </a>

            <a href="https://www.instagram.com/">
                <img class="img-fluid" src="img/whats.png"> 
            </a>
      
            <br />
            <br />
            <br />

            <h6 class="bg-light text-success copyright">Site desenvolvido por Daniel Souza. &copy;GEPLANT.</h6>
        </div>

        <div class="col-md-2 col-lg-4">
          
        </div>
      

        <div class="ml-auto mr-auto mb-2 col-8 col-sm-8 col-md-6 col-lg-4">
            <div class="card " style="width: 100%; height: 100%!important;">
               <img class="card-img-top img-fluid ml-auto mr-auto" src="img/logo.png" alt="Card image cap">
               <div class="card-body">
                   <h5 class="card-title" style="text-align: center;">Nossa Empresa</h5>
                   <p class="card-text" style="text-align: justify; text-indent: 2em"">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>

               <ul class="list-group list-group-flush">
                   <li class="list-group-item">Telefone: (xx) xxxx-xxxxx</li>
                   <li class="list-group-item">E-mail: xxxxxxxx@xxxx.xxx</li>
                   <li class="list-group-item">CNPJ: xx.xxx.xxx/xxxx-xx</li>
               </ul>
            </div>
        </div>
      </div> 
    </div>
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>

    </script>
  </body>
</html>
