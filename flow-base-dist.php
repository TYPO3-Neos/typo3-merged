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
			array('2.2', 'refs/tags/1.0.0', 'origin/2.2', 'Flow-2.X'),
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
			array('2.2', 'refs/tags/FLOW3-1.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Flow'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Flow'),
		),
		'ignoreList' => array(
			'FLOW3-1.0' => array(
				'783d6052802b5bcc7cd48b1f4e2d9335bbc99612' => 'In 1.0.1 as Ib2350f02fa5dcbda5dda9337b1cab54714958c16',
				'4dbe21dacd5c1de1aa6fd5ef824ffe15a98fe5ac' => 'In 1.0.1 as Idd1b37e80a734b280c6d6e3d81102150fffdb606',
				'0651e3fcf361bb0dd50b2a6e3f02e494d075e27f' => 'In 1.0.2 as Ifa4d572a74c3f01837d18d5eed29e1d51b282075',
				'e3e995ad0c5bccf7112d3e906fe0f8071a256179' => 'In 1.0.2 as I42c3987e13ca5d4c72203a18484bbdb015945f56',
				'e461a82fec5ead10941031c53e32694d4d0b44d2' => '1.0 has reached EOL in December 2013',
				'1ed5be059e4a7819192d9336a140315ad9adad82' => 'In 1.0.5 as I3db607888167dddc332ff5fbe31b401c5f542350',
				'5730c8988a4b88c0a08f715f1ee92dff80ccf4ab' => '1.0 has reached EOL in December 2013',
				'e429d5882b68a147e14f345503d41a9a9d315749' => '1.0 has reached EOL in December 2013',
				'ce5a051816fad27a4a09be77a9d7d08d3e0f879c' => '1.0 has reached EOL in December 2013',
				'dd85fcb53be412d3df5c603da37d4015f71c36c0' => '1.0 has reached EOL in December 2013',
				'968a99e70851c2f2c45827dd17d52c6f71847e90' => '1.0 has reached EOL in December 2013',
				'6edbef57b42ed7afa176fbe231c500ff5fec8b14' => '1.0 has reached EOL in December 2013',
				'acbb331e8479a5d8b69648d26f7ec7afa1abde61' => '1.0 has reached EOL in December 2013',
				'c79c73ae41c3c4615d4d3121822d8d49033f266b' => '1.0 has reached EOL in December 2013',
				'31e90b145bf2117c3d51ec419b410d79f94f1816' => '1.0 has reached EOL in December 2013',
				'8025fbfe72cf467be5cc7aab71ab2e705710c140' => '1.0 has reached EOL in December 2013',
				'138ebbe49f93cf8ea490d32ef5732bddd87a2f89' => '1.0 has reached EOL in December 2013',
				'cf023d02b0c9ec25db1ec741d5f3be00262877be' => '1.0 has reached EOL in December 2013',
				'7c5eff63d7ae873d322aef8c3293af693fd35bf2' => '1.0 has reached EOL in December 2013',
				'5de646139f7a16a20f0891e7ed843e36b3ad54bd' => '1.0 has reached EOL in December 2013',
				'42601' => '1.0 has reached EOL in December 2013',
				'44471' => '1.0 has reached EOL in December 2013',
				'45413' => '1.0 has reached EOL in December 2013',
				'45876' => '1.0 has reached EOL in December 2013',
				'42715' => '1.0 has reached EOL in December 2013',
			),
			'FLOW3-1.1' => array(
				'b2350f02fa5dcbda5dda9337b1cab54714958c16' => 'In 1.1.0-beta1 as I783d6052802b5bcc7cd48b1f4e2d9335bbc99612',
				'dd1b37e80a734b280c6d6e3d81102150fffdb606' => 'In 1.1.0-beta1 as I4dbe21dacd5c1de1aa6fd5ef824ffe15a98fe5ac',
				'fa4d572a74c3f01837d18d5eed29e1d51b282075' => 'In 1.1.0-beta1 as I0651e3fcf361bb0dd50b2a6e3f02e494d075e27f',
				'42c3987e13ca5d4c72203a18484bbdb015945f56' => 'In 1.1.0-beta1 as Ie3e995ad0c5bccf7112d3e906fe0f8071a256179',
				'3db607888167dddc332ff5fbe31b401c5f542350' => 'In 1.1.0-beta1 as I1ed5be059e4a7819192d9336a140315ad9adad82',
				'e429d5882b68a147e14f345503d41a9a9d315749' => '1.1 has reached EOL in December 2013',
				'ce5a051816fad27a4a09be77a9d7d08d3e0f879c' => '1.1 has reached EOL in December 2013',
				'dd85fcb53be412d3df5c603da37d4015f71c36c0' => '1.1 has reached EOL in December 2013',
				'968a99e70851c2f2c45827dd17d52c6f71847e90' => '1.1 has reached EOL in December 2013',
				'6edbef57b42ed7afa176fbe231c500ff5fec8b14' => '1.1 has reached EOL in December 2013',
				'acbb331e8479a5d8b69648d26f7ec7afa1abde61' => '1.1 has reached EOL in December 2013',
				'c79c73ae41c3c4615d4d3121822d8d49033f266b' => '1.1 has reached EOL in December 2013',
				'31e90b145bf2117c3d51ec419b410d79f94f1816' => '1.1 has reached EOL in December 2013',
				'8025fbfe72cf467be5cc7aab71ab2e705710c140' => '1.1 has reached EOL in December 2013',
				'138ebbe49f93cf8ea490d32ef5732bddd87a2f89' => '1.1 has reached EOL in December 2013',
				'cf023d02b0c9ec25db1ec741d5f3be00262877be' => '1.1 has reached EOL in December 2013',
				'7c5eff63d7ae873d322aef8c3293af693fd35bf2' => '1.1 has reached EOL in December 2013',
				'5de646139f7a16a20f0891e7ed843e36b3ad54bd' => '1.1 has reached EOL in December 2013',
				'ee3ff009f8e3a492b6cd9c877ef4d45339190f19' => '1.1 has reached EOL in December 2013',
				'42601' => '1.1 has reached EOL in December 2013',
				'44471' => '1.1 has reached EOL in December 2013',
				'45413' => '1.1 has reached EOL in December 2013',
				'45876' => '1.1 has reached EOL in December 2013',
				'42715' => '1.1 has reached EOL in December 2013',
			),
			'2.0' => array(
				'48231' => 'That bugfix was broken and thus abandoned',
				'51257' => 'Change not needed for 2.0',
				'50636' => 'Not applicable to 2.0',
				'54453' => 'Not applicable to 2.0',
				'42961' => 'Not a bugfix, master only',
				'51676' => 'Change had side effects',
				'269a9e12aa5fbd50a90bd81c094fe2bc315b5222' => 'Not needed, base change was master only'
			),
			'2.1' => array(
				'42961' => 'Not a bugfix, master only',
				'50118' => 'Not a bugfix, master only',
				'33621' => 'No longer needed, remaining changes in https://review.typo3.org/27840',
				'269a9e12aa5fbd50a90bd81c094fe2bc315b5222' => 'Not needed, base change was master only'
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
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/TYPO3.Fluid'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/TYPO3.Fluid'),
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('2.1', 'refs/tags/FLOW3-1.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('2.2', 'refs/tags/FLOW3-1.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Fluid'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Fluid'),
		),
		'ignoreList' => array(
			'FLOW3-1.0' => array(
				'5ae4a19a07cc43c9f75c785f6e6f0f089556fe46' => '1.0 has reached EOL in December 2013',
				'5798b0f5fe654ed2ce4b1de63be6d7ff03a2a371' => 'In 1.0.2 as Id53e74c40a0de62ef04a1300d0572381e4650ae3',
			),
			'FLOW3-1.1' => array(
				'83aa525f18820ad2451b338fac4aeddf583e15bc' => 'No longer important in 2014',
				'd53e74c40a0de62ef04a1300d0572381e4650ae3' => 'In 1.1.0-beta1 as I5798b0f5fe654ed2ce4b1de63be6d7ff03a2a371',
			),
		),
	),
	'TYPO3.Eel' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Eel.git',
		'releases' => array(
			array('2.1', 'refs/tags/2.1.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Eel'),
			array('2.2', 'refs/tags/2.1.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Eel'),
			array('master', 'refs/tags/2.1.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Eel'),
		),
		'ignoreList' => array(
			'2.1' => array(
				'b39d7b96f4c5833a304cfc12c5dc7b3c5f53ec21' => 'Replaced by Ieaa3d21afe4c543b83ec381a094515186dda3c2b',
			),
		),
	),
	'TYPO3.Party' => array(
		'gitWebUrl' => 'http://git.typo3.org/Packages/TYPO3.Party.git',
		'releases' => array(
			array('1.0', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.0', 'FLOW3-1.0/Packages/Framework/TYPO3.Party'),
			array('1.1', 'refs/tags/FLOW3-1.0.0', 'origin/FLOW3-1.1', 'FLOW3-1.1/Packages/Framework/TYPO3.Party'),
			array('2.0', 'refs/tags/FLOW3-1.0.0', 'origin/2.0', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('2.1', 'refs/tags/FLOW3-1.0.0', 'origin/2.1', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('2.2', 'refs/tags/FLOW3-1.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Party'),
			array('master', 'refs/tags/FLOW3-1.0.0', 'origin/master', 'Flow-master/Packages/Framework/TYPO3.Party'),
		),
		'ignoreList' => array(
			'FLOW3-1.0' => array(
				'4f95d88dbf5fab9fec0af5ccc09248b11fec5755' => 'In 1.0.2 as Iff81c89490d78f84801603e90eb5a90f87799410',
			),
			'FLOW3-1.1' => array(
				'6e1c07b8de8eaf2659fcd91f639787aec13c0bdc' => 'No longer important in 2014',
				'ff81c89490d78f84801603e90eb5a90f87799410' => 'In 1.1.0-beta1 as I4f95d88dbf5fab9fec0af5ccc09248b11fec5755',
			),
			'2.0' => array(
				'47881' => 'Not for 2.0, as the affected validator is not in 2.0'
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
			array('2.2', 'refs/tags/FLOW3-1.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Kickstart'),
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
			array('2.2', 'refs/tags/FLOW3-1.0.0', 'origin/2.2', 'Flow-2.X/Packages/Framework/TYPO3.Welcome'),
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