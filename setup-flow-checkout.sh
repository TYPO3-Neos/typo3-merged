#!/usr/bin/env bash
if [ ! -d "Flow-master" ]; then
    git clone git@github.com:neos/flow-base-distribution.git Flow-master
    mkdir -p Flow-master/Packages/Framework
    cd Flow-master/Packages/Framework
    git clone git@github.com:neos/eel.git TYPO3.Eel
    git clone git@github.com:neos/flow.git TYPO3.Flow
    git clone git@github.com:neos/fluid.git TYPO3.Fluid
    git clone git@github.com:neos/kickstart TYPO3.Kickstart
    git clone git@github.com:neos/flow-welcome.git TYPO3.Welcome
    cd ../../..
fi

if [ ! -d "Flow-2.X" ]; then
    cp -Ra Flow-master Flow-2.X
    cd Flow-2.X
    git checkout -b 2.0 origin/2.0
    git branch -D master
    cd Packages/Framework
    git clone git@github.com:neos/party.git TYPO3.Party
        cd TYPO3.Eel ; git checkout -b 2.1 origin/2.1 ; git branch -D master ; cd ..
    for PACKAGE in TYPO3.Flow TYPO3.Fluid TYPO3.Kickstart TYPO3.Party TYPO3.Welcome ; do cd $PACKAGE ; git checkout -b 2.0 origin/2.0 ; git branch -D master ; cd .. ; done
    cd ../../..
fi

if [ ! -d "Flow-3.X" ]; then
    cp -Ra Flow-master Flow-3.X
    cd Flow-3.X
    git checkout -b 3.0 origin/3.0
    git branch -D master
    cd Packages/Framework
    for PACKAGE in TYPO3.Eel TYPO3.Flow TYPO3.Fluid TYPO3.Kickstart TYPO3.Welcome ; do cd $PACKAGE ; git checkout -b 3.0 origin/3.0 ; git branch -D master ; cd .. ; done
fi
