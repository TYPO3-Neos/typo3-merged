if [ ! -d "Flow-master" ]; then
    git clone git://git.typo3.org/Flow/Distributions/Base.git Flow-master
    curl -s http://getcomposer.org/installer | php
    cd Flow-master
    php ../composer.phar --no-interaction install --dev --prefer-source    
    cd ..
fi

if [ ! -d "Flow-2.X" ]; then
    cp -Ra Flow-master Flow-2.X
fi

if [ ! -d "FLOW3-1.1" ]; then
    git clone -b FLOW3-1.1 --recursive git://git.typo3.org/Flow/Distributions/Base.git FLOW3-1.1
fi

if [ ! -d "FLOW3-1.0" ]; then
    git clone -b FLOW3-1.0 --recursive git://git.typo3.org/Flow/Distributions/Base.git FLOW3-1.0
fi