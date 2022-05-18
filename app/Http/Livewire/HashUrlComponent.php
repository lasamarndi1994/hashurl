<?php

namespace App\Http\Livewire;

use App\Models\HashUrl;
use Livewire\Component;
use Illuminate\Support\Str;

class HashUrlComponent extends Component
{
    public $original_url;



    /**
     * generate HashUrl
     *
     * @return void
     */
    public function generateHashUrl(){
        $this->validate([
           'original_url' => 'required|url',
        ]);

        HashUrl::create([
            'org_url' => $this->original_url,
            'hash_url' => md5($this->original_url),
        ]);
    }


    public function render()
    {
        return view('livewire.hash-url-component',[
            'hashUrls' => HashUrl::latest()->get(),
        ]);
    }
}
