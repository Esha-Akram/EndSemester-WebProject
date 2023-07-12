 <?php
   require_once('../Includes/connect.php');
   $db = new Database();
 ?>
 <h1 class="text-center text-secondary">All Categories</h1>
<table class="table table-bordered mt-5">
    <thead class="bg-secondary text-light">
        <tr class="text-center">
            <th>Category ID</th>
            <th>Category Title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-light text-secondary">
    <?php
      $display = $db->fetchAllCategories();
      foreach($display as $row){
        print("<tr class=\"text-center\" ><td>$row[0]</td><td>$row[1]</td><td>");
        print("<a href=\"index.php?cateid=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-pen-to-square text-warning\"></i></a></td><td>");
        print("<a href=\"delete_category.php?id=$row[0]\" class=\"text-secondary\"><i class=\"fa-solid fa-trash text-dark\"></i></a></td></tr>");
      }
    ?>
    </tbody>
</table>
