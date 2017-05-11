## Reindex Magento 2 from Admin


Reindex your Magento 2 store quickly and easily from backend/admin. Ideal for project managers or QA department during site development.

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


![image](https://cloud.githubusercontent.com/assets/1415141/25950557/5b88aca4-3629-11e7-9567-f238baeef379.png)
