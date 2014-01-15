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
		// list of issues to be ignored as TODOs from a certain branch.
		// Used to shorten the list of issues that are marked "TODO"
		// if e.g. the originally advertised backport (in the commit
		// message on the master branch) is not wanted anymore.
		// This is similar to an "ABANDONED"-state, but not for a
		// changeset, but instead for a whole issue+branch combination.
		'ignoreList' => array(
			'FLOW3-1.0' => array(
				'8a9fdc1272247a17c437952f0dc47137004274e3' => 'In 1.0.5 as If38a2d84331826d5a58e8f8e833b457cf44bc7d5',
			),
			'FLOW3-1.1' => array(
				'f38a2d84331826d5a58e8f8e833b457cf44bc7d5' => 'In 1.1.0-beta1 as I8a9fdc1272247a17c437952f0dc47137004274e3',
			),
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
		'ignoreList' => array(
			'FLOW3-1.0' => array(
				'4f95d88dbf5fab9fec0af5ccc09248b11fec5755' => 'In 1.0.2 as Iff81c89490d78f84801603e90eb5a90f87799410',
			),
			'FLOW3-1.1' => array(
				'ff81c89490d78f84801603e90eb5a90f87799410' => 'In 1.1.0-beta1 as I4f95d88dbf5fab9fec0af5ccc09248b11fec5755',
			),
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
		'ignoreList' => array(
			'FLOW3-1.0' => array(
				'64389865a65c94e1f6674e600bd02482bf6d0601' => 'In 1.0.6 as I10488c313bf08faaaea4081b19a4a6c6ff242183',
			),
			'FLOW3-1.1' => array(
				'10488c313bf08faaaea4081b19a4a6c6ff242183' => 'In 1.1.1 as I64389865a65c94e1f6674e600bd02482bf6d0601',
			),
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