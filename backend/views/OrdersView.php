<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">    
    <div class="panel panel-primary">
        <div class="panel-heading">List Orders</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>check in</th>
                    <th>check out</th>
                    <th>room id</th>
                    <th>rooms</th>
                    <th>adults</th>
                    <th>kids</th>
                    <th>Price</th>
                    <th>email</th>
                    <th>chu thich</th>                    
                </tr>
                <?php foreach($listRecord as $rows): ?>
	            <tr>
	            	<th><?php echo $rows->hoten; ?></th>
                    <th><?php echo $rows->dienthoai; ?></th>
                    <th><?php echo $rows->check_in; ?></th>
                    <th><?php echo $rows->check_out; ?></th>
                    <th><?php echo $rows->room_id; ?></th>
                    <th><?php echo $rows->rooms; ?></th>
                    <th><?php echo $rows->adults; ?></th>
                    <th><?php echo $rows->kids; ?></th>
                    <th><?php echo $rows->price; ?></th>
                    <th><?php echo $rows->email; ?></th>
                    <th><?php echo $rows->chuthich; ?></th>       
	            </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item">
                    <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <a href="index.php?controller=users&action=read&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                    <?php endfor; ?>
                </li>
            </ul>
        </div>
    </div>
</div>