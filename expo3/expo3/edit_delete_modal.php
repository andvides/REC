<!-- ver -->
<div class="modal fade" id="verArticulo_<?php echo $row['cod_trabajo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Articulo registrado</h4></center>
            </div>
            <div class="modal-body">	
           
           <?php
           //<object data="data:application/pdf;base64,<?php echo base64_encode($row['articulo']);" type="application/pdf" style="height:500px;width:100%"></object>
         //print base64_decode($row['articulo']); 
        
           ?>
           
 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
            </div>

        </div>
    </div>
</div>

