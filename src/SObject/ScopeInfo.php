<?php

declare(strict_types=1);

namespace BlackBrickSoftware\MigrationBuilderSalesforce\SObject;

/**
 * See: https://developer.salesforce.com/docs/atlas.en-us.230.0.api.meta/api/sforce_api_calls_describesobjects_describesobjectresult.htm#scopeinfo_topic
 */
class ScopeInfo extends SObjectBase
{

  protected string $label;

  protected string $name;

}
