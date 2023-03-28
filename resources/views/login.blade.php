<html lang="en">
<head>
    <link rel="stylesheet" href="/login.css">
    <title>OurApp</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form action="/" method="post">
            @csrf
            <h1>Login</h1>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Username" />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" />
            <button>Login</button>
          </form>
        </div>
    </div>        
<script src="/f.js"></script>
</body>
</html>