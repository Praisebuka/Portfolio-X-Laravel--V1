<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Praisebuka - Personal Website
    </title>
    <link
        rel="stylesheet"
        href="d-rest.css"
    />
    
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
</head>

<body>
    <header>
        <!-- Navigation -->
        <nav class="top-menu-container">
            
            <div class="logo-header">
                <a href="/">
                    <img
                    src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                    alt="Portfolio-icon"
                    title="Logo personal portfolio"
                    />
                </a>
                </div>

            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="about">About</a>
                </li>
                <li>
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>


@yield('content-x')


    <!-- Footer -->
    <footer>
        <div class="container-footer">
            <img
                src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                alt="Portfolio-icon"
                title="Portfolio - Logo"
                />
            <p>
                This website was created by <a href="/">Praisebuka</a>
            </p>
        </div>
    </footer>
</body>
</html>