<?php include 'clear_log.php'; ?>

<section>

  <div class="row">

    <div class="col-sm-2">
      <br>
      <a href="?mod=admin" class="btn btn-block btn-transparent"><?= $admin_text['users']; ?></a>
      <a href="?mod=admin&pg=log" class="btn btn-block btn-blue-3"><?= $admin_text['records']; ?></a>
      <a href="?mod=admin&pg=modules" class="btn btn-block btn-transparent"><?= $admin_text['modules']; ?></a>
      <a href="?mod=admin&pg=menus" class="btn btn-block btn-transparent"><?= $admin_text['menus']; ?></a>
      <a href="?mod=admin&pg=info" class="btn btn-block btn-transparent"><?= $admin_text['info']; ?></a>
    </div>

    <div class="col-sm-10">

      <div class="row">
        <div class="col-sm-8">
          <h2><?= $logs_text['title']; ?></h2>
        </div>
        <div class="col-sm-4">
          <br>
          <p class="text-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#clearlog" id="#clearlogbtn">
              <?= $logs_text['del']; ?>
            </button>
          </p>
        </div>
      </div>

      <br>

      <div class="panel panel-default">

        <div class="panel-heading">
          <form class="form-group" action="index.php" method="get">
            <div class="input-group">
              <input type="hidden" name="mod" value="admin">
              <input type="hidden" name="pg" value="log">
              <input type="text" class="form-control" name="search" placeholder="<?= $logs_text['input_search']; ?>">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><?= $logs_text['button_search']; ?></button>
              </span>
            </div>
          </form>
        </div>

        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td><strong><?= $logs_text['id']; ?></strong></td>
              <td><strong><?= $logs_text['username']; ?></strong></td>
              <td><strong><?= $logs_text['date']; ?></strong></td>
              <td><strong><?= $logs_text['ip']; ?></strong></td>
            </tr>
          </thead>
          <tbody>
            <?php include $PATH['module'].'logs.php'; ?>

    </div>

  </div>

</section>