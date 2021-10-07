<?php

namespace local_isymetaindex\event;
defined('MOODLE_INTERNAL') || die();


class meta_updated extends \core\event\base {
    protected function init() {
        $this->data['objecttable'] = 'isymetaindex_edited';
        $this->data['crud'] = 'u';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    public static function get_name() {
        return get_string('eventname', 'local_isymetaindex');
    }

    public function get_description() {
        return "Metas were updated.";
    }
}