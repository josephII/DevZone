<?php
// Plugin uninstall tasks
if ( !defined( 'ABSPATH') || !defined('WP_UNINSTALL_PLUGIN') )
{
    return;
}

$GrOptionDbPrefix = 'GrIntegrationOptions_';
delete_option($GrOptionDbPrefix . 'api_key');
delete_option($GrOptionDbPrefix . 'account_type');
delete_option($GrOptionDbPrefix . 'api_crypto');
delete_option($GrOptionDbPrefix . 'widget');
delete_option($GrOptionDbPrefix . 'comment_campaign');
delete_option($GrOptionDbPrefix . 'checkout_campaign');
delete_option($GrOptionDbPrefix . 'comment_on');
delete_option($GrOptionDbPrefix . 'comment_label');
delete_option($GrOptionDbPrefix . 'checkout_on');
delete_option($GrOptionDbPrefix . 'checkout_label');
delete_option($GrOptionDbPrefix . 'checkout_checked');
delete_option($GrOptionDbPrefix . 'sync_order_data');
?>