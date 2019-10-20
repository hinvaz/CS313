<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Needle</h1>
        <form action="index.php" method="post" id="edit_needle_form">
            <input type="hidden" name="action" value="needle_edit">

            <label>Brand:</label>
            <input type="text" name="needlebrand" value="<?php echo $aneedle['needlebrand']; ?>"> <br>

            <input type="hidden" name="needleid" value="<?php echo $aneedle['needleid']; ?>">
            
            <label>Size:</label>
            <input type="text" name="needlesize" value="<?php echo $aneedle['needlesize']; ?>"><br>

            <label>Amount:</label>
            <input type="text" name="needleamount" value="<?php echo $aneedle['needleamount']; ?>"><br>

            <label>Type:</label>
            <input type="text" name="needletype" value="<?php echo $aneedle['needletype']; ?>"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=view_needle">View Needles</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>