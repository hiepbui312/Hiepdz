<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit category</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
             <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Display Home</div>
                <div class="col-md-10">
                    <input type="number" value="<?php echo isset($record->displayhome) ? $record->displayhome:''; ?>" name="displayHome" class="form-control" required min="0" max="1">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>