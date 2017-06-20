<?php

use FacebookAds\Object\Lead;

$id_lead = '1886027051664102';

$form = new Lead($id_lead);
$form->read();

echo $form;