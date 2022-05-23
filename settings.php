<?php

if ( $hassiteconfig ){

    $settings = new admin_settingpage( 'local_isymetaindex', 'iSyMeta API-Key' );

    // Create 
    $ADMIN->add( 'localplugins', $settings );

    $settings->add( new admin_setting_configtext(
        'local_isymetaindex/apikey', // wip reference to form elem
        'Externer API-Key',
        'This is the key used to access the External API',
        'Kein API-Key angegeben',
        PARAM_TEXT
    ) );

    $settings->add( new admin_setting_configtext(
        'local_isymetaindex/host', // wip reference to form elem
        'Externer Host',
        'This is the host used to access the External API',
        'Keinen Host angegeben',
        PARAM_TEXT
    ) );
}