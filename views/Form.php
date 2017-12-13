<div class="container">
    <div class="row">
        <form action="login" method="post">
            <div class="form">
                <input type="text" class="form-control-static" name="login" placeholder="Логин">
                <input type="text" class="form-control-static" name="pass" placeholder="Пароль">
            </div>
            <button type="submit" class="btn btn-default">Войти</button>
        </form>
        <?php if(User::isLoggedUser()): ?>
            <form action="logout" method="post">
                <button type="submit" class="btn btn-default">Выйти</button>
            </form>
        <? endif; ?>
    </div>
</div>