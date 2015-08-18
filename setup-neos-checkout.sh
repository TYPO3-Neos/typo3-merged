#!/usr/bin/env bash
if [ ! -d "Neos-master" ]; then
    git clone https://github.com/neos/neos-base-distribution.git Neos-master
    mkdir -p Neos-master/Packages/Application
    cd Neos-master/Packages/Application
    git clone https://github.com/neos/neos.git TYPO3.Neos
    git clone https://github.com/neos/neos-nodetypes.git TYPO3.Neos.NodeTypes
    git clone https://github.com/neos/neos-kickstarter.git TYPO3.Neos.Kickstarter
    git clone https://github.com/neos/typo3cr.git TYPO3.TYPO3CR
    git clone https://github.com/neos/typoscript.git TYPO3.TypoScript
    git clone https://github.com/neos/media.git TYPO3.Media
    cd ../../..

    mkdir -p Neos-master/Packages/Sites
    cd Neos-master/Packages/Sites
    git clone https://github.com/neos/neosdemotypo3org.git TYPO3.NeosDemoTypo3Org
    cd ../../..
fi

if [ ! -d "Neos-1.1" ]; then
    cp -Ra Neos-master Neos-1.1
fi

if [ ! -d "Neos-1.2" ]; then
    cp -Ra Neos-master Neos-1.2
fi

if [ ! -d "Neos-2.0" ]; then
    cp -Ra Neos-master Neos-2.0
fi
