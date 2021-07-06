<html>
<head>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
	<title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <h2 class="login-header">Login</h2>
            <form method="POST" class="login-container" action="{{ route('login') }}">
                @csrf
                @if(session('message'))
                    <p class="danger">{{ session('message') }}</p>
                @endif
                <p>
                    <input type="text" placeholder="Username" name="username" required>
                </p>
                <p>
                    <input type="password" placeholder="Password" name="password" required>
                </p>
                <p>
                    <button type="Submit">Login</button>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
