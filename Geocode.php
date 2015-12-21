<?php

class Geocode
{
  private $url = "https://maps.googleapis.com/maps/api/geocode/json";
  private $key = "<API KEY>";

  public function execute($address)
  {
    $param = "key=" . $this->key . "&address=" . $address;
    $curl = curl_init($this->url . "?" . $param);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $res = curl_exec($curl);
    if (curl_error($curl))
    {
      throw new Exception("error");
    }
    $json = json_decode($res);

    return $json;
  }
}
