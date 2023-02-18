<?php
    include('partials/form-partial-header.php');
?>

<body>
    <div class="login-box">
        <div class=".container form-container">
            <h1 class="mb-5">Register</h1>
            <p>Log in to your account <a href="login-form.php">here!</a></p>
            <form action="" method="POST" class="form-control p-5">
                <input type="text" placeholder="Full Name" name="name" class="form-control mb-2">
                <input type="email" placeholder="Email" name="email" class="form-control mb-2">
                <input type="password" placeholder="Password" name="password" class="form-control mb-2">
                <button type="submit" class="btn btn-primary" name="Register">Login</button>
            </form>
        </div>
    </div>

<?php 
    include('partials/footer.php');
?>