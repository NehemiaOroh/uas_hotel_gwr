<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
         * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'PlusJakartaSans-Regular', sans-serif;
            background-image: url('/images/room.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #ffffff;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        
        .logo {
            margin-bottom: 1.5rem;
            width: 100%;
            max-width: 100px;
            height: auto;
        }

        .logo a {
            display: block;
            width: 100%;
            height: 100%;
            transition: opacity 0.2s;
        }

        .logo a:hover {
            opacity: 0.8;
        }

        .logo img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .container {
            background-color: #ffffff;
            color: #201c1c;
            padding: clamp(1rem, 5vw, 2rem);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            font-family: 'Zodiak-Black', sans-serif;
        }

        h1 {
            font-family: 'Zodiak-Black';
            color: #201c1c;
            margin-bottom: 1.5rem;
            font-size: clamp(1.5rem, 4vw, 2rem);
            text-align: center;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        label {
            display: block;
            font-size: clamp(0.875rem, 2vw, 0.9rem);
            margin-bottom: 0.5rem;
            color: #201c1c;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            font-size: clamp(0.875rem, 2vw, 1rem);
            border: 1px solid #c89c64;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #c89c64;
            box-shadow: 0 0 5px rgba(200, 156, 100, 0.5);
        }

        .error {
            color: #e63946;
            font-size: clamp(0.75rem, 1.5vw, 0.8rem);
            margin-top: 0.25rem;
        }

        .checkbox-group {
            margin: 1.25rem 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .checkbox-group input[type="checkbox"] {
            width: 1rem;
            height: 1rem;
            margin: 0;
        }

        .checkbox-group label {
            display: inline;
            margin: 0;
            font-size: clamp(0.8rem, 2vw, 0.9rem);
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
        }

        .actions a {
            font-size: clamp(0.8rem, 2vw, 0.9rem);
            color: #201c1c;
            text-decoration: none;
            transition: color 0.2s;
        }

        .actions a:hover {
            color: #c89c64;
        }

        button {
            background-color: #c89c64;
            color: #ffffff;
            font-size: clamp(0.875rem, 2vw, 1rem);
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s;
            white-space: nowrap;
        }

        button:hover {
            background-color: #a57949;
        }

        /* Media Queries */
        @media screen and (max-width: 480px) {
            .actions {
                flex-direction: column-reverse;
                align-items: stretch;
                gap: 1rem;
            }

            .actions button {
                width: 100%;
            }

            .actions a {
                text-align: center;
            }

            .container {
                padding: 1.5rem;
            }
        }

        @media screen and (max-width: 320px) {
            body {
                padding: 0.5rem;
            }

            .container {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="logo">
        <a href="{{ url('/') }}">
            <img src="images/logo.png" alt="Logo">
        </a>
    </div>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <div class="error">{{ $errors->first('email') }}</div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <div class="error">{{ $errors->first('password') }}</div>
            </div>

            <!-- Remember Me -->
            <div class="checkbox-group">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Remember me') }}</label>
            </div>

            <div class="actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                @endif
                <button type="submit">{{ __('Log in') }}</button>
            </div>
        </form>
    </div>
</body>
</html>