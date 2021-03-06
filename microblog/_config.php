<?php

Object::add_extension('Member', 'MicroBlogMember');
Object::add_extension('Member', 'Restrictable');
Object::add_extension('Group', 'Restrictable');

Object::add_extension('DashboardPage', 'MicroblogDashboard');

Object::add_extension('SiteConfig', 'Restrictable');

Object::add_extension('Image', 'MaximumSizeImageExtension');

DashboardController::set_allowed_dashlets(array(
	'TimelineDashlet',
	'ProfileDashlet',
	'FriendsDashlet',
	'TagsDashlet'
));

DashboardUser::$default_dashlets = array(array('TimelineDashlet'), array('ProfileDashlet', 'FriendsDashlet'));

BBCodeParser::enable_smilies(true);
