<?php
    include('partials/form-partial-header.php');
?>

<body>
    <div class="login-box">
        <div class=".container form-container">
            <h1 class="mb-5">Login</h1>
            <p>Make your account <a href="register-form.php">here!</a></p>
            <form action="" method="POST" class="form-control p-5">
                <div class="textbox">
                    <input type="email" placeholder="Email" name="email" class="form-control mb-2">
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Password" name="password" class="form-control mb-2">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
        </div>
    </div>

<?php 
    include('partials/footer.php');
?>