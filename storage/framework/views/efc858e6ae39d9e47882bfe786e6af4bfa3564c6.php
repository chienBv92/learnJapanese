<?php $__env->startSection('title'); ?>
    Thêm danh mục sản phẩm
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Thêm danh mục sản phẩm</div>
            <div class="card-body">
                <form role="form" action="<?php echo e(route('category.store')); ?>" method="post">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group col-md-12">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-label-group">
                                    <label for="firstName">Tên danh mục:</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Tên danh mục"
                                           required="required" autofocus="autofocus">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-label-group">
                            <label>Trạng thái:</label>
                            <select name="status" class="form-control col-md-3">
                                <option value="1">Hiển thị</option>
                                <option value="0">Không hiển thị</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>