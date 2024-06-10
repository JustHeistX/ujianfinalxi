

<?php $__env->startSection('title', 'Home Product'); ?>

<?php $__env->startSection('contents'); ?>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Produk yang tersedia</h1>
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Tambahkan Produk</a>
    </div>
    <hr />
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Product Code</th>
                    <th>Deskripsi</th>
                    <th>Expired Date</th>
                    <th>Jenis Satuan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($product->count() > 0): ?>
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                            <td class="align-middle"><img src="<?php echo e(asset('/storage/images/'.$rs->images )); ?>" height="40" alt=""></td>
                            <td class="align-middle"><?php echo e($rs->title); ?></td>
                            <td class="align-middle"><?php echo e($rs->stock); ?></td>
                            <td class="align-middle"><?php echo e($rs->product_code); ?></td>
                            <td class="align-middle"><?php echo e($rs->description); ?></td>
                            <td class="align-middle"><?php echo e($rs->expired_date); ?></td>
                            <td class="align-middle"><?php echo e($rs->jenis_satuan); ?></td>
                            <td class="align-middle">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?php echo e(route('products.show', $rs->id)); ?>" type="button" class="btn btn-secondary">Detail</a>
                                    <a href="<?php echo e(route('products.edit', $rs->id)); ?>" type="button" class="btn btn-warning">Edit</a>
                                    <form action="<?php echo e(route('products.destroy', $rs->id)); ?>" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger m-0">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td class="text-center" colspan="9">Produk tidak ditemukan</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="">
        <?php echo e($product->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tugasakhirXI\resources\views/products/index.blade.php ENDPATH**/ ?>