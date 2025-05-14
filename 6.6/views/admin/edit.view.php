<!-- Main Content -->
<div id="content">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Edit Term</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <input type="hidden" name="original-term" value="<?= $model['model']->terms ?>">
                <div class="form-group">
                    <label for="term">Term:</label>
                    <!-- Access the "model" key before accessing its properties -->
                    <input class="form-control" type="text" name="term" id="term" value="<?= $model['model']->terms ?>">
                </div>
                <div class="form-group">
                    <label for="defination">Definition:</label>
                    <!-- Access the "model" key before accessing its properties -->
                    <textarea class="form-control" type="text" name="defination" id="defination"><?= $model['model']->defination ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Edit">
                </div>
            </form>
        </div>
    </div>
</div>
