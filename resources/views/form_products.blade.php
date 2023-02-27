<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>
<body>
   <form method="POST" enctype="multipart/form-data" action="">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category</label>
    <select name="category" class="form-select" id="">
      <option value="Informatique">Informatique</option>
      <option value="Clothing">Clothing</option>
    </select>
  </div>
  <div class="row">
    <div class="mb-3 col-6">
      <label for="exampleInputEmail1" class="form-label">Stock</label>
      <input type="number" class="form-control" name="stock">
    </div>
    <div class="mb-3 col-6">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="number" class="form-control" name="price">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>