# Change Log

All notable changes to this project will be documented in this file, in reverse chronological order by release.
The format follows [Keep a CHANGELOG](http://keepachangelog.com/).
This project adheres to [Semantic Versioning](http://semver.org/).

## [v0.3.0] - 2018-10-31

### Added
- Handling of nested templates, in particular data objects ID 50 - 99 under the template for root data object ID 62.
- Mark nested templates with `isTemplate` key in specifications.
- Coding style checks using PHP CodeSniffer.

### Changed
- Use PHPUnit for tests.

### Removed
- Nothing.

### Fixed
- Nothing.

## [v0.2.0] - 2018-10-22

### Added
- This CHANGELOG file.

### Changed
- Flatten `id` array in output. Difference shown below for a single data object in the output:

  ```
  // Previously
  [
      'id' => [
          'key' => '00',
          'name' => 'Payload Format Indicator',
      ],
      'length' => '02',
      'value' => '01',
      'comment' => 'Shall be the 1st data object in QR code. Shall contain value of 01.',
  ]

  // Now
  [
      'id' '00',
      'name' => 'Payload Format Indicator',
      'length' => '02',
      'value' => '01',
      'comment' => 'Shall be the 1st data object in QR code. Shall contain value of 01.',
  ]
  ```

### Removed
- Nothing.

### Fixed
- Nothing.

## [v0.1.0] - 2018-10-21

1st release. Used at https://intzone.com/tools/sgqr.

[Unreleased]: https://github.com/zionsg/sgqr-parser/compare/v0.3.0...HEAD
[v0.3.0]: https://github.com/zionsg/sgqr-parser/compare/v0.2.0...v0.3.0
[v0.2.0]: https://github.com/zionsg/sgqr-parser/compare/v0.1.0...v0.2.0
[v0.1.0]: https://github.com/zionsg/sgqr-parser/tree/v0.1.0
