<?php

class model_index extends Model
{
    function __construct()
    {
        parent::__construct();

    }

    function getSlider()
    {
        $query = 'select * from tbl_slider';
        $result = $this->doSelect($query);
        return $result;
    }


    function getSpecial()
    {
        $time = time();
        $query = "select * from tbl_product where special=1 and time_start < " . $time . " and time_end > " . $time . " ";
        $result = $this->doSelect($query);

        foreach ($result as $key => $row) {
            $price_total = $this->calculateDiscount($row['price'], $row['discount']);
            $time_special = $row['time_end'];
            date_default_timezone_set('Asia/Tehran');
            $date = date('Y/m/d H:i', $time_special);
            $result[$key]['time_special'] = $date;
            $result[$key]['price_total'] = $price_total;
        }

        return $result;
    }

    function mostVisited()
    {
        $query = "select * from tbl_options where setting='slider'";
        $result = $this->doSelect($query, [], 1);
        $limit = $result['value'];

        $query = "select * from tbl_product order by visit desc limit " . $limit . " ";
        $result = $this->doSelect($query);
        foreach ($result as $key => $row) {
            $price_total = $this->calculateDiscount($row['price'], $row['discount']);
            $result[$key]['price_total'] = $price_total;
        }
        return $result;

    }

    function last_products()
    {
        $query = "select * from tbl_options where setting='slider'";
        $result = $this->doSelect($query, [], 1);
        $limit = $result['value'];

        $query = "select * from tbl_product order by id desc limit " . $limit . " ";
        $result = $this->doSelect($query);
        foreach ($result as $key => $row) {
            $price_total = $this->calculateDiscount($row['price'], $row['discount']);
            $result[$key]['price_total'] = $price_total;
        }
        return $result;

    }


}
