
<!-- Main Content -->
<div id="content">
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1 class="mt-5"><?= $view_bag['heading'] ?? '' ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <a href="create.php">Create New Term</a>
        </div>
        <table class="table table-striped">
            <?php foreach($model as $item): ?>
                <tr>
                    <td><a href="detail.php?term=<?= $item->terms ?>"><?= $item->terms ?></a></td>
                    <td><?= $item->defination ?></td>
                </tr>
            <?php endforeach ?>
        </table>
        
    </div>
</div>