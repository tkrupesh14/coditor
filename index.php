<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coditor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active file" aria-current="page" href="#">File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link edit" href="#">Edit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">View</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Format</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>
      <p class="navbar-brand"> &lt;/Coditor&gt; </p>
    </div>
  </div>
</nav>
    

  <!-- file menu1 -->
  <div class="file-menu">
    <ul>
      <li><a href="#">New</a></li>
      <li><a href="#">Open</a></li>
      <li><a href="#">Save</a></li>
      <li><a href="#">Exit</a></li>
    </ul>
  </div>
  <!-- edit menu1 -->
  <div class="edit-menu">
    <ul>
      <li><a href="#">Undo</a></li>
      <li><a href="#">Cut</a></li>
      <li><a href="#">Copy</a></li>
      <li><a href="#">Paste</a></li>
      <li><a href="#">Delete</a></li>
    </ul>
  </div>

  <!-- coding part -->

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <textarea onkeyup="refresh()" name="" id="editor-textarea" placeholder="Start coding here..."></textarea>
        </div>
        <div class="col-md-6">
          <h2><a   id="newTab">Open In New Tab</a></h2>
      <iframe id="viewer"></iframe>
    </div>
  </div>
</div>
<!-- javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
<script>
  let other  = null;
  let features = 'menubar = yes, location=yes, resizable=yes, scrollbars=no, status=yes';
   var viewer =  document.getElementById('viewer');
      function refresh(){
   var editor_value = document.getElementById('editor-textarea').value;
   viewer.srcdoc = editor_value;
}
document.getElementById("newTab").addEventListener('click', (ev)=>{
  let url = viewer;
  let other = window.open(url, "_blank", features)
})
    </script>
</body>
</html>