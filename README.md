## Reindex Magento 2 from Admin

[![Total Downloads](https://poser.pugx.org/magepal/magento2-reindex/downloads)](https://packagist.org/packages/magepal/magento2-reindex)
[![Latest Stable Version](https://poser.pugx.org/magepal/magento2-reindex/v/stable)](https://packagist.org/packages/magepal/magento2-reindex)

Reindex your Magento 2 store quickly and easily from backend/admin. Ideal for project managers or QA department during site development and not meant to be using in large production environment.

![Magento Reindex](https://user-images.githubusercontent.com/1415141/31852790-2f78558a-b64c-11e7-981f-b17ae44d4ab1.gif)

## Installation

#### Step 1
##### Using Composer (recommended)
```
composer require magepal/magento2-reindex
```
##### Manually
 * Download the extension
 * Unzip the file
 * Create a folder {Magento 2 root}/app/code/MagePal/Reindex
 * Copy the content from the unzip folder

#### Step 2 - Enable Reindex (from {Magento root} folder)
 * php -f bin/magento module:enable --clear-static-content MagePal_Reindex
 * php -f bin/magento setup:upgrade

Contribution
---
Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).


Support
---
If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magepal/magento2-reindex/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.

© MagePal LLC.
