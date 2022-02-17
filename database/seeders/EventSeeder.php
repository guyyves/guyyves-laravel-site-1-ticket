<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event();
        $event->title = 'NK Atletiek';
        $event->address = 'Dr. Schaepmanlaan';
        $event->zip = '4867BW';
        $event->city = 'Breda';
        $event->service_cost = '5.00';
        $event->start_time = '2022-06-25';
        $event->end_date = '2022-07-05';
        $event->ticket_price = '19.99';
        $event->save();

        $event = new Event();
        $event->title = 'WK BodyBuilding';
        $event->address = 'Jaarbeursplein';
        $event->zip = '3521AL';
        $event->city = 'Utrecht';
        $event->service_cost = '5.00';
        $event->start_time = '2022-03-18';
        $event->end_date = '2022-03-28';
        $event->ticket_price = '25.00';
        $event->save();

        $event = new Event();
        $event->title = 'Ek knikkeren';
        $event->address = 'Duinplien';
        $event->zip = '3420FG';
        $event->city = 'Amsterdam';
        $event->service_cost = '4.50';
        $event->start_time = '2022-05-10';
        $event->end_date = '2022-05-15';
        $event->ticket_price = '15.00';
        $event->save();
    }
}
