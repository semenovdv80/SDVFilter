Introduction
============
This is a simple package for filter an array

-------------------------------------------------------------------------------

Contact me
----------
If you have any questions, issues, feature requests, or just want to report
your "success story", or maybe even say hi, please send an email to
semenovdv80@gmail.com

-------------------------------------------------------------------------------

PHP Versions
------------
Note: The package requires PHP 5.3+.

-------------------------------------------------------------------------------

Available via Composer
----------------------
Just add the package "semenovdv80/sdvfilter":
```
    "require": {
        "semenovdv80/sdvfilter": "dev-master"
    }
```
Packagist URL: http://packagist.org/packages/semenovdv80/sdvfilter

-------------------------------------------------------------------------------

QuickStart
==========

```
$filter = new SDVFilter($your_array);
$out_array =  $filter->moreThan($your_value)

```

-------------------------------------------------------------------------------

Currently Supported Filters
==========================

* moreThan
* lessThan

-------------------------------------------------------------------------------

LICENSE
=======
Copyright (c) 2018 Dmitriy Semenov

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.