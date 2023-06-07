<?php

namespace Database\Seeders;

use App\Models\ButtonStyle;
use App\Models\Flexbox_justification;
use App\Models\FontSize;
use App\Models\PlaceSelf;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        // $this->call(UserSeeder::class);

       $r1 = Role::create([
            'name' => 'super-admin'
         ]);

        $r2 = Role::create([
            'name' => 'admin'
         ]);

       $r3 = Role::create([
            'name' => 'editor'
         ]);


         $p1 = Permission::create([
            'name' => 'Can add user'
        ]);

        $p2 = Permission::create([
            'name' => 'Can approve'
        ]);

        $p3 = Permission::create([
            'name' => 'Can edit'
        ]);
        $p4 = Permission::create([
            'name' => 'Can View'
        ]);

        $r1->givePermissionTo($p1);
        $r1->givePermissionTo($p4);
        $r2->givePermissionTo($p2);
        $r3->givePermissionTo($p3);

        $superadmin = [
            'name' => 'Super-admin',
            'email' => 'superadmin@email.com',
            'password' => '123456'
        ];

        $superadmin['password'] = bcrypt($superadmin['password']);
        
        $admin = [
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => '1234567'
        ];

        $admin['password'] = bcrypt($admin['password']);

        $editor = [
            'name' => 'Editor',
            'email' => 'editor@email.com',
            'password' => '123456'
        ];

        $editor['password'] = bcrypt($editor['password']);

        
        $superadmin = User::factory()->create($superadmin);
        
        $superadmin->assignRole('super-admin');

        $admin = User::factory()->create($admin);
        
        $admin->assignRole('admin');

        $editor = User::factory()->create($editor);
        
        $editor->assignRole('editor');

        ButtonStyle::insert([
            [
                'name' => 'Not rounded',
                'btn_radius' => 'rounded-none'
            ],
            [
                'name' => 'Rounded button',
                'btn_radius' => 'rounded-full'
            ],
            [
                'name' => 'semi rounded button',
                'btn_radius' => 'rounded-md'
            ],
        ]);
        // Flexbox_justification::insert([
        //     ['justification' => 'justify-start'],
        //     ['justification' => 'justify-center'],
        //     ['justification' => 'justify-end'],
        // ]);
        // FontSize::insert([
        //     [
        //         'name' => 'Extra Small',
        //         'fontsize' => 'text-xs'
        //     ],
        //     [
        //         'name' => 'Small',
        //         'fontsize' => 'text-sm'
        //     ],
        //     [
        //         'name' => 'Large',
        //         'fontsize' => 'text-xl'
        //     ],
        //     [
        //         'name' => '4XL',
        //         'fontsize' => 'text-4xl'
        //     ],
        //     [
        //         'name' => '9XL',
        //         'fontsize' => 'text-9xl'
        //     ],
        // ]);
        PlaceSelf::insert([
            [
                'name' => 'Left',
                'placeself' => 'place-self-start'
            ],
            [
                'name' => 'Center',
                'placeself' => 'place-self-center'
            ],
            [
                'name' => 'Right',
                'placeself' => 'place-self-end'
            ],
        ]);

    }
}
