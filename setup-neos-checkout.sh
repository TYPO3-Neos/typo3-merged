#!/usr/bin/env bash
if [ ! -d "Neos-master" ]; then
    git clone git://git.typo3.org/Neos/Distributions/Base.git Neos-master
    mkdir -p Neos-master/Packages/Application
    cd Neos-master/Packages/Application
    git clone git://git.typo3.org/Packages/TYPO3.Neos.git
    git clone git://git.typo3.org/Packages/TYPO3.Neos.NodeTypes.git
    git clone git://git.typo3.org/Packages/TYPO3.SiteKickstarter.git
    git clone git://git.typo3.org/Packages/TYPO3.TYPO3CR.git
    git clone git://git.typo3.org/Packages/TYPO3.TypoScript.git
    git clone git://git.typo3.org/Packages/TYPO3.Media.git
    cd ../../..

    mkdir -p Neos-master/Packages/Sites
    cd Neos-master/Packages/Sites
    git clone git://git.typo3.org/Packages/NeosDemoTypo3Org.git TYPO3.NeosDemoTypo3Org
    cd ../../..
fi

if [ ! -d "Neos-1.0" ]; then
    cp -Ra Neos-master Neos-1.0
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
