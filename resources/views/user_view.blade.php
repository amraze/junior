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
    <div class="main-page">

    <section class="container">
        <div>
            <h1 class="modal-title pt-5" id="createModalLabel"> <i class="fa fa-question"></i> Informations sur
                <b>Ali Salah</b>
            </h1>
        </div>
        <hr>
        <div class=" row mt-5 mb-5">
            <div class="offset-1 col-4">
                <img class="card-img rounded-0"
                    src="https://miro.medium.com/max/1400/1*ydhn1QPAKsrbt6UWfn3YnA.jpeg"
                    style="width:300px; height:300px; object-fit:cover" />
            </div>
            <div class="offset-1 col-6">
                <div class="card-block">
                    <h2>Ali Salah</h2>
                    <h5 class="card-text">ali.salah@supcom.tn</h5>
                    <br>
                    <h5 class="card-text">23/12/2000</h5>
                    <h5 class="card-text">Nombre de produits : 3</h5>
                    <button class="btn btn-1 btn-light mt-5 bg-dark"> <a href="/users" style="color:white !important;text-decoration:none;" >Retour aux
                        users</a></button>
                </div>
            </div>
          
        </div>
        <div>
            <h1 class="modal-title pt-5" id="createModalLabel"> <i class="fa fa-question"></i> Produits de 
                <b>Ali Salah</b>
            </h1>
        </div>
        <div class="container">
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col" class="text-center">Image</th>
                      <th scope="col" class="text-center">Nom</th>
                      <th scope="col" class="text-center">Catégorie</th>
                      <th scope="col" class="text-center">Stock</th>
                      <th scope="col" class="text-center">Prix (DT)</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="text-center align-middle"><img src="https://miro.medium.com/max/1400/1*ydhn1QPAKsrbt6UWfn3YnA.jpeg" width="50"></td>
                      <td class="text-center align-middle">PC HP</td>
                      <td class="text-center align-middle">Informatique</td>
                      <td class="text-center align-middle">6</td>
                      <td class="text-center align-middle">1200</td>
                  </tr>
                  <tr>
                      <td class="text-center align-middle"><img src="https://miro.medium.com/max/1400/1*ydhn1QPAKsrbt6UWfn3YnA.jpeg" width="50"></td>
                      <td class="text-center align-middle">PC ASUS</td>
                      <td class="text-center align-middle">Informatique</td>
                      <td class="text-center align-middle">3</td>
                      <td class="text-center align-middle">1500</td>
                  </tr>
                  <tr>
                      <td class="text-center align-middle"><img src="https://miro.medium.com/max/1400/1*ydhn1QPAKsrbt6UWfn3YnA.jpeg" width="50"></td>
                      <td class="text-center align-middle">PC MSI</td>
                      <td class="text-center align-middle">Informatique</td>
                      <td class="text-center align-middle">1</td>
                      <td class="text-center align-middle">1800</td>
                  </tr>

              </tbody>
          </table>
      </div>

    </section>
</div>
</body>
</html>