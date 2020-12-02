<?php if(auth()->guard()->guest()): ?>
<?php else: ?>
<div class="sidenav-menu">
    <div class="sidenav-head">
        <span class="title">Riwayat Pembelian</span>
        <button class="button button-close-sidenav"></button>
    </div>
    <div class="sidenav-body">
        <div class="sidenav-body-inner">
            <ul class="items">
                <?php $__currentLoopData = $riwayat_pembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="row row-sm">
                        <div class="col-4">
                            <div class="image">
                                <a href="<?php echo e(route('info-payment',$item->id)); ?>"><img
                                        src="<?php echo e(asset('assets/images/products/'.$item->gambar)); ?>" alt="--Alt--" /></a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="details">
                                <a href="<?php echo e(route('info-payment',$item->id)); ?>">
                                    <p><?php echo e(__($item->nama)); ?></p>
                                </a>
                                <a
                                    href="<?php echo e(route('info-payment',$item->id)); ?>"><span><?php echo e(__('Rp'.$item->total_harga)); ?></span><br></a>
                                <?php if($item->status_checkout == 'Menunggu Pembayaran'): ?>
                                <a href="<?php echo e(route('info-payment',$item->id)); ?>"><small
                                        class="text-danger"><?php echo e(_($item->status_checkout)); ?></small></a>
                                <?php endif; ?>
                                <?php if($item->status_checkout == 'Proses Pengiriman'): ?>
                                <a href="<?php echo e(route('info-payment',$item->id)); ?>"><small
                                        class="text-warning"><?php echo e(_($item->status_checkout)); ?></small></a>
                                <?php endif; ?>
                                <?php if($item->status_checkout == 'Diterima'): ?>
                                <a href="<?php echo e(route('info-payment',$item->id)); ?>"><small
                                        class="text-success"><?php echo e(_($item->status_checkout)); ?></small></a>
                                <?php endif; ?>
                                <?php if($item->status_checkout == 'Dibatalkan'): ?>
                                <a href="<?php echo e(route('info-payment',$item->id)); ?>"><small
                                        class="text-danger"><?php echo e(_($item->status_checkout)); ?></small></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>
<span class="sidenav-close"></span>
<?php endif; ?>
<?php /**PATH /home/witsudi/LaravelProject/project-ppl/resources/views/layouts/cartlist.blade.php ENDPATH**/ ?>