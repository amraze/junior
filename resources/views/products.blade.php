<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="window">
        <header class="window-header">
            <nav class="navigation">
                <div class="navigation-top">
                    <a href="products.html" class="navigation-item active">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 9.5L12 4L21 9.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M19 13V19.4C19 19.7314 18.7314 20 18.4 20H5.6C5.26863 20 5 19.7314 5 19.4V13"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <span class="navigation-item-title">All Products</span>
                    </a>
                    <a href="users" class="navigation-item ">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.6 3H20.4C20.7314 3 21 3.26863 21 3.6V20.4C21 20.7314 20.7314 21 20.4 21H3.6C3.26863 21 3 20.7314 3 20.4V3.6C3 3.26863 3.26863 3 3.6 3Z"
                                stroke="currentColor" stroke-width="1.5" />
                            <path d="M9.75 9.75V21" stroke="currentColor" stroke-width="1.5" />
                            <path d="M3 9.75H21" stroke="currentColor" stroke-width="1.5" />
                        </svg>
                        <span class="navigation-item-title">All Users</span>
                    </a>
                </div>
            </nav>
        </header>

        <main class="window-main" style="width:80vw;">
            <a href="products/create">
                <button>Create</button>
            </a>
            <div class="window-main-body">
                <div class="window-main-body-right">
                    <section class="settings-section">
                        @foreach($products as $product)
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <p class="card-text">{{$product->category}}</p>
                                </div>
                                <small class="text-muted">Stock : {{$product->stock}} | Price : {{$product->price}} TND</small>
                                <div class="card-footer">
                                    <a href="products/{{$product->id}}/update"><button class="btn btn-success">Update</button></a>
                                    <a href="products/{{$product->id}}/delete"><button class="btn btn-danger">Delete</button></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </main>
    </div>
</body>

</html>