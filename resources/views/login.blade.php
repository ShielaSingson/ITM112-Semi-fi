
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Guitar Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff;
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
        }

        .auth-left {
            width: 55%;
            background: linear-gradient(145deg, #f4efff, #e7dcff);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 50px;
            text-align: center;
        }

        .brand {
            position: absolute;
            top: 35px;
            left: 45px;
            font-size: 25px;
            font-weight: bold;
            color: #7651b5;
        }

        .auth-left h1 {
            font-size: 43px;
            font-weight: 700;
            color: #302344;
            line-height: 1.3;
            max-width: 650px;
        }

        .auth-left h1 span {
            color: #9165d8;
        }

        .guitar-art {
            font-size: 150px;
            margin-top: 25px;
            filter: drop-shadow(0 15px 15px rgba(80, 50, 120, 0.15));
        }

        .auth-left p {
            color: #6d6080;
            font-size: 16px;
            margin-top: 10px;
        }

        .auth-right {
            width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 45px;
        }

        .auth-form {
            width: 100%;
            max-width: 430px;
        }

        .auth-form h2 {
            font-size: 28px;
            font-weight: 700;
            color: #302344;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #8a8196;
            margin-bottom: 35px;
        }

        .form-control {
            height: 58px;
            border: 1px solid #ded6e9;
            border-radius: 14px;
            padding: 15px 18px;
            margin-bottom: 16px;
            font-size: 15px;
        }

        .form-control:focus {
            border-color: #9871d5;
            box-shadow: 0 0 0 3px rgba(152, 113, 213, 0.13);
        }

        .btn-auth {
            height: 55px;
            width: 100%;
            border: none;
            border-radius: 30px;
            background: #9871d5;
            color: white;
            font-size: 16px;
            font-weight: 600;
            margin-top: 8px;
            transition: 0.2s;
        }

        .btn-auth:hover {
            background: #8058c0;
            color: white;
        }

        .auth-link {
            color: #8058c0;
            text-decoration: none;
            font-weight: 600;
        }

        .auth-link:hover {
            text-decoration: underline;
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #aaa;
            margin: 28px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #e8e2ef;
        }

        .bottom-text {
            text-align: center;
            margin-top: 25px;
            color: #777;
        }

        @media (max-width: 850px) {
            .auth-left {
                display: none;
            }

            .auth-right {
                width: 100%;
                min-height: 100vh;
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="auth-container">

    <div class="auth-left">
        <div class="brand">🎸 Guitar Shop</div>

        <h1>
            Discover your sound.
            <br>
            &
            <br>
            <span>Play with passion.</span>
        </h1>

        <div class="guitar-art">🎸</div>

        <p>Find the guitar that fits your soul and speaks your music.</p>
    </div>

    <div class="auth-right">
        <div class="auth-form">

            <h2>Welcome</h2>
            <p class="subtitle">The king of music is here.</p>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login.process') }}" method="POST">
                @csrf

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Email address"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >

                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                    required
                >

                <button type="submit" class="btn btn-auth">
                    Log in
                </button>
            </form>

            <div class="divider">OR</div>

            <div class="bottom-text">
                Don't have an account?
                <a href="{{ route('register') }}" class="auth-link">
                    Create new account
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
