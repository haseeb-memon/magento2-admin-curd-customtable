# Admin Curd Custom Table Module

## Main Functionalities
Admin Curd Module for custom table with list, edit, and delete records and the REST API for the same

## Installation
\* = in production please use the `--keep-generated` option


 - Unzip the zip file in `app/code/Company`
 - Enable the module by running `php bin/magento module:enable Company_CustomTable`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## API

- Apis are created under secure token, they are not accessible directly first you need to generate the admin user token to access the api
   -  /V1/company-customtable/table/search [GET]
   -  /V1/company-customtable/table/:tableId [GET]
   -  /V1/company-customtable/table [POST]
   -  /V1/company-customtable/table/:tableId  [PUT]
   -  /V1/company-customtable/table/:tableId [DELETE]


## Graphql
Coming Soon


