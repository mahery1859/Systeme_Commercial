<form action="<?php echo site_url('LoginController/Login'); ?>" method="POST">
                <div class="mb-3">
                  <label >Email</label>
                  <input
                    type="text"
                    name="email"
                    placeholder="Enter your email"
                    autofocus
                  />
                </div>
                <div >
                  <div >
                    <label>Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div >
                    <input
                      type="password"
                      name="motdepasse"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    />
                    <span></span>
                  </div>
                </div>
                <div >
 
                <div >
                  <button type="submit">Sign in</button>
                </div>
              </form>