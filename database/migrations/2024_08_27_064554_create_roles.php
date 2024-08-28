<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Role::where('name', 'Secretaria')->exists()) {
            $role3 = Role::create(['name' => 'Secretaria']);
        }

        if (!Role::where('name', 'Administrador')->exists()) {
            $role2 = Role::create(['name' => 'Administrador']);
        }

    
        $user = User::find(1);
        if ($user) {
            $user->assignRole($role1 ?? Role::where('name', 'Secretaria')->first());
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
