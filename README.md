# Page Summary Extension

"Get a summary" is a Wikimedia Foundation extension that provides the summary of a given Wikipedia page or article...

[![GitHub license](https://badgen.net/github/license/Naereen/Strapdown.js)](https://github.com/Naereen/StrapDown.js/blob/master/LICENSE)
[![GitHub contributors](https://badgen.net/github/contributors/kaliacad/PageSummary)](https://GitHub.com/kaliacad/PageSummary/graphs/contributors/)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity)

## Installation for development

**Prerequisites**:

    PHP 7.2.
    A Wikimedia developer account.
    MediaWiki >= 1.42.0"

Clone the Page Summary Extension in the extension folder.

    git clone https://github.com/kaliacad/PageSummary.git

After cloning the repository:

    
    Go to LocalSettings.php file add these lines of code.

```php
    wfLoadExtension('PageSummary');
    $wgBoilerPlateVandalizeEachPage = true;
```
    Go to the root of mediawiki and run this command
```
    composer update
    composer serve
```

## Usage


## Folder Structure


## Deployment

Deployment happens automatically after a new version tag is created.
