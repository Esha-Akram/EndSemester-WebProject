<?php
    require_once('../Includes/connect.php');
    $db = new Database();

    if(!isset($_GET['cateid'])){
        echo 'error';
    }
    else{
        $id = $_GET['cateid'];
        $data = $db->get_categories($id);
   
?>
<div class="container mt-3">
    <h1 class="text-center">Update Category</h1>
    <form action="update_category.php" method="post" class="text-center">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <input type="hidden" value="<?= $data['category_id']?>" class="form-control" name="category_id" required="required">
        <div class="form-outline w-50 mb-4 m-auto">
            <label for="category_title" class="form-label">Category Title</label>
        <!-- <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span> -->
            <input type="text" id="category_title" value="<?= $data['category_title']?>" class="form-control" name="category_title" required="required">
        </div>
        <div class="form-outline w-50 mb-4 m-auto">
            <input type="submit" class="p-3 my-3 border-0 text-secondary bg-warning" name="update_categories" value="Update Categories">
        </div>
        <!-- <button class="bg-warning " >Insert Categories</button> -->
    </form>
    <?php }?>
</div>