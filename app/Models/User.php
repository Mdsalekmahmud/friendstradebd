<?php
namespace App\Models;

use Database\Factories\UserFactory;
use Filament\Models\Contracts\HasName; // 1. Crucial Import
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use App\Models\Role;


class User extends Authenticatable implements FilamentUser// 2. Crucial Interface implementation

{
    /** @use HasFactory<UserFactory> */
    // use HasFactory, Notifiable;

    protected $fillable = [
        'name', // Using unified name field now
        'country',
        'role_id',
        'c_companyname',
        'c_address',
        'c_state_country',
        'c_postal_zip',
        'c_phone',
        'email',
        'email_verified_at',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * 3. Return the unified 'name' field string to Filament.
     */
    public function getFilamentName(): string
    {
        // Reads the 'name' property, or falls back to email if database row name is empty/null
        return $this->name ?? $this->email;
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

     public function role()
    {
        return $this->belongsTo(Role::class); 
    }

    public function canAccessPanel(Panel $panel): bool
    {
        dd($this->role);
        return $this->role === '1';
    }
}
