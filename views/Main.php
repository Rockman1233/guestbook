<?php if($_SERVER['REQUEST_URI'] !='/sentmessage'): ?>
<div class="container">
    <p>Сообщения от пользователей: </p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Пользователь</th>
            <th>Текст</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->aData as $message): ?>
        <?php If($message->status): ?>
        <tr>
            <td><?php echo $message->login?></td>
            <td><textarea readonly rows="7" cols="170"><?php echo $message->text?></textarea></td>
        </tr>
        <? endif; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination?>
</div>
<?php endif; ?>
<div class="container">
    <form action="../sentmessage" method="post">
        <div class="form">
         <?php if($_SERVER['REQUEST_URI'] !='/sentmessage'): ?>
         <?php if(!User::isLoggedUser()): ?>
         <p><input type="text" class="form-control-static" name="author" placeholder="Имя"> <input type="email" class="form-control-static" name="email" placeholder="Электронная почта"> <input type="text" class="form-control-static" name="homepage" placeholder="Домашняя страница"></p>
         <? else: ?>
         <input type="hidden" class="form-control-static" name="author" value="<?php echo $_SESSION['user']->login?>"> <input type="hidden"  name="email" class="form-control-static" value="<?php echo $_SESSION['user']->email?>"> <input type="hidden" class="form-control-static" name="homepage" value="<?php echo $_SESSION['user']->homepage?>"></p>
         <? endif; ?>
         <?php $_SESSION['captcha'] = simple_php_captcha(); ?>
         <?php echo $_SESSION['captcha']['code']; ?>
         <?php echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">'; ?>
         <p><input type="text" class="form-control-static" name="captcha" placeholder="Сюда писать капчу"></p>
         <input type="hidden" class="form-control-static" name="browser" value="<?php echo $_SERVER["HTTP_USER_AGENT"]?>">
         <input type="hidden" class="form-control-static" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']?>">
         <p><textarea name="text" cols="40" rows="5" placeholder="Сообщение"></textarea></p>
         <button type="submit" class="btn btn-default">Отправить</button>
         </div>
         <? endif; ?>
         <?php echo $this->aData['system_message'] ?>
    </form>
</div>
<br>
<br>
<br>
<br>
