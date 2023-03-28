<html lang="en">
<head>
    <link rel="stylesheet" href="/login.css">
    <title>OurApp</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form action="/login" method="post">
            @csrf
            <h1>Create an Account</h1>
            <label for="nama">Nama</label>
            <input type="text" id="name" name="name" placeholder="Nama"  />
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Username" />
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" />
            <label for="ConPassword">Confirm password</label>
            <input type="password" id="ConPassword" name="ConPassword" placeholder="Confirm password" />
            <button>Register</button>
          </form>
        </div>
    </div>        
<script src="/f.js"></script>
</body>
</html>