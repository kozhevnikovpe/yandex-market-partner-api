# OpenAPIClient-php

API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.

В числе возможностей интеграции:

* управление каталогом товаров и витриной,

* обработка заказов,

* изменение настроек магазина,

* получение отчетов.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BidsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы узнать идентификатор, воспользуйтесь запросом [GET campaigns](../../reference/campaigns/getCampaigns.md#businessdto).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуется передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `offset`, `page_number` и `page_size`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_bids_info_request = new \OpenAPI\Client\Model\GetBidsInfoRequest(); // \OpenAPI\Client\Model\GetBidsInfoRequest | description

try {
    $result = $apiInstance->getBidsInfoForBusiness($business_id, $page_token, $limit, $get_bids_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BidsApi->getBidsInfoForBusiness: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.partner.market.yandex.ru*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BidsApi* | [**getBidsInfoForBusiness**](docs/Api/BidsApi.md#getbidsinfoforbusiness) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*BidsApi* | [**getBidsRecommendations**](docs/Api/BidsApi.md#getbidsrecommendations) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*BidsApi* | [**putBidsForBusiness**](docs/Api/BidsApi.md#putbidsforbusiness) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*BidsApi* | [**putBidsForCampaign**](docs/Api/BidsApi.md#putbidsforcampaign) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*BusinessOfferMappingsApi* | [**addOffersToArchive**](docs/Api/BusinessOfferMappingsApi.md#addofferstoarchive) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*BusinessOfferMappingsApi* | [**deleteOffers**](docs/Api/BusinessOfferMappingsApi.md#deleteoffers) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*BusinessOfferMappingsApi* | [**deleteOffersFromArchive**](docs/Api/BusinessOfferMappingsApi.md#deleteoffersfromarchive) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*BusinessOfferMappingsApi* | [**getOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#getoffermappings) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*BusinessOfferMappingsApi* | [**getSuggestedOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#getsuggestedoffermappings) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*BusinessOfferMappingsApi* | [**updateOfferMappings**](docs/Api/BusinessOfferMappingsApi.md#updateoffermappings) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*BusinessesApi* | [**getBusinessSettings**](docs/Api/BusinessesApi.md#getbusinesssettings) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /campaigns/{campaignId} | Информация о магазине
*CampaignsApi* | [**getCampaignLogins**](docs/Api/CampaignsApi.md#getcampaignlogins) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*CampaignsApi* | [**getCampaignRegion**](docs/Api/CampaignsApi.md#getcampaignregion) | **GET** /campaigns/{campaignId}/region | Регион магазина
*CampaignsApi* | [**getCampaignSettings**](docs/Api/CampaignsApi.md#getcampaignsettings) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*CampaignsApi* | [**getCampaigns**](docs/Api/CampaignsApi.md#getcampaigns) | **GET** /campaigns | Список магазинов пользователя
*CampaignsApi* | [**getCampaignsByLogin**](docs/Api/CampaignsApi.md#getcampaignsbylogin) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*CategoriesApi* | [**getCategoriesMaxSaleQuantum**](docs/Api/CategoriesApi.md#getcategoriesmaxsalequantum) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*CategoriesApi* | [**getCategoriesTree**](docs/Api/CategoriesApi.md#getcategoriestree) | **POST** /categories/tree | Дерево категорий
*ChatsApi* | [**createChat**](docs/Api/ChatsApi.md#createchat) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*ChatsApi* | [**getChatHistory**](docs/Api/ChatsApi.md#getchathistory) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*ChatsApi* | [**getChats**](docs/Api/ChatsApi.md#getchats) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*ChatsApi* | [**sendFileToChat**](docs/Api/ChatsApi.md#sendfiletochat) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*ChatsApi* | [**sendMessageToChat**](docs/Api/ChatsApi.md#sendmessagetochat) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*ContentApi* | [**getCategoryContentParameters**](docs/Api/ContentApi.md#getcategorycontentparameters) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*ContentApi* | [**getOfferCardsContentStatus**](docs/Api/ContentApi.md#getoffercardscontentstatus) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*ContentApi* | [**updateOfferContent**](docs/Api/ContentApi.md#updateoffercontent) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*DbsApi* | [**acceptOrderCancellation_0**](docs/Api/DbsApi.md#acceptordercancellation_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*DbsApi* | [**addHiddenOffers_2**](docs/Api/DbsApi.md#addhiddenoffers_2) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*DbsApi* | [**addOffersToArchive_0**](docs/Api/DbsApi.md#addofferstoarchive_0) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*DbsApi* | [**calculateTariffs_2**](docs/Api/DbsApi.md#calculatetariffs_2) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*DbsApi* | [**confirmBusinessPrices_0**](docs/Api/DbsApi.md#confirmbusinessprices_0) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*DbsApi* | [**confirmCampaignPrices_0**](docs/Api/DbsApi.md#confirmcampaignprices_0) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*DbsApi* | [**createChat_0**](docs/Api/DbsApi.md#createchat_0) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*DbsApi* | [**createOutlet_0**](docs/Api/DbsApi.md#createoutlet_0) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*DbsApi* | [**deleteCampaignOffers_0**](docs/Api/DbsApi.md#deletecampaignoffers_0) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*DbsApi* | [**deleteGoodsFeedbackComment_2**](docs/Api/DbsApi.md#deletegoodsfeedbackcomment_2) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*DbsApi* | [**deleteHiddenOffers_2**](docs/Api/DbsApi.md#deletehiddenoffers_2) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*DbsApi* | [**deleteOffersFromArchive_0**](docs/Api/DbsApi.md#deleteoffersfromarchive_0) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*DbsApi* | [**deleteOffers_0**](docs/Api/DbsApi.md#deleteoffers_0) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*DbsApi* | [**deleteOutletLicenses_0**](docs/Api/DbsApi.md#deleteoutletlicenses_0) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*DbsApi* | [**deleteOutlet_0**](docs/Api/DbsApi.md#deleteoutlet_0) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*DbsApi* | [**deletePromoOffers_2**](docs/Api/DbsApi.md#deletepromooffers_2) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*DbsApi* | [**generateBoostConsolidatedReport_2**](docs/Api/DbsApi.md#generateboostconsolidatedreport_2) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*DbsApi* | [**generateCompetitorsPositionReport_1**](docs/Api/DbsApi.md#generatecompetitorspositionreport_1) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*DbsApi* | [**generateGoodsFeedbackReport_2**](docs/Api/DbsApi.md#generategoodsfeedbackreport_2) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*DbsApi* | [**generateMassOrderLabelsReport_1**](docs/Api/DbsApi.md#generatemassorderlabelsreport_1) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*DbsApi* | [**generateOrderLabel_1**](docs/Api/DbsApi.md#generateorderlabel_1) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*DbsApi* | [**generateOrderLabels_1**](docs/Api/DbsApi.md#generateorderlabels_1) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*DbsApi* | [**generatePricesReport_2**](docs/Api/DbsApi.md#generatepricesreport_2) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*DbsApi* | [**generateShelfsStatisticsReport_2**](docs/Api/DbsApi.md#generateshelfsstatisticsreport_2) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*DbsApi* | [**generateShowsSalesReport_1**](docs/Api/DbsApi.md#generateshowssalesreport_1) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*DbsApi* | [**generateStocksOnWarehousesReport_2**](docs/Api/DbsApi.md#generatestocksonwarehousesreport_2) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*DbsApi* | [**generateUnitedMarketplaceServicesReport_1**](docs/Api/DbsApi.md#generateunitedmarketplaceservicesreport_1) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*DbsApi* | [**generateUnitedNettingReport_1**](docs/Api/DbsApi.md#generateunitednettingreport_1) | **POST** /reports/united-netting/generate | Отчет по платежам
*DbsApi* | [**generateUnitedOrdersReport_2**](docs/Api/DbsApi.md#generateunitedordersreport_2) | **POST** /reports/united-orders/generate | Отчет по заказам
*DbsApi* | [**getAllOffers_0**](docs/Api/DbsApi.md#getalloffers_0) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*DbsApi* | [**getBidsInfoForBusiness_0**](docs/Api/DbsApi.md#getbidsinfoforbusiness_0) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*DbsApi* | [**getBidsRecommendations_0**](docs/Api/DbsApi.md#getbidsrecommendations_0) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*DbsApi* | [**getBusinessQuarantineOffers_0**](docs/Api/DbsApi.md#getbusinessquarantineoffers_0) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*DbsApi* | [**getBusinessSettings_0**](docs/Api/DbsApi.md#getbusinesssettings_0) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*DbsApi* | [**getCampaignLogins_0**](docs/Api/DbsApi.md#getcampaignlogins_0) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*DbsApi* | [**getCampaignOffers_0**](docs/Api/DbsApi.md#getcampaignoffers_0) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*DbsApi* | [**getCampaignQuarantineOffers_0**](docs/Api/DbsApi.md#getcampaignquarantineoffers_0) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*DbsApi* | [**getCampaignRegion_0**](docs/Api/DbsApi.md#getcampaignregion_0) | **GET** /campaigns/{campaignId}/region | Регион магазина
*DbsApi* | [**getCampaignSettings_0**](docs/Api/DbsApi.md#getcampaignsettings_0) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*DbsApi* | [**getCampaign_0**](docs/Api/DbsApi.md#getcampaign_0) | **GET** /campaigns/{campaignId} | Информация о магазине
*DbsApi* | [**getCampaignsByLogin_0**](docs/Api/DbsApi.md#getcampaignsbylogin_0) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*DbsApi* | [**getCampaigns_0**](docs/Api/DbsApi.md#getcampaigns_0) | **GET** /campaigns | Список магазинов пользователя
*DbsApi* | [**getCategoriesMaxSaleQuantum_2**](docs/Api/DbsApi.md#getcategoriesmaxsalequantum_2) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*DbsApi* | [**getCategoriesTree_2**](docs/Api/DbsApi.md#getcategoriestree_2) | **POST** /categories/tree | Дерево категорий
*DbsApi* | [**getCategoryContentParameters_0**](docs/Api/DbsApi.md#getcategorycontentparameters_0) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*DbsApi* | [**getChatHistory_0**](docs/Api/DbsApi.md#getchathistory_0) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*DbsApi* | [**getChats_0**](docs/Api/DbsApi.md#getchats_0) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*DbsApi* | [**getDeliveryServices_1**](docs/Api/DbsApi.md#getdeliveryservices_1) | **GET** /delivery/services | Справочник служб доставки
*DbsApi* | [**getFeedIndexLogs_0**](docs/Api/DbsApi.md#getfeedindexlogs_0) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*DbsApi* | [**getFeed_0**](docs/Api/DbsApi.md#getfeed_0) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*DbsApi* | [**getFeedbackAndCommentUpdates_0**](docs/Api/DbsApi.md#getfeedbackandcommentupdates_0) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*DbsApi* | [**getFeeds_0**](docs/Api/DbsApi.md#getfeeds_0) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*DbsApi* | [**getGoodsFeedbackComments_2**](docs/Api/DbsApi.md#getgoodsfeedbackcomments_2) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*DbsApi* | [**getGoodsFeedbacks_2**](docs/Api/DbsApi.md#getgoodsfeedbacks_2) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*DbsApi* | [**getGoodsStats_3**](docs/Api/DbsApi.md#getgoodsstats_3) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*DbsApi* | [**getHiddenOffers_2**](docs/Api/DbsApi.md#gethiddenoffers_2) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*DbsApi* | [**getModelOffers_0**](docs/Api/DbsApi.md#getmodeloffers_0) | **GET** /models/{modelId}/offers | Список предложений для одной модели
*DbsApi* | [**getModel_0**](docs/Api/DbsApi.md#getmodel_0) | **GET** /models/{modelId} | Информация об одной модели
*DbsApi* | [**getModelsOffers_0**](docs/Api/DbsApi.md#getmodelsoffers_0) | **POST** /models/offers | Список предложений для нескольких моделей
*DbsApi* | [**getModels_0**](docs/Api/DbsApi.md#getmodels_0) | **POST** /models | Информация о нескольких моделях
*DbsApi* | [**getOfferCardsContentStatus_0**](docs/Api/DbsApi.md#getoffercardscontentstatus_0) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*DbsApi* | [**getOfferMappingEntries_3**](docs/Api/DbsApi.md#getoffermappingentries_3) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*DbsApi* | [**getOfferMappings_0**](docs/Api/DbsApi.md#getoffermappings_0) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*DbsApi* | [**getOfferRecommendations_0**](docs/Api/DbsApi.md#getofferrecommendations_0) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*DbsApi* | [**getOffers_0**](docs/Api/DbsApi.md#getoffers_0) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*DbsApi* | [**getOrderBusinessBuyerInfo_2**](docs/Api/DbsApi.md#getorderbusinessbuyerinfo_2) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*DbsApi* | [**getOrderBusinessDocumentsInfo_2**](docs/Api/DbsApi.md#getorderbusinessdocumentsinfo_2) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*DbsApi* | [**getOrderBuyerInfo_0**](docs/Api/DbsApi.md#getorderbuyerinfo_0) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе — физическом лице
*DbsApi* | [**getOrderLabelsData_1**](docs/Api/DbsApi.md#getorderlabelsdata_1) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*DbsApi* | [**getOrder_2**](docs/Api/DbsApi.md#getorder_2) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*DbsApi* | [**getOrdersStats_2**](docs/Api/DbsApi.md#getordersstats_2) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*DbsApi* | [**getOrders_1**](docs/Api/DbsApi.md#getorders_1) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*DbsApi* | [**getOutletLicenses_0**](docs/Api/DbsApi.md#getoutletlicenses_0) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*DbsApi* | [**getOutlet_0**](docs/Api/DbsApi.md#getoutlet_0) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация об одной точке продаж
*DbsApi* | [**getOutlets_0**](docs/Api/DbsApi.md#getoutlets_0) | **GET** /campaigns/{campaignId}/outlets | Информация о нескольких точках продаж
*DbsApi* | [**getPricesByOfferIds_2**](docs/Api/DbsApi.md#getpricesbyofferids_2) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в магазине
*DbsApi* | [**getPrices_2**](docs/Api/DbsApi.md#getprices_2) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*DbsApi* | [**getPromoOffers_2**](docs/Api/DbsApi.md#getpromooffers_2) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*DbsApi* | [**getPromos_2**](docs/Api/DbsApi.md#getpromos_2) | **POST** /businesses/{businessId}/promos | Получение списка акций
*DbsApi* | [**getQualityRatingDetails_1**](docs/Api/DbsApi.md#getqualityratingdetails_1) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*DbsApi* | [**getQualityRatings_2**](docs/Api/DbsApi.md#getqualityratings_2) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*DbsApi* | [**getReportInfo_1**](docs/Api/DbsApi.md#getreportinfo_1) | **GET** /reports/info/{reportId} | Получение заданного отчета
*DbsApi* | [**getReturnApplication_1**](docs/Api/DbsApi.md#getreturnapplication_1) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*DbsApi* | [**getReturnPhoto_1**](docs/Api/DbsApi.md#getreturnphoto_1) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*DbsApi* | [**getReturn_1**](docs/Api/DbsApi.md#getreturn_1) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*DbsApi* | [**getReturns_1**](docs/Api/DbsApi.md#getreturns_1) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*DbsApi* | [**getStocks_2**](docs/Api/DbsApi.md#getstocks_2) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*DbsApi* | [**getSuggestedOfferMappingEntries_3**](docs/Api/DbsApi.md#getsuggestedoffermappingentries_3) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*DbsApi* | [**getSuggestedOfferMappings_0**](docs/Api/DbsApi.md#getsuggestedoffermappings_0) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*DbsApi* | [**getSuggestedPrices_3**](docs/Api/DbsApi.md#getsuggestedprices_3) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*DbsApi* | [**getWarehouses_1**](docs/Api/DbsApi.md#getwarehouses_1) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*DbsApi* | [**provideOrderDigitalCodes_0**](docs/Api/DbsApi.md#provideorderdigitalcodes_0) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*DbsApi* | [**provideOrderItemIdentifiers_1**](docs/Api/DbsApi.md#provideorderitemidentifiers_1) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*DbsApi* | [**putBidsForBusiness_0**](docs/Api/DbsApi.md#putbidsforbusiness_0) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*DbsApi* | [**putBidsForCampaign_0**](docs/Api/DbsApi.md#putbidsforcampaign_0) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*DbsApi* | [**refreshFeed_0**](docs/Api/DbsApi.md#refreshfeed_0) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*DbsApi* | [**searchModels_0**](docs/Api/DbsApi.md#searchmodels_0) | **GET** /models | Поиск модели товара
*DbsApi* | [**searchRegionChildren_2**](docs/Api/DbsApi.md#searchregionchildren_2) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*DbsApi* | [**searchRegionsById_2**](docs/Api/DbsApi.md#searchregionsbyid_2) | **GET** /regions/{regionId} | Информация о регионе
*DbsApi* | [**searchRegionsByName_2**](docs/Api/DbsApi.md#searchregionsbyname_2) | **GET** /regions | Поиск регионов по их имени
*DbsApi* | [**sendFileToChat_0**](docs/Api/DbsApi.md#sendfiletochat_0) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*DbsApi* | [**sendMessageToChat_0**](docs/Api/DbsApi.md#sendmessagetochat_0) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*DbsApi* | [**setFeedParams_0**](docs/Api/DbsApi.md#setfeedparams_0) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*DbsApi* | [**setOrderBoxLayout_2**](docs/Api/DbsApi.md#setorderboxlayout_2) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*DbsApi* | [**setOrderDeliveryDate_0**](docs/Api/DbsApi.md#setorderdeliverydate_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*DbsApi* | [**setOrderDeliveryTrackCode_0**](docs/Api/DbsApi.md#setorderdeliverytrackcode_0) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*DbsApi* | [**setOrderShipmentBoxes_1**](docs/Api/DbsApi.md#setordershipmentboxes_1) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*DbsApi* | [**setReturnDecision_0**](docs/Api/DbsApi.md#setreturndecision_0) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие или изменение решения по возврату
*DbsApi* | [**skipGoodsFeedbacksReaction_2**](docs/Api/DbsApi.md#skipgoodsfeedbacksreaction_2) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Отказ от ответа на отзывы
*DbsApi* | [**submitReturnDecision_0**](docs/Api/DbsApi.md#submitreturndecision_0) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Подтверждение решения по возврату
*DbsApi* | [**updateBusinessPrices_2**](docs/Api/DbsApi.md#updatebusinessprices_2) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары во всех магазинах
*DbsApi* | [**updateCampaignOffers_0**](docs/Api/DbsApi.md#updatecampaignoffers_0) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*DbsApi* | [**updateGoodsFeedbackComment_2**](docs/Api/DbsApi.md#updategoodsfeedbackcomment_2) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*DbsApi* | [**updateOfferContent_0**](docs/Api/DbsApi.md#updateoffercontent_0) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*DbsApi* | [**updateOfferMappingEntries_3**](docs/Api/DbsApi.md#updateoffermappingentries_3) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*DbsApi* | [**updateOfferMappings_0**](docs/Api/DbsApi.md#updateoffermappings_0) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*DbsApi* | [**updateOrderItems_1**](docs/Api/DbsApi.md#updateorderitems_1) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*DbsApi* | [**updateOrderStatus_1**](docs/Api/DbsApi.md#updateorderstatus_1) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*DbsApi* | [**updateOrderStatuses_1**](docs/Api/DbsApi.md#updateorderstatuses_1) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*DbsApi* | [**updateOrderStorageLimit_0**](docs/Api/DbsApi.md#updateorderstoragelimit_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*DbsApi* | [**updateOutletLicenses_0**](docs/Api/DbsApi.md#updateoutletlicenses_0) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*DbsApi* | [**updateOutlet_0**](docs/Api/DbsApi.md#updateoutlet_0) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*DbsApi* | [**updatePrices_2**](docs/Api/DbsApi.md#updateprices_2) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*DbsApi* | [**updatePromoOffers_2**](docs/Api/DbsApi.md#updatepromooffers_2) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*DbsApi* | [**updateStocks_1**](docs/Api/DbsApi.md#updatestocks_1) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*DeliveryServicesApi* | [**getDeliveryServices**](docs/Api/DeliveryServicesApi.md#getdeliveryservices) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**addHiddenOffers_3**](docs/Api/ExpressApi.md#addhiddenoffers_3) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*ExpressApi* | [**addOffersToArchive_3**](docs/Api/ExpressApi.md#addofferstoarchive_3) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*ExpressApi* | [**calculateTariffs_3**](docs/Api/ExpressApi.md#calculatetariffs_3) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*ExpressApi* | [**confirmBusinessPrices_3**](docs/Api/ExpressApi.md#confirmbusinessprices_3) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*ExpressApi* | [**confirmCampaignPrices_3**](docs/Api/ExpressApi.md#confirmcampaignprices_3) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*ExpressApi* | [**createChat_3**](docs/Api/ExpressApi.md#createchat_3) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*ExpressApi* | [**deleteCampaignOffers_3**](docs/Api/ExpressApi.md#deletecampaignoffers_3) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*ExpressApi* | [**deleteGoodsFeedbackComment_3**](docs/Api/ExpressApi.md#deletegoodsfeedbackcomment_3) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*ExpressApi* | [**deleteHiddenOffers_3**](docs/Api/ExpressApi.md#deletehiddenoffers_3) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*ExpressApi* | [**deleteOffersFromArchive_3**](docs/Api/ExpressApi.md#deleteoffersfromarchive_3) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*ExpressApi* | [**deleteOffers_3**](docs/Api/ExpressApi.md#deleteoffers_3) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*ExpressApi* | [**deletePromoOffers_3**](docs/Api/ExpressApi.md#deletepromooffers_3) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*ExpressApi* | [**generateBoostConsolidatedReport_3**](docs/Api/ExpressApi.md#generateboostconsolidatedreport_3) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*ExpressApi* | [**generateCompetitorsPositionReport_3**](docs/Api/ExpressApi.md#generatecompetitorspositionreport_3) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*ExpressApi* | [**generateGoodsFeedbackReport_3**](docs/Api/ExpressApi.md#generategoodsfeedbackreport_3) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*ExpressApi* | [**generateGoodsRealizationReport_2**](docs/Api/ExpressApi.md#generategoodsrealizationreport_2) | **POST** /reports/goods-realization/generate | Отчет по реализации
*ExpressApi* | [**generateMassOrderLabelsReport_2**](docs/Api/ExpressApi.md#generatemassorderlabelsreport_2) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*ExpressApi* | [**generateOrderLabel_2**](docs/Api/ExpressApi.md#generateorderlabel_2) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*ExpressApi* | [**generateOrderLabels_2**](docs/Api/ExpressApi.md#generateorderlabels_2) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*ExpressApi* | [**generatePricesReport_3**](docs/Api/ExpressApi.md#generatepricesreport_3) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*ExpressApi* | [**generateShelfsStatisticsReport_3**](docs/Api/ExpressApi.md#generateshelfsstatisticsreport_3) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*ExpressApi* | [**generateShowsSalesReport_3**](docs/Api/ExpressApi.md#generateshowssalesreport_3) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*ExpressApi* | [**generateStocksOnWarehousesReport_3**](docs/Api/ExpressApi.md#generatestocksonwarehousesreport_3) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*ExpressApi* | [**generateUnitedMarketplaceServicesReport_3**](docs/Api/ExpressApi.md#generateunitedmarketplaceservicesreport_3) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*ExpressApi* | [**generateUnitedNettingReport_3**](docs/Api/ExpressApi.md#generateunitednettingreport_3) | **POST** /reports/united-netting/generate | Отчет по платежам
*ExpressApi* | [**generateUnitedOrdersReport_3**](docs/Api/ExpressApi.md#generateunitedordersreport_3) | **POST** /reports/united-orders/generate | Отчет по заказам
*ExpressApi* | [**getAllOffers_2**](docs/Api/ExpressApi.md#getalloffers_2) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*ExpressApi* | [**getBidsInfoForBusiness_3**](docs/Api/ExpressApi.md#getbidsinfoforbusiness_3) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*ExpressApi* | [**getBidsRecommendations_3**](docs/Api/ExpressApi.md#getbidsrecommendations_3) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*ExpressApi* | [**getBusinessQuarantineOffers_3**](docs/Api/ExpressApi.md#getbusinessquarantineoffers_3) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*ExpressApi* | [**getBusinessSettings_3**](docs/Api/ExpressApi.md#getbusinesssettings_3) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*ExpressApi* | [**getCampaignLogins_1**](docs/Api/ExpressApi.md#getcampaignlogins_1) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*ExpressApi* | [**getCampaignOffers_3**](docs/Api/ExpressApi.md#getcampaignoffers_3) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*ExpressApi* | [**getCampaignQuarantineOffers_3**](docs/Api/ExpressApi.md#getcampaignquarantineoffers_3) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*ExpressApi* | [**getCampaignRegion_3**](docs/Api/ExpressApi.md#getcampaignregion_3) | **GET** /campaigns/{campaignId}/region | Регион магазина
*ExpressApi* | [**getCampaignSettings_2**](docs/Api/ExpressApi.md#getcampaignsettings_2) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*ExpressApi* | [**getCampaign_1**](docs/Api/ExpressApi.md#getcampaign_1) | **GET** /campaigns/{campaignId} | Информация о магазине
*ExpressApi* | [**getCampaignsByLogin_1**](docs/Api/ExpressApi.md#getcampaignsbylogin_1) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*ExpressApi* | [**getCampaigns_1**](docs/Api/ExpressApi.md#getcampaigns_1) | **GET** /campaigns | Список магазинов пользователя
*ExpressApi* | [**getCategoriesMaxSaleQuantum_3**](docs/Api/ExpressApi.md#getcategoriesmaxsalequantum_3) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*ExpressApi* | [**getCategoriesTree_3**](docs/Api/ExpressApi.md#getcategoriestree_3) | **POST** /categories/tree | Дерево категорий
*ExpressApi* | [**getCategoryContentParameters_3**](docs/Api/ExpressApi.md#getcategorycontentparameters_3) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*ExpressApi* | [**getChatHistory_3**](docs/Api/ExpressApi.md#getchathistory_3) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*ExpressApi* | [**getChats_3**](docs/Api/ExpressApi.md#getchats_3) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*ExpressApi* | [**getDeliveryServices_2**](docs/Api/ExpressApi.md#getdeliveryservices_2) | **GET** /delivery/services | Справочник служб доставки
*ExpressApi* | [**getFeedIndexLogs_2**](docs/Api/ExpressApi.md#getfeedindexlogs_2) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*ExpressApi* | [**getFeed_2**](docs/Api/ExpressApi.md#getfeed_2) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*ExpressApi* | [**getFeedbackAndCommentUpdates_3**](docs/Api/ExpressApi.md#getfeedbackandcommentupdates_3) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*ExpressApi* | [**getFeeds_2**](docs/Api/ExpressApi.md#getfeeds_2) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*ExpressApi* | [**getGoodsFeedbackComments_3**](docs/Api/ExpressApi.md#getgoodsfeedbackcomments_3) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*ExpressApi* | [**getGoodsFeedbacks_3**](docs/Api/ExpressApi.md#getgoodsfeedbacks_3) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*ExpressApi* | [**getGoodsStats_2**](docs/Api/ExpressApi.md#getgoodsstats_2) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*ExpressApi* | [**getHiddenOffers_3**](docs/Api/ExpressApi.md#gethiddenoffers_3) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*ExpressApi* | [**getOfferCardsContentStatus_3**](docs/Api/ExpressApi.md#getoffercardscontentstatus_3) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*ExpressApi* | [**getOfferMappingEntries_2**](docs/Api/ExpressApi.md#getoffermappingentries_2) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*ExpressApi* | [**getOfferMappings_3**](docs/Api/ExpressApi.md#getoffermappings_3) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*ExpressApi* | [**getOfferRecommendations_3**](docs/Api/ExpressApi.md#getofferrecommendations_3) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*ExpressApi* | [**getOffers_2**](docs/Api/ExpressApi.md#getoffers_2) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*ExpressApi* | [**getOrderBusinessBuyerInfo_3**](docs/Api/ExpressApi.md#getorderbusinessbuyerinfo_3) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*ExpressApi* | [**getOrderBusinessDocumentsInfo_3**](docs/Api/ExpressApi.md#getorderbusinessdocumentsinfo_3) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*ExpressApi* | [**getOrderLabelsData_2**](docs/Api/ExpressApi.md#getorderlabelsdata_2) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*ExpressApi* | [**getOrder_3**](docs/Api/ExpressApi.md#getorder_3) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*ExpressApi* | [**getOrdersStats_3**](docs/Api/ExpressApi.md#getordersstats_3) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*ExpressApi* | [**getOrders_3**](docs/Api/ExpressApi.md#getorders_3) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*ExpressApi* | [**getPricesByOfferIds_3**](docs/Api/ExpressApi.md#getpricesbyofferids_3) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в магазине
*ExpressApi* | [**getPrices_3**](docs/Api/ExpressApi.md#getprices_3) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*ExpressApi* | [**getPromoOffers_3**](docs/Api/ExpressApi.md#getpromooffers_3) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*ExpressApi* | [**getPromos_3**](docs/Api/ExpressApi.md#getpromos_3) | **POST** /businesses/{businessId}/promos | Получение списка акций
*ExpressApi* | [**getQualityRatingDetails_2**](docs/Api/ExpressApi.md#getqualityratingdetails_2) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*ExpressApi* | [**getQualityRatings_3**](docs/Api/ExpressApi.md#getqualityratings_3) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*ExpressApi* | [**getReportInfo_3**](docs/Api/ExpressApi.md#getreportinfo_3) | **GET** /reports/info/{reportId} | Получение заданного отчета
*ExpressApi* | [**getReturnApplication_2**](docs/Api/ExpressApi.md#getreturnapplication_2) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ExpressApi* | [**getReturnPhoto_2**](docs/Api/ExpressApi.md#getreturnphoto_2) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*ExpressApi* | [**getReturn_2**](docs/Api/ExpressApi.md#getreturn_2) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*ExpressApi* | [**getReturns_2**](docs/Api/ExpressApi.md#getreturns_2) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*ExpressApi* | [**getStocks_3**](docs/Api/ExpressApi.md#getstocks_3) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*ExpressApi* | [**getSuggestedOfferMappingEntries_2**](docs/Api/ExpressApi.md#getsuggestedoffermappingentries_2) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*ExpressApi* | [**getSuggestedOfferMappings_3**](docs/Api/ExpressApi.md#getsuggestedoffermappings_3) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*ExpressApi* | [**getSuggestedPrices_2**](docs/Api/ExpressApi.md#getsuggestedprices_2) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*ExpressApi* | [**getWarehouses_2**](docs/Api/ExpressApi.md#getwarehouses_2) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*ExpressApi* | [**provideOrderItemIdentifiers_2**](docs/Api/ExpressApi.md#provideorderitemidentifiers_2) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*ExpressApi* | [**putBidsForBusiness_3**](docs/Api/ExpressApi.md#putbidsforbusiness_3) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*ExpressApi* | [**putBidsForCampaign_2**](docs/Api/ExpressApi.md#putbidsforcampaign_2) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*ExpressApi* | [**refreshFeed_2**](docs/Api/ExpressApi.md#refreshfeed_2) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*ExpressApi* | [**searchRegionChildren_3**](docs/Api/ExpressApi.md#searchregionchildren_3) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*ExpressApi* | [**searchRegionsById_3**](docs/Api/ExpressApi.md#searchregionsbyid_3) | **GET** /regions/{regionId} | Информация о регионе
*ExpressApi* | [**searchRegionsByName_3**](docs/Api/ExpressApi.md#searchregionsbyname_3) | **GET** /regions | Поиск регионов по их имени
*ExpressApi* | [**sendFileToChat_3**](docs/Api/ExpressApi.md#sendfiletochat_3) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*ExpressApi* | [**sendMessageToChat_3**](docs/Api/ExpressApi.md#sendmessagetochat_3) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*ExpressApi* | [**setFeedParams_2**](docs/Api/ExpressApi.md#setfeedparams_2) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*ExpressApi* | [**setOrderBoxLayout_1**](docs/Api/ExpressApi.md#setorderboxlayout_1) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*ExpressApi* | [**setOrderShipmentBoxes_2**](docs/Api/ExpressApi.md#setordershipmentboxes_2) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*ExpressApi* | [**skipGoodsFeedbacksReaction_3**](docs/Api/ExpressApi.md#skipgoodsfeedbacksreaction_3) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Отказ от ответа на отзывы
*ExpressApi* | [**updateBusinessPrices_3**](docs/Api/ExpressApi.md#updatebusinessprices_3) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары во всех магазинах
*ExpressApi* | [**updateCampaignOffers_3**](docs/Api/ExpressApi.md#updatecampaignoffers_3) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*ExpressApi* | [**updateGoodsFeedbackComment_3**](docs/Api/ExpressApi.md#updategoodsfeedbackcomment_3) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*ExpressApi* | [**updateOfferContent_3**](docs/Api/ExpressApi.md#updateoffercontent_3) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*ExpressApi* | [**updateOfferMappingEntries_2**](docs/Api/ExpressApi.md#updateoffermappingentries_2) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*ExpressApi* | [**updateOfferMappings_3**](docs/Api/ExpressApi.md#updateoffermappings_3) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*ExpressApi* | [**updateOrderItems_2**](docs/Api/ExpressApi.md#updateorderitems_2) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*ExpressApi* | [**updateOrderStatus_2**](docs/Api/ExpressApi.md#updateorderstatus_2) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*ExpressApi* | [**updateOrderStatuses_2**](docs/Api/ExpressApi.md#updateorderstatuses_2) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*ExpressApi* | [**updatePrices_3**](docs/Api/ExpressApi.md#updateprices_3) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*ExpressApi* | [**updatePromoOffers_3**](docs/Api/ExpressApi.md#updatepromooffers_3) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*ExpressApi* | [**updateStocks_2**](docs/Api/ExpressApi.md#updatestocks_2) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*ExpressApi* | [**verifyOrderEac_0**](docs/Api/ExpressApi.md#verifyordereac_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода подтверждения
*FbsApi* | [**addHiddenOffers_1**](docs/Api/FbsApi.md#addhiddenoffers_1) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbsApi* | [**addOffersToArchive_2**](docs/Api/FbsApi.md#addofferstoarchive_2) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*FbsApi* | [**calculateTariffs_0**](docs/Api/FbsApi.md#calculatetariffs_0) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*FbsApi* | [**confirmBusinessPrices_2**](docs/Api/FbsApi.md#confirmbusinessprices_2) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*FbsApi* | [**confirmCampaignPrices_2**](docs/Api/FbsApi.md#confirmcampaignprices_2) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*FbsApi* | [**confirmShipment_0**](docs/Api/FbsApi.md#confirmshipment_0) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*FbsApi* | [**createChat_1**](docs/Api/FbsApi.md#createchat_1) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*FbsApi* | [**deleteCampaignOffers_2**](docs/Api/FbsApi.md#deletecampaignoffers_2) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*FbsApi* | [**deleteGoodsFeedbackComment_1**](docs/Api/FbsApi.md#deletegoodsfeedbackcomment_1) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*FbsApi* | [**deleteHiddenOffers_1**](docs/Api/FbsApi.md#deletehiddenoffers_1) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*FbsApi* | [**deleteOffersFromArchive_2**](docs/Api/FbsApi.md#deleteoffersfromarchive_2) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*FbsApi* | [**deleteOffers_2**](docs/Api/FbsApi.md#deleteoffers_2) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*FbsApi* | [**deletePromoOffers_1**](docs/Api/FbsApi.md#deletepromooffers_1) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*FbsApi* | [**downloadShipmentAct_0**](docs/Api/FbsApi.md#downloadshipmentact_0) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*FbsApi* | [**downloadShipmentDiscrepancyAct_0**](docs/Api/FbsApi.md#downloadshipmentdiscrepancyact_0) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Получение акта расхождений
*FbsApi* | [**downloadShipmentInboundAct_0**](docs/Api/FbsApi.md#downloadshipmentinboundact_0) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Получение фактического акта приема-передачи
*FbsApi* | [**downloadShipmentPalletLabels_0**](docs/Api/FbsApi.md#downloadshipmentpalletlabels_0) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels | Ярлыки для доверительной приемки (FBS)
*FbsApi* | [**downloadShipmentReceptionTransferAct_0**](docs/Api/FbsApi.md#downloadshipmentreceptiontransferact_0) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*FbsApi* | [**downloadShipmentTransportationWaybill_0**](docs/Api/FbsApi.md#downloadshipmenttransportationwaybill_0) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Получение транспортной накладной
*FbsApi* | [**generateBoostConsolidatedReport_1**](docs/Api/FbsApi.md#generateboostconsolidatedreport_1) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*FbsApi* | [**generateCompetitorsPositionReport_2**](docs/Api/FbsApi.md#generatecompetitorspositionreport_2) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*FbsApi* | [**generateGoodsFeedbackReport_1**](docs/Api/FbsApi.md#generategoodsfeedbackreport_1) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*FbsApi* | [**generateGoodsRealizationReport_1**](docs/Api/FbsApi.md#generategoodsrealizationreport_1) | **POST** /reports/goods-realization/generate | Отчет по реализации
*FbsApi* | [**generateMassOrderLabelsReport_0**](docs/Api/FbsApi.md#generatemassorderlabelsreport_0) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*FbsApi* | [**generateOrderLabel_0**](docs/Api/FbsApi.md#generateorderlabel_0) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*FbsApi* | [**generateOrderLabels_0**](docs/Api/FbsApi.md#generateorderlabels_0) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*FbsApi* | [**generatePricesReport_1**](docs/Api/FbsApi.md#generatepricesreport_1) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*FbsApi* | [**generateShelfsStatisticsReport_1**](docs/Api/FbsApi.md#generateshelfsstatisticsreport_1) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*FbsApi* | [**generateShipmentListDocumentReport_0**](docs/Api/FbsApi.md#generateshipmentlistdocumentreport_0) | **POST** /reports/documents/shipment-list/generate | Получение листа сборки
*FbsApi* | [**generateShowsSalesReport_2**](docs/Api/FbsApi.md#generateshowssalesreport_2) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*FbsApi* | [**generateStocksOnWarehousesReport_1**](docs/Api/FbsApi.md#generatestocksonwarehousesreport_1) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*FbsApi* | [**generateUnitedMarketplaceServicesReport_2**](docs/Api/FbsApi.md#generateunitedmarketplaceservicesreport_2) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*FbsApi* | [**generateUnitedNettingReport_2**](docs/Api/FbsApi.md#generateunitednettingreport_2) | **POST** /reports/united-netting/generate | Отчет по платежам
*FbsApi* | [**generateUnitedOrdersReport_1**](docs/Api/FbsApi.md#generateunitedordersreport_1) | **POST** /reports/united-orders/generate | Отчет по заказам
*FbsApi* | [**getAllOffers_1**](docs/Api/FbsApi.md#getalloffers_1) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*FbsApi* | [**getBidsInfoForBusiness_1**](docs/Api/FbsApi.md#getbidsinfoforbusiness_1) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*FbsApi* | [**getBidsRecommendations_1**](docs/Api/FbsApi.md#getbidsrecommendations_1) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*FbsApi* | [**getBusinessQuarantineOffers_2**](docs/Api/FbsApi.md#getbusinessquarantineoffers_2) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*FbsApi* | [**getBusinessSettings_1**](docs/Api/FbsApi.md#getbusinesssettings_1) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*FbsApi* | [**getCampaignLogins_2**](docs/Api/FbsApi.md#getcampaignlogins_2) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*FbsApi* | [**getCampaignOffers_2**](docs/Api/FbsApi.md#getcampaignoffers_2) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*FbsApi* | [**getCampaignQuarantineOffers_2**](docs/Api/FbsApi.md#getcampaignquarantineoffers_2) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*FbsApi* | [**getCampaignRegion_2**](docs/Api/FbsApi.md#getcampaignregion_2) | **GET** /campaigns/{campaignId}/region | Регион магазина
*FbsApi* | [**getCampaignSettings_1**](docs/Api/FbsApi.md#getcampaignsettings_1) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*FbsApi* | [**getCampaign_2**](docs/Api/FbsApi.md#getcampaign_2) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbsApi* | [**getCampaignsByLogin_2**](docs/Api/FbsApi.md#getcampaignsbylogin_2) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*FbsApi* | [**getCampaigns_2**](docs/Api/FbsApi.md#getcampaigns_2) | **GET** /campaigns | Список магазинов пользователя
*FbsApi* | [**getCategoriesMaxSaleQuantum_1**](docs/Api/FbsApi.md#getcategoriesmaxsalequantum_1) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*FbsApi* | [**getCategoriesTree_1**](docs/Api/FbsApi.md#getcategoriestree_1) | **POST** /categories/tree | Дерево категорий
*FbsApi* | [**getCategoryContentParameters_2**](docs/Api/FbsApi.md#getcategorycontentparameters_2) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*FbsApi* | [**getChatHistory_1**](docs/Api/FbsApi.md#getchathistory_1) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*FbsApi* | [**getChats_1**](docs/Api/FbsApi.md#getchats_1) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*FbsApi* | [**getDeliveryServices_0**](docs/Api/FbsApi.md#getdeliveryservices_0) | **GET** /delivery/services | Справочник служб доставки
*FbsApi* | [**getFeedIndexLogs_1**](docs/Api/FbsApi.md#getfeedindexlogs_1) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*FbsApi* | [**getFeed_1**](docs/Api/FbsApi.md#getfeed_1) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*FbsApi* | [**getFeedbackAndCommentUpdates_2**](docs/Api/FbsApi.md#getfeedbackandcommentupdates_2) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*FbsApi* | [**getFeeds_1**](docs/Api/FbsApi.md#getfeeds_1) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*FbsApi* | [**getGoodsFeedbackComments_1**](docs/Api/FbsApi.md#getgoodsfeedbackcomments_1) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*FbsApi* | [**getGoodsFeedbacks_1**](docs/Api/FbsApi.md#getgoodsfeedbacks_1) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*FbsApi* | [**getGoodsStats_1**](docs/Api/FbsApi.md#getgoodsstats_1) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbsApi* | [**getHiddenOffers_1**](docs/Api/FbsApi.md#gethiddenoffers_1) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbsApi* | [**getOfferCardsContentStatus_2**](docs/Api/FbsApi.md#getoffercardscontentstatus_2) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*FbsApi* | [**getOfferMappingEntries_1**](docs/Api/FbsApi.md#getoffermappingentries_1) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbsApi* | [**getOfferMappings_2**](docs/Api/FbsApi.md#getoffermappings_2) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*FbsApi* | [**getOfferRecommendations_2**](docs/Api/FbsApi.md#getofferrecommendations_2) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*FbsApi* | [**getOffers_1**](docs/Api/FbsApi.md#getoffers_1) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*FbsApi* | [**getOrderBusinessBuyerInfo_0**](docs/Api/FbsApi.md#getorderbusinessbuyerinfo_0) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*FbsApi* | [**getOrderBusinessDocumentsInfo_0**](docs/Api/FbsApi.md#getorderbusinessdocumentsinfo_0) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*FbsApi* | [**getOrderLabelsData_0**](docs/Api/FbsApi.md#getorderlabelsdata_0) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*FbsApi* | [**getOrder_1**](docs/Api/FbsApi.md#getorder_1) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*FbsApi* | [**getOrdersStats_1**](docs/Api/FbsApi.md#getordersstats_1) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*FbsApi* | [**getOrders_0**](docs/Api/FbsApi.md#getorders_0) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*FbsApi* | [**getPricesByOfferIds_1**](docs/Api/FbsApi.md#getpricesbyofferids_1) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в магазине
*FbsApi* | [**getPrices_1**](docs/Api/FbsApi.md#getprices_1) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbsApi* | [**getPromoOffers_1**](docs/Api/FbsApi.md#getpromooffers_1) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*FbsApi* | [**getPromos_1**](docs/Api/FbsApi.md#getpromos_1) | **POST** /businesses/{businessId}/promos | Получение списка акций
*FbsApi* | [**getQualityRatingDetails_0**](docs/Api/FbsApi.md#getqualityratingdetails_0) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*FbsApi* | [**getQualityRatings_1**](docs/Api/FbsApi.md#getqualityratings_1) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*FbsApi* | [**getReportInfo_2**](docs/Api/FbsApi.md#getreportinfo_2) | **GET** /reports/info/{reportId} | Получение заданного отчета
*FbsApi* | [**getReturnApplication_0**](docs/Api/FbsApi.md#getreturnapplication_0) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*FbsApi* | [**getReturnPhoto_0**](docs/Api/FbsApi.md#getreturnphoto_0) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*FbsApi* | [**getReturn_0**](docs/Api/FbsApi.md#getreturn_0) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*FbsApi* | [**getReturns_0**](docs/Api/FbsApi.md#getreturns_0) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*FbsApi* | [**getShipmentOrdersInfo_0**](docs/Api/FbsApi.md#getshipmentordersinfo_0) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о возможности печати ярлыков (FBS)
*FbsApi* | [**getShipment_0**](docs/Api/FbsApi.md#getshipment_0) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об одной отгрузке
*FbsApi* | [**getStocks_1**](docs/Api/FbsApi.md#getstocks_1) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*FbsApi* | [**getSuggestedOfferMappingEntries_1**](docs/Api/FbsApi.md#getsuggestedoffermappingentries_1) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*FbsApi* | [**getSuggestedOfferMappings_2**](docs/Api/FbsApi.md#getsuggestedoffermappings_2) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*FbsApi* | [**getSuggestedPrices_1**](docs/Api/FbsApi.md#getsuggestedprices_1) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbsApi* | [**getWarehouses_0**](docs/Api/FbsApi.md#getwarehouses_0) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов
*FbsApi* | [**provideOrderItemIdentifiers_0**](docs/Api/FbsApi.md#provideorderitemidentifiers_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*FbsApi* | [**putBidsForBusiness_1**](docs/Api/FbsApi.md#putbidsforbusiness_1) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbsApi* | [**putBidsForCampaign_1**](docs/Api/FbsApi.md#putbidsforcampaign_1) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*FbsApi* | [**refreshFeed_1**](docs/Api/FbsApi.md#refreshfeed_1) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*FbsApi* | [**searchRegionChildren_1**](docs/Api/FbsApi.md#searchregionchildren_1) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbsApi* | [**searchRegionsById_1**](docs/Api/FbsApi.md#searchregionsbyid_1) | **GET** /regions/{regionId} | Информация о регионе
*FbsApi* | [**searchRegionsByName_1**](docs/Api/FbsApi.md#searchregionsbyname_1) | **GET** /regions | Поиск регионов по их имени
*FbsApi* | [**searchShipments_0**](docs/Api/FbsApi.md#searchshipments_0) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации о нескольких отгрузках
*FbsApi* | [**sendFileToChat_1**](docs/Api/FbsApi.md#sendfiletochat_1) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*FbsApi* | [**sendMessageToChat_1**](docs/Api/FbsApi.md#sendmessagetochat_1) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*FbsApi* | [**setFeedParams_1**](docs/Api/FbsApi.md#setfeedparams_1) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*FbsApi* | [**setOrderBoxLayout_0**](docs/Api/FbsApi.md#setorderboxlayout_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*FbsApi* | [**setOrderShipmentBoxes_0**](docs/Api/FbsApi.md#setordershipmentboxes_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*FbsApi* | [**setShipmentPalletsCount_0**](docs/Api/FbsApi.md#setshipmentpalletscount_0) | **PUT** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets | Передача количества упаковок в отгрузке
*FbsApi* | [**skipGoodsFeedbacksReaction_1**](docs/Api/FbsApi.md#skipgoodsfeedbacksreaction_1) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Отказ от ответа на отзывы
*FbsApi* | [**transferOrdersFromShipment_0**](docs/Api/FbsApi.md#transferordersfromshipment_0) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer | Перенос заказов в следующую отгрузку
*FbsApi* | [**updateBusinessPrices_1**](docs/Api/FbsApi.md#updatebusinessprices_1) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары во всех магазинах
*FbsApi* | [**updateCampaignOffers_2**](docs/Api/FbsApi.md#updatecampaignoffers_2) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*FbsApi* | [**updateGoodsFeedbackComment_1**](docs/Api/FbsApi.md#updategoodsfeedbackcomment_1) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*FbsApi* | [**updateOfferContent_2**](docs/Api/FbsApi.md#updateoffercontent_2) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*FbsApi* | [**updateOfferMappingEntries_1**](docs/Api/FbsApi.md#updateoffermappingentries_1) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbsApi* | [**updateOfferMappings_2**](docs/Api/FbsApi.md#updateoffermappings_2) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*FbsApi* | [**updateOrderItems_0**](docs/Api/FbsApi.md#updateorderitems_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*FbsApi* | [**updateOrderStatus_0**](docs/Api/FbsApi.md#updateorderstatus_0) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*FbsApi* | [**updateOrderStatuses_0**](docs/Api/FbsApi.md#updateorderstatuses_0) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*FbsApi* | [**updatePrices_1**](docs/Api/FbsApi.md#updateprices_1) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*FbsApi* | [**updatePromoOffers_1**](docs/Api/FbsApi.md#updatepromooffers_1) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*FbsApi* | [**updateStocks_0**](docs/Api/FbsApi.md#updatestocks_0) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*FbyApi* | [**addHiddenOffers_0**](docs/Api/FbyApi.md#addhiddenoffers_0) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*FbyApi* | [**addOffersToArchive_1**](docs/Api/FbyApi.md#addofferstoarchive_1) | **POST** /businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив
*FbyApi* | [**calculateTariffs_1**](docs/Api/FbyApi.md#calculatetariffs_1) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*FbyApi* | [**confirmBusinessPrices_1**](docs/Api/FbyApi.md#confirmbusinessprices_1) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*FbyApi* | [**confirmCampaignPrices_1**](docs/Api/FbyApi.md#confirmcampaignprices_1) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*FbyApi* | [**createChat_2**](docs/Api/FbyApi.md#createchat_2) | **POST** /businesses/{businessId}/chats/new | Создание нового чата с покупателем
*FbyApi* | [**deleteCampaignOffers_1**](docs/Api/FbyApi.md#deletecampaignoffers_1) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*FbyApi* | [**deleteGoodsFeedbackComment_0**](docs/Api/FbyApi.md#deletegoodsfeedbackcomment_0) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*FbyApi* | [**deleteHiddenOffers_0**](docs/Api/FbyApi.md#deletehiddenoffers_0) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*FbyApi* | [**deleteOffersFromArchive_1**](docs/Api/FbyApi.md#deleteoffersfromarchive_1) | **POST** /businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива
*FbyApi* | [**deleteOffers_1**](docs/Api/FbyApi.md#deleteoffers_1) | **POST** /businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога
*FbyApi* | [**deletePromoOffers_0**](docs/Api/FbyApi.md#deletepromooffers_0) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*FbyApi* | [**generateBoostConsolidatedReport_0**](docs/Api/FbyApi.md#generateboostconsolidatedreport_0) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*FbyApi* | [**generateCompetitorsPositionReport_0**](docs/Api/FbyApi.md#generatecompetitorspositionreport_0) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*FbyApi* | [**generateGoodsFeedbackReport_0**](docs/Api/FbyApi.md#generategoodsfeedbackreport_0) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*FbyApi* | [**generateGoodsMovementReport_0**](docs/Api/FbyApi.md#generategoodsmovementreport_0) | **POST** /reports/goods-movement/generate | Отчет по движению товаров
*FbyApi* | [**generateGoodsRealizationReport_0**](docs/Api/FbyApi.md#generategoodsrealizationreport_0) | **POST** /reports/goods-realization/generate | Отчет по реализации
*FbyApi* | [**generateGoodsTurnoverReport_0**](docs/Api/FbyApi.md#generategoodsturnoverreport_0) | **POST** /reports/goods-turnover/generate | Отчет по оборачиваемости
*FbyApi* | [**generatePricesReport_0**](docs/Api/FbyApi.md#generatepricesreport_0) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*FbyApi* | [**generateShelfsStatisticsReport_0**](docs/Api/FbyApi.md#generateshelfsstatisticsreport_0) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*FbyApi* | [**generateShowsSalesReport_0**](docs/Api/FbyApi.md#generateshowssalesreport_0) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*FbyApi* | [**generateStocksOnWarehousesReport_0**](docs/Api/FbyApi.md#generatestocksonwarehousesreport_0) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*FbyApi* | [**generateUnitedMarketplaceServicesReport_0**](docs/Api/FbyApi.md#generateunitedmarketplaceservicesreport_0) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*FbyApi* | [**generateUnitedNettingReport_0**](docs/Api/FbyApi.md#generateunitednettingreport_0) | **POST** /reports/united-netting/generate | Отчет по платежам
*FbyApi* | [**generateUnitedOrdersReport_0**](docs/Api/FbyApi.md#generateunitedordersreport_0) | **POST** /reports/united-orders/generate | Отчет по заказам
*FbyApi* | [**getAllOffers_3**](docs/Api/FbyApi.md#getalloffers_3) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*FbyApi* | [**getBidsInfoForBusiness_2**](docs/Api/FbyApi.md#getbidsinfoforbusiness_2) | **POST** /businesses/{businessId}/bids/info | Информация об установленных ставках
*FbyApi* | [**getBidsRecommendations_2**](docs/Api/FbyApi.md#getbidsrecommendations_2) | **POST** /businesses/{businessId}/bids/recommendations | Рекомендованные ставки для заданных товаров
*FbyApi* | [**getBusinessQuarantineOffers_1**](docs/Api/FbyApi.md#getbusinessquarantineoffers_1) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*FbyApi* | [**getBusinessSettings_2**](docs/Api/FbyApi.md#getbusinesssettings_2) | **POST** /businesses/{businessId}/settings | Настройки кабинета
*FbyApi* | [**getCampaignLogins_3**](docs/Api/FbyApi.md#getcampaignlogins_3) | **GET** /campaigns/{campaignId}/logins | Логины, связанные с магазином
*FbyApi* | [**getCampaignOffers_1**](docs/Api/FbyApi.md#getcampaignoffers_1) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*FbyApi* | [**getCampaignQuarantineOffers_1**](docs/Api/FbyApi.md#getcampaignquarantineoffers_1) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*FbyApi* | [**getCampaignRegion_1**](docs/Api/FbyApi.md#getcampaignregion_1) | **GET** /campaigns/{campaignId}/region | Регион магазина
*FbyApi* | [**getCampaignSettings_3**](docs/Api/FbyApi.md#getcampaignsettings_3) | **GET** /campaigns/{campaignId}/settings | Настройки магазина
*FbyApi* | [**getCampaign_3**](docs/Api/FbyApi.md#getcampaign_3) | **GET** /campaigns/{campaignId} | Информация о магазине
*FbyApi* | [**getCampaignsByLogin_3**](docs/Api/FbyApi.md#getcampaignsbylogin_3) | **GET** /campaigns/by_login/{login} | Магазины, доступные логину
*FbyApi* | [**getCampaigns_3**](docs/Api/FbyApi.md#getcampaigns_3) | **GET** /campaigns | Список магазинов пользователя
*FbyApi* | [**getCategoriesMaxSaleQuantum_0**](docs/Api/FbyApi.md#getcategoriesmaxsalequantum_0) | **POST** /categories/max-sale-quantum | Лимит на установку кванта продажи и минимального количества товаров в заказе
*FbyApi* | [**getCategoriesTree_0**](docs/Api/FbyApi.md#getcategoriestree_0) | **POST** /categories/tree | Дерево категорий
*FbyApi* | [**getCategoryContentParameters_1**](docs/Api/FbyApi.md#getcategorycontentparameters_1) | **POST** /category/{categoryId}/parameters | Списки характеристик товаров по категориям
*FbyApi* | [**getChatHistory_2**](docs/Api/FbyApi.md#getchathistory_2) | **POST** /businesses/{businessId}/chats/history | Получение истории сообщений в чате
*FbyApi* | [**getChats_2**](docs/Api/FbyApi.md#getchats_2) | **POST** /businesses/{businessId}/chats | Получение доступных чатов
*FbyApi* | [**getFeedIndexLogs_3**](docs/Api/FbyApi.md#getfeedindexlogs_3) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*FbyApi* | [**getFeed_3**](docs/Api/FbyApi.md#getfeed_3) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*FbyApi* | [**getFeedbackAndCommentUpdates_1**](docs/Api/FbyApi.md#getfeedbackandcommentupdates_1) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*FbyApi* | [**getFeeds_3**](docs/Api/FbyApi.md#getfeeds_3) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*FbyApi* | [**getFulfillmentWarehouses_0**](docs/Api/FbyApi.md#getfulfillmentwarehouses_0) | **GET** /warehouses | Идентификаторы складов Маркета (FBY)
*FbyApi* | [**getGoodsFeedbackComments_0**](docs/Api/FbyApi.md#getgoodsfeedbackcomments_0) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*FbyApi* | [**getGoodsFeedbacks_0**](docs/Api/FbyApi.md#getgoodsfeedbacks_0) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*FbyApi* | [**getGoodsStats_0**](docs/Api/FbyApi.md#getgoodsstats_0) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*FbyApi* | [**getHiddenOffers_0**](docs/Api/FbyApi.md#gethiddenoffers_0) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*FbyApi* | [**getOfferCardsContentStatus_1**](docs/Api/FbyApi.md#getoffercardscontentstatus_1) | **POST** /businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина
*FbyApi* | [**getOfferMappingEntries_0**](docs/Api/FbyApi.md#getoffermappingentries_0) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*FbyApi* | [**getOfferMappings_1**](docs/Api/FbyApi.md#getoffermappings_1) | **POST** /businesses/{businessId}/offer-mappings | Информация о товарах в каталоге
*FbyApi* | [**getOfferRecommendations_1**](docs/Api/FbyApi.md#getofferrecommendations_1) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*FbyApi* | [**getOffers_3**](docs/Api/FbyApi.md#getoffers_3) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*FbyApi* | [**getOrderBusinessBuyerInfo_1**](docs/Api/FbyApi.md#getorderbusinessbuyerinfo_1) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*FbyApi* | [**getOrderBusinessDocumentsInfo_1**](docs/Api/FbyApi.md#getorderbusinessdocumentsinfo_1) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*FbyApi* | [**getOrder_0**](docs/Api/FbyApi.md#getorder_0) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*FbyApi* | [**getOrdersStats_0**](docs/Api/FbyApi.md#getordersstats_0) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*FbyApi* | [**getOrders_2**](docs/Api/FbyApi.md#getorders_2) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*FbyApi* | [**getPricesByOfferIds_0**](docs/Api/FbyApi.md#getpricesbyofferids_0) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в магазине
*FbyApi* | [**getPrices_0**](docs/Api/FbyApi.md#getprices_0) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*FbyApi* | [**getPromoOffers_0**](docs/Api/FbyApi.md#getpromooffers_0) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*FbyApi* | [**getPromos_0**](docs/Api/FbyApi.md#getpromos_0) | **POST** /businesses/{businessId}/promos | Получение списка акций
*FbyApi* | [**getQualityRatings_0**](docs/Api/FbyApi.md#getqualityratings_0) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*FbyApi* | [**getReportInfo_0**](docs/Api/FbyApi.md#getreportinfo_0) | **GET** /reports/info/{reportId} | Получение заданного отчета
*FbyApi* | [**getReturnPhoto_3**](docs/Api/FbyApi.md#getreturnphoto_3) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*FbyApi* | [**getReturn_3**](docs/Api/FbyApi.md#getreturn_3) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*FbyApi* | [**getReturns_3**](docs/Api/FbyApi.md#getreturns_3) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*FbyApi* | [**getStocks_0**](docs/Api/FbyApi.md#getstocks_0) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*FbyApi* | [**getSuggestedOfferMappingEntries_0**](docs/Api/FbyApi.md#getsuggestedoffermappingentries_0) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*FbyApi* | [**getSuggestedOfferMappings_1**](docs/Api/FbyApi.md#getsuggestedoffermappings_1) | **POST** /businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам
*FbyApi* | [**getSuggestedPrices_0**](docs/Api/FbyApi.md#getsuggestedprices_0) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*FbyApi* | [**putBidsForBusiness_2**](docs/Api/FbyApi.md#putbidsforbusiness_2) | **PUT** /businesses/{businessId}/bids | Включение буста продаж и установка ставок
*FbyApi* | [**putBidsForCampaign_3**](docs/Api/FbyApi.md#putbidsforcampaign_3) | **PUT** /campaigns/{campaignId}/bids | Включение буста продаж и установка ставок для магазина
*FbyApi* | [**refreshFeed_3**](docs/Api/FbyApi.md#refreshfeed_3) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*FbyApi* | [**searchRegionChildren_0**](docs/Api/FbyApi.md#searchregionchildren_0) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*FbyApi* | [**searchRegionsById_0**](docs/Api/FbyApi.md#searchregionsbyid_0) | **GET** /regions/{regionId} | Информация о регионе
*FbyApi* | [**searchRegionsByName_0**](docs/Api/FbyApi.md#searchregionsbyname_0) | **GET** /regions | Поиск регионов по их имени
*FbyApi* | [**sendFileToChat_2**](docs/Api/FbyApi.md#sendfiletochat_2) | **POST** /businesses/{businessId}/chats/file/send | Отправка файла в чат
*FbyApi* | [**sendMessageToChat_2**](docs/Api/FbyApi.md#sendmessagetochat_2) | **POST** /businesses/{businessId}/chats/message | Отправка сообщения в чат
*FbyApi* | [**setFeedParams_3**](docs/Api/FbyApi.md#setfeedparams_3) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*FbyApi* | [**skipGoodsFeedbacksReaction_0**](docs/Api/FbyApi.md#skipgoodsfeedbacksreaction_0) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Отказ от ответа на отзывы
*FbyApi* | [**updateBusinessPrices_0**](docs/Api/FbyApi.md#updatebusinessprices_0) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары во всех магазинах
*FbyApi* | [**updateCampaignOffers_1**](docs/Api/FbyApi.md#updatecampaignoffers_1) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*FbyApi* | [**updateGoodsFeedbackComment_0**](docs/Api/FbyApi.md#updategoodsfeedbackcomment_0) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*FbyApi* | [**updateOfferContent_1**](docs/Api/FbyApi.md#updateoffercontent_1) | **POST** /businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара
*FbyApi* | [**updateOfferMappingEntries_0**](docs/Api/FbyApi.md#updateoffermappingentries_0) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*FbyApi* | [**updateOfferMappings_1**](docs/Api/FbyApi.md#updateoffermappings_1) | **POST** /businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них
*FbyApi* | [**updatePrices_0**](docs/Api/FbyApi.md#updateprices_0) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*FbyApi* | [**updatePromoOffers_0**](docs/Api/FbyApi.md#updatepromooffers_0) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*FeedbacksApi* | [**getFeedbackAndCommentUpdates**](docs/Api/FeedbacksApi.md#getfeedbackandcommentupdates) | **GET** /campaigns/{campaignId}/feedback/updates | Новые и обновленные отзывы о магазине
*FeedsApi* | [**getFeed**](docs/Api/FeedsApi.md#getfeed) | **GET** /campaigns/{campaignId}/feeds/{feedId} | Информация о прайс-листе
*FeedsApi* | [**getFeedIndexLogs**](docs/Api/FeedsApi.md#getfeedindexlogs) | **GET** /campaigns/{campaignId}/feeds/{feedId}/index-logs | Отчет по индексации прайс-листа
*FeedsApi* | [**getFeeds**](docs/Api/FeedsApi.md#getfeeds) | **GET** /campaigns/{campaignId}/feeds | Список прайс-листов магазина
*FeedsApi* | [**refreshFeed**](docs/Api/FeedsApi.md#refreshfeed) | **POST** /campaigns/{campaignId}/feeds/{feedId}/refresh | Сообщить, что прайс-лист обновился
*FeedsApi* | [**setFeedParams**](docs/Api/FeedsApi.md#setfeedparams) | **POST** /campaigns/{campaignId}/feeds/{feedId}/params | Изменение параметров прайс-листа
*GoodsFeedbackApi* | [**deleteGoodsFeedbackComment**](docs/Api/GoodsFeedbackApi.md#deletegoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/delete | Удаление комментария к отзыву
*GoodsFeedbackApi* | [**getGoodsFeedbackComments**](docs/Api/GoodsFeedbackApi.md#getgoodsfeedbackcomments) | **POST** /businesses/{businessId}/goods-feedback/comments | Получение комментариев к отзыву
*GoodsFeedbackApi* | [**getGoodsFeedbacks**](docs/Api/GoodsFeedbackApi.md#getgoodsfeedbacks) | **POST** /businesses/{businessId}/goods-feedback | Получение отзывов о товарах продавца
*GoodsFeedbackApi* | [**skipGoodsFeedbacksReaction**](docs/Api/GoodsFeedbackApi.md#skipgoodsfeedbacksreaction) | **POST** /businesses/{businessId}/goods-feedback/skip-reaction | Отказ от ответа на отзывы
*GoodsFeedbackApi* | [**updateGoodsFeedbackComment**](docs/Api/GoodsFeedbackApi.md#updategoodsfeedbackcomment) | **POST** /businesses/{businessId}/goods-feedback/comments/update | Добавление нового или изменение созданного комментария
*GoodsStatsApi* | [**getGoodsStats**](docs/Api/GoodsStatsApi.md#getgoodsstats) | **POST** /campaigns/{campaignId}/stats/skus | Отчет по товарам
*HiddenOffersApi* | [**addHiddenOffers**](docs/Api/HiddenOffersApi.md#addhiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers | Скрытие товаров и настройки скрытия
*HiddenOffersApi* | [**deleteHiddenOffers**](docs/Api/HiddenOffersApi.md#deletehiddenoffers) | **POST** /campaigns/{campaignId}/hidden-offers/delete | Возобновление показа товаров
*HiddenOffersApi* | [**getHiddenOffers**](docs/Api/HiddenOffersApi.md#gethiddenoffers) | **GET** /campaigns/{campaignId}/hidden-offers | Информация о скрытых вами товарах
*ModelsApi* | [**getModel**](docs/Api/ModelsApi.md#getmodel) | **GET** /models/{modelId} | Информация об одной модели
*ModelsApi* | [**getModelOffers**](docs/Api/ModelsApi.md#getmodeloffers) | **GET** /models/{modelId}/offers | Список предложений для одной модели
*ModelsApi* | [**getModels**](docs/Api/ModelsApi.md#getmodels) | **POST** /models | Информация о нескольких моделях
*ModelsApi* | [**getModelsOffers**](docs/Api/ModelsApi.md#getmodelsoffers) | **POST** /models/offers | Список предложений для нескольких моделей
*ModelsApi* | [**searchModels**](docs/Api/ModelsApi.md#searchmodels) | **GET** /models | Поиск модели товара
*OfferMappingsApi* | [**getOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getoffermappingentries) | **GET** /campaigns/{campaignId}/offer-mapping-entries | Список товаров в каталоге
*OfferMappingsApi* | [**getSuggestedOfferMappingEntries**](docs/Api/OfferMappingsApi.md#getsuggestedoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/suggestions | Рекомендованные карточки для товаров
*OfferMappingsApi* | [**updateOfferMappingEntries**](docs/Api/OfferMappingsApi.md#updateoffermappingentries) | **POST** /campaigns/{campaignId}/offer-mapping-entries/updates | Добавление и редактирование товаров в каталоге
*OffersApi* | [**deleteCampaignOffers**](docs/Api/OffersApi.md#deletecampaignoffers) | **POST** /campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина
*OffersApi* | [**getAllOffers**](docs/Api/OffersApi.md#getalloffers) | **GET** /campaigns/{campaignId}/offers/all | Все предложения магазина
*OffersApi* | [**getCampaignOffers**](docs/Api/OffersApi.md#getcampaignoffers) | **POST** /campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине
*OffersApi* | [**getOfferRecommendations**](docs/Api/OffersApi.md#getofferrecommendations) | **POST** /businesses/{businessId}/offers/recommendations | Рекомендации Маркета, касающиеся цен
*OffersApi* | [**getOffers**](docs/Api/OffersApi.md#getoffers) | **GET** /campaigns/{campaignId}/offers | Предложения магазина
*OffersApi* | [**updateCampaignOffers**](docs/Api/OffersApi.md#updatecampaignoffers) | **POST** /campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине
*OrderBusinessInformationApi* | [**getOrderBusinessBuyerInfo**](docs/Api/OrderBusinessInformationApi.md#getorderbusinessbuyerinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/business-buyer | Информация о покупателе — юридическом лице
*OrderBusinessInformationApi* | [**getOrderBusinessDocumentsInfo**](docs/Api/OrderBusinessInformationApi.md#getorderbusinessdocumentsinfo) | **POST** /campaigns/{campaignId}/orders/{orderId}/documents | Информация о документах
*OrderDeliveryApi* | [**getOrderBuyerInfo**](docs/Api/OrderDeliveryApi.md#getorderbuyerinfo) | **GET** /campaigns/{campaignId}/orders/{orderId}/buyer | Информация о покупателе — физическом лице
*OrderDeliveryApi* | [**setOrderDeliveryDate**](docs/Api/OrderDeliveryApi.md#setorderdeliverydate) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/date | Изменение даты доставки заказа
*OrderDeliveryApi* | [**setOrderDeliveryTrackCode**](docs/Api/OrderDeliveryApi.md#setorderdeliverytrackcode) | **POST** /campaigns/{campaignId}/orders/{orderId}/delivery/track | Передача трек‑номера посылки
*OrderDeliveryApi* | [**updateOrderStorageLimit**](docs/Api/OrderDeliveryApi.md#updateorderstoragelimit) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/storage-limit | Продление срока хранения заказа
*OrderDeliveryApi* | [**verifyOrderEac**](docs/Api/OrderDeliveryApi.md#verifyordereac) | **PUT** /campaigns/{campaignId}/orders/{orderId}/verifyEac | Передача кода подтверждения
*OrderLabelsApi* | [**generateOrderLabel**](docs/Api/OrderLabelsApi.md#generateorderlabel) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes/{boxId}/label | Готовый ярлык‑наклейка для коробки в заказе
*OrderLabelsApi* | [**generateOrderLabels**](docs/Api/OrderLabelsApi.md#generateorderlabels) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels | Готовые ярлыки‑наклейки на все коробки в одном заказе
*OrderLabelsApi* | [**getOrderLabelsData**](docs/Api/OrderLabelsApi.md#getorderlabelsdata) | **GET** /campaigns/{campaignId}/orders/{orderId}/delivery/labels/data | Данные для самостоятельного изготовления ярлыков
*OrdersApi* | [**acceptOrderCancellation**](docs/Api/OrdersApi.md#acceptordercancellation) | **PUT** /campaigns/{campaignId}/orders/{orderId}/cancellation/accept | Отмена заказа покупателем
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /campaigns/{campaignId}/orders | Информация о нескольких заказах
*OrdersApi* | [**provideOrderDigitalCodes**](docs/Api/OrdersApi.md#provideorderdigitalcodes) | **POST** /campaigns/{campaignId}/orders/{orderId}/deliverDigitalGoods | Передача ключей цифровых товаров
*OrdersApi* | [**provideOrderItemIdentifiers**](docs/Api/OrdersApi.md#provideorderitemidentifiers) | **PUT** /campaigns/{campaignId}/orders/{orderId}/identifiers | Передача кодов маркировки единиц товара
*OrdersApi* | [**setOrderBoxLayout**](docs/Api/OrdersApi.md#setorderboxlayout) | **PUT** /campaigns/{campaignId}/orders/{orderId}/boxes | Подготовка заказа
*OrdersApi* | [**setOrderShipmentBoxes**](docs/Api/OrdersApi.md#setordershipmentboxes) | **PUT** /campaigns/{campaignId}/orders/{orderId}/delivery/shipments/{shipmentId}/boxes | Передача количества грузовых мест в заказе
*OrdersApi* | [**updateOrderItems**](docs/Api/OrdersApi.md#updateorderitems) | **PUT** /campaigns/{campaignId}/orders/{orderId}/items | Удаление товара из заказа или уменьшение числа единиц
*OrdersApi* | [**updateOrderStatus**](docs/Api/OrdersApi.md#updateorderstatus) | **PUT** /campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа
*OrdersApi* | [**updateOrderStatuses**](docs/Api/OrdersApi.md#updateorderstatuses) | **POST** /campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов
*OrdersStatsApi* | [**getOrdersStats**](docs/Api/OrdersStatsApi.md#getordersstats) | **POST** /campaigns/{campaignId}/stats/orders | Детальная информация по заказам
*OutletLicensesApi* | [**deleteOutletLicenses**](docs/Api/OutletLicensesApi.md#deleteoutletlicenses) | **DELETE** /campaigns/{campaignId}/outlets/licenses | Удаление лицензий для точек продаж
*OutletLicensesApi* | [**getOutletLicenses**](docs/Api/OutletLicensesApi.md#getoutletlicenses) | **GET** /campaigns/{campaignId}/outlets/licenses | Информация о лицензиях для точек продаж
*OutletLicensesApi* | [**updateOutletLicenses**](docs/Api/OutletLicensesApi.md#updateoutletlicenses) | **POST** /campaigns/{campaignId}/outlets/licenses | Создание и изменение лицензий для точек продаж
*OutletsApi* | [**createOutlet**](docs/Api/OutletsApi.md#createoutlet) | **POST** /campaigns/{campaignId}/outlets | Создание точки продаж
*OutletsApi* | [**deleteOutlet**](docs/Api/OutletsApi.md#deleteoutlet) | **DELETE** /campaigns/{campaignId}/outlets/{outletId} | Удаление точки продаж
*OutletsApi* | [**getOutlet**](docs/Api/OutletsApi.md#getoutlet) | **GET** /campaigns/{campaignId}/outlets/{outletId} | Информация об одной точке продаж
*OutletsApi* | [**getOutlets**](docs/Api/OutletsApi.md#getoutlets) | **GET** /campaigns/{campaignId}/outlets | Информация о нескольких точках продаж
*OutletsApi* | [**updateOutlet**](docs/Api/OutletsApi.md#updateoutlet) | **PUT** /campaigns/{campaignId}/outlets/{outletId} | Изменение информации о точке продаж
*PriceQuarantineApi* | [**confirmBusinessPrices**](docs/Api/PriceQuarantineApi.md#confirmbusinessprices) | **POST** /businesses/{businessId}/price-quarantine/confirm | Удаление товара из карантина по цене в кабинете
*PriceQuarantineApi* | [**confirmCampaignPrices**](docs/Api/PriceQuarantineApi.md#confirmcampaignprices) | **POST** /campaigns/{campaignId}/price-quarantine/confirm | Удаление товара из карантина по цене в магазине
*PriceQuarantineApi* | [**getBusinessQuarantineOffers**](docs/Api/PriceQuarantineApi.md#getbusinessquarantineoffers) | **POST** /businesses/{businessId}/price-quarantine | Список товаров, находящихся в карантине по цене в кабинете
*PriceQuarantineApi* | [**getCampaignQuarantineOffers**](docs/Api/PriceQuarantineApi.md#getcampaignquarantineoffers) | **POST** /campaigns/{campaignId}/price-quarantine | Список товаров, находящихся в карантине по цене в магазине
*PricesApi* | [**getPrices**](docs/Api/PricesApi.md#getprices) | **GET** /campaigns/{campaignId}/offer-prices | Список цен
*PricesApi* | [**getPricesByOfferIds**](docs/Api/PricesApi.md#getpricesbyofferids) | **POST** /campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в магазине
*PricesApi* | [**getSuggestedPrices**](docs/Api/PricesApi.md#getsuggestedprices) | **POST** /campaigns/{campaignId}/offer-prices/suggestions | Цены для продвижения товаров
*PricesApi* | [**updateBusinessPrices**](docs/Api/PricesApi.md#updatebusinessprices) | **POST** /businesses/{businessId}/offer-prices/updates | Установка цен на товары во всех магазинах
*PricesApi* | [**updatePrices**](docs/Api/PricesApi.md#updateprices) | **POST** /campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине
*PromosApi* | [**deletePromoOffers**](docs/Api/PromosApi.md#deletepromooffers) | **POST** /businesses/{businessId}/promos/offers/delete | Удаление товаров из акции
*PromosApi* | [**getPromoOffers**](docs/Api/PromosApi.md#getpromooffers) | **POST** /businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции
*PromosApi* | [**getPromos**](docs/Api/PromosApi.md#getpromos) | **POST** /businesses/{businessId}/promos | Получение списка акций
*PromosApi* | [**updatePromoOffers**](docs/Api/PromosApi.md#updatepromooffers) | **POST** /businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен
*RatingsApi* | [**getQualityRatingDetails**](docs/Api/RatingsApi.md#getqualityratingdetails) | **POST** /campaigns/{campaignId}/ratings/quality/details | Заказы, которые повлияли на индекс качества
*RatingsApi* | [**getQualityRatings**](docs/Api/RatingsApi.md#getqualityratings) | **POST** /businesses/{businessId}/ratings/quality | Индекс качества магазинов
*RegionsApi* | [**searchRegionChildren**](docs/Api/RegionsApi.md#searchregionchildren) | **GET** /regions/{regionId}/children | Информация о дочерних регионах
*RegionsApi* | [**searchRegionsById**](docs/Api/RegionsApi.md#searchregionsbyid) | **GET** /regions/{regionId} | Информация о регионе
*RegionsApi* | [**searchRegionsByName**](docs/Api/RegionsApi.md#searchregionsbyname) | **GET** /regions | Поиск регионов по их имени
*ReportsApi* | [**generateBoostConsolidatedReport**](docs/Api/ReportsApi.md#generateboostconsolidatedreport) | **POST** /reports/boost-consolidated/generate | Отчет по бусту продаж
*ReportsApi* | [**generateCompetitorsPositionReport**](docs/Api/ReportsApi.md#generatecompetitorspositionreport) | **POST** /reports/competitors-position/generate | Отчет «Конкурентная позиция»
*ReportsApi* | [**generateGoodsFeedbackReport**](docs/Api/ReportsApi.md#generategoodsfeedbackreport) | **POST** /reports/goods-feedback/generate | Отчет по отзывам о товарах
*ReportsApi* | [**generateGoodsMovementReport**](docs/Api/ReportsApi.md#generategoodsmovementreport) | **POST** /reports/goods-movement/generate | Отчет по движению товаров
*ReportsApi* | [**generateGoodsRealizationReport**](docs/Api/ReportsApi.md#generategoodsrealizationreport) | **POST** /reports/goods-realization/generate | Отчет по реализации
*ReportsApi* | [**generateGoodsTurnoverReport**](docs/Api/ReportsApi.md#generategoodsturnoverreport) | **POST** /reports/goods-turnover/generate | Отчет по оборачиваемости
*ReportsApi* | [**generateMassOrderLabelsReport**](docs/Api/ReportsApi.md#generatemassorderlabelsreport) | **POST** /reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах
*ReportsApi* | [**generatePricesReport**](docs/Api/ReportsApi.md#generatepricesreport) | **POST** /reports/prices/generate | Отчет «Цены на рынке»
*ReportsApi* | [**generateShelfsStatisticsReport**](docs/Api/ReportsApi.md#generateshelfsstatisticsreport) | **POST** /reports/shelf-statistics/generate | Отчет по полкам
*ReportsApi* | [**generateShipmentListDocumentReport**](docs/Api/ReportsApi.md#generateshipmentlistdocumentreport) | **POST** /reports/documents/shipment-list/generate | Получение листа сборки
*ReportsApi* | [**generateShowsSalesReport**](docs/Api/ReportsApi.md#generateshowssalesreport) | **POST** /reports/shows-sales/generate | Отчет «Аналитика продаж»
*ReportsApi* | [**generateStocksOnWarehousesReport**](docs/Api/ReportsApi.md#generatestocksonwarehousesreport) | **POST** /reports/stocks-on-warehouses/generate | Отчет по остаткам на складах
*ReportsApi* | [**generateUnitedMarketplaceServicesReport**](docs/Api/ReportsApi.md#generateunitedmarketplaceservicesreport) | **POST** /reports/united-marketplace-services/generate | Отчет по стоимости услуг
*ReportsApi* | [**generateUnitedNettingReport**](docs/Api/ReportsApi.md#generateunitednettingreport) | **POST** /reports/united-netting/generate | Отчет по платежам
*ReportsApi* | [**generateUnitedOrdersReport**](docs/Api/ReportsApi.md#generateunitedordersreport) | **POST** /reports/united-orders/generate | Отчет по заказам
*ReportsApi* | [**getReportInfo**](docs/Api/ReportsApi.md#getreportinfo) | **GET** /reports/info/{reportId} | Получение заданного отчета
*ReturnsApi* | [**getReturn**](docs/Api/ReturnsApi.md#getreturn) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате
*ReturnsApi* | [**getReturnApplication**](docs/Api/ReturnsApi.md#getreturnapplication) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/application | Получение заявления на возврат
*ReturnsApi* | [**getReturnPhoto**](docs/Api/ReturnsApi.md#getreturnphoto) | **GET** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/{itemId}/image/{imageHash} | Получение фотографии возврата
*ReturnsApi* | [**getReturns**](docs/Api/ReturnsApi.md#getreturns) | **GET** /campaigns/{campaignId}/returns | Список невыкупов и возвратов
*ReturnsApi* | [**setReturnDecision**](docs/Api/ReturnsApi.md#setreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision | Принятие или изменение решения по возврату
*ReturnsApi* | [**submitReturnDecision**](docs/Api/ReturnsApi.md#submitreturndecision) | **POST** /campaigns/{campaignId}/orders/{orderId}/returns/{returnId}/decision/submit | Подтверждение решения по возврату
*ShipmentsApi* | [**confirmShipment**](docs/Api/ShipmentsApi.md#confirmshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/confirm | Подтверждение отгрузки
*ShipmentsApi* | [**downloadShipmentAct**](docs/Api/ShipmentsApi.md#downloadshipmentact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/act | Получение акта приема-передачи
*ShipmentsApi* | [**downloadShipmentDiscrepancyAct**](docs/Api/ShipmentsApi.md#downloadshipmentdiscrepancyact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/discrepancy-act | Получение акта расхождений
*ShipmentsApi* | [**downloadShipmentInboundAct**](docs/Api/ShipmentsApi.md#downloadshipmentinboundact) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/inbound-act | Получение фактического акта приема-передачи
*ShipmentsApi* | [**downloadShipmentPalletLabels**](docs/Api/ShipmentsApi.md#downloadshipmentpalletlabels) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallet/labels | Ярлыки для доверительной приемки (FBS)
*ShipmentsApi* | [**downloadShipmentReceptionTransferAct**](docs/Api/ShipmentsApi.md#downloadshipmentreceptiontransferact) | **GET** /campaigns/{campaignId}/shipments/reception-transfer-act | Подтверждение ближайшей отгрузки и получение акта приема-передачи для нее
*ShipmentsApi* | [**downloadShipmentTransportationWaybill**](docs/Api/ShipmentsApi.md#downloadshipmenttransportationwaybill) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/transportation-waybill | Получение транспортной накладной
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId} | Получение информации об одной отгрузке
*ShipmentsApi* | [**getShipmentOrdersInfo**](docs/Api/ShipmentsApi.md#getshipmentordersinfo) | **GET** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/info | Получение информации о возможности печати ярлыков (FBS)
*ShipmentsApi* | [**searchShipments**](docs/Api/ShipmentsApi.md#searchshipments) | **PUT** /campaigns/{campaignId}/first-mile/shipments | Получение информации о нескольких отгрузках
*ShipmentsApi* | [**setShipmentPalletsCount**](docs/Api/ShipmentsApi.md#setshipmentpalletscount) | **PUT** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/pallets | Передача количества упаковок в отгрузке
*ShipmentsApi* | [**transferOrdersFromShipment**](docs/Api/ShipmentsApi.md#transferordersfromshipment) | **POST** /campaigns/{campaignId}/first-mile/shipments/{shipmentId}/orders/transfer | Перенос заказов в следующую отгрузку
*StocksApi* | [**getStocks**](docs/Api/StocksApi.md#getstocks) | **POST** /campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости
*StocksApi* | [**updateStocks**](docs/Api/StocksApi.md#updatestocks) | **PUT** /campaigns/{campaignId}/offers/stocks | Передача информации об остатках
*TariffsApi* | [**calculateTariffs**](docs/Api/TariffsApi.md#calculatetariffs) | **POST** /tariffs/calculate | Калькулятор стоимости услуг
*WarehousesApi* | [**getFulfillmentWarehouses**](docs/Api/WarehousesApi.md#getfulfillmentwarehouses) | **GET** /warehouses | Идентификаторы складов Маркета (FBY)
*WarehousesApi* | [**getWarehouses**](docs/Api/WarehousesApi.md#getwarehouses) | **GET** /businesses/{businessId}/warehouses | Список складов и групп складов

## Models

- [AcceptOrderCancellationRequest](docs/Model/AcceptOrderCancellationRequest.md)
- [AddHiddenOffersRequest](docs/Model/AddHiddenOffersRequest.md)
- [AddOffersToArchiveDTO](docs/Model/AddOffersToArchiveDTO.md)
- [AddOffersToArchiveErrorDTO](docs/Model/AddOffersToArchiveErrorDTO.md)
- [AddOffersToArchiveErrorType](docs/Model/AddOffersToArchiveErrorType.md)
- [AddOffersToArchiveRequest](docs/Model/AddOffersToArchiveRequest.md)
- [AddOffersToArchiveResponse](docs/Model/AddOffersToArchiveResponse.md)
- [AffectedOrderQualityRatingComponentType](docs/Model/AffectedOrderQualityRatingComponentType.md)
- [AgeDTO](docs/Model/AgeDTO.md)
- [AgeUnitType](docs/Model/AgeUnitType.md)
- [ApiClientDataErrorResponse](docs/Model/ApiClientDataErrorResponse.md)
- [ApiErrorDTO](docs/Model/ApiErrorDTO.md)
- [ApiErrorResponse](docs/Model/ApiErrorResponse.md)
- [ApiForbiddenErrorResponse](docs/Model/ApiForbiddenErrorResponse.md)
- [ApiLimitErrorResponse](docs/Model/ApiLimitErrorResponse.md)
- [ApiLockedErrorResponse](docs/Model/ApiLockedErrorResponse.md)
- [ApiNotFoundErrorResponse](docs/Model/ApiNotFoundErrorResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [ApiResponseStatusType](docs/Model/ApiResponseStatusType.md)
- [ApiServerErrorResponse](docs/Model/ApiServerErrorResponse.md)
- [ApiUnauthorizedErrorResponse](docs/Model/ApiUnauthorizedErrorResponse.md)
- [BaseCampaignOfferDTO](docs/Model/BaseCampaignOfferDTO.md)
- [BaseOfferDTO](docs/Model/BaseOfferDTO.md)
- [BasePriceDTO](docs/Model/BasePriceDTO.md)
- [BaseShipmentDTO](docs/Model/BaseShipmentDTO.md)
- [BidRecommendationItemDTO](docs/Model/BidRecommendationItemDTO.md)
- [BriefOrderItemDTO](docs/Model/BriefOrderItemDTO.md)
- [BriefOrderItemInstanceDTO](docs/Model/BriefOrderItemInstanceDTO.md)
- [BusinessDTO](docs/Model/BusinessDTO.md)
- [BusinessSettingsDTO](docs/Model/BusinessSettingsDTO.md)
- [CalculateTariffsOfferDTO](docs/Model/CalculateTariffsOfferDTO.md)
- [CalculateTariffsOfferInfoDTO](docs/Model/CalculateTariffsOfferInfoDTO.md)
- [CalculateTariffsParametersDTO](docs/Model/CalculateTariffsParametersDTO.md)
- [CalculateTariffsRequest](docs/Model/CalculateTariffsRequest.md)
- [CalculateTariffsResponse](docs/Model/CalculateTariffsResponse.md)
- [CalculateTariffsResponseDTO](docs/Model/CalculateTariffsResponseDTO.md)
- [CalculatedTariffDTO](docs/Model/CalculatedTariffDTO.md)
- [CalculatedTariffType](docs/Model/CalculatedTariffType.md)
- [CampaignDTO](docs/Model/CampaignDTO.md)
- [CampaignQualityRatingDTO](docs/Model/CampaignQualityRatingDTO.md)
- [CampaignSettingsDTO](docs/Model/CampaignSettingsDTO.md)
- [CampaignSettingsDeliveryDTO](docs/Model/CampaignSettingsDeliveryDTO.md)
- [CampaignSettingsLocalRegionDTO](docs/Model/CampaignSettingsLocalRegionDTO.md)
- [CampaignSettingsScheduleDTO](docs/Model/CampaignSettingsScheduleDTO.md)
- [CampaignSettingsScheduleSourceType](docs/Model/CampaignSettingsScheduleSourceType.md)
- [CampaignSettingsTimePeriodDTO](docs/Model/CampaignSettingsTimePeriodDTO.md)
- [CampaignsQualityRatingDTO](docs/Model/CampaignsQualityRatingDTO.md)
- [CategoryContentParametersDTO](docs/Model/CategoryContentParametersDTO.md)
- [CategoryDTO](docs/Model/CategoryDTO.md)
- [CategoryErrorDTO](docs/Model/CategoryErrorDTO.md)
- [CategoryErrorType](docs/Model/CategoryErrorType.md)
- [CategoryParameterDTO](docs/Model/CategoryParameterDTO.md)
- [CategoryParameterUnitDTO](docs/Model/CategoryParameterUnitDTO.md)
- [ChangeOutletRequest](docs/Model/ChangeOutletRequest.md)
- [ChannelType](docs/Model/ChannelType.md)
- [ChatMessageDTO](docs/Model/ChatMessageDTO.md)
- [ChatMessagePayloadDTO](docs/Model/ChatMessagePayloadDTO.md)
- [ChatMessageSenderType](docs/Model/ChatMessageSenderType.md)
- [ChatMessagesResultDTO](docs/Model/ChatMessagesResultDTO.md)
- [ChatStatusType](docs/Model/ChatStatusType.md)
- [ChatType](docs/Model/ChatType.md)
- [ConfirmPricesRequest](docs/Model/ConfirmPricesRequest.md)
- [ConfirmShipmentRequest](docs/Model/ConfirmShipmentRequest.md)
- [CreateChatRequest](docs/Model/CreateChatRequest.md)
- [CreateChatResponse](docs/Model/CreateChatResponse.md)
- [CreateChatResultDTO](docs/Model/CreateChatResultDTO.md)
- [CreateOutletResponse](docs/Model/CreateOutletResponse.md)
- [CurrencyType](docs/Model/CurrencyType.md)
- [DayOfWeekType](docs/Model/DayOfWeekType.md)
- [DeleteCampaignOffersDTO](docs/Model/DeleteCampaignOffersDTO.md)
- [DeleteCampaignOffersRequest](docs/Model/DeleteCampaignOffersRequest.md)
- [DeleteCampaignOffersResponse](docs/Model/DeleteCampaignOffersResponse.md)
- [DeleteGoodsFeedbackCommentRequest](docs/Model/DeleteGoodsFeedbackCommentRequest.md)
- [DeleteHiddenOffersRequest](docs/Model/DeleteHiddenOffersRequest.md)
- [DeleteOffersDTO](docs/Model/DeleteOffersDTO.md)
- [DeleteOffersFromArchiveDTO](docs/Model/DeleteOffersFromArchiveDTO.md)
- [DeleteOffersFromArchiveRequest](docs/Model/DeleteOffersFromArchiveRequest.md)
- [DeleteOffersFromArchiveResponse](docs/Model/DeleteOffersFromArchiveResponse.md)
- [DeleteOffersRequest](docs/Model/DeleteOffersRequest.md)
- [DeleteOffersResponse](docs/Model/DeleteOffersResponse.md)
- [DeletePromoOffersRequest](docs/Model/DeletePromoOffersRequest.md)
- [DeletePromoOffersResponse](docs/Model/DeletePromoOffersResponse.md)
- [DeletePromoOffersResultDTO](docs/Model/DeletePromoOffersResultDTO.md)
- [DeliveryServiceDTO](docs/Model/DeliveryServiceDTO.md)
- [DeliveryServiceInfoDTO](docs/Model/DeliveryServiceInfoDTO.md)
- [DeliveryServicesDTO](docs/Model/DeliveryServicesDTO.md)
- [DocumentDTO](docs/Model/DocumentDTO.md)
- [EacVerificationResultDTO](docs/Model/EacVerificationResultDTO.md)
- [EacVerificationStatusType](docs/Model/EacVerificationStatusType.md)
- [EmptyApiResponse](docs/Model/EmptyApiResponse.md)
- [EnrichedMappingsOfferDTO](docs/Model/EnrichedMappingsOfferDTO.md)
- [EnrichedModelDTO](docs/Model/EnrichedModelDTO.md)
- [EnrichedModelsDTO](docs/Model/EnrichedModelsDTO.md)
- [EnrichedOrderBoxLayoutDTO](docs/Model/EnrichedOrderBoxLayoutDTO.md)
- [ExtensionShipmentDTO](docs/Model/ExtensionShipmentDTO.md)
- [FeedContentDTO](docs/Model/FeedContentDTO.md)
- [FeedContentErrorDTO](docs/Model/FeedContentErrorDTO.md)
- [FeedContentErrorType](docs/Model/FeedContentErrorType.md)
- [FeedDTO](docs/Model/FeedDTO.md)
- [FeedDownloadDTO](docs/Model/FeedDownloadDTO.md)
- [FeedDownloadErrorDTO](docs/Model/FeedDownloadErrorDTO.md)
- [FeedDownloadErrorType](docs/Model/FeedDownloadErrorType.md)
- [FeedIndexLogsErrorDTO](docs/Model/FeedIndexLogsErrorDTO.md)
- [FeedIndexLogsErrorType](docs/Model/FeedIndexLogsErrorType.md)
- [FeedIndexLogsFeedDTO](docs/Model/FeedIndexLogsFeedDTO.md)
- [FeedIndexLogsIndexType](docs/Model/FeedIndexLogsIndexType.md)
- [FeedIndexLogsOffersDTO](docs/Model/FeedIndexLogsOffersDTO.md)
- [FeedIndexLogsRecordDTO](docs/Model/FeedIndexLogsRecordDTO.md)
- [FeedIndexLogsResultDTO](docs/Model/FeedIndexLogsResultDTO.md)
- [FeedIndexLogsStatusType](docs/Model/FeedIndexLogsStatusType.md)
- [FeedParameterDTO](docs/Model/FeedParameterDTO.md)
- [FeedPlacementDTO](docs/Model/FeedPlacementDTO.md)
- [FeedPublicationDTO](docs/Model/FeedPublicationDTO.md)
- [FeedPublicationFullDTO](docs/Model/FeedPublicationFullDTO.md)
- [FeedPublicationPriceAndStockUpdateDTO](docs/Model/FeedPublicationPriceAndStockUpdateDTO.md)
- [FeedStatusType](docs/Model/FeedStatusType.md)
- [FeedbackAuthorDTO](docs/Model/FeedbackAuthorDTO.md)
- [FeedbackCommentAuthorDTO](docs/Model/FeedbackCommentAuthorDTO.md)
- [FeedbackCommentAuthorType](docs/Model/FeedbackCommentAuthorType.md)
- [FeedbackCommentDTO](docs/Model/FeedbackCommentDTO.md)
- [FeedbackDTO](docs/Model/FeedbackDTO.md)
- [FeedbackDeliveryType](docs/Model/FeedbackDeliveryType.md)
- [FeedbackFactorDTO](docs/Model/FeedbackFactorDTO.md)
- [FeedbackGradesDTO](docs/Model/FeedbackGradesDTO.md)
- [FeedbackListDTO](docs/Model/FeedbackListDTO.md)
- [FeedbackOrderDTO](docs/Model/FeedbackOrderDTO.md)
- [FeedbackReactionStatusType](docs/Model/FeedbackReactionStatusType.md)
- [FeedbackShopDTO](docs/Model/FeedbackShopDTO.md)
- [FeedbackStateType](docs/Model/FeedbackStateType.md)
- [FieldStateType](docs/Model/FieldStateType.md)
- [FlippingPagerDTO](docs/Model/FlippingPagerDTO.md)
- [ForwardScrollingPagerDTO](docs/Model/ForwardScrollingPagerDTO.md)
- [FulfillmentWarehouseDTO](docs/Model/FulfillmentWarehouseDTO.md)
- [FulfillmentWarehousesDTO](docs/Model/FulfillmentWarehousesDTO.md)
- [FullOutletDTO](docs/Model/FullOutletDTO.md)
- [FullOutletLicenseDTO](docs/Model/FullOutletLicenseDTO.md)
- [GenerateBoostConsolidatedRequest](docs/Model/GenerateBoostConsolidatedRequest.md)
- [GenerateCompetitorsPositionReportRequest](docs/Model/GenerateCompetitorsPositionReportRequest.md)
- [GenerateGoodsFeedbackRequest](docs/Model/GenerateGoodsFeedbackRequest.md)
- [GenerateGoodsMovementReportRequest](docs/Model/GenerateGoodsMovementReportRequest.md)
- [GenerateGoodsRealizationReportRequest](docs/Model/GenerateGoodsRealizationReportRequest.md)
- [GenerateGoodsTurnoverRequest](docs/Model/GenerateGoodsTurnoverRequest.md)
- [GenerateMassOrderLabelsRequest](docs/Model/GenerateMassOrderLabelsRequest.md)
- [GeneratePricesReportRequest](docs/Model/GeneratePricesReportRequest.md)
- [GenerateReportDTO](docs/Model/GenerateReportDTO.md)
- [GenerateReportResponse](docs/Model/GenerateReportResponse.md)
- [GenerateShelfsStatisticsRequest](docs/Model/GenerateShelfsStatisticsRequest.md)
- [GenerateShipmentListDocumentReportRequest](docs/Model/GenerateShipmentListDocumentReportRequest.md)
- [GenerateShowsSalesReportRequest](docs/Model/GenerateShowsSalesReportRequest.md)
- [GenerateStocksOnWarehousesReportRequest](docs/Model/GenerateStocksOnWarehousesReportRequest.md)
- [GenerateUnitedMarketplaceServicesReportRequest](docs/Model/GenerateUnitedMarketplaceServicesReportRequest.md)
- [GenerateUnitedNettingReportRequest](docs/Model/GenerateUnitedNettingReportRequest.md)
- [GenerateUnitedOrdersRequest](docs/Model/GenerateUnitedOrdersRequest.md)
- [GetAllOffersResponse](docs/Model/GetAllOffersResponse.md)
- [GetBidsInfoRequest](docs/Model/GetBidsInfoRequest.md)
- [GetBidsInfoResponse](docs/Model/GetBidsInfoResponse.md)
- [GetBidsInfoResponseDTO](docs/Model/GetBidsInfoResponseDTO.md)
- [GetBidsRecommendationsRequest](docs/Model/GetBidsRecommendationsRequest.md)
- [GetBidsRecommendationsResponse](docs/Model/GetBidsRecommendationsResponse.md)
- [GetBidsRecommendationsResponseDTO](docs/Model/GetBidsRecommendationsResponseDTO.md)
- [GetBusinessBuyerInfoResponse](docs/Model/GetBusinessBuyerInfoResponse.md)
- [GetBusinessDocumentsInfoResponse](docs/Model/GetBusinessDocumentsInfoResponse.md)
- [GetBusinessSettingsInfoDTO](docs/Model/GetBusinessSettingsInfoDTO.md)
- [GetBusinessSettingsResponse](docs/Model/GetBusinessSettingsResponse.md)
- [GetCampaignLoginsResponse](docs/Model/GetCampaignLoginsResponse.md)
- [GetCampaignOfferDTO](docs/Model/GetCampaignOfferDTO.md)
- [GetCampaignOffersRequest](docs/Model/GetCampaignOffersRequest.md)
- [GetCampaignOffersResponse](docs/Model/GetCampaignOffersResponse.md)
- [GetCampaignOffersResultDTO](docs/Model/GetCampaignOffersResultDTO.md)
- [GetCampaignRegionResponse](docs/Model/GetCampaignRegionResponse.md)
- [GetCampaignResponse](docs/Model/GetCampaignResponse.md)
- [GetCampaignSettingsResponse](docs/Model/GetCampaignSettingsResponse.md)
- [GetCampaignsResponse](docs/Model/GetCampaignsResponse.md)
- [GetCategoriesMaxSaleQuantumDTO](docs/Model/GetCategoriesMaxSaleQuantumDTO.md)
- [GetCategoriesMaxSaleQuantumRequest](docs/Model/GetCategoriesMaxSaleQuantumRequest.md)
- [GetCategoriesMaxSaleQuantumResponse](docs/Model/GetCategoriesMaxSaleQuantumResponse.md)
- [GetCategoriesRequest](docs/Model/GetCategoriesRequest.md)
- [GetCategoriesResponse](docs/Model/GetCategoriesResponse.md)
- [GetCategoryContentParametersResponse](docs/Model/GetCategoryContentParametersResponse.md)
- [GetChatHistoryRequest](docs/Model/GetChatHistoryRequest.md)
- [GetChatHistoryResponse](docs/Model/GetChatHistoryResponse.md)
- [GetChatInfoDTO](docs/Model/GetChatInfoDTO.md)
- [GetChatsInfoDTO](docs/Model/GetChatsInfoDTO.md)
- [GetChatsRequest](docs/Model/GetChatsRequest.md)
- [GetChatsResponse](docs/Model/GetChatsResponse.md)
- [GetDeliveryServicesResponse](docs/Model/GetDeliveryServicesResponse.md)
- [GetFeedIndexLogsResponse](docs/Model/GetFeedIndexLogsResponse.md)
- [GetFeedResponse](docs/Model/GetFeedResponse.md)
- [GetFeedbackListResponse](docs/Model/GetFeedbackListResponse.md)
- [GetFeedsResponse](docs/Model/GetFeedsResponse.md)
- [GetFulfillmentWarehousesResponse](docs/Model/GetFulfillmentWarehousesResponse.md)
- [GetGoodsFeedbackCommentsRequest](docs/Model/GetGoodsFeedbackCommentsRequest.md)
- [GetGoodsFeedbackCommentsResponse](docs/Model/GetGoodsFeedbackCommentsResponse.md)
- [GetGoodsFeedbackRequest](docs/Model/GetGoodsFeedbackRequest.md)
- [GetGoodsFeedbackResponse](docs/Model/GetGoodsFeedbackResponse.md)
- [GetGoodsStatsRequest](docs/Model/GetGoodsStatsRequest.md)
- [GetGoodsStatsResponse](docs/Model/GetGoodsStatsResponse.md)
- [GetHiddenOffersResponse](docs/Model/GetHiddenOffersResponse.md)
- [GetHiddenOffersResultDTO](docs/Model/GetHiddenOffersResultDTO.md)
- [GetMappingDTO](docs/Model/GetMappingDTO.md)
- [GetModelsOffersResponse](docs/Model/GetModelsOffersResponse.md)
- [GetModelsRequest](docs/Model/GetModelsRequest.md)
- [GetModelsResponse](docs/Model/GetModelsResponse.md)
- [GetOfferCardsContentStatusRequest](docs/Model/GetOfferCardsContentStatusRequest.md)
- [GetOfferCardsContentStatusResponse](docs/Model/GetOfferCardsContentStatusResponse.md)
- [GetOfferDTO](docs/Model/GetOfferDTO.md)
- [GetOfferMappingDTO](docs/Model/GetOfferMappingDTO.md)
- [GetOfferMappingEntriesResponse](docs/Model/GetOfferMappingEntriesResponse.md)
- [GetOfferMappingsRequest](docs/Model/GetOfferMappingsRequest.md)
- [GetOfferMappingsResponse](docs/Model/GetOfferMappingsResponse.md)
- [GetOfferMappingsResultDTO](docs/Model/GetOfferMappingsResultDTO.md)
- [GetOfferRecommendationsRequest](docs/Model/GetOfferRecommendationsRequest.md)
- [GetOfferRecommendationsResponse](docs/Model/GetOfferRecommendationsResponse.md)
- [GetOffersResponse](docs/Model/GetOffersResponse.md)
- [GetOrderBuyerInfoResponse](docs/Model/GetOrderBuyerInfoResponse.md)
- [GetOrderLabelsDataResponse](docs/Model/GetOrderLabelsDataResponse.md)
- [GetOrderResponse](docs/Model/GetOrderResponse.md)
- [GetOrdersResponse](docs/Model/GetOrdersResponse.md)
- [GetOrdersStatsRequest](docs/Model/GetOrdersStatsRequest.md)
- [GetOrdersStatsResponse](docs/Model/GetOrdersStatsResponse.md)
- [GetOutletLicensesResponse](docs/Model/GetOutletLicensesResponse.md)
- [GetOutletResponse](docs/Model/GetOutletResponse.md)
- [GetOutletsResponse](docs/Model/GetOutletsResponse.md)
- [GetPriceDTO](docs/Model/GetPriceDTO.md)
- [GetPriceWithDiscountDTO](docs/Model/GetPriceWithDiscountDTO.md)
- [GetPriceWithVatDTO](docs/Model/GetPriceWithVatDTO.md)
- [GetPricesByOfferIdsRequest](docs/Model/GetPricesByOfferIdsRequest.md)
- [GetPricesByOfferIdsResponse](docs/Model/GetPricesByOfferIdsResponse.md)
- [GetPricesResponse](docs/Model/GetPricesResponse.md)
- [GetPromoAssortmentInfoDTO](docs/Model/GetPromoAssortmentInfoDTO.md)
- [GetPromoBestsellerInfoDTO](docs/Model/GetPromoBestsellerInfoDTO.md)
- [GetPromoConstraintsDTO](docs/Model/GetPromoConstraintsDTO.md)
- [GetPromoDTO](docs/Model/GetPromoDTO.md)
- [GetPromoMechanicsInfoDTO](docs/Model/GetPromoMechanicsInfoDTO.md)
- [GetPromoOfferDTO](docs/Model/GetPromoOfferDTO.md)
- [GetPromoOffersRequest](docs/Model/GetPromoOffersRequest.md)
- [GetPromoOffersResponse](docs/Model/GetPromoOffersResponse.md)
- [GetPromoOffersResultDTO](docs/Model/GetPromoOffersResultDTO.md)
- [GetPromoPromocodeInfoDTO](docs/Model/GetPromoPromocodeInfoDTO.md)
- [GetPromosRequest](docs/Model/GetPromosRequest.md)
- [GetPromosResponse](docs/Model/GetPromosResponse.md)
- [GetPromosResultDTO](docs/Model/GetPromosResultDTO.md)
- [GetQualityRatingDetailsResponse](docs/Model/GetQualityRatingDetailsResponse.md)
- [GetQualityRatingRequest](docs/Model/GetQualityRatingRequest.md)
- [GetQualityRatingResponse](docs/Model/GetQualityRatingResponse.md)
- [GetQuarantineOffersRequest](docs/Model/GetQuarantineOffersRequest.md)
- [GetQuarantineOffersResponse](docs/Model/GetQuarantineOffersResponse.md)
- [GetQuarantineOffersResultDTO](docs/Model/GetQuarantineOffersResultDTO.md)
- [GetRegionWithChildrenResponse](docs/Model/GetRegionWithChildrenResponse.md)
- [GetRegionsResponse](docs/Model/GetRegionsResponse.md)
- [GetReportInfoResponse](docs/Model/GetReportInfoResponse.md)
- [GetReturnResponse](docs/Model/GetReturnResponse.md)
- [GetReturnsResponse](docs/Model/GetReturnsResponse.md)
- [GetShipmentOrdersInfoResponse](docs/Model/GetShipmentOrdersInfoResponse.md)
- [GetShipmentResponse](docs/Model/GetShipmentResponse.md)
- [GetSuggestedOfferMappingEntriesRequest](docs/Model/GetSuggestedOfferMappingEntriesRequest.md)
- [GetSuggestedOfferMappingEntriesResponse](docs/Model/GetSuggestedOfferMappingEntriesResponse.md)
- [GetSuggestedOfferMappingsRequest](docs/Model/GetSuggestedOfferMappingsRequest.md)
- [GetSuggestedOfferMappingsResponse](docs/Model/GetSuggestedOfferMappingsResponse.md)
- [GetSuggestedOfferMappingsResultDTO](docs/Model/GetSuggestedOfferMappingsResultDTO.md)
- [GetWarehouseStocksDTO](docs/Model/GetWarehouseStocksDTO.md)
- [GetWarehouseStocksRequest](docs/Model/GetWarehouseStocksRequest.md)
- [GetWarehouseStocksResponse](docs/Model/GetWarehouseStocksResponse.md)
- [GetWarehousesResponse](docs/Model/GetWarehousesResponse.md)
- [GoodsFeedbackCommentAuthorDTO](docs/Model/GoodsFeedbackCommentAuthorDTO.md)
- [GoodsFeedbackCommentAuthorType](docs/Model/GoodsFeedbackCommentAuthorType.md)
- [GoodsFeedbackCommentDTO](docs/Model/GoodsFeedbackCommentDTO.md)
- [GoodsFeedbackCommentListDTO](docs/Model/GoodsFeedbackCommentListDTO.md)
- [GoodsFeedbackCommentStatusType](docs/Model/GoodsFeedbackCommentStatusType.md)
- [GoodsFeedbackDTO](docs/Model/GoodsFeedbackDTO.md)
- [GoodsFeedbackDescriptionDTO](docs/Model/GoodsFeedbackDescriptionDTO.md)
- [GoodsFeedbackIdentifiersDTO](docs/Model/GoodsFeedbackIdentifiersDTO.md)
- [GoodsFeedbackListDTO](docs/Model/GoodsFeedbackListDTO.md)
- [GoodsFeedbackMediaDTO](docs/Model/GoodsFeedbackMediaDTO.md)
- [GoodsFeedbackStatisticsDTO](docs/Model/GoodsFeedbackStatisticsDTO.md)
- [GoodsStatsDTO](docs/Model/GoodsStatsDTO.md)
- [GoodsStatsGoodsDTO](docs/Model/GoodsStatsGoodsDTO.md)
- [GoodsStatsWarehouseDTO](docs/Model/GoodsStatsWarehouseDTO.md)
- [GoodsStatsWeightDimensionsDTO](docs/Model/GoodsStatsWeightDimensionsDTO.md)
- [GpsDTO](docs/Model/GpsDTO.md)
- [HiddenOfferDTO](docs/Model/HiddenOfferDTO.md)
- [LabelsSortingType](docs/Model/LabelsSortingType.md)
- [LanguageType](docs/Model/LanguageType.md)
- [LicenseCheckStatusType](docs/Model/LicenseCheckStatusType.md)
- [LicenseType](docs/Model/LicenseType.md)
- [LogisticPickupPointDTO](docs/Model/LogisticPickupPointDTO.md)
- [LogisticPointType](docs/Model/LogisticPointType.md)
- [MappingsOfferDTO](docs/Model/MappingsOfferDTO.md)
- [MappingsOfferInfoDTO](docs/Model/MappingsOfferInfoDTO.md)
- [MaxSaleQuantumDTO](docs/Model/MaxSaleQuantumDTO.md)
- [MechanicsType](docs/Model/MechanicsType.md)
- [ModelDTO](docs/Model/ModelDTO.md)
- [ModelOfferDTO](docs/Model/ModelOfferDTO.md)
- [ModelPriceDTO](docs/Model/ModelPriceDTO.md)
- [ModelsDTO](docs/Model/ModelsDTO.md)
- [OfferAvailabilityStatusType](docs/Model/OfferAvailabilityStatusType.md)
- [OfferCampaignStatusDTO](docs/Model/OfferCampaignStatusDTO.md)
- [OfferCampaignStatusType](docs/Model/OfferCampaignStatusType.md)
- [OfferCardDTO](docs/Model/OfferCardDTO.md)
- [OfferCardRecommendationDTO](docs/Model/OfferCardRecommendationDTO.md)
- [OfferCardRecommendationType](docs/Model/OfferCardRecommendationType.md)
- [OfferCardStatusType](docs/Model/OfferCardStatusType.md)
- [OfferCardsContentStatusDTO](docs/Model/OfferCardsContentStatusDTO.md)
- [OfferConditionDTO](docs/Model/OfferConditionDTO.md)
- [OfferConditionQualityType](docs/Model/OfferConditionQualityType.md)
- [OfferConditionType](docs/Model/OfferConditionType.md)
- [OfferContentDTO](docs/Model/OfferContentDTO.md)
- [OfferContentErrorDTO](docs/Model/OfferContentErrorDTO.md)
- [OfferContentErrorType](docs/Model/OfferContentErrorType.md)
- [OfferDTO](docs/Model/OfferDTO.md)
- [OfferErrorDTO](docs/Model/OfferErrorDTO.md)
- [OfferForRecommendationDTO](docs/Model/OfferForRecommendationDTO.md)
- [OfferManualDTO](docs/Model/OfferManualDTO.md)
- [OfferMappingDTO](docs/Model/OfferMappingDTO.md)
- [OfferMappingEntriesDTO](docs/Model/OfferMappingEntriesDTO.md)
- [OfferMappingEntryDTO](docs/Model/OfferMappingEntryDTO.md)
- [OfferMappingErrorDTO](docs/Model/OfferMappingErrorDTO.md)
- [OfferMappingErrorType](docs/Model/OfferMappingErrorType.md)
- [OfferMappingInfoDTO](docs/Model/OfferMappingInfoDTO.md)
- [OfferMappingKindType](docs/Model/OfferMappingKindType.md)
- [OfferMappingSuggestionsListDTO](docs/Model/OfferMappingSuggestionsListDTO.md)
- [OfferParamDTO](docs/Model/OfferParamDTO.md)
- [OfferPriceByOfferIdsListResponseDTO](docs/Model/OfferPriceByOfferIdsListResponseDTO.md)
- [OfferPriceByOfferIdsResponseDTO](docs/Model/OfferPriceByOfferIdsResponseDTO.md)
- [OfferPriceDTO](docs/Model/OfferPriceDTO.md)
- [OfferPriceListResponseDTO](docs/Model/OfferPriceListResponseDTO.md)
- [OfferPriceResponseDTO](docs/Model/OfferPriceResponseDTO.md)
- [OfferProcessingNoteDTO](docs/Model/OfferProcessingNoteDTO.md)
- [OfferProcessingNoteType](docs/Model/OfferProcessingNoteType.md)
- [OfferProcessingStateDTO](docs/Model/OfferProcessingStateDTO.md)
- [OfferProcessingStatusType](docs/Model/OfferProcessingStatusType.md)
- [OfferRecommendationDTO](docs/Model/OfferRecommendationDTO.md)
- [OfferRecommendationInfoDTO](docs/Model/OfferRecommendationInfoDTO.md)
- [OfferRecommendationsResultDTO](docs/Model/OfferRecommendationsResultDTO.md)
- [OfferSellingProgramDTO](docs/Model/OfferSellingProgramDTO.md)
- [OfferSellingProgramStatusType](docs/Model/OfferSellingProgramStatusType.md)
- [OfferType](docs/Model/OfferType.md)
- [OfferWeightDimensionsDTO](docs/Model/OfferWeightDimensionsDTO.md)
- [OffersDTO](docs/Model/OffersDTO.md)
- [OptionValuesLimitedDTO](docs/Model/OptionValuesLimitedDTO.md)
- [OrderBoxLayoutDTO](docs/Model/OrderBoxLayoutDTO.md)
- [OrderBoxLayoutItemDTO](docs/Model/OrderBoxLayoutItemDTO.md)
- [OrderBoxLayoutPartialCountDTO](docs/Model/OrderBoxLayoutPartialCountDTO.md)
- [OrderBoxesLayoutDTO](docs/Model/OrderBoxesLayoutDTO.md)
- [OrderBusinessBuyerDTO](docs/Model/OrderBusinessBuyerDTO.md)
- [OrderBusinessDocumentsDTO](docs/Model/OrderBusinessDocumentsDTO.md)
- [OrderBuyerBasicInfoDTO](docs/Model/OrderBuyerBasicInfoDTO.md)
- [OrderBuyerDTO](docs/Model/OrderBuyerDTO.md)
- [OrderBuyerInfoDTO](docs/Model/OrderBuyerInfoDTO.md)
- [OrderBuyerType](docs/Model/OrderBuyerType.md)
- [OrderCancellationReasonType](docs/Model/OrderCancellationReasonType.md)
- [OrderCourierDTO](docs/Model/OrderCourierDTO.md)
- [OrderDTO](docs/Model/OrderDTO.md)
- [OrderDeliveryAddressDTO](docs/Model/OrderDeliveryAddressDTO.md)
- [OrderDeliveryDTO](docs/Model/OrderDeliveryDTO.md)
- [OrderDeliveryDateDTO](docs/Model/OrderDeliveryDateDTO.md)
- [OrderDeliveryDateReasonType](docs/Model/OrderDeliveryDateReasonType.md)
- [OrderDeliveryDatesDTO](docs/Model/OrderDeliveryDatesDTO.md)
- [OrderDeliveryDispatchType](docs/Model/OrderDeliveryDispatchType.md)
- [OrderDeliveryEacType](docs/Model/OrderDeliveryEacType.md)
- [OrderDeliveryPartnerType](docs/Model/OrderDeliveryPartnerType.md)
- [OrderDeliveryType](docs/Model/OrderDeliveryType.md)
- [OrderDigitalItemDTO](docs/Model/OrderDigitalItemDTO.md)
- [OrderDocumentStatusType](docs/Model/OrderDocumentStatusType.md)
- [OrderItemDTO](docs/Model/OrderItemDTO.md)
- [OrderItemDetailDTO](docs/Model/OrderItemDetailDTO.md)
- [OrderItemInstanceDTO](docs/Model/OrderItemInstanceDTO.md)
- [OrderItemInstanceModificationDTO](docs/Model/OrderItemInstanceModificationDTO.md)
- [OrderItemInstanceType](docs/Model/OrderItemInstanceType.md)
- [OrderItemModificationDTO](docs/Model/OrderItemModificationDTO.md)
- [OrderItemPromoDTO](docs/Model/OrderItemPromoDTO.md)
- [OrderItemStatusType](docs/Model/OrderItemStatusType.md)
- [OrderItemSubsidyDTO](docs/Model/OrderItemSubsidyDTO.md)
- [OrderItemSubsidyType](docs/Model/OrderItemSubsidyType.md)
- [OrderItemTagType](docs/Model/OrderItemTagType.md)
- [OrderItemsModificationRequestReasonType](docs/Model/OrderItemsModificationRequestReasonType.md)
- [OrderItemsModificationResultDTO](docs/Model/OrderItemsModificationResultDTO.md)
- [OrderLabelDTO](docs/Model/OrderLabelDTO.md)
- [OrderLiftType](docs/Model/OrderLiftType.md)
- [OrderParcelBoxDTO](docs/Model/OrderParcelBoxDTO.md)
- [OrderPaymentMethodType](docs/Model/OrderPaymentMethodType.md)
- [OrderPaymentType](docs/Model/OrderPaymentType.md)
- [OrderPromoType](docs/Model/OrderPromoType.md)
- [OrderShipmentDTO](docs/Model/OrderShipmentDTO.md)
- [OrderStateDTO](docs/Model/OrderStateDTO.md)
- [OrderStatsStatusType](docs/Model/OrderStatsStatusType.md)
- [OrderStatusChangeDTO](docs/Model/OrderStatusChangeDTO.md)
- [OrderStatusChangeDeliveryDTO](docs/Model/OrderStatusChangeDeliveryDTO.md)
- [OrderStatusChangeDeliveryDatesDTO](docs/Model/OrderStatusChangeDeliveryDatesDTO.md)
- [OrderStatusType](docs/Model/OrderStatusType.md)
- [OrderSubsidyDTO](docs/Model/OrderSubsidyDTO.md)
- [OrderSubsidyType](docs/Model/OrderSubsidyType.md)
- [OrderSubstatusType](docs/Model/OrderSubstatusType.md)
- [OrderTaxSystemType](docs/Model/OrderTaxSystemType.md)
- [OrderTrackDTO](docs/Model/OrderTrackDTO.md)
- [OrderUpdateStatusType](docs/Model/OrderUpdateStatusType.md)
- [OrderVatType](docs/Model/OrderVatType.md)
- [OrdersShipmentInfoDTO](docs/Model/OrdersShipmentInfoDTO.md)
- [OrdersStatsCommissionDTO](docs/Model/OrdersStatsCommissionDTO.md)
- [OrdersStatsCommissionType](docs/Model/OrdersStatsCommissionType.md)
- [OrdersStatsDTO](docs/Model/OrdersStatsDTO.md)
- [OrdersStatsDeliveryRegionDTO](docs/Model/OrdersStatsDeliveryRegionDTO.md)
- [OrdersStatsDetailsDTO](docs/Model/OrdersStatsDetailsDTO.md)
- [OrdersStatsItemDTO](docs/Model/OrdersStatsItemDTO.md)
- [OrdersStatsItemStatusType](docs/Model/OrdersStatsItemStatusType.md)
- [OrdersStatsOrderDTO](docs/Model/OrdersStatsOrderDTO.md)
- [OrdersStatsOrderPaymentType](docs/Model/OrdersStatsOrderPaymentType.md)
- [OrdersStatsPaymentDTO](docs/Model/OrdersStatsPaymentDTO.md)
- [OrdersStatsPaymentOrderDTO](docs/Model/OrdersStatsPaymentOrderDTO.md)
- [OrdersStatsPaymentSourceType](docs/Model/OrdersStatsPaymentSourceType.md)
- [OrdersStatsPaymentType](docs/Model/OrdersStatsPaymentType.md)
- [OrdersStatsPriceDTO](docs/Model/OrdersStatsPriceDTO.md)
- [OrdersStatsPriceType](docs/Model/OrdersStatsPriceType.md)
- [OrdersStatsStockType](docs/Model/OrdersStatsStockType.md)
- [OrdersStatsWarehouseDTO](docs/Model/OrdersStatsWarehouseDTO.md)
- [OutletAddressDTO](docs/Model/OutletAddressDTO.md)
- [OutletDTO](docs/Model/OutletDTO.md)
- [OutletDeliveryRuleDTO](docs/Model/OutletDeliveryRuleDTO.md)
- [OutletLicenseDTO](docs/Model/OutletLicenseDTO.md)
- [OutletLicensesResponseDTO](docs/Model/OutletLicensesResponseDTO.md)
- [OutletResponseDTO](docs/Model/OutletResponseDTO.md)
- [OutletStatusType](docs/Model/OutletStatusType.md)
- [OutletType](docs/Model/OutletType.md)
- [OutletVisibilityType](docs/Model/OutletVisibilityType.md)
- [OutletWorkingScheduleDTO](docs/Model/OutletWorkingScheduleDTO.md)
- [OutletWorkingScheduleItemDTO](docs/Model/OutletWorkingScheduleItemDTO.md)
- [PageFormatType](docs/Model/PageFormatType.md)
- [PagedReturnsDTO](docs/Model/PagedReturnsDTO.md)
- [PalletsCountDTO](docs/Model/PalletsCountDTO.md)
- [ParameterType](docs/Model/ParameterType.md)
- [ParameterValueConstraintsDTO](docs/Model/ParameterValueConstraintsDTO.md)
- [ParameterValueDTO](docs/Model/ParameterValueDTO.md)
- [ParameterValueOptionDTO](docs/Model/ParameterValueOptionDTO.md)
- [ParcelBoxDTO](docs/Model/ParcelBoxDTO.md)
- [ParcelBoxLabelDTO](docs/Model/ParcelBoxLabelDTO.md)
- [ParcelDTO](docs/Model/ParcelDTO.md)
- [PartnerShipmentWarehouseDTO](docs/Model/PartnerShipmentWarehouseDTO.md)
- [PaymentFrequencyType](docs/Model/PaymentFrequencyType.md)
- [PickupAddressDTO](docs/Model/PickupAddressDTO.md)
- [PlacementType](docs/Model/PlacementType.md)
- [PriceCompetitivenessThresholdsDTO](docs/Model/PriceCompetitivenessThresholdsDTO.md)
- [PriceCompetitivenessType](docs/Model/PriceCompetitivenessType.md)
- [PriceDTO](docs/Model/PriceDTO.md)
- [PriceQuarantineVerdictDTO](docs/Model/PriceQuarantineVerdictDTO.md)
- [PriceQuarantineVerdictParamNameType](docs/Model/PriceQuarantineVerdictParamNameType.md)
- [PriceQuarantineVerdictParameterDTO](docs/Model/PriceQuarantineVerdictParameterDTO.md)
- [PriceQuarantineVerdictType](docs/Model/PriceQuarantineVerdictType.md)
- [PriceRecommendationItemDTO](docs/Model/PriceRecommendationItemDTO.md)
- [PriceSuggestDTO](docs/Model/PriceSuggestDTO.md)
- [PriceSuggestOfferDTO](docs/Model/PriceSuggestOfferDTO.md)
- [PriceSuggestType](docs/Model/PriceSuggestType.md)
- [PromoOfferAutoParticipatingDetailsDTO](docs/Model/PromoOfferAutoParticipatingDetailsDTO.md)
- [PromoOfferDiscountParamsDTO](docs/Model/PromoOfferDiscountParamsDTO.md)
- [PromoOfferParamsDTO](docs/Model/PromoOfferParamsDTO.md)
- [PromoOfferParticipationStatusFilterType](docs/Model/PromoOfferParticipationStatusFilterType.md)
- [PromoOfferParticipationStatusType](docs/Model/PromoOfferParticipationStatusType.md)
- [PromoOfferPromocodeParamsDTO](docs/Model/PromoOfferPromocodeParamsDTO.md)
- [PromoOfferUpdateWarningCodeType](docs/Model/PromoOfferUpdateWarningCodeType.md)
- [PromoOfferUpdateWarningDTO](docs/Model/PromoOfferUpdateWarningDTO.md)
- [PromoParticipationType](docs/Model/PromoParticipationType.md)
- [PromoPeriodDTO](docs/Model/PromoPeriodDTO.md)
- [ProvideOrderDigitalCodesRequest](docs/Model/ProvideOrderDigitalCodesRequest.md)
- [ProvideOrderItemIdentifiersRequest](docs/Model/ProvideOrderItemIdentifiersRequest.md)
- [ProvideOrderItemIdentifiersResponse](docs/Model/ProvideOrderItemIdentifiersResponse.md)
- [PutSkuBidsRequest](docs/Model/PutSkuBidsRequest.md)
- [QualityRatingAffectedOrderDTO](docs/Model/QualityRatingAffectedOrderDTO.md)
- [QualityRatingComponentDTO](docs/Model/QualityRatingComponentDTO.md)
- [QualityRatingComponentType](docs/Model/QualityRatingComponentType.md)
- [QualityRatingDTO](docs/Model/QualityRatingDTO.md)
- [QualityRatingDetailsDTO](docs/Model/QualityRatingDetailsDTO.md)
- [QuantumDTO](docs/Model/QuantumDTO.md)
- [QuarantineOfferDTO](docs/Model/QuarantineOfferDTO.md)
- [RecipientType](docs/Model/RecipientType.md)
- [RefundStatusType](docs/Model/RefundStatusType.md)
- [RegionDTO](docs/Model/RegionDTO.md)
- [RegionType](docs/Model/RegionType.md)
- [RegionalModelInfoDTO](docs/Model/RegionalModelInfoDTO.md)
- [RejectedPromoOfferDeleteDTO](docs/Model/RejectedPromoOfferDeleteDTO.md)
- [RejectedPromoOfferDeleteReasonType](docs/Model/RejectedPromoOfferDeleteReasonType.md)
- [RejectedPromoOfferUpdateDTO](docs/Model/RejectedPromoOfferUpdateDTO.md)
- [RejectedPromoOfferUpdateReasonType](docs/Model/RejectedPromoOfferUpdateReasonType.md)
- [ReportFormatType](docs/Model/ReportFormatType.md)
- [ReportInfoDTO](docs/Model/ReportInfoDTO.md)
- [ReportStatusType](docs/Model/ReportStatusType.md)
- [ReportSubStatusType](docs/Model/ReportSubStatusType.md)
- [ReturnDTO](docs/Model/ReturnDTO.md)
- [ReturnDecisionDTO](docs/Model/ReturnDecisionDTO.md)
- [ReturnDecisionReasonType](docs/Model/ReturnDecisionReasonType.md)
- [ReturnDecisionSubreasonType](docs/Model/ReturnDecisionSubreasonType.md)
- [ReturnDecisionType](docs/Model/ReturnDecisionType.md)
- [ReturnInstanceDTO](docs/Model/ReturnInstanceDTO.md)
- [ReturnInstanceStatusType](docs/Model/ReturnInstanceStatusType.md)
- [ReturnInstanceStockType](docs/Model/ReturnInstanceStockType.md)
- [ReturnItemDTO](docs/Model/ReturnItemDTO.md)
- [ReturnRequestDecisionType](docs/Model/ReturnRequestDecisionType.md)
- [ReturnShipmentStatusType](docs/Model/ReturnShipmentStatusType.md)
- [ReturnType](docs/Model/ReturnType.md)
- [ScrollingPagerDTO](docs/Model/ScrollingPagerDTO.md)
- [SearchModelsResponse](docs/Model/SearchModelsResponse.md)
- [SearchShipmentsRequest](docs/Model/SearchShipmentsRequest.md)
- [SearchShipmentsResponse](docs/Model/SearchShipmentsResponse.md)
- [SearchShipmentsResponseDTO](docs/Model/SearchShipmentsResponseDTO.md)
- [SellingProgramType](docs/Model/SellingProgramType.md)
- [SendMessageToChatRequest](docs/Model/SendMessageToChatRequest.md)
- [SetFeedParamsRequest](docs/Model/SetFeedParamsRequest.md)
- [SetOrderBoxLayoutRequest](docs/Model/SetOrderBoxLayoutRequest.md)
- [SetOrderBoxLayoutResponse](docs/Model/SetOrderBoxLayoutResponse.md)
- [SetOrderDeliveryDateRequest](docs/Model/SetOrderDeliveryDateRequest.md)
- [SetOrderDeliveryTrackCodeRequest](docs/Model/SetOrderDeliveryTrackCodeRequest.md)
- [SetOrderShipmentBoxesRequest](docs/Model/SetOrderShipmentBoxesRequest.md)
- [SetOrderShipmentBoxesResponse](docs/Model/SetOrderShipmentBoxesResponse.md)
- [SetReturnDecisionRequest](docs/Model/SetReturnDecisionRequest.md)
- [SetShipmentPalletsCountRequest](docs/Model/SetShipmentPalletsCountRequest.md)
- [ShelfsStatisticsAttributionType](docs/Model/ShelfsStatisticsAttributionType.md)
- [ShipmentActionType](docs/Model/ShipmentActionType.md)
- [ShipmentBoxesDTO](docs/Model/ShipmentBoxesDTO.md)
- [ShipmentDTO](docs/Model/ShipmentDTO.md)
- [ShipmentInfoDTO](docs/Model/ShipmentInfoDTO.md)
- [ShipmentPalletLabelPageFormatType](docs/Model/ShipmentPalletLabelPageFormatType.md)
- [ShipmentStatusChangeDTO](docs/Model/ShipmentStatusChangeDTO.md)
- [ShipmentStatusType](docs/Model/ShipmentStatusType.md)
- [ShipmentType](docs/Model/ShipmentType.md)
- [ShowsSalesGroupingType](docs/Model/ShowsSalesGroupingType.md)
- [SkipGoodsFeedbackReactionRequest](docs/Model/SkipGoodsFeedbackReactionRequest.md)
- [SkuBidItemDTO](docs/Model/SkuBidItemDTO.md)
- [SkuBidRecommendationItemDTO](docs/Model/SkuBidRecommendationItemDTO.md)
- [SortOrderType](docs/Model/SortOrderType.md)
- [SuggestOfferPriceDTO](docs/Model/SuggestOfferPriceDTO.md)
- [SuggestPricesRequest](docs/Model/SuggestPricesRequest.md)
- [SuggestPricesResponse](docs/Model/SuggestPricesResponse.md)
- [SuggestPricesResultDTO](docs/Model/SuggestPricesResultDTO.md)
- [SuggestedOfferDTO](docs/Model/SuggestedOfferDTO.md)
- [SuggestedOfferMappingDTO](docs/Model/SuggestedOfferMappingDTO.md)
- [TariffDTO](docs/Model/TariffDTO.md)
- [TariffParameterDTO](docs/Model/TariffParameterDTO.md)
- [TariffType](docs/Model/TariffType.md)
- [TimePeriodDTO](docs/Model/TimePeriodDTO.md)
- [TimeUnitType](docs/Model/TimeUnitType.md)
- [TrackDTO](docs/Model/TrackDTO.md)
- [TransferOrdersFromShipmentRequest](docs/Model/TransferOrdersFromShipmentRequest.md)
- [TurnoverDTO](docs/Model/TurnoverDTO.md)
- [TurnoverType](docs/Model/TurnoverType.md)
- [UnitDTO](docs/Model/UnitDTO.md)
- [UpdateBusinessOfferPriceDTO](docs/Model/UpdateBusinessOfferPriceDTO.md)
- [UpdateBusinessPricesRequest](docs/Model/UpdateBusinessPricesRequest.md)
- [UpdateCampaignOfferDTO](docs/Model/UpdateCampaignOfferDTO.md)
- [UpdateCampaignOffersRequest](docs/Model/UpdateCampaignOffersRequest.md)
- [UpdateGoodsFeedbackCommentDTO](docs/Model/UpdateGoodsFeedbackCommentDTO.md)
- [UpdateGoodsFeedbackCommentRequest](docs/Model/UpdateGoodsFeedbackCommentRequest.md)
- [UpdateGoodsFeedbackCommentResponse](docs/Model/UpdateGoodsFeedbackCommentResponse.md)
- [UpdateMappingDTO](docs/Model/UpdateMappingDTO.md)
- [UpdateMappingsOfferDTO](docs/Model/UpdateMappingsOfferDTO.md)
- [UpdateOfferContentRequest](docs/Model/UpdateOfferContentRequest.md)
- [UpdateOfferContentResponse](docs/Model/UpdateOfferContentResponse.md)
- [UpdateOfferContentResultDTO](docs/Model/UpdateOfferContentResultDTO.md)
- [UpdateOfferDTO](docs/Model/UpdateOfferDTO.md)
- [UpdateOfferMappingDTO](docs/Model/UpdateOfferMappingDTO.md)
- [UpdateOfferMappingEntryDTO](docs/Model/UpdateOfferMappingEntryDTO.md)
- [UpdateOfferMappingEntryRequest](docs/Model/UpdateOfferMappingEntryRequest.md)
- [UpdateOfferMappingResultDTO](docs/Model/UpdateOfferMappingResultDTO.md)
- [UpdateOfferMappingsRequest](docs/Model/UpdateOfferMappingsRequest.md)
- [UpdateOfferMappingsResponse](docs/Model/UpdateOfferMappingsResponse.md)
- [UpdateOrderItemRequest](docs/Model/UpdateOrderItemRequest.md)
- [UpdateOrderStatusDTO](docs/Model/UpdateOrderStatusDTO.md)
- [UpdateOrderStatusRequest](docs/Model/UpdateOrderStatusRequest.md)
- [UpdateOrderStatusResponse](docs/Model/UpdateOrderStatusResponse.md)
- [UpdateOrderStatusesDTO](docs/Model/UpdateOrderStatusesDTO.md)
- [UpdateOrderStatusesRequest](docs/Model/UpdateOrderStatusesRequest.md)
- [UpdateOrderStatusesResponse](docs/Model/UpdateOrderStatusesResponse.md)
- [UpdateOrderStorageLimitRequest](docs/Model/UpdateOrderStorageLimitRequest.md)
- [UpdateOutletLicenseRequest](docs/Model/UpdateOutletLicenseRequest.md)
- [UpdatePriceWithDiscountDTO](docs/Model/UpdatePriceWithDiscountDTO.md)
- [UpdatePricesRequest](docs/Model/UpdatePricesRequest.md)
- [UpdatePromoOfferDTO](docs/Model/UpdatePromoOfferDTO.md)
- [UpdatePromoOfferDiscountParamsDTO](docs/Model/UpdatePromoOfferDiscountParamsDTO.md)
- [UpdatePromoOfferParamsDTO](docs/Model/UpdatePromoOfferParamsDTO.md)
- [UpdatePromoOffersRequest](docs/Model/UpdatePromoOffersRequest.md)
- [UpdatePromoOffersResponse](docs/Model/UpdatePromoOffersResponse.md)
- [UpdatePromoOffersResultDTO](docs/Model/UpdatePromoOffersResultDTO.md)
- [UpdateStockDTO](docs/Model/UpdateStockDTO.md)
- [UpdateStockItemDTO](docs/Model/UpdateStockItemDTO.md)
- [UpdateStocksRequest](docs/Model/UpdateStocksRequest.md)
- [UpdateTimeDTO](docs/Model/UpdateTimeDTO.md)
- [ValueRestrictionDTO](docs/Model/ValueRestrictionDTO.md)
- [VerifyOrderEacRequest](docs/Model/VerifyOrderEacRequest.md)
- [VerifyOrderEacResponse](docs/Model/VerifyOrderEacResponse.md)
- [WarehouseAddressDTO](docs/Model/WarehouseAddressDTO.md)
- [WarehouseDTO](docs/Model/WarehouseDTO.md)
- [WarehouseGroupDTO](docs/Model/WarehouseGroupDTO.md)
- [WarehouseOfferDTO](docs/Model/WarehouseOfferDTO.md)
- [WarehouseOffersDTO](docs/Model/WarehouseOffersDTO.md)
- [WarehouseStockDTO](docs/Model/WarehouseStockDTO.md)
- [WarehouseStockType](docs/Model/WarehouseStockType.md)
- [WarehousesDTO](docs/Model/WarehousesDTO.md)
- [WarningPromoOfferUpdateDTO](docs/Model/WarningPromoOfferUpdateDTO.md)

## Authorization

Authentication schemes defined for the API:
### ApiKey

- **Type**: API key
- **API key parameter name**: Api-Key
- **Location**: HTTP header


### OAuth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://oauth.yandex.ru/authorize`
- **Scopes**: 
    - **market:partner-api**: API Яндекс.Маркета / Поиска по товарам для партнеров

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `LATEST`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
