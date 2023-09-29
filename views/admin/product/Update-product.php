<?php
include_once __DIR__ . "/../Header.php";
?>

<form action="" class="form-product" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" name="id" value="<?=$product->id?>">
        <label for="exampleInputEmail1">Tên sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên sản phẩm" name="name" value="<?=$product->name?>">
        <span class="erros"><?= $erros['name'] ?? '' ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Giá sản phẩm</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Giá sản phẩm" name="Price" value="<?=$product->Price?>">
        <span class="erros"><?= $erros['Price'] ?? '' ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Ảnh sản phẩm</label>
        <img width="100px" height="50px" src="./img/<?=$product->image?>" alt="">
        <input type="file" class="" id="exampleInputPassword1" placeholder="Ảnh sản phẩm" name="image"> <br>
        <span class="erros"><?= $erros['image'] ?? '' ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Chi tiết sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Chi tiết sản phẩm" name="detail" value="<?=$product->detail?>">
        <span class="erros"><?= $erros['name'] ?? '' ?></span>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Loại sản phẩm</label>
        <select name="cate_id" id="" class="form-control">
            <?php foreach ($categories as $cate) : ?>
                <option value="<?= $cate->id ?>"><?= $cate->categoryName ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Số lượng</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Số lượng" name="quantity" value="<?=$product->quantity?>">
        <span class="erros"><?= $erros['quantity'] ?? '' ?></span>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
include_once __DIR__ . "/../Footer.php";
?>