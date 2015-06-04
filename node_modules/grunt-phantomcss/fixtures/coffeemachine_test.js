casper.start('fixtures/coffeemachine.html').then(function () {
    phantomcss.screenshot('#coffee-machine-wrapper', 'open coffee machine button');
}).then( function () {
    casper.click('#coffee-machine-button');

    casper.waitForSelector('#myModal:not([style*="display: none"])',
        function success () {
            phantomcss.screenshot('#myModal', 'coffee machine dialog');
        },
        function timeout () {
            casper.test.fail('Should see coffee machine');
        }
    );
}).then( function () {
    casper.click('#cappuccino-button');
    phantomcss.screenshot('#myModal', 'cappuccino success');
}).then( function () {
    casper.click('#close');

    // wait for modal to fade-out
    casper.waitForSelector('#myModal[style*="display: none"]',
        function success () {
            phantomcss.screenshot('#coffee-machine-wrapper', 'coffee machine close success');
        },
        function timeout () {
            casper.test.fail('Should be able to walk away from the coffee machine');
        }
    );
});
