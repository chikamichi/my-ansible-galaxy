<?php

require_once('class.GitHubHook.php');

$hook = new GitHubHook;

$hook->enableDebug();
$hook->setStorage('/srv/www/wordpress/git/code');
$hook->setGitHubInfo('{{github_repos}}', '{{github_token}}');
$hook->addBranch('master', 'dev', '/srv/www/wordpress/wp-content/themes/{{wp_theme_name}}');
//$hook->addBranch('prod', 'production', '/var/www/prod', array('user@gmail.com'));
$hook->deploy();

?>
