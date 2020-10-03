<?php

class Page
{
    protected function _renderHeader(){
        echo "header" , '<br>';
    }
    protected function _renderFooter(){
        echo "footer" , '<br>';
    }
    protected function _renderContent() {
        echo $this->getContent();
    }

    public function render(){
        $this->_renderHeader();
        $this->_renderContent();
        $this->_renderFooter();
    }

}

?>