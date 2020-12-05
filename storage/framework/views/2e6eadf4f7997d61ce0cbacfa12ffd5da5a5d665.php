<div class="sidenav-menu">
    <div class="sidenav-head">
        <span class="title">LOGO</span>
        <button class="button button-close-sidenav"></button>
    </div>
    <div class="sidenav-body">
        <div class="sidenav-body-inner">
            <ul class="menu">
                <li>
                    <a href="<?php echo e(route('home')); ?>">
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo e(url('shop')); ?>">
                        <span class="text">Toko</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('blog')); ?>">
                        <span class="text">Blog</span>
                    </a>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                <?php else: ?>
                <?php if($akun->status == 'mitra'): ?>
                <li>
                    <a href="<?php echo e(route('ajuan-produk')); ?>">
                        <span class="text">Ajukan Produk Anda</span>
                    </a>
                </li>
                <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/layouts/sidemainmenu.blade.php ENDPATH**/ ?>