<?php

$xpdo_meta_map = array ();

$this->map['modUser']['composites']['SocialProfile'] = array(
    'class' => 'modHybridAuthUserProfile',
    'local' => 'id',
    'foreign' => 'internalKey',
    'cardinality' => 'many',
    'owner' => 'local',
);