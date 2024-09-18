<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
            echo '<tr>
                        <th scope="row">'.$user->getUserID().'</th>
                        <td>'.$user->getUsername().'</td>
                        <td>'.$user->getEmail().'</td>
                    </tr>';
        }
        ?>
    </tbody>
</table>