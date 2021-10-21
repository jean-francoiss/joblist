<?php include 'inc/header.php'; ?>

      <div class="jumbotron">
        <h1>Procurar Vagas</h1>
        <form action="">
          <select name="category" class="form-control">
              <option value="0">Escolha a categoria.</option>
              <?php foreach($categories as $category):?>
              <option value="<?= $category->id;?>"><?= $category->name;?></option>
              <?php endforeach; ?>
           </select>
        </form>
        <p class="lead">Página de trabalhos.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Inscreva-se hoje.</a></p>
      </div>
      <?php foreach($job as $jobs): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php echo $jobs->job_title; ?></h4>
          <p><?php echo $jobs->description;?></p>
        </div>
        <div class="col-md-2">
          <a class="btn btn-default" href="#">Veja</a>
        </div>
      </div>
      <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>