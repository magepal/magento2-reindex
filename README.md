## Reindex Magento 2 from Admin


Reindex your Magento 2 store quickly and easily from backend/admin. Ideal for project managers or QA department during site development and not meant to be using in large production environment.

#### 1 - Installation
##### Manually
 * Download the extension
 * Unzip the file
 * Create a folder {Magento 2 root}/app/code/MagePal/Reindex
 * Copy the content from the unzip folder

##### Using Composer

```
composer require magepal/magento2-reindex
```

#### 2 - Enable Reindex (from {Magento root} folder)
 * php -f bin/magento module:enable --clear-static-content MagePal_Reindex
 * php -f bin/magento setup:upgrade

![Magento Reindex](https://user-images.githubusercontent.com/1415141/31852790-2f78558a-b64c-11e7-981f-b17ae44d4ab1.gif)


----

Need help setting up or want to customize this extension to meet your business needs? Please email support@magepal.com and if we like your idea we will add this feature for free or at a discounted rate.
