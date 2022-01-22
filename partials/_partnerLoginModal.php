<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Please enter your cridentionals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="partials/_partnerhandlelogin.php">
                <div class="modal-body">
                        <div class="mb-3">
                            <label for="login_partner_email" class="form-label">Email address</label>
                            <input type="email" class="form-control" required id="login_partner_email" name="partner_email"
                                aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>
                        <div class="mb-3">
                            <label for="login_partner_password" class="form-label">Password</label>
                            <input type="password" class="form-control" required id="login_partner_password"
                                name="partner_pass">
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit" value='log-in'>Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>