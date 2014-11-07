<ul class="pagination pull-right">
	<?php $i=0; ?>
	<?php	while ($i < $total_pages) : ?>
		<?php	$i += 1; ?>
		<?php if($i == $current_page) : ?>
			<li class="active"><a href="#"><?php echo $i; ?><span class="sr-only">(current)</span></a></li>
		<?php else : ?>
			<li><a href="./?pg=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php endif; ?>
	<?php	endwhile; ?> 
</ul>