if [ ! -d "Neos-master" ]; then
    git clone git://git.typo3.org/Neos/Distributions/Base.git Neos-master
    rm -f composer.phar
    curl -s http://getcomposer.org/installer | php
    cd Neos-master
    php ../composer.phar --no-interaction install --dev --prefer-source
    
    # WORKAROUND: Site kickstarter not inside base distribution currently
    cd Packages/Application/
    git clone git://git.typo3.org/Packages/TYPO3.SiteKickstarter.git
    cd ../../
    
    cd ..
fi

if [ ! -d "Neos-1.0" ]; then
    cp -Ra Neos-master Neos-1.0
fi