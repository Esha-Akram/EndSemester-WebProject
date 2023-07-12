<?php
   require_once('../Includes/connect.php');
   $db = new Database();
 ?>
<h1 class="text-center text-secondary">All Products</h1>
<table id="datatableId" class="table table-bordered mt-5">
    <thead class="bg-secondary text-light">
        <tr class="text-center">
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Product category</th>
            <!-- <th>View</th> -->
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-light text-secondary">
    <?php
      $display = $db->fetchAllProducts();
      foreach($display as $row){  
        print("<tr class=\"text-center\" ><td>$row[0]</td><td>$row[1]</td><td><img src=\"$row[4]\" height=\"100\" width=\"100\"></td><td>$row[2]$</td><td>$row[3]</td><td>");
        // print("<a href=\"#myModal?id=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-eye text-success\"></i></a></td><td>");
        print("<a href=\"index.php?proid=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-pen-to-square text-warning\"></i></a></td><td>");
        print("<a href=\"delete_product.php?id=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-trash text-dark\"></i></a></td></tr>");
      }    
    ?>
    </tbody>
</table>



<!-- <nav aria-label="Page navigation example">
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
</nav> -->
<!-- Modal
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
      </div>
      <div class="modal-body">       
<style>.embed-container { 
  position: relative; padding-bottom: 56.25%; height: 0; 
  overflow: hidden; max-width: 100%; } .embed-container iframe, 
  .embed-container object, .embed-container embed { 
    position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
<div class='embed-container'>
      <iframe src='https://www.youtube.com/embed/s0RI4IXKE_o' frameborder='0' allowfullscreen></iframe></div>  
      </div>

    </div>
  </div>
</div> -->