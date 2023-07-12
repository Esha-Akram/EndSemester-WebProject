<?php
   require_once('../Includes/connect.php');
   $db = new Database();
 ?>
<h1 class="text-center text-secondary">All Products</h1>
<table class="table table-bordered mt-5">
    <thead class="bg-secondary text-light">
        <tr class="text-center">
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Price</th>
            <th>Product category</th>
            <th>Product Image</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-light text-secondary">
    <?php
     $serach = $db->search_products($key);
      foreach($search as $row){
        print("<tr class=\"text-center\" ><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>");
        print("<a href=\"single_product.php?id=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-eye text-success\"></i></a></td><td>");
        print("<a href=\"index.php?proid=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-pen-to-square text-warning\"></i></a></td><td>");
        print("<a href=\"delete_product.php?id=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-trash text-dark\"></i></a></td></tr>");
      }
    ?>
    </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled bg-warning">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active bg-warning"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>