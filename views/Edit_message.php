<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">ID:<?php echo $this->aData['message']->id ?>  ID-автора: <?php print_r($this->aData['message']->author) ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class=" col-md-9 col-lg-9 ">
                            <form action="edit_message" method="post">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Статус:</td>
                                        <!-- <td><input type="number" class="form-control-static" name="message_status" placeholder="<?php echo $this->aData['message']->status ?>"></td> -->
                                        <td><select name="message_status"">
                                            <option <? if($this->aData['message']->status == true): ?>selected="selected"<? endif; ?>value="1">Активно</option>
                                            <option <? if($this->aData['message']->status == false): ?>selected="selected"<? endif; ?> value="0">Неактивно</option>
                                        </select>
                                        </td>
                                        <td><input type="hidden"  name="message_id" value="<?php echo $this->aData['message']->id ?>"></td>
                                        <td><input type="checkbox"  name="delete" >Удалить</td>
                                    </tr>
                                    <tr>
                                        <textarea rows="10" cols="45" name="message_text"><?php echo $this->aData['message']->text ?></textarea>
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