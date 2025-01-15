<?php if($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="Pagination Navigation" class="Pagination">
        
        <?php if($paginator->onFirstPage()): ?>
        <span class="">
            <?php echo __('pagination.previous'); ?>

        </span>
        <?php else: ?>
        <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="">
            <?php echo __('pagination.previous'); ?>

        </a>
        <?php endif; ?>

        
        <?php if($paginator->hasMorePages()): ?>
        <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" class="">
            <?php echo __('pagination.next'); ?>

        </a>
        <?php else: ?>
        <span class="">
            <?php echo __('pagination.next'); ?>

        </span>
        <?php endif; ?>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\moham\Herd\smilepro\resources\views/vendor/pagination/simple-tailwind.blade.php ENDPATH**/ ?>