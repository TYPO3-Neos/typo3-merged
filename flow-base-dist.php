<?php
// configuration for TYPO3 Flow base distribution in Jenkins CI job

$baseDirectory = (getenv('WORKSPACE') ? getenv('WORKSPACE') . '/' : getcwd() . '/');
$gitRoot = $baseDirectory;
$gitRootIsWorkingCopy = TRUE;
$htmlFile = $baseDirectory . 'index.html';

$reviewLinkPattern = "https://review.typo3.org/#/q/tr:%s,n,z";

$issueMapping = array();

$projectsToCheck = array(
	'Flow Base Dist' => array(
		'gitWebUrl' => 'https://github.com/neos/flow-base-distribution',
		'releases' => array(
				# project, starting point, branch, working copy path
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master'),
		),
		// list of issues to be ignored as TODOs from a certain branch.
		// Used to shorten the list of issues that are marked "TODO"
		// if e.g. the originally advertised backport (in the commit
		// message on the master branch) is not wanted anymore.
		// This is similar to an "ABANDONED"-state, but not for a
		// changeset, but instead for a whole issue+branch combination.
		'ignoreList' => array(
		),
	),
	'TYPO3.Flow' => array(
		'gitWebUrl' => 'https://github.com/neos/flow',
		'releases' => array(
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Flow'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Flow'),
		),
		'ignoreList' => array(
			'master' => array(
				'46053' => 'In master as for #40738',
				'33621' => 'No longer needed, remaining changes in https://review.typo3.org/27840',
				'59404' => 'In master this was fixed with the flexible body parsing feature'
			),
		),
	),
	'TYPO3.Fluid' => array(
		'gitWebUrl' => 'https://github.com/neos/fluid',
		'releases' => array(
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Fluid'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Fluid'),
		),
		'ignoreList' => array(
			'2.3' => array(
				'If8496da56509ac0f2503a9a7be8649eb44b65816' => 'Not applicable to 2.3'
			),
		),
	),
	'TYPO3.Eel' => array(
		'gitWebUrl' => 'https://github.com/neos/eel',
		'releases' => array(
			array('2.2', 'refs/tags/2.1.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Eel'),
			array('2.3', 'refs/tags/2.1.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Eel'),
			array('3.0', 'refs/tags/2.1.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Eel'),
			array('master', 'refs/tags/2.1.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Eel'),
		),
		'ignoreList' => array(
		),
	),
	'TYPO3.Party' => array(
		'gitWebUrl' => 'https://github.com/neos/party',
		'releases' => array(
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
		),
		'ignoreList' => array(
		),
	),
	'TYPO3.Kickstart' => array(
		'gitWebUrl' => 'https://github.com/neos/kickstart',
		'releases' => array(
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Kickstart'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Kickstart'),
		),
	),
	'TYPO3.Welcome' => array(
		'gitWebUrl' => 'https://github.com/neos/flow-welcome',
		'releases' => array(
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Welcome'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Welcome'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Welcome'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Welcome'),
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