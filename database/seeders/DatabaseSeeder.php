<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Order;
use App\Models\Ticket;
use App\Models\Airline;
use App\Models\Type;
use App\Models\Track;
use App\Models\Payment;
use App\Models\Transaction;
use App\Models\Total;
use App\Models\Price;
use App\Models\Method;
use App\Models\Complaint;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        User::factory()->create([
            'name' => fake()->name(),
            'email' => 'fikrideanradityo@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'customer'
        ]);

        Order::factory(1)->create();

        // Airline::factory(1)->create();
        Airline::factory()->create([
            'name' => 'Kawah Galunggung',
            'gate' => '11A'
        ]);

        Airline::factory()->create([
            'name' => 'Cipanas Galunggung 1',
            'gate' => '11B'
        ]);

        Airline::factory()->create([
            'name' => 'Cipanas Galunggung 2',
            'gate' => '11C'
        ]);

        Airline::factory()->create([
            'name' => 'Curug Agung Galunggung',
            'gate' => '11D'
        ]);

        // Type::factory(1)->create();
        Type::factory()->create([
            'name' => 'Reguler',
            'flight_at' => '07:00:00'
        ]);

        Type::factory()->create([
            'name' => 'Vip',
            'flight_at' => '13:00:00'
        ]);


        // Route::factory(1)->create();
        Track::factory()->create([
            'from_route' => 'Hotel',
            'to_route' => 'semarang',
        ]);

        Track::factory()->create([
            'from_route' => 'Camping',
            'to_route' => 'jakarta',
        ]);

        Track::factory()->create([
            'from_route' => 'Tidak Menginap',
            'to_route' => 'bali',
        ]);


        Ticket::factory()->create([
            'airline_id' => 1,
            'type_id' => 1,
            'track_id' => 1,
        ]);

        Payment::factory(1)->create();
        Transaction::factory(1)->create();
        Total::factory(1)->create();
        Price::factory(1)->create();

        Method::factory()->create([
            'method' => 'debit',
            'target_account' => '1812020007'
        ]);

        Method::factory()->create([
            'method' => 'credit',
            'target_account' => '1812020010'
        ]);

        Method::factory()->create([
            'method' => 'go_pay',
            'target_account' => '081387000325'
        ]);

        Method::factory()->create([
            'method' => 'ovo',
            'target_account' => '081387000325'
        ]);

        Method::factory()->create([
            'method' => 'dana',
            'target_account' => '081387000325'
        ]);

        // Complaint::factory()->create([
        //     'order_id' => 1,
        //     'user_id' => 1,
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A earum, ex possimus consequatur quaerat consequuntur impedit, tenetur officiis repellendus sequi maxime ullam fuga perferendis eligendi doloremque cupiditate, minus expedita aspernatur.'
        // ]);

        // Complaint::factory()->create([
        //     'order_id' => 1,
        //     'user_id' => 2,
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A earum, ex possimus consequatur quaerat consequuntur impedit, tenetur officiis repellendus sequi maxime ullam fuga perferendis eligendi doloremque cupiditate, minus expedita aspernatur.'
        // ]);

        // Complaint::factory()->create([
        //     'order_id' => 1,
        //     'user_id' => 2,
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A earum, ex possimus consequatur quaerat consequuntur impedit, tenetur officiis repellendus sequi maxime ullam fuga perferendis eligendi doloremque cupiditate, minus expedita aspernatur.'
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
