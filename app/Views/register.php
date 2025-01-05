<div class="card-body">
    <form method="post" action="<?= base_url("register"); ?>">
        <h1>Register Here</h1>
        
        <div class="col-md-4">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input name="firstname" required type="text" class="form-control" id="firstname" placeholder="Your First Name">
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input name="lastname" required type="text" class="form-control" id="lastname" placeholder="Your Last Name">
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth (optional)</label>
                <input name="dob" type="date" class="form-control" id="dob" placeholder="Select your date of birth">
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="mb-3">
                <label for="contact" class="form-label">Contact Number</label>
                <input name="contact" required type="tel" class="form-control" id="contact" placeholder="e.g. +1234567890" pattern="^\+?[0-9]{10,15}$" title="Please enter a valid contact number (e.g., +1234567890)">
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="mb-3">
                <label for="emergency_contact" class="form-label">Emergency Contact</label>
                <input name="emergency_contact" required type="tel" class="form-control" id="emergency_contact" placeholder="e.g. +1234567890" pattern="^\+?[0-9]{10,15}$" title="Please enter a valid contact number (e.g., +1234567890)">
            </div>
        </div>
        
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
                <input type="submit" value="Register" class="btn btn-primary w-50" />
                <input type="reset" value="Reset" class="btn btn-secondary w-25" />
            </div>
        </div>
    </form>
</div>

