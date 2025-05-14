<!-- Main Content -->
<div id="content">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5"><?= $view_bag['heading']?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="form-inline" action="" method="GET">
                <input type="text" name="search" id="search">
                <input type="submit" value="Search">
            </form>
        </div>
        <table class="table table-striped">
            <?php foreach($model as $item): ?>
                <tr>
                <td><a href="detail.php?term=<?= $item->id ?>"><?= $item->term ?></a></td>

                    <td><?= $item->definition ?></td>
                </tr>
            <?php endforeach ?>
        </table>
        
    </div>
</div>