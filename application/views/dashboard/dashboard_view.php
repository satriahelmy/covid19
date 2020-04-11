<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Corona Dashboard
            <small>Worldwide</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Corona Dashboard</a></li>
            <li class="active">Worldwide</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dashboard Covid 19 Around Worldwide | Last Update : <?php echo date("Y-m-d H:i:s",strtotime($data->lastUpdate)); ?></h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="main-grid" class="table table-bordered table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>CONFIRMED</td>
                                    <td><?php echo $data->confirmed->value; ?></td>
                                </tr>
                                <tr>
                                    <td>RECOVERED</td>
                                    <td><?php echo $data->recovered->value; ?></td>
                                </tr>
                                <tr>
                                    <td>DEATH</td>
                                    <td><?php echo $data->recovered->value; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <br/>
                        <br/>
                    </div>
                </div>

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dashboard Covid 19 Around Worldwide</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="main-grid" class="table table-bordered table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td>CONFIRMED</td>
                                    <td><?php echo $data->confirmed->value; ?></td>
                                </tr>
                                <tr>
                                    <td>RECOVERED</td>
                                    <td><?php echo $data->recovered->value; ?></td>
                                </tr>
                                <tr>
                                    <td>DEATH</td>
                                    <td><?php echo $data->recovered->value; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>