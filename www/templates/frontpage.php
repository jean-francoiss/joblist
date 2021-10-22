<?php include 'inc/header.php'; ?>
      <div class="jumbotron">
        <h1>Procurar Ocupações</h1>
        <form method="GET" action="index.php">
          <select name="category" class="form-control">
              <option value="0">Escolha a categoria.</option>
              <?php foreach($categories as $category):?>
              <option value="<?= $category->id;?>"><?= $category->name;?></option>
              <?php endforeach; ?>
           </select>
           <p class="lead">Página de trabalhos.</p>
           <p><a class="btn btn-lg btn-success" value="FIND" role="button">Inscreva-se hoje.</a></p>
        </form>
      </div>
      <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $job->job_title; ?></h4>
          <p><?php echo $job->description; ?></p>
        </div>
        <div class="col-md-2">
          <a class="btn btn-default" href="#">Veja</a>
        </div>
      </div>
      <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>