<?php
include_once __DIR__ . "/../Header.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title"><?=$title?></h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <th><button class="action"><a href="./add-categories">Thêm danh mục phẩm</a></button></th>
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tên sản danh mục</th>
                            </thead>
                            <tbody>
                                <?php foreach ($categories as $categories) : ?>
                                    <tr>
                                        <td><?= $categories->id ?></td>
                                        <td><?= $categories->categoryName ?></td>
                                        <td><a href="./detail-categori?id=<?=$categories->id?>">Chi tiết</a></td>
                                        <td>
                                            <button class="action"><a href="./update-categories?id=<?= $categories->id ?>">Update</a></button>
                                            <button class="action"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="./del-categories?id=<?= $categories->id ?>">Delete</a></button>
                                        </td>

                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once __DIR__ . "/../Footer.php";
?>