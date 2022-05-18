<?php

namespace App\Http\Livewire;

use App\Models\HashUrl;
use Livewire\Component;

class ViewHasUrlComponent extends Component
{

    public function mount($url){

        $find = HashUrl::where('hash_url', $url)->firstOrFail();
        return redirect($find->org_url);
    }
    public function render()
    {
        return view('livewire.view-has-url-component');
    }
}
