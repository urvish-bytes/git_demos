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
    public function getLast() {
        $url = $this->paginator->url($this->paginator->lastPage());
        $btnStatus = '';
        if ($this->paginator->lastPage() == $this->paginator->currentPage()) {
            $btnStatus = 'disabled';
        }
        // return $btn = "<a href='".$url."'><button class='btn btn-success "> </button>";
    }


}