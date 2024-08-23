<?php
/**
 * DokuWiki Plugin codebash (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Dan Cunningham 
 */
  
class action_plugin_codebash extends DokuWiki_Action_Plugin 
{
 
     /**
     * Register the eventhandlers
     */
    public function register(Doku_Event_Handler $controller) {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array ());
    }
 
    /**
     * Inserts the toolbar button
     */
    function insert_button(Doku_Event $event, $param) {
        $event->data[] = array (
            'type' => 'format',
            'title' => $this->getLang('insertcode'),
            'icon' => '../../plugins/codebash/pix/code.png',
            'open' => '<code bash>',
            'close' => '</code>',
        );
    }
 
}
