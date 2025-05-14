<!-- Main Content -->
<div id="content">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Delete Term</h1>
        </div>
    </div>
    <div class="row">
        Are you sure you want to delete <?= $model['model']->terms ?>
    </div>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <input type="hidden" name="term" value="<?= $model['model']->terms ?>">
                <div class="form-group">
                    <input type="submit" value="Delete">
                </div>
            </form>
        </div>
    </div>
</div>
