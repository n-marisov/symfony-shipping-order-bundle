<?php

namespace Maris\SymfonyBundle\ShippingOrderBundle\Service;

use Maris\SymfonyBundle\Directions\Interfaces\DirectionServiceInterface;
use Maris\SymfonyBundle\Directions\Interfaces\RouteInterface;
use Maris\SymfonyBundle\Directions\Service\OsrmDirectionService;
use Maris\SymfonyBundle\ShippingOrderBundle\Interfaces\OrderInterface;

/**
 * Калькулятор расчета стоимости маршрута
 */
class OrderCalculator
{
    protected DirectionServiceInterface $directionService;

    public function __construct( OsrmDirectionService $directionService )
    {
        $this->directionService = $directionService;
    }

    public function createOrder( iterable $unloading , iterable $downloading ):iterable
    {
        $waypoints = [];
        foreach ($unloading as $value)
            $waypoints[] = $value;
        foreach ($downloading as $value)
            $waypoints[] = $value;

        $direction = $this->directionService->getResult( $waypoints );

        $orders = [];
        if( $direction->isOk() ){
            foreach ($direction as $route){
                # Рассчитываем стоимость каждого маршрута
                $orders[] = $this->calc( $route );
            }
        }
        return $orders;
    }

    protected function calc( RouteInterface $route ):?OrderInterface
    {
        $price = 0;

        //foreach ( $route->getLegs() )
        return null;
    }
}