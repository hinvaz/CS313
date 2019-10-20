<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Miscellaneous</h1>
        <form action="index.php" method="post" id="edit_misc_form">
            <input type="hidden" name="action" value="misc_edit">

            <label>Name:</label>
            <input type="text" name="miscname" value="<?php echo $amisc['miscname']; ?>"> <br>

            <input type="hidden" name="miscid" value="<?php echo $amisc['miscid']; ?>">
            
            <label>Amount:</label>
            <input type="text" name="miscamount" value="<?php echo $amisc['miscamount']; ?>"><br>

            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <div class="bottomlinks">
        <a href="index.php?action=view_misc">View Miscellaneous</a>
    </div>

</main>
<?php include '../view/footer.php'; ?>