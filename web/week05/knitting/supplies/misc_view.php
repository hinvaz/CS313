<?php include '../view/header.php'; ?>
<main>
    
    <section>
        <h1>Miscellaneous</h1>
        
        
        <table>
                    <tr>
                        <th>
                            <strong>Name</strong>
                        </th>
                        <th>
                            <strong>Amount</strong>
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($miscs as $misc) : ?>
                        <td>
                            <?php echo $misc['miscname']; ?>
                        </td>
                        <td>
                            <?php echo $misc['miscamount']; ?>
                        </td>  
                        <td>
                            <form action="index.php" method="post" id="misc_edit">
                            <input type="hidden" name="action"
                                   value="show_edit_form_misc">
                            <input type="hidden" name="miscid"
                                   value="<?php echo $misc['miscid']; ?>">
                            <input type="submit" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action"
                                       value="misc_delete">
                                <input type="hidden" name="miscid"
                                       value="<?php echo $misc['miscid']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>    
                <br /><br />
        <div class="bottomlinks">
            <a href="index.php?action=show_add_form_misc">Add Miscellaneous</a><br />
            <a href="index.php?action=list_supplies">View Supplies</a>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>