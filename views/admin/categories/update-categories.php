<?php
include_once __DIR__ . "/../Header.php";
?>

<form action="" class="form-product" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputEmail1">Danh mục sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục sản phẩm" name="categoryName" value="<?=$categories->categoryName?>">
        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục sản phẩm" name="id" value="<?=$categories->id?>">
        <span class="erros"><?= $erros['categoryName'] ?? '' ?></span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once __DIR__ . "/../Footer.php";
?>