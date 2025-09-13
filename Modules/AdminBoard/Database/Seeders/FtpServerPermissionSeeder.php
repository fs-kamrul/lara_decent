<?php

namespace Modules\AdminBoard\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\KamrulDashboard\Http\Models\Permission;

class FtpServerPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [ 'name'         => "ftpserver_access" ],
            [ 'name'         => "ftpserver_list_own" ],
            [ 'name'         => "ftpserver_list_all" ],
            [ 'name'         => "ftpserver_create" ],
            [ 'name'         => "ftpserver_edit" ],
            [ 'name'         => "ftpserver_show" ],
            [ 'name'         => "ftpserver_pdf" ],
            [ 'name'         => "ftpserver_destroy" ],
            [ 'name'         => "ftpserver_import" ]
        ];

        Permission::upsert($data, ['name']);
    }
}
