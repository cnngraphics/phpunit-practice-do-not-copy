For one common issue with extends to PHP unit in test files see this
https://github.com/symfony/symfony/issues/21816

** Error: Class 'PHPUnit_Framework_TestCase' not found
This is happening because you are probably using PHPUnit 6 which no longer supports PHPUnit_Framework_TestCase and has been replace by PHPUnit\Framework\TestCase. See https://thephp.cc/news/2017/02/migrating-to-phpunit-6 for more information.