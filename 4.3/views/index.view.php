<!-- Main Content -->
<div id="content">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Glowsary</h1>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped">
            <?php foreach($model as $item): ?>
                <tr>
                    <td><?= $item->terms ?></td>
                    <td><?= $item->defination ?></td>
                </tr>
            <?php endforeach ?>
        </table>
        
    </div>
</div>