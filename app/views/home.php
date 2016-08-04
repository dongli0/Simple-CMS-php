<?php require VIEW_ROOT.'templates/header.php'; ?>
<?php //require VIEW_ROOT.'templates/body.php'; ?>
	<div class="page-header">
	        <h1>My CMS</h1>
	        
      		</div>
	<?php if (empty($pages)) : ?>
		<p>No page at the moment.</p>
	<?php else: ?>
		<ul>
			
			<?php foreach ($pages as $page) : ?>
				<li><a href="<?php echo BASE_URL; ?>page.php?page=<?php echo $page['slug']; ?>"><?php echo$page['label'] ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>

<?php require VIEW_ROOT.'templates/footer.php'; ?>