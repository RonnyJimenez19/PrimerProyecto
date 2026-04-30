<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('titulopagina')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.7/css/dataTables.dataTables.css" />
  <!--script src="https://cdn.tailwindcss.com"></script-->
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
    </style>
    @stack('css')
</head>

<body>

<div class="p-5 text-white text-center fondo">
  <h1>@yield('titulo')</h1>
  <h4>@yield('subtitulo')</h4> 
  <p>Resize this responsive page to see the effect!</p>
</div>
  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">@yield('link1')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">@yield('link2', 'Link #2')</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
    @yield('contenido_cuerpo')
</div>


<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
  <em>@yield('Autor'):@yield("actividad")</em>
  <br>
  <i class ="fa-brands fa-facebook"></i>
  <i class ="fa-brands fa-twitter"></i>
  <i class ="fa-brands fa-instagram"></i>
  <i class ="fa-brands fa-linkedin"></i>
  <i class ="fa-brands fa-github"></i>
  <i class ="fa-brands fa-youtube"></i>
  <i class ="fa-brands fa-whatsapp"></i>
  <i class ="fa-brands fa-telegram"></i>
  <i class ="fa-brands fa-discord"></i>
  <i class ="fa-brands fa-snapchat"></i>
  <i class ="fa-brands fa-tiktok"></i>
  <i class ="fa-brands fa-reddit"></i>
  <i class ="fa-brands fa-pinterest"></i>
  <i class ="fa-brands fa-twitch"></i>
</div>

<div class="modal" tabindex="-1" id="myModal" role="dialog">
  <form id="editForm" method="POST">
    @csrf @method('PUT')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">@yield('titulo_modal')</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type='hidden' name='id' id='id'>
          <input type='text' name='name' id='name' class="form-control">
          <input type='text' name='calle' id='calle' class="form-control">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </form>
</div>

</body>
</html> 
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>