<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        
		<!-- add category rows here -->
		<table>        
            <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category['categoryID']; ?></td>
                <td><?php echo $category['categoryName']; ?></td>
                <td><form action="." method="post">
                    <input type="submit" value="Delete">
					 <input type="hidden" name="action"
                     value="delete_category">
					 <input type="hidden" name="category_id"
                     value="<?php echo $category['categoryID']; ?>">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
		
    </table>

<form action="index.php?action=add_category" method="post">
    <h2>Add Category</h2>
	<br />
    <label>Category Name</label>
    <input type="text" name="category_name" />
    <br>
	
	<input type="submit" value="Add Category" />
</form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>