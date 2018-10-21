# SGQR Parser

Parse SGQR code (Singapore Quick Response Code) as per http://www.mas.gov.sg/sgqr.
No validation is performed at this point of time.

## Requirements
- PHP >= 7.1
- Composer >= 1.7.2

## Installation
- Clone this repo.
- Run `composer install`.
- Run `composer test` in the terminal or `tests/test.php` in the browser.

## Add to project
- As this library is not available on Packagist, the GitHub repository needs to be added to the
  project's `composer.json`.

  ```
  {
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/zionsg/sgqr-parser"
        }
    ]
  }
  ```
- Run `composer require zionsg/sgqr-parser:dev-master` to get the latest release in the `master` branch.

## Usage
- See `tests/test.php`.
