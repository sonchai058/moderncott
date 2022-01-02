<?php 
	$site = $this->webinfo_model->getOnceWebMain(); 
	$rows = $this->common_model->getTable('category'); 
	if (uri_seg(2) === 'product_details') {
		$cate = rowArray($this->common_model->get_where_custom('product', 'P_ID', uri_seg(3))); 
		$category = $cate['C_ID'];
	}
	else
		$category = uri_seg(3);
?>

<div class='dressmaking'>
	<div class="head"><div class="head_text"><span>สินค้าสั่งตัด</span></div></div>
	<ul><li <?php if (uri_seg(2) === 'dressmaking_view' || uri_seg(2) === 'dressmaking_details') { ?> class="active" <?php } ?> title="สินค้าสั่งตัด"><a href="<?php echo base_url('main/dressmaking_view'); ?>"><i class="fa fa-scissors"></i><span>สินค้าสั่งตัด</span></a></li></ul>
</div>