
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Guitar Shop</title>

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
            padding: 35px;
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
            margin-bottom: 25px;
        }

        .form-label {
            color: #514662;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .form-control {
            height: 52px;
            border: 1px solid #ded6e9;
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 14px;
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
            margin-top: 12px;
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

        .bottom-text {
            text-align: center;
            margin-top: 22px;
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
            <span>starts </span>
            <br>
            Your musical journey
            
        </h1>

        <div class="guitar-art">🎸</div>

        <p>Create an account and discover the world of guitars and music.</p>
    </div>

    <div class="auth-right">
        <div class="auth-form">

            <h2>Create an account</h2>
            <p class="subtitle">And join the world of music.</p>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('register.process') }}" method="POST">
                @csrf

                <label class="form-label">Full Name</label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter your full name"
                    value="{{ old('name') }}"
                    required
                >

                <label class="form-label">Email Address</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter your email"
                    value="{{ old('email') }}"
                    required
                >

                <label class="form-label">Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="At least 8 characters"
                    minlength="8"
                    required
                >

                <label class="form-label">Confirm Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control"
                    placeholder="Re-enter your password"
                    minlength="8"
                    required
                >

                <button type="submit" class="btn btn-auth">
                    Create Account
                </button>
            </form>

            <div class="bottom-text">
                Already have an account?
                <a href="{{ route('login') }}" class="auth-link">
                    Log in
                </a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
