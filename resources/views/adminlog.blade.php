<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/css/sdg2.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <title>BETTA | Admin Log In</title>
</head>

<body>


<div class="admin-login-page" style="--bg-image: url('{{ asset('images/aimg.jpg') }}')">

    <div class="admin-login-card">

        <div class="admin-logo">
            BETTA
        </div>

        <h1>Admin Login</h1>

        <p class="login-description">
            Sign in to access the BETTA administration panel.
        </p>

        <form action="/admin" method="GET">

            <div class="form-group">
                <label for="email">
                    Email<span>*</span>
                </label>

                <input
                    type="email"
                    id="email"
                    class="form-control"
                    placeholder="Type your email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">
                    Password<span>*</span>
                </label>

                <input
                    type="password"
                    id="password"
                    class="form-control"
                    placeholder="Type your password"
                    required
                >
            </div>

            <div class="remember-row">

                <div class="remember-check">
                    <input type="checkbox" id="remember">

                    <label for="remember">
                        Remember me
                    </label>
                </div>

                <a href="#">
                    Forgot Password?
                </a>

            </div>

            <button type="submit" class="admin-signin-btn">
                Sign In
            </button>

        </form>

        <div class="back-link">
            <a href="{{ route('home') }}">
                ← Back to BETTA
            </a>
        </div>

    </div>

</div>



</body>
</html>