<?php

class CBRAgent
{
    protected $list = array();

    public function load()
    {
        $xml = new DOMDocument();
        $url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=' . date('d.m.Y');

        if (@$xml->load($url))
        {
            $this->list = array();

            $root = $xml->documentElement;
            $items = $root->getElementsByTagName('Valute');

            foreach ($items as $item)
            {
                $code = $item->getElementsByTagName('CharCode')->item(0)->nodeValue;
                $curs = $item->getElementsByTagName('Value')->item(0)->nodeValue;
                $this->list[$code] = floatval(str_replace(',', '.', $curs));
            }

            return true;
        }
        else
            return false;
    }

    public function get($cur)
    {
        return isset($this->list[$cur]) ? $this->list[$cur] : 0;
    }
}


$currencies = array('USD', 'EUR');
$cbr = new CBRAgent();
if ($cbr->load()){
    foreach($currencies as $currency)
    {
        //echo $cbr->get($currency);
    }
}


$data = file_get_contents('http://data.fixer.io/api/latest?access_key=f4198b3bea12f1a4a0448aab8624511b&symbols=USD,EUR,RUB');
echo $data;
