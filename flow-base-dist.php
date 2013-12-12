<?php
// configuration for TYPO3 Flow base distribution in Jenkins CI job

$baseDirectory = (getenv('WORKSPACE') ? getenv('WORKSPACE') . '/' : getcwd() . '/');
$gitRoot = $baseDirectory;
$gitRootIsWorkingCopy = TRUE;
$htmlFile = $baseDirectory . 'index.html';

$reviewLinkPattern = "https://review.typo3.org/#/q/tr:%s,n,z";

$issueMapping = array();

$projectsToCheck = array(
	'TYPO3 Flow Base Dist' => array(
		'gitWebUrl' => 'http://git.typo3.org/Flow/Distributions/Base.git',
		'releases' => array(
				# project, starting point, branch, working copy path
			array('1.0', 'refs/tags/1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0'),
			array('1.1', 'refs/tags/1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1'),
			array('2.0', 'refs/tags/1.0.0', 'origin/2.0', 'Flow-2.X'),
			array('2.1', 'refs/tags/1.0.0', 'origin/2.1', 'Flow-2.X'),
			array('master', 'refs/tags/1.0.0', 'origin/master', 'Flow-master'),
		),
	),
	'TYPO3.Flow' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Flow.git',
		'releases' => array(
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/TYPO3.FLOW3'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/TYPO3.FLOW3'),
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('2.1', 'refs/tags/FLOW3-1.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Flow'),
		),
	),
	'TYPO3.Fluid' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Fluid.git',
		'releases' => array(
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/TYPO3.Fluid'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/TYPO3.Fluid'),
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('2.1', 'refs/tags/FLOW3-1.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Fluid'),
		),
	),
	'TYPO3.Party' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Party.git',
		'releases' => array(
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/TYPO3.Party'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/TYPO3.Party'),
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('2.1', 'refs/tags/FLOW3-1.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Party'),
		),
	),
	'TYPO3.Kickstart' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Kickstart.git',
		'releases' => array(
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/TYPO3.Kickstart'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/TYPO3.Kickstart'),
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('2.1', 'refs/tags/FLOW3-1.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Kickstart'),
		),
	),
	'TYPO3.Welcome' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Welcome.git',
		'releases' => array(
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/TYPO3.Welcome'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/TYPO3.Welcome'),
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Welcome'),
			array('2.1', 'refs/tags/FLOW3-1.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Welcome'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Welcome'),
		),
	),
	'Doctrine.Common' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/Doctrine.Common.git',
		'releases' => array(
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/Doctrine.Common'),
		),
	),
	'Doctrine.DBAL' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/Doctrine.DBAL.git',
		'releases' => array(
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/Doctrine.DBAL'),
		),
	),
	'Doctrine.ORM' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/Doctrine.ORM.git',
		'releases' => array(
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/Doctrine.ORM'),
		),
	),
	'Symfony.Component.Yaml' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/Symfony.Component.Yaml.git',
		'releases' => array(
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/Symfony.Component.Yaml'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/Symfony.Component.Yaml'),
		),
	),
	'Symfony.Component.DomCrawler' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/Symfony.Component.DomCrawler.git',
		'releases' => array(
			array('1.1', 'refs/tags/FLOW3-1.1.0-beta1', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/Symfony.Component.DomCrawler'),
		),
	),
);

/**
 * Callback to detect if this commit is a "release" commit
 *
 * @param $commitInfos array The infos from the commit
 * @return mixed FALSE|string The released version name
 */
function getDetectedReleaseCommitCallback($commitInfos) {
	if (preg_match('/(?:FLOW3-)?([0-9.]{5}(?:-(alpha|beta|rc)[0-9]+)?)/', $commitInfos['tags'], $matches)) {
		return $matches[1];
	}
	return NULL;
}

?>