
<form id="formAuthentication" class="mb-3" action="<?php echo site_url('ChefServiceController/Ajouter'); ?>" method="POST">
                <div class="mb-3">
                  <label for="username" class="form-label">Matricule</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="matricule"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="motdepasse"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Service</label>
                    <select class="form-select" id="inputGroupSelect01" name="service">
                        <option selected>Choose...</option>
                        <?php foreach($services as $service) { ?>
                            <option value="<?php echo $service['idservice'] ?>"><?php echo $service['nom_service'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100">Sign up</button>
              </form>