<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email</title>
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

        .message {
            font-size: clamp(0.875rem, 2vw, 0.9rem);
            color: #201c1c;
            margin-bottom: 1.25rem;
            line-height: 1.5;
        }

        .success-message {
            color: #10b981;
            font-size: clamp(0.875rem, 2vw, 0.9rem);
            margin-bottom: 1.25rem;
            line-height: 1.5;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1.5rem;
            gap: 1rem;
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

        .logout-button {
            background: none;
            color: #201c1c;
            text-decoration: underline;
            padding: 0.5rem;
            font-size: clamp(0.8rem, 2vw, 0.9rem);
        }

        .logout-button:hover {
            background: none;
            color: #c89c64;
        }

        /* Media Queries */
        @media screen and (max-width: 480px) {
            .actions {
                flex-direction: column;
                gap: 1rem;
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
        <img src="images/logo.png" alt="Logo">
    </div>
    <div class="container">
        <h1>Verify Email</h1>

        <div class="message">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="success-message">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="actions">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-button">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</body>
</html>