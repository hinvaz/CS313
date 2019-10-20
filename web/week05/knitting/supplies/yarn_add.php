<?php include '../view/header.php'; ?>
<main>
    <h1>Add Yarn</h1>
        <form action="index.php" method="post" id="add_yarn_form">
            <input type="hidden" name="action" value="yarn_add">

            <label>Brand:</label>
            <input type="text" name="yarnbrand"> <br>
            
            <label>Weight:</label>
            <input type="text" name="yarnweight"><br>

            <label>Amount:</label>
            <input type="text" name="yarnamount"><br>

            <label>Color:</label>
            <input type="text" name="yarncolor"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <div class="bottomlinks">
        <a href="index.php?action=view_yarn">View Yarns</a><br />
        <a href="index.php?action=list_supplies">View Supplies</a>
    </div>

</main>
<?php include '../view/footer.php'; ?>