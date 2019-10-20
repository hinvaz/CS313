<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Yarn</h1>

        <form action="index.php" method="post" id="edit_yarn_form">
            <input type="hidden" name="action" value="yarn_edit">
            
            <label>Brand:</label>
            <input type="text" name="yarnbrand" value="<?php echo $ayarn['yarnbrand']; ?>"> <br>

            <input type="hidden" name="yarnid" value="<?php echo $ayarn['yarnid']; ?>">
            
            <label>Weight:</label>
            <input type="text" name="yarnweight" value="<?php echo $ayarn['yarnweight']; ?>"><br>

            <label>Amount:</label>
            <input type="text" name="yarnamount" value="<?php echo $ayarn['yarnamount']; ?>"><br>

            <label>Color:</label>
            <input type="text" name="yarncolor" value="<?php echo $ayarn['yarncolor']; ?>"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=view_yarn">View Yarns</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>