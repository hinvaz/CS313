<?php include '../view/header.php'; ?>
<main>
    
    <section>
        <h1>Needles</h1>

        <table>
                    <tr>
                        <th>
                            <strong>Needle Brand</strong>
                        </th>
                        <th>
                            <strong>Needle Size</strong>
                        </th>
                        <th>
                            <strong>Needle Amount</strong>
                        </th>
                        <th>
                            <strong>Needle Type</strong>
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($needles as $needle) : ?>
                        <td>
                            <?php echo $needle['needlebrand']; ?>
                        </td>
                        <td>
                            <?php echo $needle['needlesize']; ?>
                        </td>
                        <td>
                            <?php echo $needle['needleamount']; ?>
                        </td>
                        <td>
                            <?php echo $needle['needletype']; ?>
                        </td> 
                        <td>
                            <form action="index.php" method="post" id="needle_edit">
                            <input type="hidden" name="action"
                                   value="show_edit_form_needle">
                            <input type="hidden" name="needleid"
                                   value="<?php echo $needle['needleid']; ?>">
                            <input type="submit" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action"
                                       value="needle_delete">
                                <input type="hidden" name="needleid"
                                       value="<?php echo $needle['needleid']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <br /><br />
        <div class="bottomlinks">        
            <a href="index.php?action=show_add_form_needle">Add Needle</a><br/>
            <a href="index.php?action=list_supplies">View Supplies</a>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>