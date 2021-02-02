<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
    </head>
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style type="text/css">
            *{
            margin: 0;
            font-family: sans-serif;
        }
        body {
            text-align: center;
            background: mintcream;
        }
        nav{
            width: 100%;
            background: #282828;
            border-radius: 5px;
        }
        ul{
            margin-left: 600px;
        }
        a{
            color: #FFF;
            text-decoration: none;
            
        }
        footer{
            border-radius: 5px;
            height: 70px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            background: #282828;
            color: #FFF;
            padding-top: 15px;
        }
        /*home*/

        .header {
            height: 300px;
            width: 100%;
            margin-top: 200px;
        }
        .headerfont{
             font-size: 100px;
             color: #000;
             text-align: center;
             padding-top: 50px;
        }
        
        </style>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <ul class="nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link" href='home'>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='product'>Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='inventory/0'>Inventory</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='transaction'>Transaction</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='home'>Logout</a>
                  </li>
                </ul> 
            </nav>

            <section>
                
                @yield('section')
                


            </section>
        </div>


            <footer class="fixed-bottom">
                
                    <h2>@Boss J Car Accessories</h2>
                
            </footer>
        





















        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>