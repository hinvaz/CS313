<?php include '../view/header.php'; ?>
<main>

    <section>
        <h1>Yarn</h1>

                <table>
                    <tr>
                        <th>
                            <strong>Yarn Brand</strong>
                        </th>
                        <th>
                            <strong>Yarn Color</strong>
                        </th>
                        <th>
                            <strong>Yarn Weight</strong>
                        </th>
                        <th>
                            <strong>Yarn Amount</strong>
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                       <?php foreach ($yarns as $yarn) : ?>
                        <td>
                            <?php echo $yarn['yarnbrand']; ?>
                        </td>
                        <td>
                            <?php echo $yarn['yarncolor']; ?>
                        </td>
                        <td>
                            <?php echo $yarn['yarnweight']; ?>
                        </td>
                        <td>
                            <?php echo $yarn['yarnamount']; ?>
                        </td>   
                        <td>
                            <form action="index.php" method="post" id="yarn_edit">
                            <input type="hidden" name="action"
                                   value="show_edit_form_yarn">
                            <input type="hidden" name="yarnid"
                                   value="<?php echo $yarn['yarnid']; ?>">
                            <input type="submit" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="action"
                                       value="yarn_delete">
                                <input type="hidden" name="yarnid"
                                       value="<?php echo $yarn['yarnid']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
        <br /><br />
        <div class="bottomlinks">
            <a href="index.php?action=show_add_form_yarn">Add Yarn</a><br />
            <a href="index.php?action=list_supplies">View Supplies</a>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>