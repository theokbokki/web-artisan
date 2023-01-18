<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Trail\Permissions\Registrar;
use Trail\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the permissions seeder.
     * Available roles are declared in the RolesTableSeeder.
     * Don't hesitate to run this seeder in order to edit/reset an existing
     * application since they will be synced with existing permissions.
     *
     * @return void
     */
    public function run()
    {
        app(Registrar::class)->resetCache();

        // Give all default permissions (viewAny, view, create, update, delete) to given roles:
        // Resource::permitDefaultsTo('admin','editor','intern');

        // Or give specific permissions to given roles:
        // Resource::permit(Permission::ACTION_CREATE)->to('admin','editor');
        // Resource::permit('my-custom-permission')->to('admin');

        app(Registrar::class)->save();
    }
}
