<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($categories as $category) {
            echo '<tr> <th scope="row">' . $category->getCategoryID() . '</th>
            <td>' . $category->getCategoryName() . '</td></tr>';
        }
        ?>
    </tbody>
</table>
