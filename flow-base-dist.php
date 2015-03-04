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
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X'),
			array('2.1', 'refs/tags/2.0.0', 'origin/2.1', 'Flow-2.X'),
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
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Flow.git',
		'releases' => array(
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('2.1', 'refs/tags/2.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Flow'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Flow'),
		),
		'ignoreList' => array(
			'2.0' => array(
				'48231' => 'That bugfix was broken and thus abandoned',
				'51257' => 'Change not needed for 2.0',
				'50636' => 'Not applicable to 2.0',
				'54453' => 'Not applicable to 2.0',
				'42961' => 'Not a bugfix, master only',
				'51676' => 'Change had side effects',
				'I269a9e12aa5fbd50a90bd81c094fe2bc315b5222' => 'Not needed, base change was master only'
			),
			'2.1' => array(
				'42961' => 'Not a bugfix, master only',
				'50118' => 'Not a bugfix, master only',
				'33621' => 'No longer needed, remaining changes in https://review.typo3.org/27840',
				'I269a9e12aa5fbd50a90bd81c094fe2bc315b5222' => 'Not needed, base change was master only'
			),
			'master' => array(
				'46053' => 'In master as for #40738',
				'33621' => 'No longer needed, remaining changes in https://review.typo3.org/27840'
			),
		),
	),
	'TYPO3.Fluid' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Fluid.git',
		'releases' => array(
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('2.1', 'refs/tags/2.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Fluid'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Fluid'),
		),
	),
	'TYPO3.Eel' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Eel.git',
		'releases' => array(
			array('2.1', 'refs/tags/2.1.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Eel'),
			array('2.2', 'refs/tags/2.1.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Eel'),
			array('2.3', 'refs/tags/2.1.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Eel'),
			array('3.0', 'refs/tags/2.1.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Eel'),
			array('master', 'refs/tags/2.1.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Eel'),
		),
		'ignoreList' => array(
			'2.1' => array(
				'Ib39d7b96f4c5833a304cfc12c5dc7b3c5f53ec21' => 'Replaced by Ieaa3d21afe4c543b83ec381a094515186dda3c2b',
			),
		),
	),
	'TYPO3.Party' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Party.git',
		'releases' => array(
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('2.1', 'refs/tags/2.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
		),
		'ignoreList' => array(
			'2.0' => array(
				'47881' => 'Not for 2.0, as the affected validator is not in 2.0'
			),
		),
	),
	'TYPO3.Kickstart' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Kickstart.git',
		'releases' => array(
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('2.1', 'refs/tags/2.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('2.2', 'refs/tags/2.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('2.3', 'refs/tags/2.0.0', 'origin/2.3', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
			array('3.0', 'refs/tags/2.0.0', 'origin/3.0', 'Flow-3.X/Packages/Framework/TYPO3.Kickstart'),
			array('master', 'refs/tags/2.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Kickstart'),
		),
	),
	'TYPO3.Welcome' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Welcome.git',
		'releases' => array(
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Welcome'),
			array('2.1', 'refs/tags/2.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Welcome'),
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