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
			array('1.0', 'refs/tags/1.0.0', 'origin/1.0', 'Neos-1.0'),
			array('1.1', 'refs/tags/1.0.0', 'origin/1.1', 'Neos-1.1'),
			array('1.2', 'refs/tags/1.0.0', 'origin/1.2', 'Neos-1.2'),
			array('2.0', 'refs/tags/1.0.0', 'origin/2.0', 'Neos-2.0'),
			array('master', 'refs/tags/1.0.0', 'origin/master', 'Neos-master'),
		),
	),
	'TYPO3.Neos' => array(
		'gitWebUrl' => 'https://github.com/neos/neos',
		'releases' => array(
			array('1.0', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.Neos'),
			array('1.1', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Neos'),
			array('1.2', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Neos'),
			array('2.0', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.Neos'),
			array('master', 'bf492f9fe207a490a068390a2af270cb2332c835', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Neos'),
		),
		'ignoreList' => array(
			'1.0' => array(
				'I989e33743da6dd93076dfcac957fa2376bd84054' => 'Wrong releases footer, came from 1.0',
				'I09ae20ae62087ae6b7d4eeb183a3b45e0b5bafbd' => 'Not fixing for 1.0 anymore',
				'NEOS-173' => 'Not fixing for 1.0 anymore',
				'NEOS-361' => 'Not fixing for 1.0 anymore',
				'NEOS-368' => 'Not fixing for 1.0 anymore',
				'NEOS-352' => 'Not fixing for 1.0 anymore',
				'NEOS-585' => 'Not fixing for 1.0 anymore',
				'Id7baa52bd72cf6e53d4ba8dee9cad8f54979aa40' => 'Not fixing for 1.0 anymore',
				'I78ee51099beef563c56c242bc3b2e6ce10efd4f7' => 'Not fixing for 1.0 anymore'
			),
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
			array('1.0', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('1.1', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('1.2', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('2.0', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.Neos.NodeTypes'),
			array('master', 'b3c147d2c17309fde9e36a09a72f70782248f9e2', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Neos.NodeTypes'),
		),
		'ignoreList' => array(
			'1.0' => array(
				'Ie9c134214203d3a928da601e37a4698a9f4ba5a3' => 'Not fixing for 1.0 anymore'
			),
		),
	),
	'TYPO3.SiteKickstarter' => array(
		'gitWebUrl' => 'https://github.com/neos/neos-kickstarter',
		'releases' => array(
			array('1.0', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.SiteKickstarter'),
			array('1.1', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.SiteKickstarter'),
			array('1.2', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.SiteKickstarter'),
			array('2.0', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.SiteKickstarter'),
			array('master', 'ac71f441e74dc3c5ee8a17480a5c3c96ba21b684', 'origin/master', 'Neos-master/Packages/Application/TYPO3.SiteKickstarter'),
		),
	),
	'TYPO3.TYPO3CR' => array(
		'gitWebUrl' => 'https://github.com/neos/typo3cr',
		'releases' => array(
			array('1.0', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.TYPO3CR'),
			array('1.1', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.TYPO3CR'),
			array('1.2', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.TYPO3CR'),
			array('2.0', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.TYPO3CR'),
			array('master', '444707e6176e23e67ce40f7d396b0d2229799411', 'origin/master', 'Neos-master/Packages/Application/TYPO3.TYPO3CR'),
		),
		'ignoreList' => array(
			'1.0' => array(
				'I99acc1142eeaac82f443f5efa1512feb7766ed1f' => 'Wrong releases footer, does not apply to 1.0',
				'NEOS-879' => 'Not fixing for 1.0 anymore',
				'I3dc57f55ba052bee2399ba5b97e5f985fd0a4e3a' => 'Not fixing for 1.0 anymore',
				'If4d3dff4027f1711a548b75ea78ec45682b89773' => 'Not fixing for 1.0 anymore',
				'NEOS-170' => 'Not fixing for 1.0 anymore',
				'I56f8e922f84c00d9402837591d308583f7069b3f' => 'Not fixing for 1.0 anymore'
			),
		),
	),
	'TYPO3.TypoScript' => array(
		'gitWebUrl' => 'https://github.com/neos/typoscript',
		'releases' => array(
			array('1.0', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.TypoScript'),
			array('1.1', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.TypoScript'),
			array('1.2', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.TypoScript'),
			array('2.0', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.TypoScript'),
			array('master', '681aa987a62d555b77d8398f38cc6280cb0c5fd6', 'origin/master', 'Neos-master/Packages/Application/TYPO3.TypoScript'),
		),
		'ignoreList' => array(
			'1.0' => array(
				'Idffd41450c3c210508795aaeda69ac4e199cc54e' => 'Not fixing for 1.0 anymore'
			),
		),
	),
	'TYPO3.NeosDemoTypo3Org' => array(
		'gitWebUrl' => 'https://github.com/neos/ndoesdemotypo3org',
		'releases' => array(
			array('1.0', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.0', 'Neos-1.0/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('1.1', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.1', 'Neos-1.1/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('1.2', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/1.2', 'Neos-1.2/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('2.0', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/2.0', 'Neos-2.0/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
			array('master', '4766bdd615b63bcefc8d2862738e33a2b3313448', 'origin/master', 'Neos-master/Packages/Sites/TYPO3.NeosDemoTypo3Org'),
		),
	),
	'TYPO3.Media' => array(
		'gitWebUrl' => 'https://github.com/neos/media',
		'releases' => array(
			array('1.0', '70290a04f07329ccb725181c6d7e028e0aeac483', 'origin/1.0', 'Neos-1.0/Packages/Application/TYPO3.Media'),
			array('1.1', '3189fc5ec371b46c012443b0c5cb49c225c76b1e', 'origin/1.1', 'Neos-1.1/Packages/Application/TYPO3.Media'),
			array('1.2', '3189fc5ec371b46c012443b0c5cb49c225c76b1e', 'origin/1.2', 'Neos-1.2/Packages/Application/TYPO3.Media'),
			array('2.0', '3189fc5ec371b46c012443b0c5cb49c225c76b1e', 'origin/2.0', 'Neos-2.0/Packages/Application/TYPO3.Media'),
			array('master', '70290a04f07329ccb725181c6d7e028e0aeac483', 'origin/master', 'Neos-master/Packages/Application/TYPO3.Media'),
		),
		'ignoreList' => array(
			'1.0' => array(
				'NEOS-414' => 'Not fixing for 1.0 anymore',
				'Icbf9110b19bdd705a8db7e2d67521225651b6dad' => 'Not fixing for 1.0 anymore'
			),
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
