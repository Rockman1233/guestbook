<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $this->aData['Car']->mark.' '.$this->aData['Car']->model.' ID: '.$this->aData['Car']->car_id ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../foto/<?php echo $this->aData['Car']->foto ?>" class="img-circle img-responsive"> </div>

                        <div class=" col-md-9 col-lg-9 ">
                            <form action="edit" method="post" enctype="multipart/form-data">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Ваш Email:</td>
                                        <td><input type="email" class="form-control-static" name="cost_less_30_inc" placeholder="<?php echo $this->aData['Car']->cost_less_30_inc ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Ваша страничка:</td>
                                        <td><input type="text" class="form-control-static" name="cost_more_31" placeholder="<?php echo $this->aData['Car']->cost_more_31 ?>"></td>
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