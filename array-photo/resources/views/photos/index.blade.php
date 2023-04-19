<!doctype html>
<html lang="en">

<head>
    <title>Photos-like</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <header>

        <div class="bg-black text-light ">
            <div class="container d-flex justify-content-center">
                <a class="link-light text-center text-decoration-none h1" href="{{url('/photos')}}"
                    aria-current="page">Photos</a>
            </div>

        </div>

        <div class="bg-light text-light d-flex justify-content-end px-5 mt-2">
            <a class="btn btn-dark text-center text-decoration-none" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>

    </header>
    <main class="container pt-5">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                <p class="w-100 bg-success p-3 border border-light border-2 rounded text-light text-center h2">
                    {{session('message')}}
                </p>
                @endif
            </div>
        </div>
        <div class="row ">

            @foreach ($photos as $photo)
            <div class="col-4 mb-4">
                <div class="card shadow-lg">
                    <img class="card-img-top" src="{{$photo->image_url}}?random={{$photo->id}}" alt=" Title">
                    <div class="card-body">

                        <form action="{{route('likes.like',['id' => $photo->id, 'user_id'=> auth()->user()->id])}}"
                            method="POST">
                            @csrf
                            <button class="btn btn-primary btn-block w-100"><i class='bx bxs-like bx-md'></i></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </main>
    <footer style="height: 50px" class=" bottom-0  w-100 mt-5 bg-black">

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>