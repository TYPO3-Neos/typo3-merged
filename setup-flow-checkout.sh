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
