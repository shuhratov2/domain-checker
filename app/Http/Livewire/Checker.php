<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Iodev\Whois\Factory;
use App\Models\User;
use Iodev\Whois\Modules\Tld\TldServer;
use Iodev\Whois\Exceptions\ConnectionException;
use Iodev\Whois\Exceptions\ServerMismatchException;
use Iodev\Whois\Exceptions\WhoisException;
class Checker extends Component
{
    public $search ='';
    public function index()
    {
        $whois = Factory::get()->createWhois();
        if($this->search && $whois->isDomainAvailable($this->search)) {
            return 
            session()->flash('success','Bingo! Domain is available!');
        }
        elseif ($this->search && !$whois->isDomainAvailable($this->search)){
            return
            session()->flash('danger','Sorry this domain is not available!');
        }
        try {
            
        } catch (ServerMismatchException $e) {
            print "TLD server (.com for google.com) not found in current server hosts";
        } catch (WhoisException $e) {
            print "Whois server responded with error '{$e->getMessage()}'";
        }
    }
   
    public function render()
    {
        $this->index();
        return view('livewire.checker');
    }
}
