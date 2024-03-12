        <form action="register.php" method="post" autoComplete="off">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
              </div>
              <div class="col-12">
                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
              </div>
              <div class="col-12">
                <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
              </div>
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" required>
              </div>
              <div class="col-12">
                <label for="dob" class="form-label">Date Of Birth <span class="text-danger">*</span></label>
                <input type="date" class="form-control" name="dob" id="dob" placeholder="dob" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password" id="password" value="" required>
              </div>
              <div class="col-12">
                <label for="confirm_password" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" value="" required>
              </div>
              <input type="hidden" id="user_type" name="user_type" value="user">
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" type="submit">Sign up</button>
                </div>
              </div>
            </div>
        </form>