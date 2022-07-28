<div itemscope itemtype="https://schema.org/WebSite" class="r menu-right sf">
	<meta itemprop="url" content="<?php echo esc_url(home_url('/')); ?>"/>
	<form itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
		<meta itemprop="target" content="<?php echo esc_url(home_url('/')); ?>?s={s}"/>
		<input itemprop="query-input" type="text" name="s" id="s" placeholder="<?php if(!is_search()){ echo 'keyword';} ?>" value="<?php if(is_search()){ echo get_search_query();} ?>"/>
<button type="submit">search</button>
	</form>
</div>