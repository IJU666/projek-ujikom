<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
            $admin = User::create(array_merge([
                'name' => 'admin',
                'nik' => '1',
                'tglahir' => '2023-02-15',
                'jk' => 'Laki-laki',
                'notelp' => '1',
                'pekerjaan' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com'
            ], $default_user_value));
            $petugas = User::create(array_merge([
                'name' => 'petugas',
                'nik' => '2',
                'tglahir' => '2023-02-15',
                'jk' => 'Laki-laki',
                'notelp' => '2',
                'pekerjaan' => 'petugas',
                'username' => 'petugas',
                'email' => 'petugas@gmail.com'
            ], $default_user_value));
            $masyarakat = User::create(array_merge([
                'name' => 'masyarakat',
                'nik' => '3',
                'tglahir' => '2023-02-15',
                'jk' => 'Laki-laki',
                'notelp' => '3',
                'pekerjaan' => 'masyarakat',
                'username' => 'masyarakat',
                'email' => 'masyarakat@gmail.com'
            ], $default_user_value));

            $role = Role::create([ 'name' => 'admin']);
            $role = Role::create([ 'name' => 'petugas']);
            $role = Role::create([ 'name' => 'masyarakat']);

            $permission = Permission::create([ 'name' =>'read role']);
            $permission = Permission::create([ 'name' =>'create role']);
            $permission = Permission::create([ 'name' =>'update role']);
            $permission = Permission::create([ 'name' =>'delete role']);

            $admin -> assignRole('admin');
            $petugas -> assignRole('petugas');
            $masyarakat -> assignRole('masyarakat');

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

    }
}
