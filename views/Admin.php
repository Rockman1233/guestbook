<div class="container">
    <p>Сообщения от пользователей: </p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Пользователь</th>
            <th>Текст</th>
            <th>Статус</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->aData as $message): ?>
                <tr>
                    <td><?php echo $message->login?></td>
                    <td><?php echo $message->text?>
                    <form action="editmessage" method="post">
                        <input type="hidden"  name="message_id" value="<?php echo $message->id?>">
                        <button type="submit" class="btn btn-default">Редактировать сообщение</button>
                    </form>
                    <td><? if($message->status):?><span class="glyphicon glyphicon-plus fa-3x"><? else:?><span class="glyphicon glyphicon-minus fa-3x"><?endif;?></td>
                </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>
<br>
<br>