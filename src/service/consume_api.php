<?php

function fetch_data($api_url)
{

    $response = file_get_contents($api_url);

    $data = json_decode($response, true);

    return $data;
}
