<?php

namespace Staff;

interface ISupervisorTask 
{
    public function coordinateActivities();

    public function manageEmployeeActivities();

    public function monitorProductsSupplied();
}