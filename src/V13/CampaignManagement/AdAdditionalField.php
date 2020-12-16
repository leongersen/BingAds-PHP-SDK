<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a list of optional ad properties that you can request when calling GetAdsByAdGroupId, GetAdsByEditorialStatus, and GetAdsByIds.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/adadditionalfield?view=bingads-13 AdAdditionalField Value Set
     * 
     * @used-by GetAdsByAdGroupIdRequest
     * @used-by GetAdsByEditorialStatusRequest
     * @used-by GetAdsByIdsRequest
     */
    final class AdAdditionalField
    {
        /** Request that the ImpressionTrackingUrls element be included within each returned ResponsiveAd object. */
        const ImpressionTrackingUrls = 'ImpressionTrackingUrls';
    }

}