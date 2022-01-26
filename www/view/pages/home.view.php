<?php require 'view/_partials/head.view.php';?>
<div class="container">
    <div class="card">
        <div class="card-header">
            TODO app
        </div>
        <div class="card-header">
            <a class="btn bnt-primary" href="/add-task">Nauja uzduotis</a>
        </div>
       
        <ul class="list-group list-group-flush"> 
            <?php foreach($tasks->allTasks() as $task):?>
            <li class="list-group-item">
                <?php if ($task['status']==1): ?>
                    <span class="padaryta"><?=$task['subject'];?></span>
                <?php else: ?>
                    <span><?=$task['subject'];?></span>
                <?php endif ?>
                <?php if($task['status']==1): ?>
                    <span class="badge bg-success">Padaryta</span>
                <?php else:?>
                    <span class="badge bg-danger">Nepadaryta</span>
                <?php endif?>
                <?=$task['dueDate'];?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uzduotis-<?=$task['id'];?>">
                Šalinti
                </button>
                <?php if($task['status']==1): ?>   
                  <?php  else:?>
                <a href="/set-complete/id/<?=$task['id'];?>" class="btn btn-sm btn-success">Atlikti</a>
                <?php endif?>
            </li>
                <!-- Modal -->
                <div class="modal fade" id="uzduotis-<?=$task['id'];?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     Ar tikrai norite ištrinti <?=$task['subject'];?> ?
                    </div>
                    <div class="modal-footer">
                        <a href="/delete-task/id/<?=$task['id'];?>" class="btn btn-success">Patvirtinti</a>
                        <button type="button" class="btn-danger" data-bs-dismiss="modal">Atšaukti</button>
                    </div>
                    </div>
                </div>
                </div>
            <?php endforeach?>
        </ul>
    </div>
</div>
<style>
    .padaryta{
        text-decoration: line-through;
    }
</style>
<?php require 'view/_partials/htmlEnd.php';?>
