<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php __($page_title) ?><?php __($community_name) ?> (Powered by Addictive Community)</title>
	<base href="<?php __($community_url) ?>">
	<!-- META -->
	<meta name="generator" content="Addictive Community <?php echo VERSION ?>">
	<meta name="description" content="<?php __($meta_description) ?>">
	<link rel="icon" href="favicon.ico">
	<!-- CSS -->
	<link rel="stylesheet" href="themes/<?php __($theme) ?>/css/main.css">
	<link rel="stylesheet" href="thirdparty/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="thirdparty/fancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="thirdparty/select2/select2.css">
	<!-- JS -->
	<script src="thirdparty/jquery/jquery.min.js"></script>
	<script src="thirdparty/tinymce/tinymce.min.js"></script>
	<script src="thirdparty/fancybox/jquery.fancybox.pack.js"></script>
	<script src="thirdparty/select2/select2.js"></script>
	<script src="resources/main.js"></script>
	<?php echo $this->head ?>
</head>
<body>
	<!-- HEADER -->
	<div id="topbar">
		<div class="wrapper">
			<div class="fleft">
				<a href="<?php __($website_url) ?>" target="_blank">
					<?php __($website_name) ?>
				</a>
			</div>
			<div class="fright">
				<a href="admin/" target="_blank">Admin CP</a>
				<a href="search"><?php __("SEARCH") ?></a>
				<a href="members"><?php __("MEMBERLIST") ?></a>
				<a href="calendar"><?php __("CALENDAR") ?></a>
				<a href="help"><?php __("HELP") ?></a>
			</div>
			<div class="fix"></div>
		</div>
	</div>
	<div id="logo">
		<div class="wrapper">
			<a href="#"><img src="themes/<?php __($theme) ?>/images/logo.png" class="logo" alt="Addictive Community"></a>
			<div id="search">
				<form action="search" method="get" class="validate">
					<input type="text" name="q" size="25" class="required" value="<?php echo Html::Request("q") ?>" placeholder="<?php __("SEARCH_BOX") ?>">
					<input type="submit" value="OK">
				</form>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div id="breadcrumb"><a href="<?php __($community_url) ?>"><?php __($community_name) ?></a> <?php __($breadcrumb) ?></div>
	</div>

	<!-- CONTENT -->
	<div class="wrapper">
		<div class="container">
			<div class="sidebar">
				<div class="sidebar-background">
					<?php if($member_id == 0): ?>
						<div class="sidebar-item">
							<div class="user">
								<div class="user-info">
									<b><?php __("SIDEBAR_WELCOME") ?></b>
									<a class="fancybox fancybox.ajax" href="login"><?php __("SIDEBAR_LOGIN") ?></a> &middot; <a href="register" class="highlight"><?php __("SIDEBAR_C_ACCOUNT") ?></a>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="sidebar-item">
							<div class="user">
								<div class="avatar">
									<?php __(Html::Crop($member_info['avatar'], 30, 30, "img")) ?>
								</div>
								<div class="user-info">
									<b><a href="profile/<?php echo $member_info['m_id'] ?>" title="<?php __("SIDEBAR_PROFILE", array($member_info['username'])) ?>"><?php __($member_info['username']) ?></a></b>
									<a href="usercp"><?php __("SIDEBAR_USERCP") ?></a> &middot; <a href="messenger"><?php __("SIDEBAR_INBOX", array($unread_messages)) ?></a> &middot; <a href="logout"><?php __("SIDEBAR_LOGOUT") ?></a>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="sidebar-item">
						<div class="title"><?php __("SIDEBAR_ROOMS") ?></div>
						<div class="list">
							<?php foreach($sidebar_rooms as $k => $v): ?>
								<div class="item">
									<a href="room/<?php echo $sidebar_rooms[$k]['r_id'] ?>">
										<?php echo $sidebar_rooms[$k]['name'] ?>
									</a>
									<span><?php echo $sidebar_rooms[$k]['threads'] ?></span>
									<?php if($sidebar_rooms[$k]['password']): ?><i class="fa fa-lock"></i><?php endif; ?>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="sidebar-item">
						<div class="title"><?php __("SIDEBAR_MEMBERS_ONLINE") ?></div>
						<div class="text">
							<span class="subtitle"><?php __("SIDEBAR_MEMBER_COUNT", array($member_count)) ?></span>
							<div class="online-list"><?php echo $member_list ?></div>
							<span class="subtitle" style="margin-top: 10px"><?php __("SIDEBAR_GUEST_COUNT", array($guests_count)) ?></span>
						</div>
					</div>
					<div class="sidebar-item">
						<div class="title"><?php __("SIDEBAR_STATISTICS") ?></div>
						<div class="text">
							<span class="stats-name fleft"><?php __("SIDEBAR_S_THREADS") ?></span><b class="fright"><?php echo $stats['threads'] ?></b><br>
							<span class="stats-name fleft"><?php __("SIDEBAR_S_REPLIES") ?></span><b class="fright"><?php echo $stats['replies'] ?></b><br>
							<span class="stats-name fleft"><?php __("SIDEBAR_S_MEMBERS") ?></span><b class="fright"><?php echo $stats['members'] ?></b><br>
							<span class="stats-name fleft"><?php __("SIDEBAR_S_LAST") ?></span><b class="fright"><a href="profile/<?php echo $stats['lastmemberid'] ?>"><?php echo $stats['lastmembername'] ?></a></b>
							<div class="fix"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<?php echo $this->content ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="wrapper center">
			Powered by Addictive Community <?php echo VERSION ?> &copy; <?php echo date("Y") ?> - All rights reserved.
			<div class="fright"><a href="community/about" class="fancybox fancybox.ajax"><?php __("FOOTER_ABOUT") ?></a></div>
		</div>
	</div>
</body>
</html>
