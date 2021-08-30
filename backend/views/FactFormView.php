<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">     
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit Fact</div>
        <div class="panel-body">
            <!-- muon upload duoc file thi phai co thuoc tinh enctype="multipart/form-data" -->
        <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
         
            <!-- end rows -->  
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Content</div>
                <div class="col-md-10">
                    <textarea name="content"><?php echo isset($record->content) ? $record->content:''; ?></textarea>
                    <script type="text/javascript">
                        CKEDITOR.replace("content");
                    </script>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
         
            <!-- end rows -->    
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Photo</div>
                <div class="col-md-10">
                    <input type="file" name="photo">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <?php if(isset($record->photo) && $record->photo != "" && file_exists("../assets/upload/img/".$record->photo)): ?>
                        <img src="../assets/upload/img/<?php echo $record->photo; ?>" style="width:100px;">
                    <?php endif; ?>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
        
            <!-- end rows -->
            <!-- rows -->
         
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