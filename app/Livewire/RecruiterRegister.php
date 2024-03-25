<?php

namespace App\Livewire;

use App\Models\PackageBought;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class RecruiterRegister extends Component
{
    public $name,$company_name,$email,$package=1,$password, $password_confirmation;

    public function save() {
       
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'package'=>'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => $this->name,
                'company_name' => $this->company_name,
                'email' => $this->email,
                'role' => 2,
                'password' => Hash::make($this->password),
            ]);

            $package = new PackageBought;
            $package->user_id = $user->id;
            $package->package_id = $this->package;
            $package->save();

            DB::commit();

            event(new Registered($user));

            Auth::login($user);

            $this->reset();
    
            return redirect('dashboard');

        } catch (\Exception $e) {
            Log::error('recruiter Register Error:- '.$e->getMessage());
            DB::rollBack();
            return back();
        }



    }

    public function render()
    {
        return view('livewire.recruiter-register');
    }
}
