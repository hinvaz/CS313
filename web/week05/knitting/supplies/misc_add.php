<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Miscellaneous</h1>
        <form action="index.php" method="post" id="show_add_misc_form">
            <input type="hidden" name="action" value="misc_add">

            <label>Name:</label>
            <input type="text" name="miscname"> <br>

            <input type="hidden" name="miscid">
            
            <label>Amount:</label>
            <input type="text" name="miscamount"><br>

            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=view_misc">View Yarns</a>
        <a href="index.php?action=list_supplies">View Supplies</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>