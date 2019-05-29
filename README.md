<a href="http://www.magepal.com" title="Magento Extension"><img src="https://image.ibb.co/dHBkYH/Magepal_logo.png" width="100" align="right" alt="Magento2 plugins" /></a>

## Reindex Magento 2 from Admin

[![Total Downloads](https://poser.pugx.org/magepal/magento2-reindex/downloads)](https://packagist.org/packages/magepal/magento2-reindex)
[![Latest Stable Version](https://poser.pugx.org/magepal/magento2-reindex/v/stable)](https://packagist.org/packages/magepal/magento2-reindex)

Reindexing your Magento 2 store from Magento's admin has been removed and your only option is to set your indexes to "Update on Save" or reindex using SSH / CLI command line which is time-consuming. With our free Reindex module for Magento 2, you can quickly and easily update individual or all indexes from within your Magento admin. Ideal for project managers or QA department during site development and testing of new product and functionality. This module is not meant for large productions environment.

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

#### Magento Store Reindex Mode
By default, you can set your store indexers to "Update on Save" or "Update by Schedule". Setting your Magento store to index on save will update your indexes when admin changes occur, while update by schedule only run at a set interval by your cron job. In your server cron must be set up correctly for "Update by Schedule" to work which must be set up by a developer, system admin or hosting company.

## Installation

#### Step 1
##### Using Composer (recommended)
```
composer require magepal/magento2-reindex
```

## Documentation

 - [How to Install Reindex for Magento2](https://www.magepal.com/help/docs/how-to-reindex-magento-2/#installation)

 - [How to setup Reindex for Magento2](https://www.magepal.com/help/docs/how-to-reindex-magento-2/#configuration)

#### How to reindex your Magento 2 store from Command Line - One or more indexers are invalid

> php bin/magento indexer:reindex

Contribution
---
Want to contribute to this extension? The quickest way is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).


Support
---
If you encounter any problems or bugs, please open an issue on [GitHub](https://github.com/magepal/magento2-reindex/issues).

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.

Other Extensions
---
[Custom SMTP](https://www.magepal.com/magento2/extensions/custom-smtp.html) | [Google Tag Manager](https://www.magepal.com/magento2/extensions/google-tag-manager.html) | [Enhanced E-commerce](https://www.magepal.com/magento2/extensions/enhanced-ecommerce-for-google-tag-manager.html) | [Reindex](https://www.magepal.com/magento2/extensions/reindex.html) | [Custom Shipping Method](https://www.magepal.com/magento2/extensions/custom-shipping-rates-for-magento-2.html) | [Preview Order Confirmation](https://www.magepal.com/magento2/extensions/preview-order-confirmation-page-for-magento-2.html) | [Guest to Customer](https://www.magepal.com/magento2/extensions/guest-to-customer.html) | [Admin Form Fields Manager](https://www.magepal.com/magento2/extensions/admin-form-fields-manager-for-magento-2.html) | [Customer Dashboard Links Manager](https://www.magepal.com/magento2/extensions/customer-dashboard-links-manager-for-magento-2.html) | [Lazy Loader](https://www.magepal.com/magento2/extensions/lazy-load.html) | [Order Confirmation Page Miscellaneous Scripts](https://www.magepal.com/magento2/extensions/order-confirmation-miscellaneous-scripts-for-magento-2.html)

© MagePal LLC. | [www.magepal.com](http://www.magepal.com "Magento 2.2 Extensions Marketplace")
