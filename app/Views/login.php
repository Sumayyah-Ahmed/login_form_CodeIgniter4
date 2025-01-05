<div class="card-body">
    <form method="post" action="<?= base_url("login"); ?>">
        <h1>Login Here</h1>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input name="email" required type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" required type="password" class="form-control" id="password" placeholder="password">
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="mb-3">
                <input type="submit" value="Login" class="btn btn-primary" />
            </div>
        </div>
    </form>
</div>

