<?php 
/**
* 第一个typecho 主题
* @package 1024
* @author 1024
* @version 0.1
* @link http://typecho.org
*/
error_reporting(E_ALL);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
$this->need('header.php');
?>
<!--//背景
<div class="bg" style="FILTER: alpha(opacity=100); opacity: 1">
<img src="usr/themes/1024/img/3754313239466827106.jpg" style="width: auto; height: auto; margin-left: 0px; visibility: visible; opacity: 1;">
</div>-->
<!--//显示文章-->
<div class="container">
<?php while($this->next()): ?>
    <div class="post">
		<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<p id="date"><?php $this->date('F j, Y'); ?></p>
	    <hr style="border:1px dashed #B0C4DE" />
		<div class="entry_text">
		    <?php $this->content('Continue Reading...'); ?>
		</div>
    </div>
<?php endwhile; ?>
</div><!--container-->
<div id="navigation">
<?php $this->pageNav(); ?>
</div><!-- /navigation -->

<script language="javascript">
$('a[href]').removeAttr("href");
</script>

</body>
</html>



