

<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('content'); ?>
    <div class="mt-4">
        <h1>Categories</h1>
        <form action="<?php echo e(route('categories.store')); ?>" method="POST" enctype="multipart/form-data" class="mb-4">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo:</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
            <div class="mb-3">
                <label for="categories" class="form-label">Categories:</label>
                <input type="text" class="form-control" id="categories" name="categories">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Categories</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($category->id); ?></td>
                        <td>
                            <?php if($category->photo): ?>
                                
                                <img src="<?php echo e(asset('img_categories/' . $category->photo)); ?>" alt="Category Photo" width="200px">
                            <?php else: ?>
                                <span class="text-muted">No Photo</span>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($category->categories); ?></td>
                        <td><?php echo e($category->price); ?></td>
                        <td><?php echo e($category->description); ?></td>
                        <td>
                            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\kuliah\semester 3\praktikum\Pemograman Web\hotel-app\resources\views\layout\index.blade.php ENDPATH**/ ?>