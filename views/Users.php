<div class="container">
    <p>Сообщения от пользователей: </p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Пользователь (login)</th>
            <th>Пароль</th>
            <th>Email</th>
            <th>Homepage</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->aData as $user): ?>
                <tr>
                    <td><?php echo $user->login?></td>
                    <td><?php echo $user->pass?></td>
                    <td><?php echo $user->email?></td>
                    <td><?php echo $user->homepage?></td>
                    <td><form action="edituser" method="post">
                            <input type="hidden"  name="user_id" value="<?php echo $user->id?>">
                            <button type="submit" class="btn btn-default">Редактировать пользователя</button>
                            </form></td></td>
                </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>
<br>
<br>