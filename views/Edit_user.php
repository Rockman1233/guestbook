<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">ID:<?php echo $this->aData['user']->id ?>  Login: <?php print_r($this->aData['user']->login) ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-9 col-lg-9 ">
                            <form action="edituser" method="post">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Статус:</td>
                                        <td><select name="is_admin"">
                                            <option <? if($this->aData['user']->is_admin == true): ?>selected="selected"<? endif; ?>value="1">Администратор</option>
                                            <option <? if($this->aData['user']->is_admin == false): ?>selected="selected"<? endif; ?> value="0">Пользователь</option>
                                        </select>
                                        </td>
                                        <p>Email:  <input type="text" name="email" value="<?php echo $this->aData['user']->email ?>"></p>
                                        <p>Homepage:  <input type="text" name="homepage" value="<?php echo $this->aData['user']->homepage ?>"></p>
                                        <td><input type="hidden"  name="user_id" value="<?php echo $this->aData['user']->id ?>"></td>
                                        <? if($_SESSION['user']->id != $this->aData['user']->id): ?>
                                        <td><input type="checkbox" name="delete" >Удалить</td>
                                        <? endif; ?>
                                    </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-default">Редактировать</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>