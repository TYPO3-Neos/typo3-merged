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
		'gitWebUrl' => 'https://github.com/neos/neos-base-distribution',
		'releases' => array(
				# project, starting point, branch, working copy path
			array('1.1', 'refs/tags/1.0.0', 'origin/1.1', 'Neos-1.1'),
			array('1.2', 'refs/tags/1.0.0', 'origin/1.2', 'Neos-1.2'),
			array('2.0', 'refs/tags/1.0.0', 'origin/2.0', 'Neos-2.0'),
			array('master', 'refs/tags/1.0.0', 'origin/master', 'Neos-master'),
		),
	),
	'TYPO3.Neos' => array(
		'gitWebUrl' => 'https://github.com/neos/neos',
		'releases' => array(
			array('1.1', '30ce38da4c274e6ae9aa87afd920bab42aeb3c78', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Neos'),
			array('1.2', '30ce38da4c274e6ae9aa87afd920bab42aeb3c78', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Neos'),
			array('2.0', '30ce38da4c274e6ae9aa87afd920bab42aeb3c78', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.Neos'),
			array('master', '30ce38da4c274e6ae9aa87afd920bab42aeb3c78', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Neos'),
		),
		'ignoreList' => array(
			'1.1' => array(
				'Iee3fc9449616e86f9f5506d79937b7c7a31103cf' => 'Not needed anymore'
			),
			'1.2' => array(
				'I7065efe91a8a34a4153395a2d7b72072b75b758b' => 'Wrongly targeted for 1.2',
				'I3bf59d5cd07fec2a8981ef486c57982136fd9f15' => 'Included via master already'
			),
			'master' => array(
				'I4bd746d8c8ba22db141c628365c5c0eda6851513' => 'Merged directly into git'
			),
		),
	),
	'TYPO3.Neos.NodeTypes' => array(
		'gitWebUrl' => 'https://github.com/neos/neos-nodetypes',
		'releases' => array(
			array('1.1', 'd10f336a3afec23aa67ac72c798573a8dcd89980', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('1.2', 'd10f336a3afec23aa67ac72c798573a8dcd89980', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('2.0', 'd10f336a3afec23aa67ac72c798573a8dcd89980', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('master', 'd10f336a3afec23aa67ac72c798573a8dcd89980', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Neos.NodeTypes'),
		),
		'ignoreList' => array(
		),
	),
	'TYPO3.Neos.Kickstarter' => array(
		'gitWebUrl' => 'https://github.com/neos/neos-kickstarter',
		'releases' => array(
			array('1.1', '52e277659cbe24c12d30851d631cecca57c8009b', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Neos.Kickstarter'),
			array('1.2', '52e277659cbe24c12d30851d631cecca57c8009b', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Neos.Kickstarter'),
			array('2.0', '52e277659cbe24c12d30851d631cecca57c8009b', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.Neos.Kickstarter'),
			array('master', '52e277659cbe24c12d30851d631cecca57c8009b', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Neos.Kickstarter'),
		),
	),
	'TYPO3.TYPO3CR' => array(
		'gitWebUrl' => 'https://github.com/neos/typo3cr',
		'releases' => array(
			array('1.1', '4a808b8c389494f14af4c7648c185159946ae77e', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.TYPO3CR'),
			array('1.2', '4a808b8c389494f14af4c7648c185159946ae77e', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.TYPO3CR'),
			array('2.0', '4a808b8c389494f14af4c7648c185159946ae77e', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.TYPO3CR'),
			array('master', '4a808b8c389494f14af4c7648c185159946ae77e', 'origin/master', 'Neos-master/Packages/Application/TYPO3.TYPO3CR'),
		),
		'ignoreList' => array(
		),
	),
	'TYPO3.TypoScript' => array(
		'gitWebUrl' => 'https://github.com/neos/typoscript',
		'releases' => array(
			array('1.1', '797bd005a9d98eaebbb9eb59a57b66c00d30accc', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.TypoScript'),
			array('1.2', '797bd005a9d98eaebbb9eb59a57b66c00d30accc', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.TypoScript'),
			array('2.0', '797bd005a9d98eaebbb9eb59a57b66c00d30accc', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.TypoScript'),
			array('master', '797bd005a9d98eaebbb9eb59a57b66c00d30accc', 'origin/master', 'Neos-master/Packages/Application/TYPO3.TypoScript'),
		),
		'ignoreList' => array(
		),
	),
	'TYPO3.NeosDemoTypo3Org' => array(
		'gitWebUrl' => 'https://github.com/neos/ndoesdemotypo3org',
		'releases' => array(
			array('1.1', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.1', 'Neos-1.1/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('1.2', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.2', 'Neos-1.2/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('2.0', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/2.0', 'Neos-2.0/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('master', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/master', 'Neos-master/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
		),
	),
	'TYPO3.Media' => array(
		'gitWebUrl' => 'https://github.com/neos/media',
		'releases' => array(
			array('1.1', 'fc1e1164a38697a091c800bdb05c949bc975b669', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Media'),
			array('1.2', 'fc1e1164a38697a091c800bdb05c949bc975b669', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Media'),
			array('2.0', 'fc1e1164a38697a091c800bdb05c949bc975b669', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.Media'),
			array('master', 'fc1e1164a38697a091c800bdb05c949bc975b669', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Media'),
		),
		'ignoreList' => array(
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
