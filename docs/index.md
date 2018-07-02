# WordPress-Wrapper

This class provides a wrapper to all the WordPress-functions via an object.

It's nothing else than an object with a magic `__call`-method
that calls the WordPress-functions.

To make it easier to handle the methods there's a DocBlock that
contains all the methods of WordPress so that your favourite IDE can
provide you with autocompletion.

## Installation

Download the WordPress-Class for your WordPress-version and include it in
your project.

## Download

* [WordPress-4.9.6](dist/4.9.6/WordPress.php)
* [WordPress-4.9.5](dist/4.9.5/WordPress.php)

## Usage

Create a new instance of the WordPress-class and invoke the methods you need like this:

```php
$wp    = new \Org_Heigl\WordPressWrapper\WordPress();
$class = new MyClass();

$value = $wp->add_filter('the_content', [$class, 'the_function']);
```

That is the same as this code:

```php
$class = new MyClass();

$value = add_filter('the_content', [$class, 'the_function'])
```

So why the added complexity?

To make your code testable!

Now you can can do the following:

```php
class MyClass
{
    private $wp;

    public function __construct(\Org_Heigl\WordPressWrapper\WordPress $wp)
    {
        $this->wp = $wp;
        $this->wp->add_filter('the_content', [$this, 'the_function']);
    }

    public function the_function($content)
    {
        return $content;
    }
}

new MyClass(new \Org_Heigl\WordPressWrapper\WordPress());
```

And if you want to test the class, you can now mock the injected
WordPress-class.

```
class MyClassTest extends \PHPUnit\Framework\TestCase
{

    public function testConstructor()
    {
        $wordPress = $this->getMockBuilder(\Org_Heigl\WordPressWrapper\WordPress::class)
                          ->getMock();

        $wordPress->method('add_filter')
                  ->with(
                        $this->equalsTo('the_content'),
                        $this->contains('the_function')
                    );

        $class = new MyClass($wordPress);
    }
}
```





