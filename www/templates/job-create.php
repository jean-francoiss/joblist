<?php include 'inc/header.php'; ?>
<h2 class="page-header">Create Job Listing</h2>
<form method="post" action="create.php">
    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company">
    </div>
    
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category">
        <option value="0">Escolha a categoria.</option>
        <?php foreach($categories as $category):?>
                <option value="<?= $category->id;?>"><?= $category->name;?></option>
        <?php endforeach; ?>
    </div>

    <div class="form-group">
        <label>Company</label>
        <input type="text" class="form-control" name="company">
    </div>

</form>
<?php include 'inc/footer.php'; ?>
