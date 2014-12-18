<?php
/**
 * #PHPHEADER_OXID_LICENSE_INFORMATION#
 */

// Do NOT edit this file, create test_config.local.php instead and overwrite these configs.

// eShop base url (if null, tries to get it from config.inc.php file)
$sShopUrl = 'http://s83-5.3/~oxidlt/20141110/test_335d8964c0ac87c6599e377b40236543'; //'http://eshop_url/';
// eShop directory
$sShopPath = realpath('../source/') . '/';
// For PE and EE editions shop serial has to be specified for shop installer to work.
$sShopSerial = '';

// Run tests with varnish on
$blVarnish = false;
// Whether to run subshop tests. Currently only used when running selenium tests.
$blIsSubShop = false;

// Whether to copy services to shop. If services are already in shop directory, this can be set to false.
$blCopyServicesToShop = true;
// Whether to prepare shop database for testing. Shop config.ing.php file must be correct.
$blInstallShop = false;

// eShop setup directory. After setting up the shop setup directory will be deleted.
// For shop installation to work during tests run, where to find this directory must be specified.
// Uses shop/directory/setup/ if not set.
$sShopSetupPath = null;
// Whether to add tests data to shop. Can be used when $blInstallShop is set to false and test data is already added.
$blAddTestData = false;
// Whether to restore shop data after running all tests. If this is set to false, shop will be left with tests data added on it.
$blRestoreShopAfterTestSuite = false;
// Whether to restore shop data after test. If this is set to false, shop will be left
// at a state, at which test was completed (either failed or passed).
$blRestoreShopAfterTest = true;

// When testing module, add module information here. Otherwise leave all as null.
// All module files has to be in shop's module directory.
// Module path in shop, e.g. if module is in 'shop/modules/oe/mymodule' directory, value here should be 'oe/mymodule'.
// Multiple modules can be specified separated by comma: 'oe/module1,module2,tt/module3'.
$sModulesPath = null;

// Selenium server IP address
$sSeleniumServerIp = "127.0.0.1";
// Folder where to save selenium screen shots. If not specified, screenshots will not be taken.
$sSeleniumScreenShotsPath = null; //$sShopPath . '/selenium_screenshots/';
// Url, where selenium screen shots should be available.
$sSeleniumScreenShotsUrl = null; //$sShopUrl . '/selenium_screenshots/';

// Browser name which will be used for testing.
// Possible values: *iexplore, *iehta, *firefox, *chrome, *piiexplore, *pifirefox, *safari, *opera
// make sure that path to browser executable is known for the system
$sBrowserName = 'firefox';

// Currently exists dbRestore and dbRestore_largeDb. dbRestore_largeDb tends to be faster, but it is not able to work with
// external databases - this is why dbRestore is currently a default one.
$sDataBaseRestore = "dbRestore_largeDb";
