<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_SESSION['user']->login.' ID: '.$_SESSION['user']->id ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-9 col-lg-9 ">
                            <form action="personal" method="post">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>E-mail:</td>
                                        <td><input type="email" class="form-control-static" name="email" value="<?php echo $_SESSION['user']->email ?>"</td>
                                    </tr>
                                    <tr>
                                        <td>Домашняя страничка:</td>
                                        <td><input type="text" class="form-control-static" name="homepage" value="<?php echo $_SESSION['user']->homepage ?>"</td>
                                    </tr>
                                    <tr>
                                        <td>Текущий пароль:</td>
                                        <td><input type="text" class="form-control-static" name="pass" value="<?php echo $_SESSION['user']->pass ?>"</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-default">Редактировать</button>
                                <?php if($_SESSION['user']->is_admin): ?>
                                <p>Вы являетесь администратором портала:</p>
                                <a type="button" href="moderation" class="btn btn-default">Модерация сообщений</a>
                                <a type="button" href="users" class="btn btn-default">Список пользователей</a>
                                <? endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

