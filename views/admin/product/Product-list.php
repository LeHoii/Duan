<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title"><?=$title?></h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <th><button class="action"><a href="./add-product">Thêm sản phẩm</a></button></th>
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>MÔ tả</th>
                                <th>Ngày Thêm</th>
                                <th>Số lượt xem</th>
                                <th>Loại sản phẩm</th>
                                <th>Số lượng</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <?php foreach ($product as $product) : ?>
                                    <tr>
                                        <td><?= $product->id ?></td>
                                        <td><?= $product->name ?></td>
                                        <td><?= $product->Price ?></td>
                                        <td><img width="100px" height="50px" src="./img/<?= $product->image ?>" alt=""></td>
                                        <td><?= $product->detail ?></td>
                                        <td><?= $product->Date_added ?></td>
                                        <td><?= $product->views ?></td>
                                        <td><?php foreach($categories as $cate){
                                            echo($cate->id===$product->cate_id) ? $cate->categoryName : '';
                                        }?></td>
                                        <td><?= $product->quantity ?></td>
                                        <td>
                                            <button class="action"><a href="./update-product?id=<?= $product->id ?>">Update</a></button>
                                            <button class="action"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không')" href="./del-product?id=<?= $product->id ?>">Delete</a></button>
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