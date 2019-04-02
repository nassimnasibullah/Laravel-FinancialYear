<?php
namespace KHolmes\FinancialYear\Facades;
use Illuminate\Support\Facades\Facade;
class FinancialYear extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FinancialYearCalculator';
    }
}
