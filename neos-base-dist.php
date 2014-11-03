<?php
// configuration for TYPO3 Neos base distribution in Jenkins CI job

$baseDirectory = (getenv('WORKSPACE') ? getenv('WORKSPACE') . '/' : getcwd() . '/');
$gitRoot = $baseDirectory;
$gitRootIsWorkingCopy = TRUE;
$htmlFile = $baseDirectory . 'index.html';

$reviewLinkPattern = "https://review.typo3.org/#/q/tr:%s,n,z";

$issueMapping = array();

$projectsToCheck = array(
	'Neos Base Distribution' => array(
		'gitWebUrl' => 'https://git.typo3.org/Neos/Distributions/Base.git',
		'releases' => array(
				# project, starting point, branch, working copy path
			array('1.0', 'refs/tags/1.0.0', 'origin/1.0', 'Neos-1.0'),
			array('1.1', 'refs/tags/1.0.0', 'origin/1.1', 'Neos-1.1'),
			array('1.2', 'refs/tags/1.0.0', 'origin/1.2', 'Neos-1.2'),
			array('master', 'refs/tags/1.0.0', 'origin/master', 'Neos-master'),
		),
	),
	'TYPO3.Neos' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Neos.git',
		'releases' => array(
			array('1.0', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.Neos'),
			array('1.1', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Neos'),
			array('1.2', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Neos'),
			array('master', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Neos'),
		),
		'ignoreList' => array(
			'1.0' => array(
				'989e33743da6dd93076dfcac957fa2376bd84054' => 'Wrong releases footer, came from 1.0'
			),
		),
	),
	'TYPO3.Neos.NodeTypes' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Neos.NodeTypes.git',
		'releases' => array(
			array('1.0', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('1.1', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('1.2', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('master', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Neos.NodeTypes'),
		),
	),
	'TYPO3.SiteKickstarter' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.SiteKickstarter.git',
		'releases' => array(
			array('1.0', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.SiteKickstarter'),
			array('1.1', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.SiteKickstarter'),
			array('1.2', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.SiteKickstarter'),
			array('master', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/master', 'Neos-master/Packages/Application/TYPO3.SiteKickstarter'),
		),
	),
	'TYPO3.TYPO3CR' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.TYPO3CR.git',
		'releases' => array(
			array('1.0', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.TYPO3CR'),
			array('1.1', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.TYPO3CR'),
			array('1.2', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.TYPO3CR')
			array('master', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/master', 'Neos-master/Packages/Application/TYPO3.TYPO3CR'),
		),
		'ignoreList' => array(
			'1.0' => array(
				'I99acc1142eeaac82f443f5efa1512feb7766ed1f' => 'Wrong releases footer, does not apply to 1.0'
			),
		),
	),
	'TYPO3.TypoScript' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.TypoScript.git',
		'releases' => array(
			array('1.0', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.TypoScript'),
			array('1.1', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.TypoScript'),
			array('1.2', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.TypoScript'),
			array('master', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/master', 'Neos-master/Packages/Application/TYPO3.TypoScript'),
		),
	),
	'TYPO3.NeosDemoTypo3Org' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.NeosDemoTypo3Org.git',
		'releases' => array(
			array('1.0', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.0', 'Neos-1.0/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('1.1', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.1', 'Neos-1.1/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('1.2', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.2', 'Neos-1.2/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('master', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/master', 'Neos-master/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
		),
	),
	'TYPO3.Media' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Media.git',
		'releases' => array(
			array('1.0', '70290a04f07329ccb725181c6d7e028e0aeac483', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.Media'),
			array('1.1', '3189fc5ec371b46c012443b0c5cb49c225c76b1e', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Media'),
			array('1.2', '3189fc5ec371b46c012443b0c5cb49c225c76b1e', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Media'),
			array('master', '70290a04f07329ccb725181c6d7e028e0aeac483', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Media'),
		),
	)
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
