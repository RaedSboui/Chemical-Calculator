
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
  integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
  crossorigin="anonymous"
/>

<form method="post" action="login.php">
    <div class="input-group mb-3">
        <input type="email" class="form-control" name="email_user" placeholder="Email">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control"  name="password_user" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">  
    <!-- /.col -->
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
    <!-- /.col -->
    </div>
    <input type="hidden" name="action" value="login">
    <input type="hidden" name="controller" value="User">
</form>