  
  <style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
}

.login-container {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 24px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    margin-bottom: 5px;
    display: block;
    font-weight: bold;
    color: #666;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: border-color 0.3s;
}

input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #007bff;
    outline: none;
}

.remember-me {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.remember-me input {
    width: auto;
    margin-right: 10px;
}

.btn {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

.register-link, .reset-link {
    margin-top: 15px;
}

.register-link a, .reset-link a {
    color: #007bff;
    text-decoration: none;
}

.register-link a:hover, .reset-link a:hover {
    text-decoration: underline;
    color: #0056b3;
}

  </style>

  
<!-- Login Form Section -->
<div class="login-container">
        <h2>Login to Your Account</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <p class="reset-link"><a href="{{ route('password.request') }}">Forgot your password?</a></p>
    </div>


