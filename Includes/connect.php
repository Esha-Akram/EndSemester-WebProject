<?php
class Database{
    private $db;

    function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=final_project","root","");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    function admin_registration($un, $em, $upas)
    {
        $sql = "INSERT INTO `admin` (`admin_id`,`admin_name`,`admin_email`,`admin_password`) VALUES (NULL,?,?,?);";
        if ($_POST["password"] === $_POST["confirm_password"]) 
        {
            $result = $this->db->prepare($sql);
            $result->execute(array($un, $em, $upas));
            if($result->rowCount() == 1)
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("You are registred successfully.Please, Login!");';
                echo 'window.location.href = "admin_login.php";';
                echo '</script>';  
            }
            else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Sorry, registration is failed.Please, Try again!");';
                echo 'window.location.href = "admin_login.php";';
                echo '</script>';         
            }
        } 
        else{
            echo '<script type="text/javascript">'; 
            echo 'alert("Please, Enter same passwords");';
            echo 'window.location.href = "admin_registration.php";';
            echo '</script>';
        }
    }
    function admin_login($un, $upas){
        $sql = "SELECT * FROM `admin` WHERE `admin_name` = ? AND `admin_password` = ?;";
            $result = $this->db->prepare($sql);
            $result->execute(array($un, $upas));
            if($result->rowCount() == 1){
                $data = $result->fetch();
                header('location:index.php');
                //print("<br>login Okay");
             }
            else{
                echo '<script type="text/javascript">'; 
                echo 'alert("Invalid crerdentials!, Login is failed");';
                echo 'window.location.href = "admin_login.php";';
                echo '</script>';  
             }
        }
//-----------CRUD CATEGORY---------------
    function add_categories($ct)
    {
        $sql = "INSERT INTO `categories` (`category_id`,`category_title`) VALUES (NULL,?);";
        $result = $this->db->prepare($sql);
        $result->execute(array($ct));
        if($result->rowCount() == 1)
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Category is inserted successfully!");';
            echo 'window.location.href = "index.php";';
            echo '</script>';  
        }
        else {
                echo '<script type="text/javascript">'; 
                echo 'alert("Sorry, insertion is failed.Please, Try again!");';
                echo 'window.location.href = "form_category.php";';
                echo '</script>';         
            }
    } 
    function fetchAllCategories()
    {
        $sql = "SELECT * FROM `categories` ";
        $result = $this->db->prepare($sql);
        $result->execute(array());
        return $result;
    } 
    function get_categories($id){
        $query = "SELECT * FROM `categories` WHERE category_id = ? ";
        $result = $this->db->prepare($query);
        $result->execute(array($id));
        $row = $result->fetch();
        return $row;
    }
    function update_categories($catid, $title)
    {
        try{
            $sql = "UPDATE `categories` SET category_title = ? WHERE category_id = ? ";
            $result = $this->db->prepare($sql);
            $result->execute(array($title, $catid));
            if($result)
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("Category is updated successfully!");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            } 
            else{
                echo '<script type="text/javascript">'; 
                echo 'alert("Something went wrong, Cannot updated category!")';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            }           
        }
        catch(PDOException $e){
            echo $e->getMessage();
                return false;         
            }
    } 
    function delete_category($id)
    {
        $sql = "DELETE FROM categories WHERE category_id = ? ";
        $result = $this->db->prepare($sql);
        $result->execute(array($id));
        if($result)
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("category is deleted successfully!");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            }
            else{
                echo '<script type="text/javascript">'; 
                echo 'alert("Something went wrong. Cannot deleted category");';
                echo 'window.location.href = "index.php";';
                echo '</script>'; 
            } 
    } 
//-----------CRUD PRODUCT---------------
    function add_products($tit,$des,$pri,$pc, $img)
    {
        $sql = "INSERT INTO `products` (product_id, product_title, product_discription, 
        product_price, category_id, product_image) VALUES (NULL, ?, ?, ?, ?, ?);";
        $result = $this->db->prepare($sql);
        $result->execute(array($tit,$des,$pri,$pc, $img));
        if($result->rowCount() == 1)
        {
            echo '<script type="text/javascript">'; 
            echo 'alert("Product is inserted successfully!");';
            echo 'window.location.href = "index.php";';
            echo '</script>';  
        }
        else{
            echo '<script type="text/javascript">'; 
                echo 'alert("Something went wrong, Product is not inserted!");';
                echo 'window.location.href = "index.php";';
                echo '</script>'; 
        }
    }
        function fetchAllProducts()
        {
            $sql = "SELECT `product_id`,`product_title`,`product_price`,`category_id`,`product_image` FROM `products` ";
            $result = $this->db->prepare($sql);
            $result->execute(array());
            return $result;
        } 
        function delete_product($id)
        {
            $sql = "DELETE FROM products WHERE product_id = ?";
            $result = $this->db->prepare($sql);
            $result->execute(array($id)); 
            if($result)
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("Product is deleted successfully!");';
                echo 'window.location.href = "index.php";';
                echo '</script>';
            }
            else{
                echo '<script type="text/javascript">'; 
                echo 'alert("Sorry, deletion is failed.Please, Try again!");';
                echo 'window.location.href = "index.php";';
                echo '</script>'; 
            }
        }
        function get_products($id){
            $query = "SELECT * FROM `products` WHERE product_id = ? ";
            $result = $this->db->prepare($query);
            $result->execute(array($id));
            $row = $result->fetch();
            return $row;
        } 
        function update_product($pid,$protit,$proesc,$propri,$procat,$pimg)
        {
            $sql = "UPDATE `products` SET product_title = ? , product_discription = ? ,
            product_price = ? , category_id = ? , product_image = ? WHERE product_id = ? ";
            $result = $this->db->prepare($sql);
            $result->execute(array($protit,$proesc,$propri,$procat,$pimg,$pid));
            if($result)
            {
                echo '<script type="text/javascript">'; 
                echo 'alert("product is updated successfully!");';
                echo 'window.location.href = "index.php";';
                echo '</script>';  
            }
            else {
                    echo '<script type="text/javascript">'; 
                    echo 'alert("Something went wrong. Cannot update product");';
                    echo 'window.location.href = "form_category.php";';
                    echo '</script>';         
                }
            } 
            // function search_products($key){
            //     $sql= "SELECT * FROM `products` WHERE `product_title` LIKE ? or `product_price` LIKE ? or `category_id` LIKE ? ";
            //     $result = $this->db->prepare($sql);
            //     $result->execute(array($key));
            //     if($result){
            //         header('Location:view_search.php');
            //     }
            //     else{
            //         echo '<script type="text/javascript">'; 
            //         echo 'alert("Something went wrong. Record not found");';
            //         echo 'window.location.href = "index.php";';
            //         echo '</script>'; 
            //     }
            // }    
}
?>