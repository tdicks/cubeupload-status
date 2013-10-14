<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'CreateIssues' => $baseDir . '/app/database/migrations/2013_10_13_233831_create_issues.php',
    'CreateIssuesServicesRel' => $baseDir . '/app/database/migrations/2013_10_13_234029_create_issues_services_rel.php',
    'CreateReportsTable' => $baseDir . '/app/database/migrations/2013_10_14_011424_create_reports_table.php',
    'CreateServices' => $baseDir . '/app/database/migrations/2013_10_13_233840_create_services.php',
    'CreateUsers' => $baseDir . '/app/database/migrations/2013_10_13_233818_create_users.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'Issue' => $baseDir . '/app/models/Issue.php',
    'IssueController' => $baseDir . '/app/controllers/IssueController.php',
    'ReportController' => $baseDir . '/app/controllers/ReportController.php',
    'Service' => $baseDir . '/app/models/Service.php',
    'ServiceController' => $baseDir . '/app/controllers/ServiceController.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'StatusUpdateCommand' => $baseDir . '/app/commands/StatusUpdateCommand.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
);