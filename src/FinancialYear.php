<?php

/**
 * Set Package Namespace
 */
namespace KHolmes\FinancialYear;

/**
 * Required Packages for this Class
 */
use Carbon\Carbon;

/**
 * Initiate Class
 */
class FinancialYearCalculator
{
    /**
     * Initiate class variables
     */
    public  $month,
            $day,
            $current_carbon;

    /**
     * Constructor Method.
     * Financial Year Start wil default to 1st of April
     * Current Date will default to todays date
     */
    public function __construct($month = 4, $day = 1, Carbon $current_dt = null)
    {
        $this->month = (int)$month;
        $this->day = (int)$day;
        if(!$current_dt)
        {
            $this->current_carbon = (new Carbon())->setTime(0,0,0);
        }
        else
        {
            $this->current_carbon = $current_dt->setTime(0,0,0);
        }
    }

    public function getFinancialYearStart()
    {
        $financial_year_start = Carbon::create($this->current_carbon->year,$this->month,$this->day,0,0,0);
        if($financial_year_start->gt($this->current_carbon))
        {
            $financial_year_start->subYear();
        }
        return $financial_year_start;
    }

    public function getFinancialYearEnd()
    {
        $financial_year_end = Carbon::create($this->current_carbon->year,$this->month,$this->day,0,0,0);
        if($financial_year_end->lt($this->current_carbon))
        {
            $financial_year_end->addYear();
        }
        return $financial_year_end->subDay();
    }

}
?>