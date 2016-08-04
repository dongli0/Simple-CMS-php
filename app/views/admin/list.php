<?php require VIEW_ROOT.'templates/header.php'; ?>
<?php //require VIEW_ROOT.'templates/body.php'; ?>
	<div class="page-header">
        <h1>My CMS Admin Page</h1>
        <p class="lead">This is Admin Page You can Edit, Delete as well as Add Web Pages .</p>
      </div>
	<?php if (empty($pages)) : ?>
		<p>No pages at the mements.</p>
	<?php else: ?>
		<div class="row">
	        <div class="col-md-2">Label</div>
	        <div class="col-md-3">Title</div>
	        <div class="col-md-2">Slug</div>
	        <div class="col-md-2"></div>
	        <div class="col-md-2"></div>
      	</div>
      	<?php foreach ($pages as $page ) :?>
      		<div class="row">
	        <div class="col-md-2"><?php echo $page['label']; ?></div>
	        <div class="col-md-3"><?php echo $page['title']; ?></div>
	        <div class="col-md-2"><?php echo $page['slug']; ?></div>
	        <div class="col-md-2"><a href="">Edit</a></div>
	        <div class="col-md-2"><a href="">Delete</a></div>

      	</div>

      	<?php endforeach; ?>
	<?php endif; ?>
	<a href="<?php echo BASE_URL; ?>admin/add.php" class="btn btn-default">Add New Page</a>

<?php require VIEW_ROOT.'templates/footer.php'; ?>