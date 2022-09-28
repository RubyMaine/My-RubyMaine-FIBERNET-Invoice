<?php require_once('./../../config.php') ?>
<?php 
 $qry = $conn->query("SELECT * FROM `services_list` where  id = '{$_GET['id']}' ");
 if($qry->num_rows > 0){
     foreach($qry->fetch_assoc() as $k => $v){
         $$k=$v;
     }
 }
?>
   <style>
    #uni_modal .modal-footer{
        display:none;
    }
</style> 
<div class="container-fluid" id="print_out">
    <div id='transaction-printable-details' class='position-relative'>
        <div class="row">
            <fieldset class="w-100">
                <div class="col-12">
                    
                    <dl>
                        <dt class="text-info"> Имя: </dt>
                        <dd class="pl-3"><?php echo $name ?></dd>
                        <dt class="text-info"> Описание: </dt>
                        <dd class="pl-3"><?php echo isset($description) ? $description : '' ?></dd>
                        <dt class="text-info"> Цена: </dt>
                        <dd class="pl-3"><?php echo isset($price) ? number_format($price,2) : '' ?></dd>
                        <dt class="text-info"> Статус: </dt>
                        <dd class="pl-3">
                            <?php if($status == 1): ?>
                                <span class="badge badge-success rounded-pill"> Активный </span>
                            <?php else: ?>
                                <span class="badge badge-danger rounded-pill"> Неактивный </span>
                            <?php endif; ?>
                        </dd>
                    </dl>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-12">
        <div class="d-flex justify-content-end align-items-center">
            <button class="btn btn-dark btn-flat" type="button" id="cancel" data-dismiss="modal"> Закрывать </button>
        </div>
    </div>
</div>
    

<script>
    $(function(){
		$('.table td,.table th').addClass('py-1 px-2 align-middle')
    })
</script>