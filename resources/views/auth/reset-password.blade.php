<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'PlusJakartaSans-Regular', sans-serif;
            background-color: black;
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
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

        input {
            width: 100%;
            padding: 0.75rem;
            font-size: clamp(0.875rem, 2vw, 1rem);
            border: 1px solid #c89c64;
            border-radius: 4px;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        input:focus {
            border-color: #c89c64;
            box-shadow: 0 0 5px rgba(200, 156, 100, 0.5);
        }

        .error {
            color: #e63946;
            font-size: clamp(0.75rem, 1.5vw, 0.8rem);
            margin-top: 0.25rem;
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
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
                justify-content: stretch;
            }

            button {
                width: 100%;
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
        <h1>Reset Password</h1>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
                <div class="error">{{ $errors->first('email') }}</div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                <div class="error">{{ $errors->first('password') }}</div>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                <div class="error">{{ $errors->first('password_confirmation') }}</div>
            </div>

            <div class="actions">
                <button type="submit">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</body>
</html>