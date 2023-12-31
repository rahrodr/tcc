<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tektur:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre&family=Tektur:wght@500&display=swap" rel="stylesheet">
<script src="script.js"></script>

    <title>Saturno</title>
</head>

<body>
  
  <div id="popup-container" class="popup">
    <div class="popup-content">
        <h2>Eaii, tudo bem?</h2>
        <p>Esperamos que experiencie da melhor forma possível.
         
        </p>
        <p>⚠ Por favor, mantenha um ambiente saudável e acolhedor!</p>
        <button id="popup" onclick="fecharPopup()">Ok!</button>
    </div>
</div>

    <div class="banner">
        <nav class="navbar navbar-light">
            <div class="container">
              <div class="neon-logo">
                <a class="navbar-brand" href="#">
                 <h1 class="logo">S7VEN</h1>
                </a>
              </div>
              
              <span class="textotop">
                Compartilhe, jogue, socialize.
              </span>
              <form class="d-flex">
                <input style="background-color: black; color: white; border-color: rgb(0, 221, 255);" class="form-control me-2" type="search" placeholder="Procure amigos" aria-label="Search">
                <button class="btnpesquisar" type="submit">Pesquisar</button>
              </form>
            </div>
        </nav>
    </div>
  <div id="breakpoint-watcher"></div>
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div style="background-image: url(styles/imgstyle/elementoleft.png); background-size:contain" class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 mt-2 mb-5 ml-3">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark fw-bold text-decoration-none">
                    <span id="titulo2" class="fs-5 d-none d-sm-inline pt-3">Meu Perfil</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                  <li class="nav-item">
                    <a href="menu.php" class="nav-link align-middle px-0">
                        <i class="bi bi-house-fill"></i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg> <span class="contentleft">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="conversas.php" class="nav-link align-middle px-0">
                        <i class="bi bi-gem"></i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
                      </svg> <span class="contentleft">Conversas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="comunidades.php" class="nav-link align-middle px-0">
                      <i class="bi bi-chat-quote-fill"></i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-quote-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                      </svg> <span class="contentleft">Comunidades</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="configuracoes.php" class="nav-link align-middle px-0">
                        <i class="bi bi-gear-fill"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                            <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                          </svg> <span class="contentleft">Configurações</span>
                    </a>
                </li>
                        <br/>
                        <div class="card" width="80" height="100">
                            <img src="imgs/cyberpunk2077.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text fw-bold">Acompanhe o que estou jogando agora! #cyberpunk2077</p>
                            </div>
                        </div>
                          <br/>
                <div class="dropdown pb-2">
                  <a href="perfilamg.php" class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
                    <img src="imgs/iconamg.jpg" alt="foto de Ray" width="40" height="45" class="rounded-circle">
                    <span class="contentleft">@rahrodr___</span>
                </a>
                <br>
                <a href="perfilamg.php" class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
                  <img src="imgs/iconamg2.jpg" alt="foto de Ray" width="40" height="45" class="rounded-circle">
                  <span class="contentleft">@carlss33</span>
              </a>
              <br>
              <a href="perfilamg.php" class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
                <img src="imgs/iconamg3.jpg" alt="foto de Ray" width="40" height="45" class="rounded-circle">
                <span class="contentleft">@j3an_n</span>
            </a>
                </div>
            </div>
        </div>
    <div style="background-image: url(styles/imgstyle/elementoright.png); background-size: contain;" class="d-grid gap-3 flex-shrink-1">
        <div class="mt-2 p-2">
          <div class="mt-1 p-2">
            <h3 id="titulo" class="fw-bold"> <img src="https://i.postimg.cc/V6TH3xvV/luru.png" width="50" height="50" text-align="left">
              Seja bem-vindo(a), user!<br/>
            </h3>
            <a href="conversas.php">
            <button type="button" class="btnmsgs">
                Mensagens
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  10+
                <span class="visually-hidden">mensagens não lidas</span>
                </span>
              </button></a>
              <br>
            <div class="mt-2">
                <label for="campoPostagem" class="form-label">O que você deseja compartilhar?</label>
                <textarea style="background-color: black; color:white;" class="form-control" id="campoPostagem" rows="3" placeholder="..."></textarea>
                <br/>
                <button type="button" class="btnpostar">Postar</button>
              </div>
        </div> <br>
        <div class="post">
          <p class="fw-bold"> <img src="imgs/iconamg2.jpg" width="50" height="50" text-align="left">
            Carlos @carlss33<br/>
          </p>
          <hr/>
          <p class="fst-italic">Solando geral nesse game <br/>
                
          </p><br>
          <div class="text-center"> <img src="imgs/tekken.jpg" class="rounded" alt="" width="500">
          </div>
          <br/>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btninterativo"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.559 5.448a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zm-.07-5.448c1.397-.864 3.543 1.838-.953 3.434-3.067-3.554.19-4.858.952-3.434z"/>
                  </svg> Curtir</button>

                    <button type="submit" class="btninterativo"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                    </svg> Salvar</button>
          </div>
        </div>
        <div class="post">
          <p class="fw-bold"> <img src="imgs/iconamg.jpg" width="50" height="50" text-align="left">
            Rayssa @rahrodr___<br/>
            </p>
            <hr/>
            <p>e hoje vamos de maratonar essa belezinha aqui tudo dnv</p>
            <div class="text-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wZ8GcvXZ8EA?si=BNgZiQGnxa9cynyD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btninterativo"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes-fill" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.559 5.448a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zm-.07-5.448c1.397-.864 3.543 1.838-.953 3.434-3.067-3.554.19-4.858.952-3.434z"/>
                  </svg> Curtir</button>

                    <button type="submit" class="btninterativo"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                    </svg> Salvar</button>
                        </div>
                    </div>
                    <div class="post">
                      <p class="fw-bold"> <img src="imgs/iconamg3.jpg" width="50" height="50" text-align="left">
                        Jean @j3an_n<br/>
                        </p>
            <hr/>
            <p class="fst-italic">Ja pode ao mossar???
            </p>
            <div class="text-center">
            <img src="imgs/fnaf.jpg" class="rounded" alt="" width="500">
            </div>
            <br/>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btninterativo"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.559 5.448a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zm-.07-5.448c1.397-.864 3.543 1.838-.953 3.434-3.067-3.554.19-4.858.952-3.434z"/>
                      </svg> Curtir</button>
    
                        <button type="submit" class="btninterativo"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-star-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zM8.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
                        </svg> Salvar</button>
              </div>
                      </div>
                            <div class="d-flex justify-content-center d-grid gap-3">
                              <div class="card mb-3 mt-1" style="max-width: 540px;">
                                <div class="row g-0">
                                 
                                  <div class="col-md-8">
                                
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                        </div>
                        </div>
                    </div>
    </div>
  </body>
</html>