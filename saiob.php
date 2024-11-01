<?php
/**
 * Social All in One Bot plugin file.
 *
 * Copyright (C) 2010-2020, Smackcoders Inc - info@smackcoders.com
 */

require_once(WP_SOCIAL_ALL_IN_ONE_BOT_DIRECTORY.'config/settings.php');
require_once(WP_SOCIAL_ALL_IN_ONE_BOT_DIRECTORY.'lib/skinnymvc/controller/SkinnyController.php');

$c = new SkinnyController_saiob();
$c->main();


