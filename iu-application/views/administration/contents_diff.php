<script type="text/javascript">

function remove(id, name)
{
	iu_confirm('Are you sure you want to remove template file "'+name+'"?\n\n<br/><br/>Note that removing template from here won`t remove template file, only it`s reference in the database.', function() {
		window.location.href = '<?php echo site_url(); ?>/administration/templates/remove/'+id;
	});
}

function revert(fid, rid)
{
	iu_confirm("Are you sure you want to revert revision #"+rid+" (shown on the left side)?", function() {
		location.href = IU_SITE_URL + '/administration/contents/revert/'+fid+'/'+rid;
	});
}

</script>


<?php if ($template->config['has_header']): ?>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>View Differences</h5>
                <span>You are viewing differences for content "<?php echo $content->div; ?>" between old version (created <?php echo relative_time($revision->created); ?>) and current version (updated <?php echo relative_time($content->updated); ?>)</span>
            </div>
            <div class="subnavtitle">
				<a href="javascript:;" onclick="revert(<?php echo $content->id; ?>, <?php echo $revision->id; ?>);" class="button blueB" style="margin: 5px;"><span>Restore this revision</span></a>
				<a href="<?php echo site_url('administration/contents/edit/'.$content->id.'/'.$content->div); ?>" title="" class="button greyishB" style="margin: 5px;"><span>Back to content</span></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="line"></div>
<?php endif; ?>

    <!-- Main content wrapper -->
    <div class="wrapper">
		<div class="widget">
            <div class="title"><img src="<?php echo $template->base_url(); ?>images/icons/dark/docs.png" alt="" class="titleIcon" /><h6>View Differences</h6></div>
	        <?php echo $differences; ?>
        </div>
    </div>