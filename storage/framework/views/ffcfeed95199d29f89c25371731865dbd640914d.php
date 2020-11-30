<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="header-logo"><span>WG FARM</span></div>
            <ul class="menu">
                <li class="el-megamenu el-megamenu-xs">
                    <?php if(auth()->guard()->guest()): ?>
                        <a href="<?php echo e(route('home')); ?>">
                            <span class="text text-light">Beranda</span>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('dashboard')); ?>">
                            <span class="text text-light">Beranda</span>
                        </a>
                    <?php endif; ?>
                </li>
                <li class="el-megamenu el-megamenu-lg">
                    <a href="<?php echo e(url('shop')); ?>">
                        <span class="text text-light">Toko</span>
                        <i class="ti-angle-down hidden-lg-up"></i>
                    </a>
                </li>
                <li class="el-megamenu el-megamenu-lg">
                    <a href="<?php echo e(route('blog')); ?>">
                        <span class="text text-light">Blog</span>
                        <i class="ti-angle-right hidden-lg-up"></i>
                    </a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                    <?php if($akun->status == 'mitra'): ?>
                        <li class="el-megamenu el-megamenu-lg">
                            <a href="<?php echo e(route('ajuan-produk')); ?>">
                                <span class="text text-light">Ajukan Produk Anda</span>
                                <i class="ti-angle-right hidden-lg-up"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
            <button class="button button-menu button-display-sidenav">
                <span></span>
            </button>
        </div>
        <div class="col-md-4 text-right">
            <?php if(auth()->guard()->guest()): ?>
            <?php else: ?>
                <button type="button" class="button button-icon button-icon-cart button-display-shopping-cart">
                    <img class="icon" src="<?php echo e(asset("assets/images/icons/shopping-cart-light.svg")); ?>"
                         alt="--Alternative--" />
                </button>
            <?php endif; ?>
            <ul class="log-in-out" style="height: 100%;">
                <li class="el-megamenu el-megamenu-xs align-content-center"
                    style="line-height: 0!important; height: 60px;">
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
                                <?php if($akun->status == 'mitra'): ?>
                                    <li>
                                        <a href="<?php echo e(route('riwayat-ajuan-mitra')); ?>">
                                            <span><?php echo e(__('Riwayat Ajuan Produk')); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
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
</div>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/layouts/mainmenu.blade.php ENDPATH**/ ?>