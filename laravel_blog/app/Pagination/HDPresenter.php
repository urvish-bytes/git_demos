<?php
namespace App\Pagination;
use Illuminate\Pagination\BootstrapThreePresenter;

class HDPresenter extends BootstrapThreePresenter {

    public function render() 
    {
        if ($this->hasPages()) {
            return sprintf(
                '<div class="pagi-custom"><div class="pull-left">%s %s</div> <div class="pull-right">%s %s</div></div>',
                $this->getFirst(), 
                $this->getButtonPre(), 
                $this->getButtonNext(), 
                $this->getLast() 
            ); 
        } 
        return ""; 
    } 

    public function getFirst()
    { 
        $url = $this->paginator->url(1);
        $btnStatus = '';
        
        if (1 == $this->paginator->currentpage()) {
            $btnStatus = 'disabled';
        }
        return $btn = "<a href='".$url."'><button class='btn btn-success ".$btnStatus."'><i class='glyphicon glyphicon-chevron-left'></i> First</button></a>";
    }

    public function getButtonPre()
    {
        $url = $this->paginator->previouspageUrl; 
        $btnStatus = ''; 
        if(empty($url)){ 
            $btnStatus = 'disabled'; 
        } 
        return $btn = "<a href='".$url."'><button class='btn btn-success ".$btnStatus."'><i class='glyphicon glyphicon-chevro-left pagi-margin'></i><i class='glyphicon glyphicon-chevron-left'></i> Previous </button></a>";
    
    }

    public function getButtonNext(){
        $url = $this->paginator->nextPageUrl();
        $btnStatus ='';
        if(empty($url)){
            $btnStatus = 'disabled';
        }
        return $btn = "<a href='".$url."'><button class='btn btn-success ".$btnStatus."'><i class='glyphicon glyphicon-chevro-right pagi-margin'></i><i class='glyphicon glyphicon-chevron-right'></i></button></a>";
    }

}

?>