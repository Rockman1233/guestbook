<div class="container">
    <div class="row">
        <?php if(!User::isLoggedUser()): ?>
            <form action="login" method="post">
            <div class="form">
                <input type="text" class="form-control-static" name="login" placeholder="Логин">
                <input type="text" class="form-control-static" name="pass" placeholder="Пароль">
            </div>
            <button type="submit" class="btn btn-default">Войти</button>
        </form>
        <a type="button" href="create" class="btn btn-default">Регистрация</a>
        <? endif; ?>
        <?php if(isset($this->aData['system_message'])): ?>
        <? echo $this->aData['system_message'] ?>
        <? endif;?>
        <?php if(User::isLoggedUser()): ?>
            <form action="../logout" method="post">
                <button type="submit" class="btn btn-default">Выйти</button>
            </form>
        <? endif; ?>
    </div>
</div>
