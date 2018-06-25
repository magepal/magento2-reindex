<a href="http://www.magepal.com" ><img src="https://image.ibb.co/dHBkYH/Magepal_logo.png" width="100" align="right" /></a>

## Reindex Magento 2 from Admin

[![Total Downloads](https://poser.pugx.org/magepal/magento2-reindex/downloads)](https://packagist.org/packages/magepal/magento2-reindex)
[![Latest Stable Version](https://poser.pugx.org/magepal/magento2-reindex/v/stable)](https://packagist.org/packages/magepal/magento2-reindex)

Reindexing your Magento 2 store from Magento's admin has be removed and your only option is to set your indexes to "Update on Save" or reindex using SSH / CLI commandline which is time consuming. With our free Reindex module for Magento 2 you can quickly and easily update indivdiual or all indexes from within your Magento admin. Ideal for project managers or QA department during site development and testing of new product and functionality. This module is not meant for large production environment.

![Magento Reindex](https://image.ibb.co/ihvetH/Reindex_Magento_2_from_Admin_by_Magepal.gif)

Indexes

```
catalog_category_product                 Category Products
catalog_product_category                 Product Categories
catalog_product_price                    Product Price
catalog_product_attribute                Product EAV
cataloginventory_stock                   Stock
catalogrule_rule                         Catalog Rule Product
catalogrule_product                      Catalog Product Rule
catalogsearch_fulltext                   Catalog Search
```


## Installation

#### Step 1
##### Using Composer (recommended)
```
composer require magepal/magento2-reindex
```
##### Manually (not recommended)
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

© MagePal LLC. | [www.magepal.com](http:/www.magepal.com)
