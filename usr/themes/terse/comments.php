<div id="comments"> 
<?php if($this->allow('comment')): ?>
<!-- ��˵���ۿ� start -->
	<div class="ds-thread" data-thread-key="<?php echo $this->cid;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url=""></div>
<!-- ��˵���ۿ� end -->
<!-- ��˵����JS���� start (һ����ҳֻ�����һ��) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php $this->options->duoshuoName() ?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- ��˵����JS���� end -->

<?php else: ?>
<h4><?php _e('�����ѹر�'); ?></h4> 
<?php endif; ?> 
</div>