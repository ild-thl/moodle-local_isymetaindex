<?php

defined('MOODLE_INTERNAL') || die();

$observers = array(
    array(
        'eventname'   => '\local_isymetaindex\event\meta_updated',
        'callback'    => '\local_isymetaindex\observer::meta_updated',
        'internal'    => false
    )
);