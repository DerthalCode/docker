
<?php require 'view/_partials/head.view.php';?>
<div class="container">
    <div class="card">
        <div class="card-header">
            TODO FORM
        </div>
        <?php if(isset($error)): ?>
            <?php foreach($error as $k => $e): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?=$e;?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endforeach ?>    
        <?php endif ?>    
        <form method="post">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Uzduoties pavadinimas" name="subject">
        </div>
        <div class="form-group">
            <select class="form-control" name="priority">
                <option selected disabled>Prioritetas</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="form-control">Atlikimo data:</label>
        <input type="date" class="form-control" name="dueDate">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit" name="save">Saugoti</button>
    </div>
        </form>
    
</div>
<?php require 'view/_partials/htmlEnd.php';?>