<?php

namespace MarcW\Bundle\ServerSideAnalyticsBundle\Controller;

use MarcW\ServerSideAnalytics\Analytics;
use Symfony\Component\HttpFoundation\Request;

/**
 * AnalyticsController.
 *
 * @author Marc Weistroff <marc@weistroff.net>
 */
class AnalyticsController
{
    private $analytics;

    public function __construct(Analytics $analytics)
    {
        $this->analytics = $analytics;
    }

    public function trackAction(Request $request)
    {
        return $this->analytics->track($request);
    }
}

