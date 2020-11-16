<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="header-logo"><span>LOGO</span></div>
      <ul class="menu">
        <li class="el-megamenu el-megamenu-xs">
          <?php if(auth()->guard()->guest()): ?>
            <a href="<?php echo e(route('home')); ?>">
              <span class="text text-light">Home</span>
            </a>
          <?php else: ?>
            <a href="<?php echo e(route('dashboard')); ?>">
              <span class="text text-light">Home</span>
            </a>
          <?php endif; ?>
        </li>
        <li class="el-megamenu el-megamenu-lg">
        <a href="<?php echo e(url('shop')); ?>">
            <span class="text text-light">Shop</span>
            <i class="ti-angle-down hidden-lg-up"></i>
          </a>
        </li>
        <li class="el-megamenu el-megamenu-lg">
        <a href="<?php echo e(url('about')); ?>">
            <span class="text text-light">About Us</span>
            <i class="ti-angle-right hidden-lg-up"></i>
          </a>
        </li>
      </ul>
      <button class="button button-menu button-display-sidenav">
        <span></span>
      </button>
    </div>
    <div class="col-md-4 text-right">
      <div class="el-hover-search-bar">
        <button
          type="submit"
          class="button button-icon button-icon-search"
        >
          <img
            class="icon"
            src="<?php echo e(asset("assets/images/icons/search-light.svg")); ?>"
            alt="--Alternative--"
          />
        </button>
        <div class="el-hover-search-bar-box" id="xxx">
          <div class="form-item">
            <input
              type="text"
              placeholder="What are you looking for?"
            />
          </div>
        </div>
      </div>
      <?php if(auth()->guard()->guest()): ?>
      <?php else: ?>
        <button
          type="button"
          class="button button-icon button-icon-cart button-display-shopping-cart"
        >
          <img
            class="icon"
            src="<?php echo e(asset("assets/images/icons/shopping-cart-light.svg")); ?>"
            alt="--Alternative--"
          />
        </button>
      <?php endif; ?>
      <ul class="log-in-out" style="height: 100%;">
        <li class="el-megamenu el-megamenu-xs align-content-center" style="line-height: 0!important; height: 60px;">
          <button class="button button-icon">
            <img class="icon log-svg" src="<?php echo e(asset('assets/images/icons/login.png')); ?>" alt="">
            <?php if(auth()->guard()->guest()): ?>
            <?php else: ?>
              <label style="cursor: pointer" class="text-light font-weight-normal"><?php echo e($akun->username); ?></label>
            <?php endif; ?>
          </button>
          <i class="ti-angle-down hidden-lg-up"></i>
          <div class="el-megamenu-box">
            <ul class="el-list text-left">
              <?php if(auth()->guard()->guest()): ?>
                <li>
                  <a href="<?php echo e(route('login')); ?>">
                        <span class="text">Login</span>
                    </a>
                </li>
                <?php if(Route::has('register')): ?>
                  <li>
                    <a href="<?php echo e(route('register')); ?>">
                        <span class="text">Register</span>
                    </a>
                  </li>
                <?php endif; ?>
              <?php else: ?>
                <li>
                  <a href="<?php echo e(route('profile-user')); ?>">
                    <span class="text"><?php echo e(__('Profile')); ?></span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo e(route('logout')); ?>"><?php echo e(__('Logout')); ?></a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div><?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/layouts/mainmenu.blade.php ENDPATH**/ ?>