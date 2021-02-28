 
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Berber Bul</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            padding: 0 50px;
            background-color: rgba(68, 68, 68, 0.6);
        }

        .container {
            display: flex;
        }

        .container .section {
            flex: 1;
            /*grow*/
            align-items: center;
            display: flex;
            justify-content: center;
        }

        header h1.logo {
            margin: 7px 0 0 0;
            float: left;
        }

        header h1.logo a {

            width: 250px;
            height: 49px;
            display: block;
            background: url(https://marka-logo.com/wp-content/uploads/2020/04/Huawei-Logo.png) no-repeat 0 0;
            background-size: contain;
            /* the old way was including text-indent: -9999px; but the new way is as seen below */

            font: 0/0 a;
            text-shadow: none;
            color: transparent;

        }

        @media (max-width: 768px) {

            /*breakpoint*/
            .container {
                flex-direction: column;
            }
        }

        .shadow-out {
            margin: 10px 0;
            padding: 5px;
            width: 100%;
            background: rgba(255, 255, 255, 0.55);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        /* Style the navigation bar */
        .navbar {
            width: auto;
            background-color: #555;
            overflow: auto;
            border-radius: 10px;
        }

        /* Navbar links */
        .navbar a {
            float: left;
            text-align: center;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
        }

        /* Navbar links on mouse-over */
        .navbar a:hover {
            background-color: #000;
        }

        /* Current/active navbar link */
        .active {
            background-color: #4CAF50;
        }

        /* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less
        than 500 pixels */
        @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
            }
        }
    </style>
</head>

<body>
    <header class="shadow-out">
        <div class="container">
            <div class="section" style="justify-content: flex-start;">
                <div class="navbar">
                    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                    <a href="#"><i class="fa fa-fw fa-search"></i> Search</a>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>

                </div>
            </div>
            <div class="section">
                <h1 class="logo"><a href="">Magazine</a></h1>
            </div>
            <div class="section" style="justify-content: flex-end;">
                <div class="navbar">

                    <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <footer class="shadow-out">
        <div class="container">
            <div class="section">1</div>
            <div class="section">2</div>
            <div class="section">3</div>
        </div>
    </footer>
</body>

</html>