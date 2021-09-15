
<div class="container mt-5">
<div class="card" >
  <div class="card-header">

  </div>
  <div class="card-body">
    <a href="index.php?page=product-create" type="button" class="btn btn-primary mb-3">Add New Product</a>
    
   
  <table class="table">
  <thead>



    <tr>
      <th scope="col">STT</th>
      <th scope="col">mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">thể loại</th>
      <th scope="col">Giá bán</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Mô tả món hàng</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($products as $product): ?>
    <tr>
      <th><?php echo $product['id'] ?></th>
      <td><?php echo $product['product_code'] ?></td>
      <td><?php echo $product['Product_name'] ?></td>
      <td><?php echo $product['Sectors'] ?></td>
      <th><?php echo $product['Price'] ?></th>
      <th><?php echo $product['Quantity'] ?></th>
      <th><?php echo $product['Date_created'] ?></th>
      <th><?php echo $product['Item_Description'] ?></th>
      <td><a href="index.php?page=product-update&id=<?php echo $product['id']?>" type="button" class="btn btn-warning">Edit</a></td>
     <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=product-delete&id=<?php echo $product['id']?>" type="button" class="btn btn-danger">Delete</a></td> 
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>
</div>     
 