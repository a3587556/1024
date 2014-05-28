<?php $this->need('header_post.php'); ?>
<div class="container">
<?php while($this->next()): ?>
	<div class="post">
		<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<p id="date"><?php $this->date('F j, Y'); ?></p>
	    <hr style="border:1px dashed #CDBA96" />
		<div class="entry_text">
		    <?php $this->content(); ?>
		</div>
    </div>
<?php endwhile; ?>
<hr style="border:1px dashed #CDBA96" />
<p id="relatedposts"><?php _e('相关文章'); ?></p>
<?php $this->related(5)->to($relatedPosts); ?>
<ul>
<?php while ($relatedPosts->next()): ?>
<li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
<?php endwhile; ?>
</ul>
</div>

</body>
</html>