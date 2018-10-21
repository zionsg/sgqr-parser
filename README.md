# SGQR Parser

Parse SGQR code (Singapore Quick Response Code) as per http://www.mas.gov.sg/sgqr.

## Requirements
- PHP >= 7.1
- Composer >= 1.7.2

## Installation
- Clone this repo.
- Run `composer install`.
- Run `composer test` in the terminal or `tests/test.php` in the browser.

## Add to project
- As this library is not available on Packagist, the GitHub repository needs to be added to composer.json in project.

  ```
  {
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/zionsg/ZnZend"
        }
    ]
  }
  ```
- Run `composer require zionsg/sgqr-parser` to get the latest release in the `master` branch.
- To run tests, run `composer test`.

## Usage
- See `tests/test.php`.
